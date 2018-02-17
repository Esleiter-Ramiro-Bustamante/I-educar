<?php
include '../config/conexion.php';
if (!isset($_SESSION['nick'])) {
  header('location:../'); //si la variable de sesion no existe
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Proyecto</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/materialize.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link  href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.css" rel="stylesheet" >  


        <style media="screen">
         header, main, footer {
      padding-left: 300px;
    }
    .button-collpase{
        display:none;
    }
    @media only screen and (max-width : 992px) {
      header, main, footer {
        padding-left: 0;
      }
      .button-collpase{
        display:inherit;
    }
    }
       </style>
       
       
       
    </head>
    <body>
    <main>

    <?php 
    if ($_SESSION['nivel']=='ADMINISTRADOR') {
     include 'menu_admin.php';
    }else{
   include 'menu_asesor.php';

    }

     
    ?>    


