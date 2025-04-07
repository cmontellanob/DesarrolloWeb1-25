<?php include("Clase.php");
session_start();
if ($_GET['figura'] == "cuadrado") {
   echo  $_SESSION['obj']->cuadrado();
} else {
  echo  $_SESSION['obj']->diagonal();
}