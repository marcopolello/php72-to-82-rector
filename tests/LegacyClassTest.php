<?php

use PHPUnit\Framework\TestCase;
use App\LegacyClass;

class LegacyClassTest extends TestCase
{
    public function testLegacyMethod()
    {
        $legacyClass = new LegacyClass();
        $this->assertEquals('Expected String', $legacyClass->legacyMethod());
    }
}