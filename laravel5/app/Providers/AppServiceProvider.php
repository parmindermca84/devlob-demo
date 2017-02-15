<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;
use View;
use Auth;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive("age", function($expression) {
            $data = json_decode($expression);

            $age = Carbon::createFromDate($data[0], $data[1], $data[2])->age;
            return '<?php echo $age; ?>';
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        View::share('name', 'parminder');
        $age = Carbon::createFromDate(1984, 7, 9)->age;
        View::share('age', $age);
        //View::share('Auth', Auth::User());

        View::composer('*', function($View) {
           $View->with('Auth', Auth::User()); 
        });
    }
}
