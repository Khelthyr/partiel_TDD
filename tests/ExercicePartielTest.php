<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ExercicePartielTest extends TestCase
{
    public function testNumberIs1(): void
    {
        $this->assertEquals("I", RomanNumber::decimalToRoman(1));
    }

    public function testNumberIs2(): void
    {
        $this->assertEquals("II", RomanNumber::decimalToRoman(2));
    }

    public function testNumberIs4(): void
    {
        $this->assertEquals("IV", RomanNumber::decimalToRoman(4)); 
    }

    public function testNumberIs5(): void
    {
        $this->assertEquals("V", RomanNumber::decimalToRoman(5)); 
    }

    public function testNumberIs10(): void
    {
        $this->assertEquals("X", RomanNumber::decimalToRoman(10)); 
    }

    public function testNumberIs100(): void
    {
        $this->assertEquals("C", RomanNumber::decimalToRoman(100)); 
    }

    public function testNumberIs207(): void
    {
        $this->assertEquals("CCVII", RomanNumber::decimalToRoman(207)); 
    }

    public function testNumberIs1000(): void
    {
        $this->assertEquals("M", RomanNumber::decimalToRoman(1000)); 
    }

    public function testNumberIs3000(): void
    {
        $this->assertEquals("MMM", RomanNumber::decimalToRoman(3000)); 
    }

}
