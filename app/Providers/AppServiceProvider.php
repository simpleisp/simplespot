<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;
use App\Http\ViewComposers\SupportComposer;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Str;
use anlutro\LaravelSettings\Facade as Setting;
use Illuminate\Support\Facades\View;

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
        Schema::defaultStringLength(191);

        try {
            if (Schema::hasTable('settings')) {
                if (!Setting::has('SECURITY_TOKEN')) {
                    Setting::set('SECURITY_TOKEN', Str::random(32));
                    Setting::save();
                }
            }
        } catch (\Throwable $e) {
            // Log it for visibility or ignore silently
            // \Log::info('Skipping settings check: ' . $e->getMessage());
        }

        Gate::before(function ($user, $ability) {
            return $user->hasRole('super-admin') ? true : null;
        });

        view()->composer('*', SupportComposer::class);

        Config::set('app.backupCode', '1234567');

        // if (!app()->runningInConsole() && !hasBrandingLicense() && !brandingIsPresent()) {
        //     abort(511, 'Branding has been removed. Please restore Simplux credits or upgrade your license to remove branding.');
        // }
    }

}
