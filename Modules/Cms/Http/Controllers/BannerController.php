<?php

namespace Modules\Cms\Http\Controllers;

use App\Http\Controllers\Controller;

// requests...
use Modules\Cms\Http\Requests\BannerUpdateRequest;

// services...
use Modules\Cms\Services\BannerService;

class BannerController extends Controller
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

    /**
     * Banner
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // get banner data
        $banner = $this->bannerService->firstOrCreate([]);

        // return view
        return view('cms::banner.index', compact('banner'));
    }
    
    /**
     * Update banner
     *
     * @param BannerUpdateRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(BannerUpdateRequest $request, $id)
    {
        // get banner
        $banner = $this->bannerService->find($id);
        // check if banner doesn't exists
        if (empty($banner)) {
            // flash notification
            notifier()->error('Banner not found!');
            // redirect back
            return redirect()->back();
        }
        // update banner
        $banner = $this->bannerService->update($request->all(), $id);
        // check if banner updated
        if ($banner) {
            // flash notification
            notifier()->success('Banner updated successfully.');
        } else {
            // flash notification
            notifier()->error('Banner cannot be updated successfully.');
        }
        // redirect back
        return redirect()->back();
    }
}
