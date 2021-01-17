<?php

namespace Farhoudi\Admin;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider {

    public function register() {
        //
        Route::get('test', function () {
            $models = config('admin.models');
            foreach ($models as $model) {

            }
//            die('tested');
        });
    }

    public function boot() {
//        $this->publishes([
//            __DIR__.'/migrations/' => database_path('migrations')
//        ], 'migrations');
    }

}
