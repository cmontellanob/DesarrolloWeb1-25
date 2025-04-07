<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            flex-direction: row;
            justify-content: center;
        }
        div{
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            padding: 20px;
            background-color: #404040;
        }
        button.izq{
            display: flex;
            justify-content: flex-start;
            align-items: center;
            background-color: #404040;
            text-decoration: none;
            color:white;
            width: 100px;
            height: 30px;
            border: none;
        }

        div nav{
            color:white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            border-bottom: 2px solid red;
            margin-bottom: 10px;
            
        }
        p{
            margin: 5px auto;
        }
        h5{
            margin: 0px auto;
        }
        img{
            width: 20px;
        }

        nav.contenido{
            display: flex;
            width: 900px;
            background-color: #D9D9D9 ;
            flex-direction: column;


        }
        div.confi{
            display: flex;
            background-color: #D9D9D9 ;
            flex-direction: row-reverse;
            border-bottom: 1px solid #858181;

        }
        div.menu{
            margin-top: 50px;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            background-color: #D9D9D9 ;
        }

        button{
            margin-left: 10px;
            height: 100px;
            width: 100px;
        }
        button:hover{
            background-color: #C60000 ;
            color: white;
        }
        a{
            text-decoration: none; 
        }



    </style>
</head>
<body>
    <?php include("conexion.php");
    $sql="SELECT id,nombrecompleto,cu FROM usuarios" ;
    $resultado=$con->query($sql);
    ?>
    <div>
        <nav>
            <img src="image/Avatar.png" alt="Avatar" style="width: 100px;" class="usuario" >
            <?php 
            $row=mysqli_fetch_array($resultado)
            ?>
            <h5><?php echo $row['nombrecompleto'];?></h5>
            <p><?php echo $row['cu'];?></p>
            <h5>Repositorio: github.com</h5>
        </nav>

        <a href="inicio.php"><button class="izq"><img src="image/inicio.png" alt="inicio" > Inicio</button></a>
        <a href="pregunta2.html"><button class="izq"><img src="image/clientes.png" alt="clientes">Clientes</button></a>
        <button class="izq"><img src="image/items.png" alt="items">Items</button>
        <a href="pregunta4.php"><button class="izq"><img src="image/Prestamos.png" alt="prestamos">Prestamos</button></a>
        <button class="izq"><img src="image/Usuarios.png" alt="usuarios">Usuarios</button>
    </div>

    <nav class="contenido">
        <div class="confi">
            <a href="salir.php"><img src="image/Salir.png" alt="salir" style="width: 15px;"></a> 
            <img src="image/configurar.png" alt="configurar" style="width: 15x;">
        </div >
            <div class="menu">
                <a href="pregunta2.html"><button>CLIENTES <br><img src="image/clientes.png " alt="clientes" style="width: 85px;"></button></a>
                <button>ITEMS <br> <img src="image/items.png" alt="items" style="width: 80px;"> </button>
                <a href="pregunta4.php"><button>PRESTAMOS <br>  <img src="image/Prestamos.png" alt="prestamos" style="width: 70px;"></button></a>
                <a href="login.html"><button >USUARIOS <br>  <img src="image/Usuarios.png" alt="usuarios" style="width: 80px;"> </button></a>   
            </div>
    </nav>


</body>
</html>