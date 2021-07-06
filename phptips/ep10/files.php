<?php

require __DIR__."/vendor/autoload.php";


$updaload = new \CoffeeCode\Uploader\File("storage", "file");
$files = $_FILES;
if(!empty($files["file"])){
    $file = $files["file"];

    if(empty($file["type"]) || !in_array($file["type"], $updaload::isAllowed())){
        echo "<p>Selecione um arquivo válido</p>";
    }else{
       $updaloaded = $updaload->upload($file, pathinfo($file["name"], PATHINFO_FILENAME));
       echo "<a target='_blank' href='{$updaloaded}'>Acessar Arquivo</a>";
    }

}

?>

<form action="" method="post" enctype="multipart/form-data">
    <h1>Send File:</h1>
    <input type="file"  name="file" "/>
    <button>Enviar</button>

</form>

