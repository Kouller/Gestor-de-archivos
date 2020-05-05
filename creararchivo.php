<?php
include("conexion.php");
$caso = $_REQUEST['caso'];
switch($caso){
Case 1:
$nom = $_REQUEST['asunto'];
$ext = $_REQUEST['ext'];
$estado = $_REQUEST['estado'];
if($estado=="1"){
if($ext=="php2"){
$ext1 = "php";
$ar=fopen("$nom.$ext1","a") or die("Error al crear");
/*insertar archivo en base de datos*/
/*Direccion de prueba:
C:/xampp/htdocs/pes/beta
*/
$eq1="insert into tablaarchivo values (NULL,'$nom','.$ext1','.$ext1','/$nom.$ext1','0','1')";
$tablas=mysqli_query($conc , $eq1) or die("BAD QUERY1");
/*fin*/
}
else{
$ar=fopen("$nom.$ext","a") or die("Error al crear");
/*insertar archivo en base de datos*/
if($ext==".txt"){
$eq1="insert into tablaarchivo values (NULL,'$nom','.$ext','.$ext','/$nom.$ext','0','2')";
$tablas=mysqli_query($conc , $eq1) or die("BAD QUERY1");
/*fin*/
}else{
$eq1="insert into tablaarchivo values (NULL,'$nom','.$ext','.$ext','/$nom.$ext','0','1')";
$tablas=mysqli_query($conc , $eq1) or die("BAD QUERY1");	
}
}
$des=$_REQUEST['descripcion'];
$agre=$_REQUEST['agregado'];
$esti=$_REQUEST['estilo'];

/*Simplificacion*/
$prehtml1= "
<!DOCTYPE html>
<html>
<head>
<title>W3.CSS</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
";
$prehtml2= "
</head>
<body>
";
$finhtml= "
</body>
</html> ";
$phpin = "<?php
";
$phpfi = "
?>";
/*Fin*/


switch($ext){
Case "php":
fwrite($ar,$phpin);
fwrite($ar,$agre);
fwrite($ar,$phpfi);
fwrite($ar,$prehtml1);
fwrite($ar,$esti);
fwrite($ar,$prehtml2);
fwrite($ar,$des);
fwrite($ar,$finhtml);

fclose($ar);
header("Location: gestor_de_archivos.php");
break;
Case "php2":
fwrite($ar,$phpin);
fwrite($ar,$agre);
fwrite($ar,$phpfi);
fwrite($ar,$phpin);
fwrite($ar,$des);
fwrite($ar,$phpfi);
fclose($ar);
echo "Se creo correctamente el archivo";
header("Location: gestor_de_archivos.php");
break;
Case "css":
fwrite($ar,$des);
fclose($ar);
echo "Se creo correctamente el archivo";
header("Location: gestor_de_archivos.php");
break;
case "txt":
fwrite($ar,$des);
fclose($ar);
echo "Se creo correctamente el archivo";
header("Location: gestor_de_archivos.php");
break;
/*
case "pdf":
fwrite($ar,$nom);
fwrite($ar,"/n");
fwrite($ar,$des);
echo "Se creo correctamente el archivo";
break;
*/
}
}
else{
header("Location: gestor_de_archivos.php");
}
break;
Case 2:
$est = $_REQUEST['est'];
$estado = $_REQUEST['estado'];
$nom = $_REQUEST['asunto'];
$ext = $_REQUEST['ext'];
$id = $_REQUEST['id'];
$des = $_REQUEST['desp'];
$extn = $_REQUEST['extn'];
/*Prueba de codigo
echo $nom.$id."-".$estado."-".$des;
*/
if($estado=="1"){
/*Eliminar archivo*/
unlink("$nom$ext");
unlink("$nom$extn");
/*Fin*/
if($est==1){
$ar=fopen("$nom$ext","a") or die("Error al crear");
/*insertar archivo en base de datos*/
$eq1="update tablaarchivo set Extension='$ext', Estado='$est' where ID=$id";
$tablas=mysqli_query($conc , $eq1) or die("$ext.$est");
/*fin*/
/*Reinsertar descripcion en archivo*/
fwrite($ar,$des);
fclose($ar);
echo "Se creo correctamente el archivo";
header("Location: gestor_de_archivos.php");
/*Fin*/
}else if ($est==2){
$ar=fopen("$nom$ext","a") or die("Error al crear");
/*Reinsertar descripcion en archivo*/
fwrite($ar,$des);
fclose($ar);
echo "Se creo correctamente el archivo";
header("Location: gestor_de_archivos.php");	
}
else{
$ar=fopen("$nom.txt","a") or die("Error al crear");
/*insertar archivo en base de datos*/
$eq1="update tablaarchivo set Extension='.txt',Estado='$est' where ID=$id";
$tablas=mysqli_query($conc , $eq1) or die("BAD QUERY9");
/*fin*/
/*Reinsertar descripcion en archivo*/
fwrite($ar,$des);
fclose($ar);
echo "Se creo correctamente el archivo";
header("Location: gestor_de_archivos.php");	
}
}
else{
header("Location: gestor_de_archivos.php");
}

break;
}
?>