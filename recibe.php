<?php

$errores = "";
$success;

if(isset($_POST['submit'])){
   //print_r($_POST);

   $nombre = $_POST['name'];
   $email = $_POST['email'];
   $message = $_POST['message'];

   //Validamos y filtramos el nombre
   if(!empty($nombre)){
      $nombre = trim($nombre);
      $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
      $nombre = stripslashes($nombre);
   }else{
      $errores .= "Inserte su nombre por favor <br>";
   }

   //Validamos y filtramos el email

   if(!empty($email)){
      $email = filter_var($email, FILTER_SANITIZE_EMAIL);
   }else{
      $errores .= "Inserte su email por favor <br>";
   }

   //Validamos y filtramos el email

   if(!empty($message)){
      $message = filter_var($message, FILTER_SANITIZE_STRING);
      $message = stripslashes($message);
      $message = htmlspecialchars($message);
   }else{
      $errores .= "Inserte un mensaje por favor <br>";
   }

   //Estructura del mail y envio del mismo
   if(!$errores){
      $recibe = "moncho021509@gmail.com";
      $asunto = "Contacto de mi Portfolio";
      $mensajePreparado = "De $nombre \n";
      $mensajePreparado .= "Corre: $email \n";
      $mensajePreparado .= "Mensaje : \n $message";

      mail($recibe,$asunto,$mensajePreparado);
      $success = true;
   }

}
?>