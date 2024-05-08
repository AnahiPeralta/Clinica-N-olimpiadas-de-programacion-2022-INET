<?php 

    include_once("../Config/Conexion.php");

    $Id = $_POST['Id'];
    $des = $_POST['descripcion'];
    $ubi = $_POST['ubicacion'];

    $sql = "UPDATE area SET ubicacion='$ubi', descripcion='$des' WHERE id='$Id'";

    $query = mysqli_query($conexion, $sql);

    if ($query) {
        header('Location: ../Index.php');
    }

?>