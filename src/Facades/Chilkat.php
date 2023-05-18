<?php

namespace HonlapBirodalom\Chilkat\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string licenseUnlockStatusMessage()
 * @method static string lastErrorText()
 */
class Chilkat extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \HonlapBirodalom\Chilkat\Chilkat::class;
    }
}
