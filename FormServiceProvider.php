<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        \ Form::macro('myDateTime', function($fieldName, $errors)
        {
            $class='';
            if ($errors->has($fieldName)) {
          //      $class='is-invalid';
            }
            echo $fieldName;
            
            return '<input type="datetime-local" class="form-control '.$class.'" id="published_at" name="published_at" value="">';
        });
    }
}
