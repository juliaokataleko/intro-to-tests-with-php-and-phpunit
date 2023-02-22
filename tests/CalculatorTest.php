<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase {

    /**
     * @dataProvider sumDataProvider
     */
    public function testSum(float $n1, float $n2, float $result)
    {
        $calc = new Calculator();
        $proc = $calc->sum($n1,$n2);

        $this->assertEquals($result, $proc);
    }

    public static function sumDataProvider(): array
    {
        return [
            [1,1,2],
            [20,10,30],
            [-100,20,-80],
            [10.5,0.5,11],
            [9, 90, 100]
        ];
    }

}