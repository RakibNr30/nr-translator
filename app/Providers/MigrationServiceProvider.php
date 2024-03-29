<?php

namespace App\Providers;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\ServiceProvider;

class MigrationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // common fields
        Blueprint::macro('commonFields', function ($softDeletes = true) {
            $this->boolean('sort_order')->nullable()->default(1);
            $this->boolean('lock')->nullable()->default(0);
            $this->boolean('status')->nullable()->default(1);
            $this->boolean('active')->nullable()->default(1);
            $this->integer('created_by')->unsigned()->nullable();
            $this->integer('updated_by')->unsigned()->nullable();
            $this->integer('deleted_by')->unsigned()->nullable();
            $this->timestamps();
            $this->softDeletes();
        });
    }
}
