<?php

class User
{
    public $users = array(
        "maxx" => "Maxim Maximov",
        "kate" => "Katerina Katerinova",
        "olichka" => "Olga Olgova"
    );

    public function getUsers(): array
    {
        return $this->users;
    }

    public function setUsers(array $users)
    {
        $this->users = $users;
    }

//1
    public function getUserByLogin($login): string
    {
        foreach ($this->users as $key => $value) {
            if ($key == $login) {
                return $value;
            }
        }
        return "User not found";
    }

//2
    public function getUserByName($name): string
    {
        foreach ($this->users as $key => $value) {
            if ($value == $name) {
                return $key;
            }
        }
        return "User not found";
    }

//3
    public function addUser($login, $fullName)
    {
        $this->users[$login] = $fullName;
        return true;
    }

//4
    public function deleteUser($login)
    {
        foreach ($this->users as $key => $value) {
            if ($key == $login) {
                unset($this->users[$login]);
                return true;
            }
        }
        return "User not found";
    }

//5
    public function isExistUser($login)
    {
        foreach ($this->users as $key => $value) {
            if ($key == $login) {
                return true;
            }
        }
        return false;
    }

}

