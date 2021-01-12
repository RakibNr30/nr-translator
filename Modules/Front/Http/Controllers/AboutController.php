<?php

namespace Modules\Front\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Cms\Services\AboutService;
use Modules\Cms\Services\HistoryService;

class AboutController extends Controller
{
    /**
     * @var $aboutService
     */
    protected $aboutService;

    /**
     * @var $historyService
     */
    protected $historyService;

    /**
     * Constructor
     *
     * @param HistoryService $historyService
     * @param AboutService $aboutService
     */

    public function __construct(HistoryService $historyService, AboutService $aboutService)
    {
        $this->historyService = $historyService;
        $this->aboutService = $aboutService;
    }
    public function index()
    {
        $about = $this->aboutService->first();
        $history = $this->historyService->first();
        return view('front::about.index', compact('about', 'history'));
    }
}
