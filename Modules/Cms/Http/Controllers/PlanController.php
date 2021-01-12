<?php

namespace Modules\Cms\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Cms\Http\Requests\PlanUpdateRequest;
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

    /**
     * Plan
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // get plan data
        $plan = $this->planService->firstOrCreate([]);

        // return view
        return view('cms::plan.index', compact('plan'));
    }

    /**
     * Update plan
     *
     * @param PlanUpdateRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PlanUpdateRequest $request, $id)
    {
        // get plan
        $plan = $this->planService->find($id);
        // check if plan doesn't exists
        if (empty($plan)) {
            // flash notification
            notifier()->error('Plan not found!');
            // redirect back
            return redirect()->back();
        }
        // update plan
        $plan = $this->planService->update($request->all(), $id);
        // check if plan updated
        if ($plan) {
            // flash notification
            notifier()->success('Plan updated successfully.');
        } else {
            // flash notification
            notifier()->error('Plan cannot be updated successfully.');
        }
        // redirect back
        return redirect()->back();
    }
}
