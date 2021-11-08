<?php

    $direcciones = $_POST['direccion'];
    $nombre = $_POST['nombre'];

    $direccion_to_db = implode(" ", $direcciones);

    $direccion_to_view = explode(" ", $direccion_to_db);

    echo "<input type='text' name='name' value='$nombre'>";
    foreach ($direcciones as $direccion) {

        echo "<input type='text' name='ireccion[]' value='$direccion'>";
    }

    die();

    ?>