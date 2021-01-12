<?php

namespace Modules\Cms\Providers;

use Illuminate\Support\ServiceProvider;

// services
use Modules\Cms\Services\AboutService;

class GlobalDataServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

    /**
     * Boot the observers.
     *
     * @param AboutService $aboutService
     */
    public function boot
    (
        AboutService $aboutService
    )
    {
        if (!app()->runningInConsole()) {
            // share about us data
            view()->share('global_about', $aboutService->first());
        }
    }
}
