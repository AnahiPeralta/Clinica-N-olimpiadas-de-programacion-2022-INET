<?php

    include_once('../Config/Conexion.php');

    $Id = $_POST['Id'];
    $nom = $_POST['nombre'];
    $dni = $_POST['DNI'];
    $telf = $_POST['telefono'];
    $dire = $_POST['direccion'];
    $core = $_POST['correo'];
    $area = $_POST['area'];

    $sql = "INSERT INTO medicos(nombre,DNI,telefono,direccion,correo,area)VALUES('$nom','$dni','$telf','$dire','$core','$area')";

    $query = mysqli_query($conexion,$sql);

    if ($query === TRUE) {
        header("Location: ../Index.php");
    }