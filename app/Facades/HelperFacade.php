<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class HelperFacade extends Facade
{
    /**
     * Get facade accessor name
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'helper';
    }
}
