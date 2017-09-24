<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
	Validator::extend('olderThan', function($attribute, $value, $parameters)
	{
		$minAge = ( ! empty($parameters)) ? (int) $parameters[0] : 13;
		return (new \DateTime)->diff(new \DateTime($value))->y >= $minAge;
	});

        //
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
}
