<?php

namespace App\Providers;

use App\Commands\DependencyInversion\ImproveSRPExample\Logger\ConsolePokeLogger;
use App\Commands\DependencyInversion\ImproveSRPExample\Logger\DatabasePokeLogger;
use App\Commands\DependencyInversion\ImproveSRPExample\Logger\PokeLogger;
use App\Commands\DependencyInversion\Pokedex\Refactored\Services\PokemonApiServiceService;
use App\Commands\DependencyInversion\Pokedex\Refactored\Services\PokemonDataService;
use App\Commands\DependencyInversion\Pokedex\Refactored\Services\PokemonDataServiceHardcodedService;
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
        $this->app->bind(PokeLogger::class, DatabasePokeLogger::class);
        $this->app->bind(PokemonDataService::class, PokemonApiServiceService::class);
    }
}
