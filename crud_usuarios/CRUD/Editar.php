<?php 

    include_once("../Config/Conexion.php");


    $id = $_POST['id'];
    $user = $_POST['user'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $pasadmin = $_POST['pasadmin'];
    $rol = $_POST['rol'];


    $sql = "UPDATE login SET user='$user', password='$password', email='$email' , pasadmin='$pasadmin' , rol='$rol' WHERE id='$id'";

    $query = mysqli_query($conexion, $sql);

    if ($query) {
        header('Location: ../Index.php');
    }

?>