<?php

namespace HonlapBirodalom\Chilkat\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \HonlapBirodalom\Chilkat\Chilkat
 */
class Chilkat extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \HonlapBirodalom\Chilkat\Chilkat::class;
    }
}
