<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\DateFormatter;

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

    public function testFamilyRequiresParent()
    {
        $family = [
            'parents' => 'Joe',
            'children' => ['Timmy', 'Suzy']
        ];

        $this->assertArrayHasKey('parents', $family);
//        $this->assertInternalType('array', $family['parents']); // false
    }

    public function testStampMustBeInstanceOfDateTime()
    {
        $date = new DateFormatter(new \DateTime());

        $this->assertInstanceOf('Datetime', $date->getStamp());
    }

}
