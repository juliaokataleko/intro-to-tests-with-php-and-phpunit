<?php

use PHPUnit\Framework\TestCase;

class AssertativeTest extends TestCase {

    public function testArrayHasKey()
    {
        # assertArrayHasKey
        $assert = new Assertative();
        $array = $assert->getArray();
        $this->assertArrayHasKey("job", $array);
    }

    public function testCount()
    {
        # assertCount
        $assert = new Assertative();
        $array = $assert->getArray();
        $this->assertCount(2, $array);
    }

    public function testEmpty()
    {
        # assertEmpty
        $assert = new Assertative();
        $array = $assert->getArray();
        $this->assertEmpty($array);
    }

    public function testContain()
    {
        # assertContains
        $array = [1,2,3,4,7,9, "juju"];
        $this->assertContains("juju", $array);
    }

    public function testContainOnly()
    {
         # assertContainsOnly
         $array = [10,2,3];
         # string, int array
         $this->assertContainsOnly("int", $array);
    }

    public function testAttributeExists()
    {
        # assertClassHasAttribute
        $a = new Assertative();
        # $this->assertClassHasAttribute("num", Assertative::class);
        $this->markTestIncomplete();
    }

    public function testRegex()
    {
        # assertRegExp
        $this->assertMatchesRegularExpression("/^[a-z]{3}$/", "bom");
    }

    public function testDirExists() 
    {
        # assertDirectoryExists
        # the folder looks from the root of the project
        $this->assertDirectoryExists("classes");
    }

    public function testDirPermission()
    {
        $this->assertDirectoryIsReadable("classes");
    }

    public function testDirPermission2()
    {
        $this->assertDirectoryIsWritable("tests");
    }

    public function testFileExists()
    {
        $this->assertFileExists("config.php");
    }

    public function testFileEquals()
    {
        $this->assertFileEquals("files/list1.txt", "files/list2.txt");
    }

}