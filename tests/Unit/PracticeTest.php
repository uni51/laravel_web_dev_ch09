<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHelloWorld()
    {
        $greeting = 'Hello, World.';

//        $this->assertTrue($greeting === 'Hello, World.', $greeting);
        $this->assertEquals('Hello, World.', $greeting);
    }

    public function testLaravelDevsIncludesDayle()
    {
        $names = ['Taylor', 'Shawn', 'Dayle'];
        $this->assertContains('Dayle', $names);
        $this->assertNotContains('Troll', $names);
    }
}
