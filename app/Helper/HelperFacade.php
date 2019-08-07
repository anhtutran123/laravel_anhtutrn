<?php

namespace App\Helper;

use Illuminate\Support\Facades\Facade;

class HelperFacade extends Facade
{
    public static function toUpperCase($name)
    {
        return mb_strtoupper($name);
    }
}
