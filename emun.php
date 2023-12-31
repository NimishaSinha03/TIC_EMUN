<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'excellenciamun2023@gmail.com';
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email." . error_get_last()['message'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ExcellenciaMUN2023</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Groovin
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/groovin-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <img src="assets/img/United Nation Logo.png" width="60" height="60" class="d-inline-block align-top" alt="">
      <h1 class="logo">
        <a href="index.html">Excellencia MUN 2023</a>
      </h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
<!--           <li><a class="nav-link scrollto" href="#secretariat">Secretariat</a></li> -->
          <li><a class="nav-link scrollto " href="#committees">Committees</a></li>
          <li><a class="nav-link scrollto" href="#venue">Venue</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="https://forms.gle/eR5t4NtV9f3UMJ248">Register Now</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    
<div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/exc1.jpeg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">EXCELLENCIA MUN 2023</h2>
                <p class="animate__animated animate__fadeInUp"><b>Accelerate, Challenge, Enrich</b></p>
                <div>
                  <a href="#contact" class="btn-get-started animate__animated animate__fadeInUp scrollto">Register Now</a>
                </div>
              </div>
            </div>
          </div>
           <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(assets/img/exc2.jpeg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">4th and 5th November, 2023</h2>
                <p class="animate__animated animate__fadeInUp"><b>Excellencia Campus, Shamirpet</b></p>
                <div>
                  <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                </div>
              </div>
            </div>
          </div>

      </div>
    </div>
</div>
  </div>
  </section><!-- End Hero -->

  <main id="main">

<!-- Count Down Timer -->
 <section class="counter-section mb-0 " style="background-image: url(assets/img/bg2.jpg);">
       <i class="bi bi-calendar bi-5x"></i>
        <h3 class="l1-txt1 txt-center p-b-22">
            <b>4th & 5th November, 2023</b>
        </h3>
        <p class="txt-center m2-txt1 p-b-67">
            <h3 style="font-size:30px; ">Excellencia Campus, Shamirpet</h3>
        </p>
        <div class="container p-2 txt-center">
            <h3 class="cd-timer" id="countdown"></h3>
        </div>
</section>

    <!-- ======= About Section ======= -->
    <section class="about mt-5" id="about">
    <div class="content container">
      <div class="section-title">
          <h2 class="text-center mb-4">About Us</h2>
      </div>


<!--        <div class="container"> 
<div class="row">
    <div class="col-lg-6 col-md-6 mb-5">
      <div class="wrapper">
            <div class="card front-face">
            <img class="image" src="assets/img/exclogo.jpg">
            <div class="title">Excellencia Group</div>
            </div>
            <div class="card back-face">
            <img src="assets/img/exclogo.jpg">
            <div class="info">
                <div class="title">About Excellencia Group</div>
                <hr width="65%">
                <p>Excellencia was founded by a dedicated team of educators with the vision of unlocking the potential in every child and allowing parents to see their child's full capabilities. The mission of Excellencia is to provide a nurturing environment that fosters holistic growth, not just limited to academic success, but also in the areas of sports, arts, and personal development.</p>   
            </div>
            </div>
        </div>
     </div>

  
     <div class="col-lg-6 col-md-6 mb-5">
         <div class="wrapper">
            <div class="card front-face">
            <img class="image" src="assets/img/United Nation Logo.png">
            <div class="title">Excellencia MUN</div>
            </div>
            <div class="card back-face">
            <img src="assets/img/United Nation Logo.png">
            <div class="info">
                <div class="title">About Excellencia MUN</div>
                <hr width="65%">
                <p>Warm welcome to the maiden edition of the Excellencia Model United Nations! The Excellencia MUN is a one-of-its-kind conference being hosted by Excellencia Group of Schools and Colleges and being powered by The Indian Conclave, an edu-event youth startup. 
                   It takes us great pleasure to present to you a plethora of diverse committees created around the theme of UN Decade of Ecosystem Restoration. Join us to experience this robust choice of committees, a stellar Executive Board, and a MUN experience like no other! </p>
            </div>
         </div>
     </div>
</div>


        
    <div class="row mobile-reverse-order">
      <!-- Image 1 -->
      <div class="col-md-4 mb-4">
        <img src="assets/img/exclogo.jpg" alt="Image 1" class="img-fluid rounded-circle mx-auto d-block">
      </div>
      <!-- Article 1 -->
      <div class="col-md-8" style="margin-top: 40px;">
        <h3>About Excellencia Group</h3>
        <p>Excellencia was founded by a dedicated team of educators with the vision of unlocking the potential in every child and allowing parents to see their child's full capabilities. The mission of Excellencia is to provide a nurturing environment that fosters holistic growth, not just limited to academic success, but also in the areas of sports, arts, and personal development.</p>   
      </div>
    </div>

    <div class="row mt-5">
      <!-- Article 2 -->
      <div class="col-md-8" >
        <h3>About Excellencia MUN</h3>
        <p>Warm welcome to the maiden edition of the Excellencia Model United Nations! The Excellencia MUN is a one-of-its-kind conference being hosted by Excellencia Group of Schools and Colleges and being powered by The Indian Conclave, an edu-event youth startup. 
          It takes us great pleasure to present to you a plethora of diverse committees created around the theme of UN Decade of Ecosystem Restoration. Join us to experience this robust choice of committees, a stellar Executive Board, and a MUN experience like no other! </p>
      </div>
      <!-- Image 2 -->
      <div class="col-md-4 mb-4 img2">
        <img src="assets/img/United Nation Logo.png" alt="Image 2" width="224" height="225" class="img-fluid rounded-circle mx-auto d-block">
      </div>
    </div>

    <div class="row mobile-reverse-order mt-4">
      <!-- Image 3 -->
      <div class="col-md-4 mb-4">
        <img src="assets/img/tic loga white.png" alt="Image 3" class="img-fluid rounded-circle mx-auto d-block">
      </div>
      <!-- Article 3 -->
      <div class="col-md-8">
        <h3>About The Indian Conclave</h3>
<!--         <p>The Indian Conclave (TIC) is an edu-event youth startup registered under the Ministry of Corporate Affairs and recognized by the Startup India Initiative, Department of Promotion of Industry and Internal Trade (DPIIT), Government of India. We are a bunch of young leaders from diversified backgrounds of study who came together during the peaks of the pandemic with a vision to unite, network and empower the youth of India through holistic methods of learning. Over the past years, we have created an impact in the lives of approximately 1,00,000+ youth in multiple states across India. </p> -->
          <p>The Indian conclave is an Educational startup registered under the Ministry of Corporate Affairs and recognized by the Startup India Initiative, which aims at empowering students with knowledge in real-world scenarios and believes in closely working with educational institutions to achieve it. At The Indian Conclave, we empower youth leadership and drive the globalization of Indianness. Through comprehensive academic thinking and exceptional organizational capacity, we foster the growth of young leaders.</p>
      </div>
    </div>
    </div>
  </section>



<!-- Secretariat -->
    
<!-- <section class="secretariat" id="secretariat">
  <div class="container">
     <div class="section-title">
          <h2 class="text-center mb-4">Secretariat</h2>
      </div>
    <div class="row">
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="poster m-4">
                <img src="assets/img/tic loga white.png" alt="Atharv Poster" class="img-fluid mx-auto d-block">
                <div class="name-slot text-center mt-4" style="font-size:20px;">Atharv - Secretary General</div>
            </div>
        </div>
      
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="poster m-4">
                <img src="assets/img/tic loga white.png" alt="Chaitra Poster" class="img-fluid mx-auto d-block">
                <div class="name-slot text-center mt-4" style="font-size:20px;">Chaitra - Director General</div>
            </div>
        </div>
  
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="poster m-4">
                <img src="assets/img/tic loga white.png" alt="Pragnesh Poster" class="img-fluid mx-auto d-block">
                <div class="name-slot text-center mt-4" style="font-size:20px;">Pragnesh - Charge D'Affaires</div>
            </div>
        </div>
        
      <div class="col-md-4 col-sm-6 mb-4">
            <div class="poster m-4">
                <img src="assets/img/tic loga white.png" alt="Nandita Poster" class="img-fluid mx-auto d-block">
                <div class="name-slot text-center mt-4" style="font-size:20px;">Nandita - OC Head</div>
            </div>
        </div>
      
      <div class="col-md-4 col-sm-6 mb-4">
            <div class="poster m-4">
                <img src="assets/img/tic loga white.png" alt="Keerthana Poster" class="img-fluid mx-auto d-block">
                <div class="name-slot text-center mt-4" style="font-size:20px;">Keerthana - USG Delegate Affairs</div>
            </div>
        </div>
      <div class="col-md-4 col-sm-6 mb-4">
            <div class="poster m-4">
                <img src="assets/img/tic loga white.png" alt="Urjit Poster" class="img-fluid mx-auto d-block">
                <div class="name-slot text-center mt-4" style="font-size:20px;">Urjit - USG Design</div>
            </div>
        </div>
      <div class="col-md-4 col-sm-6 mb-4">
            <div class="poster m-4">
                <img src="assets/img/tic loga white.png" alt="Bhavish Poster" class="img-fluid mx-auto d-block">
                <div class="name-slot text-center mt-4" style="font-size:20px;">Bhavish - USG Outreach</div>
            </div>
        </div>
      <div class="col-md-4 col-sm-6 mb-4">
            <div class="poster m-4">
                <img src="assets/img/tic loga white.png" alt="Sai Preetham Poster" class="img-fluid mx-auto d-block">
                <div class="name-slot text-center mt-4" style="font-size:20px;">Sai Preetham - USG Outreach</div>
            </div>
        </div>
      <div class="col-md-4 col-sm-6 mb-4">
            <div class="poster m-4">
                <img src="assets/img/tic loga white.png" alt="Soha Poster" class="img-fluid mx-auto d-block">
                <div class="name-slot text-center mt-4" style="font-size:20px;">Soha - USG Marketing</div>
            </div>
        </div>
      <div class="col-md-4 col-sm-6 mb-4">
            <div class="poster m-4">
                <img src="assets/img/tic loga white.png" alt="Srilaasya Poster" class="img-fluid mx-auto d-block">
                <div class="name-slot text-center mt-4" style="font-size:20px;">Srilaasya - USG Marketing</div>
            </div>
        </div>
    </div>
</div>

</section> -->

<!-- ======= committee ======= -->

<section class="committees" id="committees">
  <div class="container">
   <div class="section-title">
          <h2 class="text-center mb-4">Committees</h2>
      </div>
<!--   1st -->
  <div class="row">
  <div class="col-md-4 col-sm-6 mb-4">
    <div class="card">
      <div class="card-body d-flex flex-row">
        <div>
          <h5 class="card-title font-weight-bold mb-2 text-center">United Nations Development Programme (UNDP)</h5>
        </div>
      </div>
      <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
        <img class="img-fluid mx-auto d-block" src="assets/img/undp.jpeg"
          alt="Card image cap" />
        <a href="#!">
          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
        </a>
      </div>
      <div class="card-body">
<!--         <p class="card-text">
          Agenda: Enhancing water security for ecosystem restoration in developing nations 
        </p> -->
        <div class="d-flex justify-content-center">
          <a class="btn btn-primary p-md-1 my-1" href="#"
            role="button">Background Guide</a>
        </div>
      </div>
    </div>
  </div>
<!--   2nd -->
    <div class="col-md-4 col-sm-6 mb-4">
    <div class="card">
      <div class="card-body d-flex flex-row">
        <div>
          <h5 class="card-title font-weight-bold mb-2 text-center">United Nations Environment Assembly (UNEA) </h5>
        </div>
      </div>
      <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
        <img class="img-fluid mx-auto d-block" src="assets/img/unenv.jpeg"
          alt="Card image cap" />
        <a href="#!">
          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
        </a>
      </div>
      <div class="card-body">
<!--         <p class="card-text">
          Agenda: Discussing sustainable urban planning and transportation with emphasis on air quality
        </p> -->
        <div class="d-flex justify-content-center">
          <a class="btn btn-primary p-md-1 my-1" href="#"
            role="button">Background Guide</a>
        </div>
      </div>
    </div>
  </div>

<!--   3rd -->
    <div class="col-md-4 col-sm-6 mb-4">
    <div class="card">
      <div class="card-body d-flex flex-row">
        <div>
          <h5 class="card-title font-weight-bold mb-2 text-center">Food and Agriculture Organization (FAO) </h5>
        </div>
      </div>
      <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
        <img class="img-fluid mx-auto d-block" src="assets/img/fao.jpeg"
          alt="Card image cap" />
        <a href="#!">
          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
        </a>
      </div>
      <div class="card-body">
<!--         <p class="card-text">
          Agenda: Deliberating on the innovations in AgriTech for rural development and empowering small farmers
        </p> -->
        <div class="d-flex justify-content-center">
          <a class="btn btn-primary p-md-1 my-1" href="#"
            role="button">Background Guide</a>
        </div>
      </div>
    </div>
  </div>
<!--   4th -->


    <div class="col-md-4 col-sm-6 mb-4">
    <div class="card">
      <div class="card-body d-flex flex-row">
        <div>
          <h5 class="card-title font-weight-bold mb-2 text-center">Commission on Status of Women (CSW) </h5>
        </div>
      </div>
      <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
        <img class="img-fluid mx-auto d-block" src="assets/img/women.jpeg"
          alt="Card image cap" />
        <a href="#!">
          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
        </a>
      </div>
      <div class="card-body">
<!--         <p class="card-text">
          Agenda: Situation of women in conflict zones with special focus on their protection and participation in peace-building
        </p> -->
        <div class="d-flex justify-content-center">
          <a class="btn btn-primary p-md-1 my-1" href="#"
            role="button">Background Guide</a>
        </div>
      </div>
    </div>
  </div>
<!--   5th -->
    <div class="col-md-4 col-sm-6 mb-4">
    <div class="card">
      <div class="card-body d-flex justify-content-center">
        <div>
          <h5 class="card-title font-weight-bold text-center mb-2">Lok Sabha</h5>
        </div>
      </div>
      <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
        <img class="img-fluid mx-auto d-block" src="assets/img/loksabha.jpeg"
          alt="Card image cap" />
        <a href="#!">
          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
        </a>
      </div>
      <div class="card-body">
<!--         <p class="card-text">
          Agenda: Discussing the future of the energy sector in context of privatisation and sustainable development with emphasis on Electricity Amendment Bill
        </p> -->
        <div class="d-flex justify-content-center">
          <a class="btn btn-primary p-md-1 my-1" href="#"
            role="button">Background Guide</a>
        </div>
      </div>
    </div>
  </div>


<!--   6th -->
    <div class="col-md-4 col-sm-6 mb-4">
    <div class="card">
      <div class="card-body d-flex justify-content-center">
        <div>
          <h5 class="card-title font-weight-bold text-center mb-2">Telangana Legislative Assembly</h5>
        </div>
      </div>
      <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
        <img class="img-fluid mx-auto d-block" src="assets/img/telangana.jpeg"
          alt="Card image cap" />
        <a href="#!">
          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
        </a>
      </div>
      <div class="card-body">
<!--         <p class="card-text">
          Agenda: Improving Healthcare Access in Rural Telangana: Telemedicine and Mobile Clinics
        </p> -->
        <div class="d-flex justify-content-center">
          <a class="btn btn-primary p-md-1 my-1" href="#"
            role="button">Background Guide</a>
        </div>
      </div>
    </div>
  </div>
<!--   7th -->

    <div class="col-md-4 col-sm-6 mb-4">
    <div class="card">
      <div class="card-body d-flex justify-content-center">
        <div>
          <h5 class="card-title font-weight-bold text-center mb-2">International Press</h5>
        </div>
      </div>
      <div class="bg-image hover-overlay ripple rounded-0" data-mdb-ripple-color="light">
        <img class="img-fluid mx-auto d-block" src="assets/img/ip.jpeg"
          alt="Card image cap" />
        <a href="#!">
          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
        </a>
      </div>
      <div class="card-body">
        <p class="card-text">
          
        </p>
        <div class="d-flex justify-content-center">
          <a class="btn btn-primary p-md-1 my-1" href="#"
            role="button">Study Guide</a>
        </div>
      </div>
    </div>
      </div>
    </div>
  </div>
  </section>

    
    <!--     MAP -->

    
    <br>
    <br>
    <section id="venue" >
    <h2 class="text-center mb-4"  style="color:#106eea;"><b>VENUE</b></h2>
    <div class="venue">
<iframe   src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3803.546871119916!2d78.57422437514617!3d17.576747583343042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb839f95555555%3A0xc19df84515f8aca0!2sExcellencia%20Junior%20College!5e0!3m2!1sen!2sin!4v1695044777944!5m2!1sen!2sin" width="1300" height="500" style="border:0;" allowfullscreen="" loading="lazy" 
<!--   referrerpolicy="no-referrer-when-downgrade" -->
  ></iframe>
      </div>
    <br>
  <br>
      </section>
<!--     map end -->


<!--     image background -->
    <section class="exsch" style="height:100vh;
  display:flex;
  align-items:center;
  justify-content:center;
  background-image: url(assets/img/Excellencia_image.jpg);
  background-position:center;
      padding:50px;
  color:white;
/*       width:1300 px; */
  background-size:cover;
  background-repeat:no-repeat;">
<div class="overlay" style="
  display: flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    text-align:center;
  color:black;
  text-shadow: 10px 10px 20px #C0A080;
  height:20vh;
/*   width:50%; */
  padding:20px;
/*   background-color:rgba(0,0,0,0.8) */
  font-size:48px;
  text-transform:uppercase;
  ">
        <h1 class="txt-center image_add"><b>Excellencia Campus, Shamirpet</b>
</h1>
        <h4 class="txt-center image_add" ><b>Sy. No. 1008, Upperpally Village, Leonia Road, ORR Circle, Shamirpet, Hyderabad, Telangana 500078</b>
</h4>
      </div>
</section>
<!--     image section end -->

    
    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>GALLERY</h2>
          <p>Check our gallery from the recent happenings
</p>
        </div>

        

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/gal1.jpg" class="img-fluid" alt="">
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/gal2.jpg" class="img-fluid" alt="">
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/gal3.jpg" class="img-fluid" alt="">
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/gal4.jpg" class="img-fluid" alt="">
              
            </div>
          </div>

<!--           <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/gal1.jpg" class="img-fluid" alt="">
           
            </div>
          </div>
 -->
<!--           <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/gal2.jpg" class="img-fluid" alt="">
              
            </div>
          </div> -->

<!--           <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/gal3.jpg" class="img-fluid" alt="">
              
            </div>
          </div> -->

<!--           <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/gal4.jpg" class="img-fluid" alt="">
              
            </div>
          </div>
 -->
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Section -->

    
    <!-- ======= Contact Section ======= -->

    
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>We would love to hear from you!!</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <address> Excellencia Campus, Shamirpet Sy. No. 1008, Upperpally Village, Leonia Road, ORR Circle, Shamirpet, Hyderabad, Telangana 500078
</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="bi bi-phone"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+91 9154671992">+91 9154671992 / +91 7799460800</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:excellenciamun2023@gmail.com">excellenciamun2023@gmail.com</a></p>
            </div>
          </div>

        </div>

        <div class="form" id="register">
          <form action="forms/contact.php" method="POST" role="form" class="php-email-form" data-netlify="true" name="contact" onSubmit="submit" action="/forms/contact.php">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email">
              </div>
            </div>
            <div class="form-group mt-3">
              <input action="" type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit" >Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- End Contact Section -->

<!--========  footer section =======-->

  <footer class="footer text-center text-lg-start text-white" style="background-color: #2b2a2a">
    <div class="container p-4 pb-0" style="background-color: #2b2a2a">
      <section class="">
        <div class="row">
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <img src="assets/img/United Nation Logo.png" alt="Image 1" height="224" width="225" class="image mx-auto d-block">
          </div>

<!--           <hr class="w-100 clearfix d-md-none" /> -->

          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Quick Links</h6>
            <p>
              <a class="text-white" href="#about">About</a>
            </p>
            <p>
              <a class="text-white" href="#secretariat">Secretariat</a>
            </p>
            <p>
              <a class="text-white" href="#committees">Committees</a>
            </p>
            <p>
              <a class="text-white" href="#venue">Venue</a>
            </p>
            <p>
              <a class="text-white" href="#gallery">Gallery</a>
            </p>
          </div>
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p><i class="bi bi-home mr-3"></i> Excellencia Campus, Shamirpet
Sy. No. 1008, Upperpally Village, Leonia Road, ORR Circle, Shamirpet, Hyderabad, Telangana 500078
</p>
            <p><i class="bi bi-envelope mr-3"></i> excellenciamun2023@gmail.com
</p>
            <p><i class="bi bi-phone mr-3"></i> +91 9154671992</p>
            <p><i class="bi bi-print mr-3"></i> +91 7799460800
</p>
          </div>
  

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

            <!-- teitter -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: primary"
               href="https://twitter.com/indian_conclave"
               role="button"
               ><i class="bi bi-twitter"></i ></a>
            
            <!-- Instagram -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: primary"
               href="https://www.instagram.com/the.indian.conclave/"
               role="button"
               ><i class="bi bi-instagram"></i></a>

            <!-- Linkedin -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: primary"
               href="https://www.linkedin.com/company/theindianconclave/"
               role="button"
               ><i class="bi bi-linkedin"></i
              ></a>
<!--             youtube -->
<!--             <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #0082ca"
               href="https://www.youtube.com/channel/UCWqBADvL13qruMnWCJrN30A"
               role="button"
               ><i class="bi bi-youtube"></i
              ></a> -->
              <p>Website Developed By:</p>
            <p>Nimisha Sinha  <a href="https://www.linkedin.com/in/nimisha-sinha-83148a258/" style="text-decoration: none;"><i class="bi bi-linkedin"></i></a>   <a style="text-decoration: none;" href="https://www.instagram.com/nimishasinha0303/"><i class="bi bi-instagram"></i></a></p>
            <p>Garvita Shukla   <a href="https://www.linkedin.com/in/garvita-shukla-0a1b6822b" style="text-decoration: none;"><i class="bi bi-linkedin"></i></a>   <a style="text-decoration: none;" href="https://instagram.com/shuklagarvitaa?igshid=YWYwM2I1ZDdmOQ=="><i class="bi bi-instagram"></i></a></p>
           
          </div>
        </div>
      </section>
    </div>

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      © 2023 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/"
         > "ExcellenciaMUN2023. All rights reserved."</a
        >
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
