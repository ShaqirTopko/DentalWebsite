<?php
include "include/header.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Website</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>

    <div class="slide-bar">
        

        <video autoplay muted loop>
        <source src="images/VideoKlinika.mp4" type="video/mp4">
        
    </video>
    </div>


    <div class="about-section">
    <div class="about-image" data-aos="fade-right">
        <img src="./images/img1.jpg" alt="About Us Image" loading="lazy">
    </div>
    <div class="about-content" data-aos="fade-left">
        <h1>About Us</h1>
        <p>
        Welcome to Topko Dent, your trusted dental care provider. Our clinic is committed to delivering exceptional dental services in a friendly and comfortable environment. Our highly skilled and compassionate team, led by experienced professionals, utilizes the latest technology and techniques to ensure optimal oral health for all our patients. At Topko Dent, we prioritize your comfort and satisfaction,
         making every visit a positive experience. Join us in our mission to achieve and maintain healthy, beautiful smiles.
        </p>
    </div>
</div>


   
<div class="stats-container">
    <div class="stat-card" data-target="20" data-aos="zoom-in-up">
        <div class="icon"><img src="./images/dentisticon.png" alt="Doctors" loading="lazy"></div>
        <div class="number" data-number="20">0</div>
        <div class="text">Dentists</div>
    </div>
    <div class="stat-card" data-target="100" data-aos="zoom-in-up">
        <div class="icon"><img src="./images/toothicon.png" alt="Patients" loading="lazy"></div>
        <div class="number" data-number="100">0</div>
        <div class="text">Services</div>
    </div>
    <div class="stat-card" data-target="500" data-aos="zoom-in-up">
        <div class="icon"><img src="./images/usericon.png" alt="Bed Facility" loading="lazy"></div>
        <div class="number" data-number="500">0</div>
        <div class="text">Happy Clients</div>
    </div>
    <div class="stat-card" data-target="88" data-aos="zoom-in-up">
        <div class="icon"><img src="./images/reservationicon.png" alt="Hospitals" loading="lazy"></div>
        <div class="number" data-number="88">0</div>
        <div class="text">Reservations</div>
    </div>
</div>


<section class="newsletter">

        <form>
            <h3>Don't waste your time!</h3>
            <a href="contact.php"><button class="button-19">Contact Us</button></a>
        </form>
    
    </section>


    <div class="header-section">
    <h1>Our patients love us!</h1>
    <p>...and their new smiles :)</p>
</div>




    <div class="container">
        <div class="wrapper">
            <div class="wrapper-holder">
                <div id="slider-img-1"></div>
                <div id="slider-img-2"></div>
                <div id="slider-img-3"></div>
                <div id="slider-img-4"></div>
            </div>
        </div>
    </div>

  


 
</body>
</html>

<?php
    include "include/footer.php";
?>

<script src="js/script.js"></script>



<script>
AOS.init();
</script>