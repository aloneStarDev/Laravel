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
            return $user->rollId> 0;
            //or  return auth()->user()->id === 0;
        });
        /*
         * $a == $b	Equal TRUE if $a is equal to $b after type juggling.
         * $a === $b	Identical	TRUE if $a is equal to $b, and they are of the same type.
         */
    }
}
