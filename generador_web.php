<?php
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
  <form method="post" action="creararchivo.php?caso=1">
    Creador de web:
    <br>
    <br><p1>Titulo de archivo:<p1>
    <input type="text" name="asunto"><select name="ext">
	<option value="php">.php&html</option>
	<option value="php2">.php</option>
	<option value="css">.css</option>
	<option value="txt">.txt</option>
	<!--<option value="pdf" >.pdf</option>-->
	</select>
	<br>
	<br>
	<table>
	<tr>
	<th>Estilo(solo html):</th>
	<th>Conexiones o agregado(php):</th>
	</tr>
	<tr>
	<td><textarea name="estilo" rows="5" cols="80"></textarea></td>
	<td><textarea name="agregado" rows="5" cols="30"></textarea></td>
	</tr>
	<tr>
    <td colspan="2">Contenido:</td>
	</tr>
	<tr>
    <td colspan="2" align="center"><textarea name="descripcion" rows="20" cols="112"></textarea></td>
    </tr>
	</table>
    <br><button class="button" name="estado" value="1">Crear archivo</button>
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