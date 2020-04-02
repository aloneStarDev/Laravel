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

        view()->composer('Admin.section.header', function ($view) {
            $paymentSuccessful = Payment::where('payment', 1)->count();

            $view->with([
                'paymentSuccessfulCount' => $paymentSuccessful,
            ]);
        });
    }
}
