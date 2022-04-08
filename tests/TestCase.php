<?php

namespace Eloquent\KeyFactory\Tests;

use Eloquent\KeyFactory\KeyFactoryServiceProvider;


class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            KeyFactoryServiceProvider::class,
        ];
    }
}