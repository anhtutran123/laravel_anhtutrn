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
    public function toUpperCase($name)
    {
        return mb_strtoupper($name);
    }
}
