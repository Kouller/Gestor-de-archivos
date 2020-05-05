<?php
$sqlt = "select * from temporada where Eleccion=1";
$result = mysqli_query($conn, $sqlt);
while($mostrar = mysqli_fetch_array($result)){
$tiempo = $mostrar['ID'];
$nom = $mostrar['Temp'];
}
$sqle = "select * from temporada";
$resulte = mysqli_query($conn, $sqle);
?>