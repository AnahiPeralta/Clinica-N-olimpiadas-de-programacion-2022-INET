<?php
    include_once('../Config/Conexion.php');

    $Id = $_REQUEST['Id'];
    $sql = "DELETE FROM enfermeros WHERE id = '$Id'";
    $query = mysqli_query($conexion, $sql);

    if ($query) {
        header('location: ../Index.php');
    }
?>