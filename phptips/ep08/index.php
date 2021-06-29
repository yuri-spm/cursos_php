<?php

    require __DIR__."/vendor/autoload.php";
use CoffeeCode\Cropper\Cropper;
use Faker\Factory;

$faker = Factory::create("pt-bt");
$generate = true;

if($generate){
    for ($img = 0; $img <10; $img++){
        $faker->image(__DIR__."/images",  600, 300);
    }
}
$c = new Cropper("images/cache");
for ($image = 1; $image < 4; $image++){
    ?>
    <article>
        <h1>
            <img src="images/<?=$image ?>".jpg/>
            <img src="images/<?= $c->make("images/{$image}.jpg", 300, 300);?>".jpg/>
            <img src="images/<?= $c->make("images/{$image}.jpg", 300, 150);?>".jpg/>
        </h1>
    </article>
    <?php
        //rotina de delete
    $c->flush("2.jpg");
}