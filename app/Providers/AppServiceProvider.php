<?php

namespace App\Providers;

use App\Agent;
use App\Customer;
use App\File;
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
            $agentCount = Agent::where("active",true)->count();
            $customerCount = Customer::where("active",true)->count();
            $fileCount = File::where("visible",true)->count();
            $bayganyCount = File::where("deleted",true)->count();
            $view->with([
                'paymentSuccessfulCount' => $paymentSuccessful,
                'agentCount' => $agentCount,
                'customerCount' => $customerCount,
                'fileCount' => $fileCount,
                'bayganyCount' => $bayganyCount,
            ]);
        });
    }
}
