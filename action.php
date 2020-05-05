<?php
include('conexion.php');
$action= $_REQUEST['action'];
switch($action){
Case "intra":
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$query = "select * from users where email = '$usuario' and password= '$password'";
$resultset = mysqli_query($conn, $query) or die("error base de datos:". mysqli_error($conn));
$num_rows = mysqli_num_rows($resultset);
$es="1";
$id="";
$us="";
$ti="";			
if ($num_rows>0) {
 while( $archivo = mysqli_fetch_assoc($resultset) ) {

			$id=$archivo['user_id'];
			$us=$archivo['name'];
			$ti=$archivo['tip'];
}
}
			session_start();
			$_SESSION['est']='1';
			$_SESSION['use']=$us;
			$_SESSION['ti']=$id;
			$_SESSION['id']=$ti;
			header('Location: gestor_de_archivos.php');

break;
Case "cerrar":
session_start();
$_SESSION = array();
session_destroy();
header('Location: intranet.php');
break;
}
?>