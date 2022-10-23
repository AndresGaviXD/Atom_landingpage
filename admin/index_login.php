<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Opera GX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/png" href="assets/icono.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<header>
        <div class="content-header">
            <div class="logo"><img src="assets/logo.png"></div>
        </div>

<body>
<div class="content">
    <div class="caja_login">
    <h2>Iniciar Sesión</h2>
    <form class="form" action="login.php" method="post">
        
        <label>Usuario</label>
        <input type="text" name="user" required="true" placeholder="Introduce tu usuario" />
        
        <label>Contraseña</label>
        <input type="password" name="clave" required="true" placeholder="Introduce tu password" />
        
        <input type="submit" value="Login" />
        
    </form>
    </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 100 1440 200">
  <path fill="#273036" fill-opacity="1" d="M0,96L48,133.3C96,171,192,245,288,282.7C384,320,480,320,576,293.3C672,267,768,213,864,165.3C960,117,1056,75,1152,53.3C1248,32,1344,32,1392,32L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>

    <footer>
        <center><p>Atomblack Games® Todos los derechos reservados | 2022</p></center>
    </footer>
    
</body>
</html>