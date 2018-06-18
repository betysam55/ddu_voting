<?php

namespace App\Providers;
use App\ActivateVote;
use App\Candidates;
use App\PresidentVote;
use Carbon;
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
                if ($latest!=null) {
             $view->with('latest',$latest);
             } 
           else{
            session()->flash('message', 'There Is No Active Vote');
         
             $view->with('latest',$latest);

           }

            });
        view()->composer('layouts.app1',function($view)
            {
                $latest=\App\ActivateVote::latest()->first();
                if ($latest!=null) {
             $view->with('latest',$latest);
             } 
           else{
            session()->flash('message', 'There Is No Active Vote');
         
             $view->with('latest',$latest);

           }

            });
        view()->composer('layouts.app2',function($view)
            {
                $latest=\App\ActivateVote::latest()->first();
               if ($latest!=null) {
             $view->with('latest',$latest);
             } 
           else{
            session()->flash('message', 'There Is No Active Vote');
         
             $view->with('latest',$latest);

           }

            });
         view()->composer('inc.nav',function($view)
            {
                $latest=\App\ActivateVote::latest()->first();
                if ($latest!=null) {
             $view->with('latest',$latest);
             } 
           else{
            session()->flash('message', 'There Is No Active Vote');
         
             $view->with('latest',$latest);

           }
                
            });
           view()->composer('inc.votestatus',function($view)
            {
                $latest=\App\ActivateVote::latest()->first();
                if ($latest!=null) {
             $view->with('latest',$latest);
             } 
           else{
            session()->flash('message', 'There Is No Active Vote');
         
             $view->with('latest',$latest);

           }
                
            });
           view()->composer('welcome',function($view)
            {
                $latest=\App\ActivateVote::latest()->first();
                if ($latest!=null) {
             $view->with('latest',$latest);
             } 
           else{
            session()->flash('message', 'There Is No Active Vote');
         
             $view->with('latest',$latest);

           }
                
            });
             view()->composer('welcome',function($view)
            {
                $candidate=\App\Candidates::get()->all();
                
                if ($candidate!=null) {
             $view->with('candidate',$candidate);
             } 
           else{
            session()->flash('message', 'There Is No Active Vote');
         
             $view->with('candidate',$candidate);

           }
                
            });
             view()->composer('inc.voteresult',function($view)
            {
                $candidate=\App\Candidates::get()->all();
                
                if ($candidate!=null) {
             $view->with('candidate',$candidate);
             } 
           else{
            session()->flash('message', 'There Is No Active Vote');
         
             $view->with('candidate',$candidate);

           }
                
            });
             view()->composer('inc.campaignpost',function($view)
            {
                $campaignpost=\App\campaignpost::get()->all();
                
                if ($campaignpost!=null) {
             $view->with('campaignpost',$campaignpost);
             } 
           else{
            session()->flash('message', 'There Is No Active Vote');
         
             $view->with('inc.campaignpost',$campaignpost);

           }
                
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
 