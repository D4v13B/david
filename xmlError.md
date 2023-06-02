<?xml version="1.0" standalone="no"?>
        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
        <path fill="#6B95FF" d="M45.5,-57.2C57.9,-43.9,65.9,-28.5,71.3,-10.7C76.7,7.1,79.3,27.2,71.8,42.4C64.2,57.7,46.3,68,27.5,74.4C8.6,80.8,-11.3,83.2,-27.1,76.6C-42.9,69.9,-54.5,54,-64.2,37.1C-73.8,20.2,-81.5,2.3,-79.3,-14.7C-77.1,-31.6,-65.1,-47.5,-50.3,-60.3C-35.4,-73.1,-17.7,-82.9,-0.6,-82.3C16.6,-81.6,33.2,-70.5,45.5,-57.2Z" transform="translate(100 100)" /></svg>



          <section class="contact container pd-80" id="contact">
  <h2 class="titulo-de-seccion">Contáctame</h2>
  <form action="recibe.php" method="POST" class="contact__form">
      <input type="text" name="name" placeholder="Name" value="<?php 
      if(!$enviado && isset($nombre)){
        echo $nombre;
      }?>">

      <input type="email" name="email"  placeholder="Email" value="<?php 
      if(!$enviado && isset($email)){
        echo $nombre;
      }?>">

      <textarea name="message" placeholder="Message"><?php 
      if(!$enviado && isset($email)){
        echo $nombre;
      }?>"</textarea>

      <!-- <input type="submit" name="submit">Contactar<i class="fas fa-paper-plane"></i></input> -->
      
      <input type="submit" value="Contactar" name="sumbit">

      <div class="contact__send">
        <?php
            if(!empty($errores)){
              echo '<p class="contact__errors">'.$errores.'</p>';
            }else if($enviado){
              echo '<p class="contact__success">Se ha enviado correctamente</p>';
            }
        ?>
      </div>
      
  </form>
</section>






$errores = "";
$enviado;

if(isset($_POST['submit'])){
   //print_r($_POST);

   $name = $_POST['name'];
   $email = $_POST['email'];
   $message = $_POST['message'];

   //Validamos y filtramos el nombre
   if(!empty($name)){
      $name = trim($name);
      $name = filter_var($name, FILTER_SANITIZE_STRING);
   }else{
      $errores .= "Inserte su nombre por favor <br>";
   }

   //Validamos y filtramos el email

   if(!empty($email)){
      $email = filter_var($email, FILTER_SANITIZE_EMAIL);

      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
         $errores .= "Por favor ingresa un correo real";
      }
   }else{
      $errores .= "Inserte su email por favor <br>";
   }

   //Validamos y filtramos el mensaje

   if(!empty($message)){
      $message = trim($message);
      $message = stripslashes($message);
      $message = htmlspecialchars($message);
   }else{
      $errores .= "Inserte un mensaje <br>";
   }

   //Estructura del mail y envio del mismo
   if(!$errores){
      $recibe = "dbusta0215@gmail.com";
      $asunto = "Contacto de mi Portfolio";
      $mensajePreparado = "De $nombre \n";
      $mensajePreparado .= "Corre: $email \n";
      $mensajePreparado .= "Mensaje : \n $message";

      mail($recibe,$asunto,$mensajePreparado);
      $enviado = true;
   }

}

