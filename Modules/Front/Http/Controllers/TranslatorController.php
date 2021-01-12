<?php

namespace Modules\Front\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Front\Services\TranslatorService;

class TranslatorController extends Controller
{
    private $translatorService;

    public function __construct(TranslatorService $translatorService)
    {
        $this->translatorService = $translatorService;
    }

    public function translate(Request $request)
    {
        $data = $request->all()['n'];
        $from = $data['source_lang'];
        $to = $data['translated_lang'];
        $text = $data['text_to_translate'];
        return $this->translatorService->Translate($from, $to, $text);
    }

    public function not_found()
    {
        abort(404);
    }
}
