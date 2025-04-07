<?php session_start();

include("conexion.php");

$orden = "libros.id";
if (isset($_GET['orden']))
{
    $orden=$_GET['orden'];
}
$asc = "ASC";
if (isset($_GET['asc']))
{
    $asc=$_GET['asc'];
}

$sql = "SELECT imagen,libros.id,titulo,anio,editoriales.editorial  FROM libros
    LEFT JOIN editoriales ON libros.ideditorial=editoriales.id
    ORDER BY $orden $asc";

$resultado=$con->query($sql);
?>

<table style="border-collapse: collapse" border="1" >
    <thead>
        <tr style="background-color:blue; color:white">
            <th>imagen</th>
            <th><a href="pregunta4.php?orden=titulo&asc=<?php echo  ($orden == 'titulo' and $asc == 'ASC') ? 'DESC' : 'ASC';  ?>">titulo</a></th>
            <th><a href="pregunta4.php?orden=anio&asc=<?php echo ($orden == 'anio' and $asc == 'ASC') ? 'DESC' : 'ASC'; ?>">anio</a></th>
            <th><a href="pregunta4.php?orden=editorial&asc=<?php echo ($orden == 'editorial' and $asc == 'ASC') ? 'DESC' : 'ASC'; ?>">editorial</a></th>
            <?php if($_SESSION['nivel']==1){?>
            <th>Operaciones</th>
            <?php } ?>
        </tr>
    </thead>
    
 <?php 
 while($row=mysqli_fetch_array($resultado)){
    ?>
    <tr>
        <td><img src="images/<?php echo $row['imagen'];  ?>" ></td>
        <td><?php echo $row['titulo'];?></td>
        <td><?php echo $row['anio'];?></td>
        <td><?php echo $row['editorial'];?></td>
        <?php if($_SESSION['nivel']==1){?>
        <td> <a href="delete.php?id=<?php echo $row['id'];?>">Eliminar</a> </td>
        <?php } ?>

    </tr>
    <?php } ?>
 </table>
