<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class CustomValidationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        Validator::extend('file_path', function ($attribute, $value, $parameters, $validator) {
            // Your validation logic for file paths goes here
            // For example, you can use the `is_file` function
            return is_file($value);
        });
    }
}
