<?php 
session_start();
include ('cabecera.php');
include("conexion.php");
if(isset($_SESSION['est']) and (!empty($_SESSION['est']))) {
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

<div class="w3-container">
  <center><h2>Gestor de archivos </h2></center>
  <p>Archivos actuales disponibles:</p>

  <table class="w3-table-all">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Posición</th>
        <th>Nombre</th>
        <th>Ubicacion</th>
        <th>Estado</th>
        <th>Accion</th>
      </tr>
    </thead>
     <?php 
     $i=1;
            $sql_query = "SELECT * FROM tablaarchivo";
            $resultset = mysqli_query($conc, $sql_query) or die("error base de datos:". mysqli_error($conc));
            $num_rows = mysqli_num_rows($resultset);
            if ($num_rows>0) {
            while( $archivo = mysqli_fetch_assoc($resultset) ) {
      ?>
	  <tr class="w3-hover-green">
      <td><?php echo $i;?></td>
	   <?php
	  if($archivo ['Jerarquia']==1){
		?>
		<td><a href="#"><?php echo $archivo ['Nombre'].$archivo['Exa']; ?></a></td>
		<?php		
	  }else{
	  ?>
      <td><a href="<?php echo $archivo ['Nombre'].$archivo['Exa']; ?>"><?php echo $archivo ['Nombre'].$archivo['Exa']; ?></a></td>
	  <?php
	  }
	  ?>
      <td><?php echo $archivo ['Ubicacion']; ?></td>
      <td><?php
      if( $archivo ['Estado']=='1'){
      ?>Activo
      <?php
      } else {
		  if($archivo['Estado']=="2"){
		?>	
		S.E.
		<?php
		  }else{
      ?>Inactivo
      <?php
      }
	  }	  
      ?>
      </td>
	  <?php
	  if($archivo ['Jerarquia']==1){
		?>
		<td>Principal</td>
		<?php		
	  }else{
	  ?>
	  <td><a href="editor.php?id=<?php echo $archivo ['ID']; ?>&nombre=<?php echo $archivo ['Nombre']; ?>&ext=<?php echo $archivo ['Exa']; ?>&extn=<?php echo $archivo ['Extension']; ?>&estado=<?php echo $archivo ['Estado']; ?>">Modificar</td>
	  <?php
		}
	  ?>
    </tr>
    <?php 
    $i=$i+1;
    } 
    ?>
     </table>
      <br>
  <center>
  <form method="post" action="generador_web.php">
    <br><button class="button" name="tipo">Crear archivo</button>
  </form>
  </center>
     <!-- Prueba botones -->
    <?php
    }
    else
    {
    for($i = 1; $i <=6; $i++){
    ?>
    <tr class="w3-hover-blue">
    <td><?php echo $i;?></td>
      <td>Archivo inexistente <?php echo $i;?></td>
      <td>/</td>
      <td>-</td>
      <td>-</td>
    <tr>
    <?php
    }
    ?>
    </table>
    <br>
  <center>
  <form method="post" action="generador_web.php">
    <br><button class="button" name="tipo">Crear archivo</button>
  </form>
  </center>
    <?php
    }
    ?>

</div>

</body>
<div class="w3-container">
</div>
</html> 


<!--<HTML>
<div class="container home">    
    <h2>Tabla de Posiciones Liga A</h2>      
    <table id="data_table" class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Autor</th>
                <th>ISBN</th>   
                <th>Categoría</th>
            </tr>
        </thead>
        <tbody>
      
            <?php 
            $sql_query = "SELECT id, nombre, autor, isbn, categoria FROM libro";
            $resultset = mysqli_query($conc, $sql_query) or die("error base de datos:". mysqli_error($conc));
            while( $libro = mysqli_fetch_assoc($resultset) ) {
            ?>
               <tr id="<?php echo $libro ['id']; ?>">
               <td><?php echo $libro ['id']; ?></td>
               <td><?php echo $libro ['nombre']; ?></td>
               <td><?php echo $libro ['autor']; ?></td>
               <td><?php echo $libro ['isbn']; ?></td>   
               <td><?php echo $libro ['categoria']; ?></td>  
               </tr>
            <?php } ?>

        </tbody>
    </table>    
</div>
</HTML>
--> 
<?php
}
else
{
	header('Location: intranet.php');
}
?>