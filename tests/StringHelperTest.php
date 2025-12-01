<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use App\StringHelper;

class StringHelperTest extends TestCase {
    private $stringHelper;

    protected function setUp(): void {
        $this->stringHelper = new StringHelper();
    }

    public function testToUpperCase(): void {
        $this->assertEquals("HELLO", $this->stringHelper->toUpperCase("hello"));
        $this->assertEquals("PHPUNIT", $this->stringHelper->toUpperCase("phpunit"));
    }

    public function testToLowerCase(): void {
        $this->assertEquals("hello", $this->stringHelper->toLowerCase("HELLO"));
        $this->assertEquals("php", $this->stringHelper->toLowerCase("PHP"));
    }

    public function testReverse(): void {
        $this->assertEquals("olleh", $this->stringHelper->reverse("hello"));
        $this->assertEquals("321", $this->stringHelper->reverse("123"));
    }

    public function testLength(): void {
        $this->assertEquals(5, $this->stringHelper->length("hello"));
        $this->assertEquals(0, $this->stringHelper->length(""));
    }
}
