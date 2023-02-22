<?php

use PHPUnit\Framework\TestCase;

class PhperrorTest extends TestCase {

    public function testInclude()
    {
        $this->assertTrue(file_exists('config.php'));
    }

}