<?php

namespace App\Facades;
use Illuminate\Support\Facades\Facade;

/**
 * summary
 */
class Uploader extends Facade
{
    /**
     * summary
     */
    protected static function getFacadeAccessor()
    {
        return 'uploader';
    }
}
