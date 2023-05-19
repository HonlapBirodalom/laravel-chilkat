<?php

namespace HonlapBirodalom\Chilkat\Exceptions;

use Exception;

final class InvalidInitialization extends Exception
{
    public static function couldNotLoadExtension(string $extension): self
    {
        return new self('Could not load `'.$extension.'`. Extension missing or not enabled.');
    }

    public static function couldNotUnlockLicense(string $errorMessage): self
    {
        return new self($errorMessage);
    }
}
