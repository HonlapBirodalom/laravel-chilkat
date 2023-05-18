<?php

namespace HonlapBirodalom\Chilkat\Tests;

use HonlapBirodalom\Chilkat\ChilkatServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            ChilkatServiceProvider::class,
        ];
    }
}
