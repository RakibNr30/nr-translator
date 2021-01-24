<?php

namespace Modules\Front\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Cms\Services\TranslateService;

class TranslateController extends Controller
{
    private $translateService;

    public function __construct(TranslateService $translateService)
    {
        $this->translateService = $translateService;
    }

    public function index($slug)
    {
        $translate = $this->translateService->translateData($slug);
        $translateList = $this->translateService->translateList();
        if (!$translate) {
            abort(404);
        }
        return view('front::translate.index', compact('translate', 'translateList'));
    }

    public function translate(Request $request)
    {
        $data = $request->all()['n'];
        $from = $data['source_lang'];
        $to = $data['translated_lang'];
        $text = $data['text_to_translate'];
        return $this->translateService->Translate($from, $to, $text);
    }

    public function not_found()
    {
        abort(404);
    }
}
