<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase {

    public function testExpectFullName()
    {
        $this->expectOutputString("Julião Kataleko");

        $user = new User();
        $user->setName("Julião");
        $user->setSurname("Kataleko");
        echo $user->getFullname();
    }

}