<?php

namespace Modules\Cms\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Modules\Cms\Entities\Translate;

class CmsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");

        $languageData = json_decode(File::get(resource_path('seed/cms/languages.json')));

        $total = count($languageData);
        for ($i = 0; $i < $total; $i++) {
            for($j = $i+1; $j < $total; $j++) {
                Translate::create([
                    'title' => $languageData[$i]->lang . ' to ' . $languageData[$j]->lang,
                    'from_lang' => $languageData[$i]->lang,
                    'from_lang_code' => $languageData[$i]->code,
                    'to_lang' => $languageData[$j]->lang,
                    'to_lang_code' => $languageData[$j]->code
                ]);
                Translate::create([
                    'title' => $languageData[$j]->lang . ' to ' . $languageData[$i]->lang,
                    'from_lang' => $languageData[$j]->lang,
                    'from_lang_code' => $languageData[$j]->code,
                    'to_lang' => $languageData[$i]->lang,
                    'to_lang_code' => $languageData[$i]->code
                ]);
            }
        }
    }
}
