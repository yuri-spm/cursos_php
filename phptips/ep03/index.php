<?php

require __DIR__."/vendor/autoload.php";


use Source\Support\Email;

$email = new Email();
/*
$email->add(
    "Olá Thiago essse e meu primeiro e-mail",
    "<h1>Se você recebeu, confirma no zap</h1>>",
    "Yuri Monte",
    "yuri_spm@hotmail.com"
)->send();

if(!$email->error()){
    var_dump(true);
}else{
    echo $email->error()->getMessage();
}
*/
/**
 *
 *
 *
 *
 *
 *
 *
 *
 *
 *
 */

$email->add(
    "Olá Thiago essse e meu segundo e-mail",
    "<h1>Se você recebeu, confirma no zap</h1>>",
    "Yuri Monte",
    "yuri_spm@hotmail.com"
)->attach(
    "files/01.png",
    "PHP"
)->send();

if(!$email->error()){
    var_dump(true);
}else{
    echo $email->error()->getMessage();
}