<?php

namespace AtwanDev\LaravelMedia\Facades;

use Illuminate\Support\Facades\Facade;

class ImageServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'image-service';
    }
}
