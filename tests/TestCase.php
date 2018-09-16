<?php

namespace Google\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    public function setup()
    {
        parent::setup();

        $this->app->setBasePath(__DIR__.'/../');
    }
}
