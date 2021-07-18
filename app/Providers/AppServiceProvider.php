<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Trademark;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
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
        Paginator::useBootstrap();

        if(Schema::hasTable('categories') && Schema::hasTable('trademarks')) {
            $menuCategories = Category::where('parent_id',0)->get();
            $menuTrademarks = Trademark::all();
        }


        View::share('menuTrademarks',$menuTrademarks);
        View::share('menuCategories',$menuCategories);
    }
}
