<?php session_start();

require("verificarsesion.php");

?>
<a href="cerrar.php">Cerrar Sesion</a>

<?php
include("conexion.php");
$sql="SELECT id,nombre FROM profesiones";

$resultado=$con->query($sql);

?>
<table style="border-collapse: collapse" border="1" >
    <thead>
        <tr>
            <th width="100px">Nombres</th>
        </tr>
    </thead>
    
 <?php 
 while($row=mysqli_fetch_array($resultado)){
    ?>
    <tr>
        <td><?php echo $row['nombre'];?></td>
        <?php  if($_SESSION['nivel']==1){?>
        <td><a href="formeditarprofesion.php?id=<?php echo $row['id'];?>">Editar</a>  <a href="deleteprofesiones.php?id=<?php echo $row['id'];?>">Eliminar</a> </td>
        <?php } ?>
    </tr>
    <?php } ?>
 </table>
<?php  if($_SESSION['nivel']==1){?>
 <a href="forminsertarprofesiones.php"> Insertar</a>
 <?php } ?>
 