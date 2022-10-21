<?php

namespace Alixcan\LaravelSAPModels\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Alixcan\LaravelSAPModels\LaravelSAPModels
 */
class LaravelSAPModels extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Alixcan\LaravelSAPModels\LaravelSAPModels::class;
    }
}
