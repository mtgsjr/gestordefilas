<?php 
session_start();
unset($_SESSION['login']);
unset($_SESSION['usuario']); // Você tinha um 'unset' duplicado, então corrigi para 'unset ($_SESSION['usuario'])'
session_destroy();
header('location:index.php');
exit(); // Terminar a execução do script após o redirecionamento
?>

