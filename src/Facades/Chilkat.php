<?php

namespace HonlapBirodalom\Chilkat\Facades;

use HonlapBirodalom\Chilkat\Chilkat as ChilkatInstance;
use Illuminate\Support\Facades\Facade;

/**
 * @method static ChilkatInstance initialize()
 */
class Chilkat extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return ChilkatInstance::class;
    }
}
