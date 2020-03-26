<?php

namespace App\Providers;

use App\Payment;
use Illuminate\Database\Schema\Builder;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Builder::defaultStringLength(191);

        //number of payments and use in header.blade.php
        view()->composer('Admin.section.header', function ($view) {
            $paymentSuccessful = Payment::where('payment', 1)->count();
            $paymentUnsuccessful = Payment::where('payment', 0)->count();

            $view->with([
                'paymentSuccessfulCount' => $paymentSuccessful,
                'paymentUnsuccessfulCount' => $paymentUnsuccessful
            ]);
        });
    }
}
