<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin' , function ($user) {
            return $user->rollId <= 0;
            //or  return auth()->user()->id <= 0;
        });

        Gate::define('master' , function ($user) {
            return $user->rollId === 0;
            //or  return auth()->user()->id === 0;
        });
        Gate::define('customer' , function ($user) {
            if($user->customer() != null)
                return $user->rollId > 0  && $user->customer()->active;
            return false;
            //or  return auth()->user()->id === 0;
        });
    }
}
