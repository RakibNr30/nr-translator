<?php

namespace Modules\Front\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Cms\Services\BannerService;

class HomeController extends Controller
{
    /**
     * @var $bannerService
     */
    protected $bannerService;

    /**
     * Constructor
     *
     * @param BannerService $bannerService
     */

    public function __construct(BannerService $bannerService)
    {
        $this->bannerService = $bannerService;
    }
    public function index()
    {
        $banner = $this->bannerService->first();
        return view('front::home.index', compact('banner'));
    }
}
