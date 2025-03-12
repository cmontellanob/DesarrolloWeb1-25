<?php session_start();
echo "el valor de le contador es ".$_SESSION['contador'];
session_destroy();
?>