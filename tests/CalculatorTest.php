<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase {
    private $calculator;
    
    protected function setUp(): void {
        $this->calculator = new Calculator();
    }
    
    public function testAddition(): void {
        $this->assertEquals(5, $this->calculator->add(2, 3));
        $this->assertEquals(0, $this->calculator->add(-5, 5));
        $this->assertEquals(-10, $this->calculator->add(-5, -5));
    }
    
    public function testSubtraction(): void {
        $this->assertEquals(2, $this->calculator->subtract(5, 3));
        $this->assertEquals(-10, $this->calculator->subtract(-5, 5));
        $this->assertEquals(0, $this->calculator->subtract(10, 10));
    }
    
    public function testMultiplication(): void {
        $this->assertEquals(15, $this->calculator->multiply(5, 3));
        $this->assertEquals(0, $this->calculator->multiply(5, 0));
        $this->assertEquals(-25, $this->calculator->multiply(-5, 5));
    }
    
    public function testDivision(): void {
        $this->assertEquals(2, $this->calculator->divide(6, 3));
        $this->assertEquals(2.5, $this->calculator->divide(5, 2));
        $this->assertEquals(-2, $this->calculator->divide(10, -5));
    }
    
    public function testDivisionByZero(): void {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage("Error: Division by zero!");
        $this->calculator->divide(10, 0);
    }
    
    public function testPower(): void {
        $this->assertEquals(8, $this->calculator->power(2, 3));
        $this->assertEquals(1, $this->calculator->power(5, 0));
        $this->assertEquals(25, $this->calculator->power(5, 2));
    }
}