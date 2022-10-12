<?php

namespace App\Providers;

use App\Models\users;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
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

        Gate::define("admin", function(users $user){
            return $user->hasRole("admin");
        });

        Gate::define("manager", function(users $user){
            return $user->hasRole("manager");
        });
        
        Gate::define("employé", function(users $user){
            return $user->hasRole("employé");
        });
        Gate::before(function (users $user){
            return $user->hasRole("superadmin");
        });
    }
}
