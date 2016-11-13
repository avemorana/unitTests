<?php

require_once 'Library.php';
require_once 'User.php';

class LibraryTest extends PHPUnit_Framework_TestCase
{
    private $lib;

    protected function setUp()
    {
        $this->lib = new Library();
        $this->lib->addBook('Sherlock', 'Conan', 1876);
        $this->lib->addBook('Bennet', 'Austin', 1755);
    }

    protected function tearDown()
    {
        $this->lib = NULL;
    }

    public function testAddBook()
    {
        $lib = $this->getMockBuilder('Library')
            ->getMock();

        $lib->expects($this->once())
            ->method('addBook')
            ->will($this->returnValue(true));

        $this->assertTrue($lib->addBook('HarryPotter', 'Rowling', 2001));
    }
    
    public function testGiveBook()
    {
        $lib = $this->getMockBuilder('Library')
            ->getMock();

        $lib->expects($this->once())
            ->method('giveBook')
            ->will($this->returnValue(true));

        $this->assertTrue($lib->giveBook('Sherlock', 'kate'));
    }

    public function testDeleteUser() 
    { 
        $result = $this->user->deleteUser('batman'); 
        $this->assertEquals('User not found', $result); 
    }


}
