<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use App\Models\Service;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
        Paginator::useBootstrap();
        $ledigJobb = DB::table('jobs')->get();
        // $services = Service::paginate(1);
        $services = DB::table('services')->get();
        // $extra = DB::table('services->extra')->get();
        $private_services = DB::table('private_services')->get();
        $blogs = DB::table('blogs')->get();
        $contacts = DB::table('contacts')->get();
        $abouts = DB::table('abouts')->get();
        $logos = DB::table('logos')->get();

        view()->share('blogs', $blogs);
        // view()->share('extra', $extra);
        view()->share('logos', $logos);
        view()->share('services', $services);
        view()->share('contacts', $contacts);
        view()->share('abouts', $abouts);
        view()->share('private_services', $private_services);

    }
}
