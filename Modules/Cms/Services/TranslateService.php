<?php


namespace Modules\Cms\Services;

use Modules\Cms\Repositories\TranslateRepository;
use Stichoza\GoogleTranslate\GoogleTranslate;

class TranslateService
{
    private $translateRepository;

    public function __construct(TranslateRepository $translateRepository)
    {
        $this->translateRepository = $translateRepository;
    }

    public function translateData($slug)
    {
        return $this->translateRepository->findBy('slug', $slug);
    }

    public function translateList()
    {
        return $this->translateRepository->all();
    }

    public function Translate($from, $to, $text)
    {
        $tr = new GoogleTranslate();
        $tr->setSource($from);
        $tr->setTarget($to);
        $result = $tr->translate($text);

        $lang_detect = null;
        if ($from == "auto") {
            $lang_detect = $tr->getLastDetectedSource();
        }

        return response()->json(['result' => $result, 'lang_detect' => $lang_detect]);
    }
}