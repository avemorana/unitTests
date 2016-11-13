<?php

require_once 'User.php';

class UserTest extends PHPUnit_Framework_TestCase
{
    private $user;

    private $users = array(
        "maxx" => "Maxim Maximov",
        "kate" => "Katerina Katerinova",
        "olichka" => "Olga Olgova"
    );

    protected function setUp()
    {
        $this->user = new User();
        $this->user->setUsers($this->users);
    }

    protected function tearDown()
    {
        $this->user = NULL;
    }

    public function testGetUserByLogin()
    {
        $result = $this->user->getUserByLogin('max');
        $this->assertEquals('Maxim Maximov', $result);
    }
    
    
    public function testGetUserByName()
    {
        $result = $this->user->getUserByName('Liza Lizova');
        $this->assertEquals('User not found', $result);
    }



    public function testGetUsers()
    {
        $result = $this->user->getUsers();
        $this->assertEquals($this->users, $result);
    }
    
    public function testDeleteBook() 
    { 
        $lib = $this->getMockBuilder('Library') 
        ->getMock(); 

        $lib->expects($this->once()) 
        ->method('deleteBook') 
        ->will($this->returnValue(true)); 

        $this->assertTrue($lib->deleteBook('Sherlock')); 
    }
}
