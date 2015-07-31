<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Blade;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->share('userName', 'sundebiao');
        view()->share('nowTime', time());

        // custom blade date 
        Blade::directive('datetime', function($expression) {
            return "<?php echo date('Y-m-d H:i:s', $expression); ?>";
        });

        DB::listen(function($sql, $bindings, $time) {
            //
            // dd($sql, $bindings, $time);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
