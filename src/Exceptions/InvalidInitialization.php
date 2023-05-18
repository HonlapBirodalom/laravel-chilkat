<?php

namespace HonlapBirodalom\Chilkat\Exceptions;

use Exception;

class InvalidInitialization extends Exception
{
    public static function couldNotLoadExtension(string $extension): self
    {
        return new static('Could not load `'.$extension.'`. Extension missing or not enabled.');
    }

    public static function couldNotUnlockLicense(string $errorMessage): self
    {
        return new static($errorMessage);
    }
}
