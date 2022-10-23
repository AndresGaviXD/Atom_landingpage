<?php
require_once 'class_login/login.class.php';
//accedemos al método singleton que es quién crea la instancia
//de nuestra clase y así podemos acceder sin necesidad de
//crear nuevas instancias, lo que ahorra consumo de recursos
$nuevoSingleton = Login::singleton_login();
 
if(isset($_POST['user']))
{
    $user1 = $_POST['user'];
    $clave1 = $_POST['clave'];
    //accedemos al método usuarios y los mostramos
    $usuario = $nuevoSingleton->login_users($user1,$clave1);
    
    if($usuario == TRUE)
    {
        header("Location:panel.php");
    }
}
?>