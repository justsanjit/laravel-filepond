<?php

namespace Sanjitkung\LaravelFilepond\Tests;

use Orchestra\Testbench\TestCase;
use Sanjitkung\LaravelFilepond\LaravelFilepondServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelFilepondServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
