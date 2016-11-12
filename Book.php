<?php

/**
 * Created by PhpStorm.
 * User: Anastasia
 * Date: 12.11.2016
 * Time: 12:49
 */
class Book
{
    public $name;
    public $author;
    public $year;
    public $user;

    public function getAuthor()
    {
        return $this->author;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
    }

    public function isGiven($name)
    {
        if ($this->getUser() != null) {
            return true;
        } else {
            return false;
        }
    }
}