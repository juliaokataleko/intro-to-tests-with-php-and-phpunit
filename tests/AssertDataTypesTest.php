<?php

use PHPUnit\Framework\TestCase;

class AssertDataTypesTest extends TestCase {

    public function testBoolean()
    {
        $this->assertTrue(is_file('vendor'));
    }

    public function testBoolean2()
    {
        $this->assertTrue(is_file('config.php'));
    }

    public function testNull()
    {
        $age = null;
        $this->assertNull($age);
    }

    public function testVarType()
    {
        $assert = new Assertative();
        $array = $assert->getArray();
        $this->assertIsArray($array);
    }

    public function testEqual()
    {
        $this->assertEquals("Kataleko", "Kataleko");
    }

    public function testString()
    {
        $text = "Kataleko is 30 years old";
        $this->assertStringStartsWith("Kataleko", $text);
        $this->assertStringEndsWith("old", $text);
    }

    public function testNumbers()
    {
        $total_users = 10;
        # $this->assertGreaterThan(10, $total_users);
        $this->assertGreaterThanOrEqual(10, $total_users);
    }

    public function testNumbers1()
    {
        $total_users = 10;
        # $this->assertGreaterThan(10, $total_users);
        $this->assertLessThanOrEqual(10, $total_users);
    }

}