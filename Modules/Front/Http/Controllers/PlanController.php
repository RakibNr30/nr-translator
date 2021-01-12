<?php

namespace Modules\Front\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Cms\Services\PlanService;

class PlanController extends Controller
{
    /**
     * @var $planService
     */
    protected $planService;


    /**
     * Constructor
     *
     * @param PlanService $planService
     */

    public function __construct(PlanService $planService)
    {
        $this->planService = $planService;
    }
    public function index()
    {
        $plan = $this->planService->first();
        return view('front::plan.index', compact('plan'));
    }
}
