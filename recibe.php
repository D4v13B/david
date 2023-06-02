<section class="contact container pd-80" id="contact">
   <h2 class="titulo-de-seccion">Contáctame</h2>
   <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST"  id="form" class="contact__form">
      <input type="text" name="name" placeholder="Name" >
      <input type="email" name="email"  placeholder="Email">
      <textarea name="message" placeholder="Message"></textarea>
      <div class="contact__send">
      <button type="submit" name="submit">Contactar<i class="fas fa-paper-plane"></i></button>
      </div>
   </form>
</section>

<button class="toggle" id="toggle-button">
   <i class="fas fa-hamburger"></i>
</button>

<?php

$errores = "";
$success = false;

if(isset($_POST['submit'])){
   //print_r($_POST);

   $name = $_POST['name'];
   $email = $_POST['email'];
   $message = $_POST['message'];

   //Validamos y filtramos el nombre
   if(!empty($name)){
      $name = trim($name);
      $name = filter_var($name, FILTER_SANITIZE_STRING);
      $name = stripslashes($name);
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