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
       $showAll = true;
       $notShowAll = false;
        Paginator::useBootstrapFive();
        $ledigJobb = DB::table('jobs')->get();
        // $services = Service::paginate(1);
        $services = DB::table('services')->paginate(3);
        // $extra = DB::table('services->extra')->get();
        $private_services = DB::table('private_services')->paginate(3);
        $blogs = DB::table('blogs')->paginate(5);
        $contacts = DB::table('contacts')->get();
        $abouts = DB::table('abouts')->get();
        $logos = DB::table('logos')->get();
        $homePages = DB::table('homePages')->get();

        //menu list for företagstjänster och privattjänster
         $menu_services = DB::table('services')->get();
         view()->share('menu_services', $menu_services);
         
         $private_menu_services = DB::table('private_services')->get();
         view()->share('private_menu_services', $private_menu_services);



        view()->share('blogs', $blogs);
        // view()->share('extra', $extra);
        view()->share('logos', $logos);
        view()->share('services', $services);
        view()->share('contacts', $contacts);
        view()->share('abouts', $abouts);
        view()->share('homePages', $homePages);
        view()->share('showAll', $showAll);
        view()->share('notShowAll', $notShowAll);
        view()->share('private_services', $private_services);

    }
}
