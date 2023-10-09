<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Module;
use App\Models\SubModule;

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
        view()->composer('backend.components.sidebar', function($view){
            $modules = Module::where('enabled', 1)->orderBy('sort_order')->get();
            $submodules = SubModule::where('enabled',1)->orderBy('sort_order')->get();
            $view->with(['modules' => $modules, 'submodules' => $submodules]);
        });
        //
        view()->composer('site.layouts.app', function($view){
            // $menu = Menu::get();
            // $submenu = SubMenu::get();
            // $pages = Pages::get();
            // $services = Services::select('services.id as id','services.service as service', 'services.slug as slug', 'media.path as path')->join('media', 'services.media_id','media.id')->get();
            // $category = Categories::get();
            // $blogs = Blogs::get();
            // $notices = Notice
            // $view->with(['menu' => $menu, 'submenu' => $submenu, 'pages' => $pages, 'services' => $services]);
        });
    }
}
