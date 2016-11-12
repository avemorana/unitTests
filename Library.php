<?php

require_once 'Book.php';
require_once 'User.php';

class Library
{
    public $books = array();
//1
    public function addBook($name, $author, $year, $user = null)
    {
        $book = new Book();
        $book->setAuthor($author);
        $book->setName($name);
        $book->setYear($year);
        $this->books[count($this->books)+1] = $book;
        return true;
    }
//2
    public function giveBook($name, $user)
    {
        $users = new User();
        foreach ($this->books as $key => $value){
            if ($name == $value->getName() && $users->isExistUser($user))
            {
                $value->setUser($user);
                return true;
            }
        }
        return false;
    }
//3
    public function returnBook($name)
    {
        foreach ($this->books as $key => $value){
            if ($name == $value->getName())
            {
                $value->setUser(null);
                return true;
            }
        }
        return false;
    }
//4
    public function deleteBook($name)
    {
        foreach ($this->books as $key => $value){
            if ($name == $value->getName())
            {
                unset($this->books[$key]);
                return true;
            }
        }
        return false;
    }


}