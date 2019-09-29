<?php
declare(strict_types=1);

namespace Tests\Unit;

use App\Services\CalculatePointService;
use Tests\TestCase;

class CalculatePointServiceTest extends TestCase
{
//    /**
//     * A basic test example.
//     *
//     * @return void
//     */
//    public function testExample()
//    {
//        $this->assertTrue(true);
//    }

//    /**
//     * @test
//     */
//    public function example()
//    {
//        $this->assertTrue(true);
//    }

//    /**
//     * @test
//     */
//    public function calcpoint_購入金額が0ならポイントは0()
//    {
//        $result = CalculatePointService::calcPoint(0);
//
//        $this->assertSame(0, $result); // ① $resultが0であることを検証
//    }
//
//    /**
//     * @test
//     */
//    public function calcpoint_購入金額が1000ならポイントは10()
//    {
//        $result = CalculatePointService::calcPoint(1000);
//
//        $this->assertSame(10, $result); // ① $resultが0であることを検証
//    }

    /**
     * @test
     * @dataProvider dataProvider_for_calcPoint
     */
    public function calcpoint(int $expected, int $amount)
    {
        $result = CalculatePointService::calcPoint($amount);

        $this->assertSame($expected, $result);
    }

    public function dataProvider_for_calcPoint(): array
    {
        return [
            '購入金額が0なら0ポイント'       => [0, 0],
            '購入金額が999なら0ポイント'     => [0, 999],
            '購入金額が1000なら10ポイント'   => [10, 1000],
            '購入金額が9999なら99ポイント'   => [99, 9999],
            '購入金額が10000なら200ポイント' => [200, 10000],
        ];
    }
}
