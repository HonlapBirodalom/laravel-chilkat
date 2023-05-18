<?php

namespace HonlapBirodalom\Chilkat\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static licenseUnlockStatusMessage(): string
 * @method static lastErrorText(): string
 */
class Chilkat extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \HonlapBirodalom\Chilkat\Chilkat::class;
    }
}
