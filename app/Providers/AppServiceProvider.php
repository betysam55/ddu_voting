<?php

namespace App\Providers;
use App\ActivateVote;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->composer('layouts.app',function($view)
            {
                $latest=\App\ActivateVote::latest()->first();
                $view->with('latest',$latest);

            });
         view()->composer('inc.nav',function($view)
            {
                $latest=\App\ActivateVote::latest()->first();
                $view->with('latest',$latest);
                
            });
           view()->composer('inc.votestatus',function($view)
            {
                $latest=\App\ActivateVote::latest()->first();
                $view->with('latest',$latest);
                
            });
           view()->composer('welcome',function($view)
            {
                $latest=\App\ActivateVote::latest()->first();
                $view->with('latest',$latest);
                
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
