<?php
    require __DIR__."/vendor/autoload.php";

use CoffeeCode\Paginator\Paginator;
use Source\Models\Post;

$post = new Post();
$page = filter_input(INPUT_GET, "page", FILTER_SANITIZE_STRIPPED);

//$paginator = new Paginator("http://localhost/phptips/ep05/?page=","Pagina", ["Primeira Página","Primeira"],  ["Ultima Página","Ultima"]);

$paginator = new Paginator("http://localhost/phptips/ep05/?page=");
$paginator->pager($post->find()->count(), "3" ,$page, "2");



$post = $post->find()->limit(2)->offset(1)->fetch(true);


if($post){
    foreach ($post as $post) {
        echo "<article class='post'><img  src='{$post->cover}'/><div><h1>{$post->title}</h1><div>{$post->descritption}</div></div></article>";
    }
}