<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/DB_Services/Logotipo pero png.png" type="image/x-icon">
  <title>David | Web Developer</title>
  
  <!--FONT AWESOME-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

  <!--CSS-->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header class="home" id="home">
    <div class="nav-container">

      <nav class="nav home__nav container">
        
        <a href="#" class="nav__logo FadeIn">
          <h1>David</h1>
        </a>
        
        <nav class="nav__links nav-links" id="nav-links">
          <ul class="nav__links-1 link-menu SlideDown">
            <a class="white" href="#home">Home</a>
            <a class="white" href="#skills">Habilidades</a>
            <!-- <a class="white" href="#certificates">Certificados</a> -->
            <a class="white" href="#work">Trabajos</a>
            <a class="white" href="#contact">Contacto</a>
            <!-- <i class="far fa-sun"></i> -->
          </ul>
          
          <ul class="nav__links-2 link-menu-redes">
            <a href="mailto:moncho021509@email.com">
              <i href="#"class="fas fa-envelope"></i>
            </a>
            <a href="https://wa.link/6qvk70">
              <i class="fab fa-whatsapp"></i>
            </a>
            <a href="https://github.com/ZMonchoX">
              <i class="fab fa-github-alt"></i>
            </a>
            <a href="https://www.instagram.com/db_services507/?hl=es">
              <i class="fa-brands fa-instagram"></i>
            </a>
          </ul>
        </nav>
      </nav>
    </div>
      
    <section class="presentacion flex">
      <div class="presentacion__redes display-none SlideDown">
        <a href="mailto:moncho021509@email.com">
          <i href="#"class="fas fa-envelope"></i>
        </a>
        <a href="https://wa.link/r3r7rm">
          <i class="fab fa-whatsapp"></i>
        </a>
        <a href="https://github.com/ZMonchoX">
          <i class="fab fa-github-alt"></i>
        </a>
        <a href="https://www.instagram.com/db_services507/?hl=es">
          <i class="fa-brands fa-instagram"></i>
        </a>
      </div>

      <div class="presentacion__titulos SlideDown">
        <h2>Hello I´m David</h2>
        <p class="sub">Frontend Developer</p>
        <!-- <p class="des">Junior developer & IX Designer.
          Little experience in the laboral world, but
          a lot of creativity</p> -->
        <p>Desarrollador Junior & IX Designer</p>
      </div>

      <div class="presentacion__foto" id="presentacion">
        <img src="img/e51be073435242ba26330433cc2f3ceb-su-eacute-ter-de-hombre-de-moda-para-hombre-by-vexels.png" alt="" class="foto__david">

      </div>

    </section>

  </header>

  <!--====================SKILLS==================================-->

  <main class="skills-container container pd-80 " id="skills">
    <h2 class="titulo-de-seccion">Habilidades</h2>


    <section class="skills flex">

      <div class="skills__descripcion">
        
        <h2 class="titulo-de-seccion skills__titulo">Profesionall Skills</h2>
        <!-- <p class="skills__parrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi inventore dicta hic eum ullam veritatis voluptatum magni quia rem beatae?</p> -->
        
        <div class="skills__tecnologia">
          
          <div class="skills__bar">
            <i class="fab fa-html5"><p>HTML</p></i>
            <p>8 / 10</p>
            <div class="skills__charge skills__html"></div>
          </div>

          <div class="skills__bar">
            <i class="fab fa-css3-alt"><p>CSS</p></i>
            <p>7 / 10</p>
            <div class="skills__charge skills__css"></div>
          </div>

          <div class="skills__bar">
            <i class="fab fa-sass"><p>Sass</p></i>
            <p>8 / 10</p>
            <div class="skills__charge skills__html"></div>
          </div>

          <div class="skills__bar">
            <i class="fab fa-js"><p>JavaScript</p></i>
            <p>5 / 10</p>
            <div class="skills__charge 4 skills__js" ></div>
          </div>

          <div class="skills__bar">
            <i class="fab fa-bootstrap"><p>Bootstrap</p></i>
            <p>5 / 10</p>
            <div class="skills__charge 4 skills__js" ></div>
          </div>

          <div class="skills__bar">
            <i class="fas fa-paint-roller 5"><p>IX Designer</p></i>
            <p>6 / 10</p>
            <div class="skills__charge 6 skills__ix"></div>
          </div>
          
        </div>
        
      </div>
      
      <div class="skills__img">
        <img src="img/skill-code.jpeg" class="img-shadow" alt="">
      </div>

    </section>

  </main>

  <!-- =======================CERTIFICATES====================== -->
  <section class="certificados container pd-80" id="certificates">
    <h2 class="titulo-de-seccion">Certificados</h2>

    <div class="certificados__presentation">
      <div class="certificados__diploma flex">
        <img class="certificados__img flex img-shadow" src="img/certificados/CertificadoDiseñoWeb.jpeg" alt="#" class="certificate__img">
        <img class="certificados__img flex img-shadow" src="img/certificados/IntroAlBackend-Platzi.png" alt="#" class="certificate__img">
        <img class="certificados__img flex img-shadow" src="img/certificados/certificado-JAVASE.jpg" alt="#" class="certificate__img">
      </div>
      <div class="certificados__diploma flex">
        <img class="certificados__img flex img-shadow certificate__img" src="img/certificados/certificado-POO.jpg" alt="#">
      </div>
    </div>
  </section>

  <!--=======================WORKS==============================-->
  
  <section class="work container pd-80" id="work">
    <h2 class="titulo-de-seccion">Trabajos</h2>
    <h3 class="sub">Most recent works</h3>

    <div class="work__presentation flex ">
      
      <div class="work__image">
        <img src="img/works/horario-virtual.png"  class="img-shadow" alt="">
      </div>

      <div class="work__description">
        <h3>Horario Virtual</h3>
        <p>Durante la pandemia quería facilitar el acceso a las clases virtuales y se creo un espacio dedicado con los links directos a ellas</p>

        <section class="work__botones">
          <a href="https://zmonchox.github.io/horario-v3.1/" class="work__demo">See demo<i class="fas fa-link"></i></a>
          <a href="https://github.com/ZMonchoX/horario-v3.1" class="work__repo">See repo<i class="fas fa-code"></i></a>
        </section>
      </div>
    </div>

    <div class="work__presentation flex ">
      
      <div class="work__image">
        <img src="img/works/Restaurante.png"  class="img-shadow" alt="">
      </div>

      <div class="work__description">
        <h3>Restaurante</h3>
        <p>La identidad de tu empresa en la web es importante. Se creo una página con diseño contemporáneo, elegante y minimalista para un restaurante. Se puede adaptar a cualquier tipo de negocio.</p>

        <section class="work__botones">
          <a href="https://zmonchox.github.io/Restaurante/" class="work__demo">See demo<i class="fas fa-link"></i></a>
          <a href="https://github.com/ZMonchoX/Restaurante" class="work__repo">See repo<i class="fas fa-code"></i></a>
        </section>
      </div>
    </div>

  </section>

  <!--========================CONTACT=============================-->

  <?php
  
    require('recibe.php');
  
  ?>
  
  <!--====================FOOTER==================================-->

  <footer class="footer">
    <div class="footer__brand">
      <div class="footer__david">
        
        <h2>David</h2>
        <p>Frontend Developer</p>

      </div>

      <div class="footer__links">
        <a href="#home">Home</a>
        <a href="#skills">Habilidades</a>
        <a href="#certificates">Certificados</a>
        <a href="#work">Trabajos</a>
      </div>

      <div class="footer__redes">
        <a href="mailto:moncho021509@email.com">
          <i class="fas fa-envelope"></i>
        </a>
        <a href="https://wa.link/6qvk70">
          <i class="fab fa-whatsapp"></i>
        </a>
        <a href="https://github.com/ZMonchoX">
          <i class="fab fa-github-alt"></i>
        </a>
        <a href="https://www.instagram.com/db_services507/?hl=es">
          <i class="fa-brands fa-instagram"></i>
        </a>
      </div>
    </div>

    <div class="footer__registro">
      <p>© David Bustamante | All rights reserved.</p>
    </div>
  </footer>

  <script src="js/jquery.min.js"></script>
  <script src="js/animation.js"></script>
  <script src="js/app.js"></script>

</body>
</html>