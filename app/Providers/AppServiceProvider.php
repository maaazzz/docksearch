<?php

namespace App\Providers;

use App\Models\SiteSetting;
use App\Models\ReviewSection;
use App\Models\DockShopSection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            $site_setting = SiteSetting::first();
            $reviews_section = ReviewSection::latest()->take(3)->get();
            $docks_shop = DockShopSection::latest()->take(6)->get();
            $top_navbar = DB::table('menues')->take(6)->get(['title','url']);
            $view->with(['site_setting'=>$site_setting,'reviews_section' => $reviews_section,'docks_shop' => $docks_shop,'top_navbar' => $top_navbar]);

        });
    }
}
