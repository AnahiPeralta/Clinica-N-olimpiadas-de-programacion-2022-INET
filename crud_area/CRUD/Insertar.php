<?php

    include_once('../Config/Conexion.php');

    $Id = $_POST['id'];
    $des = $_POST['descripcion'];
    $ubi = $_POST['ubicacion'];

    $sql = "INSERT INTO area(descripcion,ubicacion)VALUES('$des','$ubi')";

    $query = mysqli_query($conexion,$sql);

    if ($query === TRUE) {
        header("Location: ../Index.php");
    }