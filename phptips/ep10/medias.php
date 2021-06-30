<?php

require __DIR__."/vendor/autoload.php";


$updaload = new \CoffeeCode\Uploader\Media("storage", "medias");
$files = $_FILES;
if(!empty($files["file"])){
    $file = $files["file"];

    if(empty($file["type"]) || !in_array($file["type"], $updaload::isAllowed())){
        echo "<p>Selecione uma media válida</p>";
    }else{
       $updaloaded = $updaload->upload($file, pathinfo($file["name"], PATHINFO_FILENAME));
       echo "<a target='_blank' href='{$updaloaded}'>Acessar Media</a>";
    }

}
$sended = filter_input(INPUT_GET, "sended", FILTER_VALIDATE_BOOLEAN);
if($sended && empty($files["file"])){
    echo "Selecione uma midia de ate" .ini_get("upload_max_filesize");
}
?>

<form action="?sended=true" method="post" enctype="multipart/form-data">
    <h1>Send Media:</h1>
    <input type="file"  name="file" "/>
    <button>Enviar</button>

</form>

