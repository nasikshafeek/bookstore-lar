<?php
namespace App\Foundation;

use App\Services\Admin\Providers\AdminServiceProvider;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use App\Services\Web\Providers\WebServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function register()
    {
        // Register the service providers of your Services here.
        $this->app->register(WebServiceProvider::class);
    }
}
