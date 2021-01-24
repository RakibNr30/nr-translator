<?php

namespace Modules\Front\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Cms\Services\BannerService;
use Modules\Cms\Services\TranslateService;

class HomeController extends Controller
{
    private $bannerService;
    private $translateService;

    public function __construct(BannerService $bannerService, TranslateService $translateService)
    {
        $this->bannerService = $bannerService;
        $this->translateService = $translateService;
    }
    public function index()
    {
        $translateList = $this->translateService->translateList('english-to-bengali');
        $banner = $this->bannerService->first();
        return view('front::home.index', compact('banner', 'translateList'));
    }
}
