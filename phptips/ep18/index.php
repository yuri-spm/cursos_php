<?php


require __DIR__."/vendor/autoload.php";
use Source\Models\User;
$useCreate = false;

if($useCreate){
    $user = new User();
    $user->first_name = "Elisangela";
    $user->last_name = "Monte";
    $user->email = "elisangela.monte@gmail.com";
    $user->password = password_hash("123456", PASSWORD_DEFAULT);

    if($user->save()){
        echo "<h1>Usuario Cadastrador: {$user->id}</h1>";
    }else {
        echo "<h2>{$user->fail()->getMessage()}</h2>";
    }

}


/**
 * LOAD USER
 */

echo "<h1>User</h1>";

$user = (new User())->findById(55);
var_dump($user->data());


/**
 * LOGIN EXEMPLO
 *
 */

echo "<h1>LOGIN</h1>";

$email ="elisangela.monte@gmail.com";
$pass = "123456";
//$pass = password_hash("12345", PASSWORD_DEFAULT);


//$login = (new User())->find("email = :e AND password = :p", "e={$email}&p={$pass}")->fetch();
$login = (new User())->find("email = :e ", "e={$email}")->fetch();

if(!$login  || !password_verify($pass, $login->password)){
    echo "<h2>Login ou senha não conferem!</h2>";
}else{
    echo "<h2>Login efetuado com sucesso.</h2>";
    var_dump($login->data());
}

/**
 * TESTE HASH
 */


echo "<h1>INFO AND IF REHASH</h1>";

var_dump(
    password_get_info($user->password),
    password_needs_rehash($user->password, PASSWORD_DEFAULT),
    password_needs_rehash($user->password, PASSWORD_DEFAULT, ["cost"=>8]), //mudando a hash da senha

);

$user->password = password_hash($pass, PASSWORD_DEFAULT, ["cost"=>8]);
$user->save();





