<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use View;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['pages.profile', 'pages.settings'], 'App\Http\ViewComposer\ProfileComposer');

        // View::composer(['pages.profile', 'pages.settings'],function($View) { $View->with('married', random_int(2, 3)); });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
