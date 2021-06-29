<?php

require __DIR__."/../vendor/autoload.php";


use Source\Models\User;
use Source\Models\Address;


$user = (new User())->findById(1);

if($user){
    $user->destroy();
}else{
    var_dump($user);
}


