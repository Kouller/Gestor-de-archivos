<?php
$usad = $_REQUEST['usad'];
$pdad = $_REQUEST['pdad'];
$ubd = $_REQUEST['ubd'];
$pbd = $_REQUEST['pbd'];
/*Crear conexion*/
$servername = 'localhost';
$username = $ubd;
$password = $pbd;
$credb = new mysqli($servername,$username,$password);
/*Crear Base usuarios*/
if($credb->connect_error){
	die("Conexion fallida: ". $credb->connect_error);
}
$sql="create database usuario";
if($credb->query($sql)===true){
	echo "La base de datos creada correctamemte";
}
else{
	die("Error al crear la base de datos: ". $credb->error);
}
$creta = new mysqli($servername,$username,$password,'usuario');
$sql1="CREATE TABLE users (
  user_id int(10) AUTO_INCREMENT PRIMARY KEY,
  name varchar(50) NOT NULL,
  email varchar(60) NOT NULL,
  password varchar(60) NOT NULL,
  picture varchar(250) NOT NULL,
  created datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  tip int(3) NOT NULL,
  bdcod int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1
";
if($creta->query($sql1)===true){
	echo "La tabla se creo correctamente";
}
else{
	die("Error al crear la tabla: ". $creta->error);
}
date_default_timezone_set('America/Lima');
$fecha_actual=date("Y-m-d H:i:s");
$sql2="insert into users values(NULL,'$usad','$usad','$pdad','0','$fecha_actual','0','0')";
if($creta->query($sql2)===true){
	echo "Se inserto la fila.";
}
else{
	die("Error al insertar la fila: ". $creta->error);
}
/*FIN Crear Base usuarios*/

/*Crear Base gestor*/
if($credb->connect_error){
	die("Conexion fallida: ". $credb->connect_error);
}
$sql="create database gestorarchivos";
if($credb->query($sql)===true){
	echo "La base de datos creada correctamemte";
}
else{
	die("Error al crear la base de datos: ". $credb->error);
}
$cretg = new mysqli($servername,$username,$password,'gestorarchivos');
$sql3="CREATE TABLE tablaarchivo (
  ID int(11) AUTO_INCREMENT PRIMARY KEY,
  Nombre varchar(50) NOT NULL,
  Extension varchar(5) NOT NULL,
  Exa varchar(5) DEFAULT NULL,
  Ubicacion varchar(50) NOT NULL,
  Jerarquia int(2) NOT NULL,
  Estado int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1
";
if($cretg->query($sql3)===true){
	echo "La tabla se creo correctamente";
}
else{
	die("Error al crear la tabla: ". $cretg->error);
}
/*Insertamos archivos importantes*/
$sql4="insert into tablaarchivo values(NULL,'conexion','.php','.php','/conexion.php','1','1')";
$sql5="insert into tablaarchivo values(NULL,'creararchivo','.php','.php','/creararchivo.php','1','1')";
$sql6="insert into tablaarchivo values(NULL,'editor','.php','.php','/editor.php','1','1')";
$sql7="insert into tablaarchivo values(NULL,'generador_web','.php','.php','/generador_web.php','1','1')";
$sql8="insert into tablaarchivo values(NULL,'gestor_de_archivos','.php','.php','/gestor_de_archivos.php','1','1')";
$sql9="insert into tablaarchivo values(NULL,'cabecera','.php','.php','/cabecera.php','1','1')";
$sql10="insert into tablaarchivo values(NULL,'fecha','.php','.php','/fecha.php','1','1')";
/*Ejecutamos*/
$cretg->query($sql4);
$cretg->query($sql5);
$cretg->query($sql6);
$cretg->query($sql7);
$cretg->query($sql8);
$cretg->query($sql9);
$cretg->query($sql10);
if($cretg->query($sql4)===true){
	echo "Se inserto la fila.";
}
else{
	die("Error al insertar la fila: ". $creta->error);
}
/*FIN Crear Base gestor*/
include('desempaquetar.php');
$con=fopen("conexion.php","a") or die("Error al crear");
fwrite($con,$conex);
fclose($con);
unlink("index.php");
unlink("indexbd.php");
unlink("desempaquetar.php");
    function rmDir_rf($carpeta)
    {
      foreach(glob($carpeta . "/*") as $archivos_carpeta){             
        if (is_dir($archivos_carpeta)){
          rmDir_rf($archivos_carpeta);
        } else {
        unlink($archivos_carpeta);
        }
      }
      rmdir($carpeta);
     }
$carpeta="css";
rmDir_rf($carpeta);
unlink("generador.php");
header('Location: gestor_de_archivos.php');

/*FIN Crear conexion*/
?>