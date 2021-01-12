<?php


namespace Modules\Front\Services;


use Stichoza\GoogleTranslate\GoogleTranslate;

class TypingService
{
    public function Typing($from, $to, $text)
    {
        $tr = new GoogleTranslate();
        $tr->setSource($from);
        $tr->setTarget($to);
        $result = $tr->translate($text);
        return response()->json(['result' => $result]);
    }
}