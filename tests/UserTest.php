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



    public function testGetUsers()
    {
        $result = $this->user->getUsers();
        $this->assertEquals($this->users, $result);
    }
}
