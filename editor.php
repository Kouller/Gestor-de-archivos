<?php
$nombre = $_REQUEST['nombre'];
$id = $_REQUEST['id'];
$estado = $_REQUEST['estado'];
$ext = $_REQUEST['ext'];
$extn = $_REQUEST['extn'];
session_start();
if (isset($_SESSION['est']) and (!empty($_SESSION['est']))) {
?>
<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<body>
<br>
  <center>
  <form method="post" action="creararchivo.php?caso=2">
    Creador de web:
    <br>
    <br><p1>Titulo de archivo:<p1>
    <input type="text" name="asunto" value="<?php echo $nombre;?>" readonly>
	<br><p1>Titulo de extension:<p1>
	<input type="text" name="ext" value="<?php echo $ext;?>" readonly>
	<br>
	<input type="text" name="id" style="visibility:hidden" value="<?php echo $id;?>" readonly>
	<input type="text" name="extn" style="visibility:hidden" value="<?php echo $extn;?>" readonly>
	<!--<option value="pdf" >.pdf</option>-->
	</select>
	<?php if($ext==".txt"){
	?>
	<input type="text" name="est" style="visibility:hidden" value="<?php echo $estado;?>" readonly>
	<?php
	}else{
	?>
	<br><p1>Titulo de archivo:<p1>
	<select name="est">
	<?php 
	if($estado=="1"){
	?>
	<option value="1" selected="true">Activo</option>
	<option value="0">Inactivo</option>
	<?php
	}else{
	?>
	<option value="1">Activo</option>
	<option value="0" selected="true">Inactivo</option>
	<?php
	}
	}
	?>
	<!--<option value="pdf" >.pdf</option>-->
	</select>
	<br>
    <br>Contenido:<br>
	<?php
	$saltodelinea = "";
	$prueba = fopen("$nombre$extn","r") or die ("Error al leer");
	while(!feof($prueba)){
	$linea = fgets($prueba);
	$saltodelinea = $saltodelinea.$linea;
	?>
	<?php
}
?>
<textarea name="desp" rows="28" cols="205"><?php echo $saltodelinea; ?></textarea><br>
    <br>
    <br><button class="button" name="estado" value="1">Guardar archivo</button>
    <button class="button" name="estado" value="2">Volver</button>
  </form>
  </center>
  </body>
<div class="w3-container">
</div>
</html> 
<?php
}
else
{
	header('Location: intranet.php');
}
?>