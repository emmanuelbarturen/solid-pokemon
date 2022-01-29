<?php

namespace App\Providers;

use App\Commands\SingleResponsability\Refactored\Logger\ConsolePokeLogger;
use App\Commands\SingleResponsability\Refactored\Logger\PokeLogger;
use Illuminate\Support\ServiceProvider;

/**
 * class AppServiceProvider
 */
class AppServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PokeLogger::class, ConsolePokeLogger::class);
    }
}
