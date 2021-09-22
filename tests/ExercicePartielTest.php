<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ExercicePartielTest extends TestCase
{
    public function testNumberIs1(): void
    {
        $this->assertEquals("I", RomanNumber::decimalToRoman(1));
    }
}
