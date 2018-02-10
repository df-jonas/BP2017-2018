<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('olderThan', function ($attribute, $value, $parameters) {
            $minAge = (!empty($parameters)) ? (int)$parameters[0] : 13;
            return (new \DateTime)->diff(new \DateTime($value))->y >= $minAge;
        });

        Schema::defaultStringLength(191);

        /*$this->bootCanvasSocialite();*/
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    private function bootCanvasSocialite()
    {
        $socialite = $this->app->make('Laravel\Socialite\Contracts\Factory');
        $socialite->extend(
            'canvas',
            function ($app) use ($socialite) {
                $config = $app['config']['services.canvas'];
                return $socialite->buildProvider(CanvasLoginServiceProvider::class, $config);
            }
        );
    }
}
