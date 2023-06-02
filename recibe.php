<?php

$errores = "";
$enviado = false;

if(isset($_POST['submit'])){
   $name = $_POST['nombre'];
   $email = $_POST['email'];
   $message = $_POST['message'];

   if(empty($name)){
      $errores .= 'Inserte su nombre </br>';
   }else{
      $name = trim($name);
      $name = filter_var($name, FILTER_SANITIZE_STRING);
      $name = stripslashes($name);
   }

   if(empty($email)){
      $errores .= 'Inserte un correo </br>';
   }else{
      $email = filter_var($email, FILTER_SANITIZE_EMAIL);
      
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
         $errores .= 'Inserte un correo valido';
      }
   }

   if(empty($message)){
      $errores .= 'Escriba un mensaje </br>';
   }else{
      $email = trim($email);
      $email = htmlspecialchars($email);
      $email = stripslashes($email);
   }

   if(!$errores){
      $destino = 'dbusta0215@gmail.com';
      $asunto = "Correo de contacto de $name";
      $mensajePreparado .= "De: $name \n";
      $mensajePreparado .= "Correo de: $email \n";
      $mensajePreparado .= "Mensaje: $message";

      mail($destino, $asunto, $mensajePreparado);
      $enviado = true;
   }
}

require('index.php')
?>