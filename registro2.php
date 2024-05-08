<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style-registro.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;600;800&family=Bebas+Neue&family=Montserrat:ital,wght@0,600;0,800;0,900;1,500;1,800&family=Open+Sans:ital,wght@0,300;0,500;0,800;1,500;1,600&family=Prata&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400&family=Sorts+Mill+Goudy&display=swap" rel="stylesheet">
</head>

<body>
    
  <div class="form-container">
            <div class="login-box">
                    <img src="img/logo.png" class="avatar" alt="Avatar Image">
                    <h1>Regístrate</h1>
             
       <form action="validaregistro.php" method="POST">
              <label><i class=""></i>Nombre y Apellido</label>
              <input type="text" class="material-login-control" name="realname" required="" maxlength="70">
          
              <label><i class=""></i>Correo electrónico</label>
              <input type="email" class="material-login-control" name="nick" required="" maxlength="70">

              <label><i class=""></i>Contraseña</label>
              <input type="password" class="material-login-control" name="pass" required="" maxlength="70">
      
              <center><button class="btn-login" type="submit">Registrarse<i class=""></i></button></center>
          </form>
          <center> 
  <h6>¿Ya tienes una cuenta?</h6>
        <a href="index.html">
            <button class="btn-login3" type="submit"><i class=""></i> Iniciar sesión</button>
          </a></center>
    </div>  
    <div>
</body>
</html>