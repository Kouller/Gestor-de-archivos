<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<script type="text/javascript">
function confirmar()
{
var respuesta = confirm("¿Estas segudo de desinstalar el paquete?");
if(respuesta == true){
	location.href = 'desinstalar.php';
}
}
</script>
</head>
<body>

<ul>
  <li><a href="intranet.php">Inicio</a></li>
  <li><a href="#">About</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Ejemplo</a>
    <div class="dropdown-content">
      <a href="#">Ejemplo A</a>
      <a href="#">Ejemplo B</a>
      <a href="#">Ejemplo C</a>
    </div>
  </li>
  <li><a href="gestor_de_archivos.php">Gestor de archivos</a></li>
  <li><a href="action.php?action=cerrar">Cerrar</a></li>
  <li style="float:right"><a class="active" onclick="confirmar()">Desinstalar</a></li>
</ul>

</body>
</html>
