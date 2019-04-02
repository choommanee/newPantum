<?php

namespace Modules\Serials\Providers;

use Modules\Admin\Ui\Tab;
use Modules\Serials\admin\ImportTabs;
use Modules\Support\Traits\AddsAsset;
use Illuminate\Support\ServiceProvider;
use Modules\Support\Traits\LoadsConfig;
use Modules\Admin\Ui\Facades\TabManager;
use Modules\Serials\admin\SerialTabs;

class SerialsServiceProvider extends ServiceProvider
{
    use AddsAsset, LoadsConfig;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        TabManager::register('serials', SerialTabs::class);
        TabManager::register('imports', ImportTabs::class);

        //$this->addAssets('admin.(serials).(create|edit)');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->loadConfigs(['assets.php', 'permissions.php']);
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }
}
