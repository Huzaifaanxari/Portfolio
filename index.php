<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Muhamamd Huzaifa </title>

    <!-- box icons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <!-- header design -->
    <header class="header">
      <a href="" class="logo">Portfolio</a>


      <i class="bx bx-menu" id="menu-icon"></i>

      <nav class="navbar">
        <a href="#home" class="active">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#portfolio">Projects</a>
        <a href="#contact">Contact</a>
      </nav>
    </header>

    <!-- home section design -->

    <section class="home" id="home">
      <div class="home-content">
        <h3>Hy it's me</h3>
        <h1>Muhammad Huzaifa</h1>
        <h3>and Our Services is <br> <span class="multipul-text"></span></h3>
        <p>Welcome to the digital realm where creativity meets functionality! I am Huzaifa, your dedicated web developer, passionate about crafting seamless and stunning online experiences.</p>
        <div class="social-media">
          <a target="_blank" href="https://www.facebook.com/profile.php?id=100023258590232"><i class="bx bxl-facebook"></i></a>
          <a target="_blank" href="https://twitter.com/huzaifaAyoub3"><i class="bx bxl-twitter"></i></a>
          <a target="_blank" href="https://www.instagram.com/huzaifa_anxarii_/"><i class="bx bxl-instagram-alt"></i></a>
          <a target="_blank" href="https://www.linkedin.com/in/huzaifa-ansari-683067290/"><i class="bx bxl-linkedin"></i></a>
        </div>
        <a href="cv.pdf" target="_blank" class="btn">Downlaod CV</a>
      </div>

      <div class="home-img">
        <img src="images\home.png" alt="">
      </div>
    </section>
    <!-- about section design -->
    <section class="about" id="about">
      <div class="about-img">
        <img src="images\about.png" alt="">
      </div>
      <div class="about-content">
        <h2 class="heading">About <span>Me</span></h2>
        <h3>Web Developer</h3>
        <p>I am a driven and detail-oriented web developer with a keen eye for design and a knack for turning ideas into interactive and user-friendly websites. My journey in the world of web development began with a fascination for the endless possibilities that code could bring to life.</p>
        <!-- <a href="" class="btn">Read More</a> -->
      </div>
    </section>
    <!-- services section design -->
    <section class="services" id="services">
      <h2 class="heading">Our <span>Services</span></h2>

      <div class="services-container">

        <div class="services-box">
          <i class="bx bx-code-alt"></i>
          <h3>Web Development</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione necessitatibus quibusdam debitis asperiores, illum atque ex. Hic autem vitae atque!</p>
          <!-- <a href="" class="btn">Read More</a> -->
        </div>

        <div class="services-box">
          <i class="bx bxs-paint"></i>
          <h3>Graphic Designer</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione necessitatibus quibusdam debitis asperiores, illum atque ex. Hic autem vitae atque!</p>
          <!-- <a href="" class="btn">Read More</a> -->
        </div>

        <div class="services-box">
          <i class="bx bx-bar-chart-alt"></i>
          <h3>Digitil Markiting</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione necessitatibus quibusdam debitis asperiores, illum atque ex. Hic autem vitae atque!</p>
          <!-- <a href="" class="btn">Read More</a> -->
        </div>

      </div>
    </section>
    <!-- portfolio section design -->
    <section class="portfolio" id="portfolio">
      <h2 class="heading">Latest <span>Project</span></h2>

      <div class="portfolio-container">

       <a href="http://std1440106.aptech-students.com/e-project/" target="_blank">
        <div class="portfolio-box" id="pb1">
          <img src="images/la_imperial.png" alt="" id="img1"> 
          
        </div>
       </a>

       <a href="https://github.com/Huzaifaanxari/Second_Sem_Pro" target="_blank">
        <div class="portfolio-box" id="pb2">
          <img src="images/Paper Paradise.png" alt="" id="img2">
        </div>
       </a>

       <a href="https://github.com/Huzaifaanxari/Calculator" target="_blank">
        <div class="portfolio-box" id="pb3">
          <img src="images/Calculator.png" alt="" id="img3">
        </div>
       </a>

        <a href="https://github.com/Huzaifaanxari/Weather_Project" target="_blank">
          <div class="portfolio-box" id="pb4">
            <img src="images/Weather.png" alt="" id="img4">

          </div>
        </a>

        <a href="https://github.com/Huzaifaanxari/Portfolio" target="_blank">
          <div class="portfolio-box" id="pb5">
            <img src="images/Portfolio.png" alt="" id="img5">

          </div>
        </a>

       
        

      </div>
    </section>

    <!-- contact section design -->
    <section class="contact" id="contact">
      <h2 class="heading">Contact <span>Me!</span></h2>
      <form action="sending_mail.php" method="post">
        <div class="input-box">
          <input type="text" placeholder="Full Name" name="name">
          <input type="email" placeholder="Email Address" name="email">
        </div>
        <div class="input-box">
          <input type="number" placeholder="Whatsapp Number" name="number">
          <input type="text" placeholder="Email Subject" name="subject">
        </div>
        <textarea name="textarea" id="" cols="30" rows="10" placeholder="Your Massage"></textarea>
        <input type="submit" value="send Massage" class="btn">
      </form>
    </section>
    <!-- footer design -->
    <footer class="footer">
      <div class="footer-text">
        <p>Copy &copy; 2023 by Huzaifa | All Rights Reserved.</p>
      </div>
      <div class="footer-iconTop">
        <a href="#home"><i class="bx bx-up-arrow-alt"></i></a>
      </div>
    </footer>


    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- typed js -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <!-- custom js -->
    <script src="js/script.js"></script>
  </body>
</html>
