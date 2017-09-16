<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //type=0 Owner
        //type=1 Master
        //type=2 Guest
        Gate::define('owner', function ($user)
        {
            return ($user->type === 0 );
        });

        Gate::define('master', function ($user)
        {
            return ($user->type === 1 || $user->type === 0);
        });

        //
    }
}
