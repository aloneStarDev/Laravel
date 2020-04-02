<?php

namespace App\Http\Middleware;

use App\Customer;
use Carbon\Carbon;
use Closure;
use Illuminate\Support\Facades\Gate;

class AccountMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Gate::allows("customer")){
            $customer = auth()->user()->customer();
            if(Carbon::parse($customer->expire_subscription) < Carbon::now()){
                $customer->update(["active"=>false]);
                auth()->logout();
            }
        }
        return $next($request);
    }
}
