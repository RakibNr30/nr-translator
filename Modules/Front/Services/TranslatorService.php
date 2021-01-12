<?php


namespace Modules\Front\Services;

use Stichoza\GoogleTranslate\GoogleTranslate;

class TranslatorService
{
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