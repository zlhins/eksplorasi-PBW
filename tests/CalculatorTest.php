<?php

use PHPUnit\Framework\TestCase;

require_once 'src/Calculator.php';

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calc = new Calculator();
        $result = $calc->add(2, 3);
        $this->assertEquals(5, $result);
    }

    public function testSubtract()
    {
        $calc = new Calculator();
        $result = $calc->subtract(5, 3);
        $this->assertEquals(2, $result);
    }

    public function testMultiply()
    {
        $calc = new Calculator();
        $result = $calc->multiply(2, 3);
        $this->assertEquals(6, $result);
    }

    public function testDivide()
    {
        $calc = new Calculator();
        $result = $calc->divide(6, 3);
        $this->assertEquals(2, $result);
    }

    public function testDivideByZero()
    {
        $calc = new Calculator();
        $this->expectException(InvalidArgumentException::class);
        $calc->divide(6, 0);
    }
}
