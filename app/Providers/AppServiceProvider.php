<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;
use DB;
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
        $ledigJobb = DB::table('jobs')->get();
        $services = DB::table('services')->get();
        $private_services = DB::table('private_services')->get();
        $blogs = DB::table('blogs')->get();
        $contacts = DB::table('contacts')->get();

        view()->share('blogs', $blogs);
        view()->share('services', $services);
        view()->share('contacts', $contacts);
        view()->share('private_services', $private_services);

    }
}
