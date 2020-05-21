<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
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

    public function boot()
    {
        //maximum length , pra mos me pas kete gabim kjo sherben mos me qit error per gjatesi te stringit qe e marrim te createposttable(per me dergu te dhena ne databaze)
        //
        Schema::defaultStringLength(191);
    }

}
