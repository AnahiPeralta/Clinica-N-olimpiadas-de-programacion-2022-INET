<?php
    include_once('../Config/Conexion.php');

    $Id = $_REQUEST['Id'];
    $sql = "DELETE FROM citasmedicas WHERE id = '$Id'";
    $query = mysqli_query($conexion, $sql);

    if ($query) {
        header('location: ../index2.php');
    }
?>