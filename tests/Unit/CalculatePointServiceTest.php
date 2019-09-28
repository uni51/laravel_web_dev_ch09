<?php
declare(strict_types=1);

namespace Tests\Unit;

use App\Services\CalculatePointService;
use Tests\TestCase;

class CalculatePointServiceTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    /**
     * @test
     */
    public function example()
    {
        $this->assertTrue(true);
    }

    /**
     * @test
     */
    public function calcpoint_購入金額が0ならポイントは0()
    {
        $result = CalculatePointService::calcPoint(0);

        $this->assertSame(0, $result); // ① $resultが0であることを検証
    }

    /**
     * @test
     */
    public function calcpoint_購入金額が1000ならポイントは10()
    {
        $result = CalculatePointService::calcPoint(1000);

        $this->assertSame(10, $result); // ① $resultが0であることを検証
    }
}
