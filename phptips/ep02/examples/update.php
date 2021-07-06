<?php

require __DIR__."/../vendor/autoload.php";


use Source\Models\User;
use Source\Models\Address;


$user = (new User())->findById(1);
$user->first_name = "Lucas";
$user->save();




var_dump($user);