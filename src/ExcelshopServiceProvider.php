<?php
namespace Chernogolov\Excelshop;
/**
 * Сервис провайдер для подключения модулей
 */
class ExcelshopServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        //регистрируем конфиг
        $this->mergeConfigFrom(__DIR__ . '/../config/excelshop.php', 'excelshop');

        if(is_dir(__DIR__ . '/Migrations')) {
            $this->loadMigrationsFrom(__DIR__ . '/Migrations');
        }

        if(is_dir(__DIR__ . '/Views')) {
            $this->loadViewsFrom(__DIR__ . '/Views', 'excelshop');
        }

        if(is_dir(__DIR__ . '/Translations')) {
            $this->loadTranslationsFrom(__DIR__.'/Translations', 'excelshop');
        }

        $this->publishes([
            __DIR__.'/Assets' => public_path('vendor/excelshop'),
        ], 'public');

//        Gate::define('view-admin', function ($user) {
//            return in_array($user->id, [1]);
//        });
//
//        Gate::define('view-regs', function ($user) {
//            return RegsUsers::where([['user_id', '=', $user->id],['view', '=', 1]])->first();
//        });

        $this->publishes([
            __DIR__.'/../config' => base_path('config'),
        ]);

        include __DIR__ . '/Routes/Routes.php';
    }

    public function register()
    {
    }
}