<?php

function guardarArchivo(){
    if($_FILES['imgURL']['error'] === UPLOAD_ERR_OK) {
        $nombreImg = $_FILES['imgURL']['name'];
        $archivo = $_FILES['imgURL']['tmp_name'];

        $imagen = dirname(__FILE__);
        $imagen = $imagen . "/imgs/";
        $imagen = $imagen . $nombreImg;

        move_uploaded_file($archivo , $imagen);
    }
}