<?php

namespace App\Providers;

use mmghv\LumenRouteBinding\RouteBindingServiceProvider as BaseServiceProvider;

class RouteBindingServiceProvider extends BaseServiceProvider
{
    /**
     * Boot the service provider
     */
    public function boot()
    {
        $binder = $this->binder;
        $binder->bind('category', 'App\Category');
        $binder->bind('subcategory', 'App\Subcategory');
        $binder->bind('service', 'App\Service');


    }
}
