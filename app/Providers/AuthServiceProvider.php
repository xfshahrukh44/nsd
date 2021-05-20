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
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Admin
        Gate::define('isAdmin', function($user)
        {
            return $user->type === 'Admin';
        });

        // User
        Gate::define('isUser', function($user)
        {
            return $user->type === 'User';
        });
        
        // Kicker
        Gate::define('isKicker', function($user)
        {
            return $user->type === 'Kicker';
        });

        // Punter
        Gate::define('isPunter', function($user)
        {
            return $user->type === 'Punter';
        });

        // LongSnapper
        Gate::define('isLongSnapper', function($user)
        {
            return $user->type === 'Long Snapper';
        });
    }
}
