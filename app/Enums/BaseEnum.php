<?php

namespace App\Enums;

use ReflectionClass;

abstract class BaseEnum
{
    public static function getConstants()
    {
        return (new ReflectionClass(static::class))->getConstants();
    }
}
