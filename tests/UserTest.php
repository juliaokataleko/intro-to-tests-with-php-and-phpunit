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

    public function testAge()
    {
        $user = new User();
        $user->setAge(90);
        $this->assertEquals(90, $user->getAge());

        # $this->markTestIncomplete("@TODO - Implement setAge() and getAge() methods");
    }

    public function testAgeAsString()
    {
        $user = new User();
        $user->setAge(90);
        $this->assertEquals("90 years old", $user->getAge($str = true));

        // $this->markTestIncomplete("@TODO - Implement return as string in getAge() method");
    }

}