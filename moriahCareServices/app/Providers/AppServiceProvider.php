<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Page;
use App\Models\Contact;
use App\Models\Service;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
         View()->composer(['layouts.master'], function($view)
        {
             $page=Page::all()->load(['SubPage']);
             $contact=Contact::all();
             $services=Service::inRandomOrder()->take(6)->get();
            
                 

        $view->with('pages', $page)
            ->with('contacts',$contact)
            ->with('allServices',$services)
        ;
        });
    }
}
