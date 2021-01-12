<?php

namespace Modules\Ums\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UmsDatabaseSeeder extends Seeder
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

        User::create([
            "name" => "Mr. Super Admin",
            "username" => "superadmin",
            "phone" => "+880 1XXX XXXXXX",
            "email" => "superadmin@example.com",
            "password" => bcrypt("password"),
            "email_verified_at" => Carbon::now(),
            "approved_at" => Carbon::now(),
            "approved_by" => 1,
        ]);
    }
}
