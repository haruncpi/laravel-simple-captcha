<?php

namespace Haruncpi\LaravelSimpleCaptcha;

use Illuminate\Support\Facades\Validator;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
   

    public function boot()
    {
        Validator::extend('simple_captcha', function($attribute, $value, $parameters)
        {
            return $value == SimpleCaptcha::getAnswer();
        },'Invalid captcha answer');
    }

    public function register()
    {
       
    }
}
