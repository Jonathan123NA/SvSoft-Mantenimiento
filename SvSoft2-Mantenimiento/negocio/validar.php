<?php
$usuario=$_POST['usuario'];
$password=$_POST['password'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root","","svsoft");

$consulta="SELECT*FROM usuario where usuario='$usuario' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['tipoUsuario']==1){ //Administrador
    header("location:indexAdministrador.php");

}else
if($filas['tipoUsuario']==2){ //Supervisor
header("location:indexSupervisor.php");
}
else{
?>
    
    <?php
    include("login.html");
    ?>
    <h1>ERROR EN LA AUTENTIFICACIÓN</h1>
    <?php
    
              
}
mysqli_free_result($resultado);
mysqli_close($conexion);

