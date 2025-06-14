<?php

namespace App\Http\Helpers;

use Illuminate\Support\Facades\Route;

class GenericHelper
{
    public static function isActive($routeName, $activeClass = 'active')
    {
        if (is_array($routeName)) {
            return in_array(Route::currentRouteName(), $routeName) ? $activeClass : '';
        }
        return Route::currentRouteName() == $routeName ? $activeClass : '';
    }




}
