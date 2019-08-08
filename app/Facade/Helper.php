<?php

namespace App\Facade;

class Helper
{
    /**
     * @param $name
     * @return bool|false|mixed|string|string[]|null
     */
    public static function toUpperCase($name)
    {
        return mb_strtoupper($name);
    }
}
