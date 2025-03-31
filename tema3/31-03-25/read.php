<?php session_start();

require("verificarsesion.php");

?>
<a href="cerrar.php">Cerrar Sesion</a>

<?php
include("conexion.php");
$orden = "personas.id";
$buscar = "";
if (isset($_GET["buscar"]))
{
    $buscar=$_GET["buscar"];
}
if  (isset($_GET['orden']))
{
    $orden = $_GET['orden'];
}
if (isset($_GET['asendente']))
{

    $asente= $_GET['asendente'];
} else
{
    $asente= "asc";
}
if (isset($_GET["pagina"]))
{
    $pagina=$_GET["pagina"];
} else
{
    $pagina=1;
}

$sql2="SELECT COUNT(*) as total FROM personas WHERE  nombres like '%$buscar%'";
$resultado2=$con->query($sql2);
$row2=mysqli_fetch_array($resultado2);
$total=$row2['total'];
$nropaginas = $total / 10;
$nropaginas = ceil($nropaginas);
$inicio = ($pagina-1) * 10;

$sql="SELECT fotografia,personas.id,nombres,apellidos,fecha_nacimiento,sexo,correo,profesiones.nombre as profesion FROM personas
      LEFT JOIN profesiones ON personas.profesion_id=profesiones.id 
      WHERE  nombres like '%$buscar%'  or apellidos like '%$buscar%' or correo like '%$buscar%' or profesiones.nombre like '%$buscar%'
      order by $orden $asente
      limit $inicio, 10  ";  

$resultado=$con->query($sql);



?>
<form action="read.php" method="get">
    <label for="buscar">Buscar</label>
    <input type="text" name="buscar" value="<?php echo $buscar?>" >
    <input type="submit" value="Buscar">
</form>


<table style="border-collapse: collapse" border="1" >
    <thead>
        <tr>
            <th >Fotografia</th>
            <th ><a href="read.php?orden=nombres&asendente=<?php echo $asente?>">Nombres</a></th>
            <th ><a href="read.php?orden=apellidos&asendente=<?php echo $asente?>">Apellidos</a></th>
            <th ><a href="read.php?orden=fecha_nacimiento&asendente=<?php echo $asente?>">Fec.Nacimiento</a></th>
            <th ><a href="read.php?orden=sexo&asendente=<?php echo $asente?>">Sexo</a></th>
            <th ><a href="read.php?orden=correo&asendente=<?php echo $asente?>">Correo</a></th>
            <th><a href="read.php?orden=profesion&asendente=<?php echo $asente?>">Profesion</a> </th>
           <?php if($_SESSION['nivel']==1){?>
            <th>Operaciones</th>
            <?php } ?>
        </tr>
    </thead>
    
 <?php 
 while($row=mysqli_fetch_array($resultado)){
    ?>
    <tr>
        <td><img src="images/<?php echo $row['fotografia'];  ?>" width="50px"></td>
        <td><?php echo $row['nombres'];?></td>
        <td><?php echo $row['apellidos'];?></td>
        <td><?php echo $row['fecha_nacimiento'];?></td>
        <td><?php echo $row['sexo'];?></td>
        <td><?php echo $row['correo'];?></td>
        <td><?php echo $row['profesion'];?></td>
        <?php if($_SESSION['nivel']==1){?>
        <td><a href="formeditar.php?id=<?php echo $row['id'];?>">Editar</a>  <a href="delete.php?id=<?php echo $row['id'];?>">Eliminar</a> </td>
        <?php } ?>
    </tr>
    <?php } ?>
 </table>
<ul style="display: flex; list-style: none; gap=5px">
<li style="width: 10px;margin:5px" ><a href="read.php?buscar=<?php echo $buscar;?>&orden=<?php echo $orden;?>&asendente=<?php echo $asente;?>">&lt&lt</a></li>  
  <li style="width: 10px;margin:5px" ><a href="read.php?pagina=<?php echo $pagina-1;?>&buscar=<?php echo $buscar;?>&orden=<?php echo $orden;?>&asendente=<?php echo $asente;?>">&lt </a></li>  
<?php for($i=1;$i<=$nropaginas;$i++){?>
    <li style="width: 10px;margin:5px"><a href="read.php?pagina=<?php echo $i;?>&buscar=<?php echo $buscar;?>&orden=<?php echo $orden;?>&asendente=<?php echo $asente;?>"><?php echo $i;?></a></li>
<?php } ?>
<li style="width: 10px;margin:5px" ><a href="read.php?pagina=<?php echo $pagina+1;?>&buscar=<?php echo $buscar;?>&orden=<?php echo $orden;?>&asendente=<?php echo $asente;?>">&gt </a></li>  
<li style="width: 10px;margin:5px" ><a href="read.php?pagina=<?php echo $nropaginas;?>&buscar=<?php echo $buscar;?>&orden=<?php echo $orden;?>&asendente=<?php echo $asente;?>">&gt&gt </a></li>  
</ul>



<?php if($_SESSION['nivel']==1){?>
 <a href="forminsertar.php"> Insertar</a>
 <?php } ?>
 