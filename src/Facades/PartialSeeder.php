<?php

namespace Hydrat\PartialSeeder\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Hydrat\PartialSeeder\PartialSeeder
 */
class PartialSeeder extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Hydrat\PartialSeeder\PartialSeeder::class;
    }
}
