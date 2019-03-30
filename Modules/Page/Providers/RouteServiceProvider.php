<?php

namespace Modules\Page\Providers;

use Modules\Core\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The root namespace to assume when generating URLs to actions.
     *
     * @var string
     */
    protected $namespace = 'Modules\Page\Http\Controllers';

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        $this->registerPageRoute();
    }

    private function registerPageRoute()
    {
        $this->app->booted(function () {
            $uri = '{slug}';

            if (is_multilingual()) {
                $uri = locale() . "/{$uri}";
            }

            Route::get($uri, '\Modules\Page\Http\Controllers\PageController@show');
        });
    }

    /**
     * Get public routes.
     *
     * @return string
     */
    protected function public()
    {
        return __DIR__ . '/../Routes/public.php';
    }

    /**
     * Get admin routes.
     *
     * @return string
     */
    protected function admin()
    {
        return __DIR__ . '/../Routes/admin.php';
    }
}
