<?php

namespace Tests\Unit;

use App\Categories;
use App\News;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertIsArray(Categories::getCategories());
        $this->assertTrue(true);
    }
}
