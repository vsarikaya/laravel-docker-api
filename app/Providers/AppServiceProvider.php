<?php

namespace App\Providers;

use App\Data\Repository\RepositoryIoCRegister;
use App\Services\ServiceIoCRegister;
use Illuminate\Support\{
    Facades\Schema,
    ServiceProvider
};

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Migration lenght fix
        Schema::defaultStringLength(191);

        // Register Repository IoC
        (new RepositoryIoCRegister())->register();

        // Register Service IoC
        (new ServiceIoCRegister())->register();

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
