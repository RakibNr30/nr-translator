<?php

namespace Modules\Cms\Http\Controllers;

use App\Http\Controllers\Controller;

// requests...

use Modules\Cms\Http\Requests\HistoryUpdateRequest;

// services...
use Modules\Cms\Services\HistoryService;

class HistoryController extends Controller
{
    /**
     * @var $aboutService
     */
    protected $historyService;

    /**
     * Constructor
     *
     * @param HistoryService $historyService
     */
    public function __construct(HistoryService $historyService)
    {
        $this->historyService = $historyService;
    }

    /**
     * History
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // get history data
        $history = $this->historyService->firstOrCreate([]);

        // return view
        return view('cms::history.index', compact('history'));
    }

    /**
     * Update history
     *
     * @param HistoryUpdateRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(HistoryUpdateRequest $request, $id)
    {
        // get history
        $history = $this->historyService->find($id);
        // check if history doesn't exists
        if (empty($history)) {
            // flash notification
            notifier()->error('History not found!');
            // redirect back
            return redirect()->back();
        }
        // update history
        $history = $this->historyService->update($request->all(), $id);
        // check if history updated
        if ($history) {
            // flash notification
            notifier()->success('History updated successfully.');
        } else {
            // flash notification
            notifier()->error('History cannot be updated successfully.');
        }
        // redirect back
        return redirect()->back();
    }
}
