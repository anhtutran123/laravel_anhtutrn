<?php

namespace App\Facades;

class Helper
{
    /**
     * Return uppercase string
     *
     * @param $name
     * @return string
     */
    public static function toUpperCase($name)
    {
        return mb_strtoupper($name);
    }
}
