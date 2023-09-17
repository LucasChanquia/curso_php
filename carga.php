<?php

// echo $_FILES["fichero"]["name"]."<br>";
// echo $_FILES["fichero"]["tmp_name"]."<br>";
// echo $_FILES["fichero"]["type"]."<br>";
// echo $_FILES["fichero"]["error"]."<br>";
// echo $_FILES["fichero"]["size"]."<br>";

if(mime_content_type($_FILES["fichero"]["tmp_name"])!= "image/jpeg" && mime_content_type($_FILES["fichero"]["tmp_name"])!= "image/png" ){
    echo "El tipo de fichero no es Admitido";
    exit();
}

if($_FILES["fichero"]["size"]/1024 >= 3072) {
    echo "Se excedió el limite de MB";
    exit();
}

if(!file_exists("archivo")){
    if(!mkdir("archivo",0777)){
        echo "Error al crear el directorio";
        exit();
    }
}


chmod("archivo",0777);

if(move_uploaded_file($_FILES["fichero"]["tmp_name"],"archivo/".$_FILES["fichero"]["name"])){
    echo "Archivo subido con éxito";
}else{
    echo "Error al subir el archivo";
}

?>