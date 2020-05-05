<?php
/*Variables*/
$conex="
<"."?php
"."$"."sn = 'localhost';
"."$"."un = '".$ubd."';
"."$"."pd = '".$pbd."';
/*Creador de gestor*/
"."$"."dbn = 'gestorarchivos';
"."$"."conc = mysqli_connect("."$"."sn, "."$"."un, "."$"."pd, "."$"."dbn) or die('Connection failed: ' . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf('Connect failed: %s\n', mysqli_connect_error());
    exit();
}
/*FIN*/
/*Creador de usuarios*/
"."$"."dbname = 'usuario';
"."$"."conn = mysqli_connect("."$"."sn, "."$"."un, "."$"."pd, "."$"."dbname) or die('Connection failed: ' . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf('Connect failed: %s\n', mysqli_connect_error());
    exit();
}
/*FIN*/
/*Conexion de desinstalador*/
"."$"."credb = mysqli_connect("."$"."sn, "."$"."un, "."$"."pd) or die('Connection failed: ' . mysqli_connect_error());
/*FIN*/
?".">";
/*Fin VA*/
?>