<?php

require_once 'User.php';
require_once 'Library.php';

$lib = new Library();
$users = new User();

$usersArr = array(
    "maxx" => "Maxim Maximov",
    "kate" => "Katerina Katerinova",
    "olichka" => "Olga Olgova"
);

$users->setUsers($usersArr);

$lib->addBook('Sherlock', 'Conan', 1876);
$lib->addBook('Bennet', 'Austin', 1755);

$lib->giveBook('Bennet', 'kate');
