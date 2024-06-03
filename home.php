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
        <img src="./images/img1.jpg" alt="About Us Image">
    </div>
    <div class="about-content" data-aos="fade-left">
        <h1>About Us</h1>
        <p>
            Lorem Ipsum Dolor Sit Amet Consectetur, Adipiscing Elit. Iure Sunt
            Assumenda Quaerat Fugiat Nesciunt At, Provident Quae Ipsa! Amet
            Explicabo Molestiae Perspiciatis Ut Provident Mollitia Reprehenderit
            Omnis Fuga Modi Voluptates. Lorem Ipsum Dolor Sit Amet
            Consectetur Adipiscing Elit. Quasi Nisi Doloremque Officiis Alias
            Similique Beatae Illum Necessitatibus Aliquam, Hic, Digniss
        </p>
    </div>
</div>


   
<div class="stats-container">
    <div class="stat-card" data-target="20">
        <div class="icon"><img src="./images/dentisticon.png" alt="Doctors"></div>
        <div class="number" data-number="20">0</div>
        <div class="text">Dentists</div>
    </div>
    <div class="stat-card" data-target="100">
        <div class="icon"><img src="./images/toothicon.png" alt="Patients"></div>
        <div class="number" data-number="100">0</div>
        <div class="text">Services</div>
    </div>
    <div class="stat-card" data-target="500">
        <div class="icon"><img src="./images/usericon.png" alt="Bed Facility"></div>
        <div class="number" data-number="500">0</div>
        <div class="text">Happy Clients</div>
    </div>
    <div class="stat-card" data-target="88">
        <div class="icon"><img src="./images/reservationicon.png" alt="Hospitals"></div>
        <div class="number" data-number="88">0</div>
        <div class="text">Reservations</div>
    </div>
</div>


<section class="newsletter">

        <form>
            <h3>Mos humbni kohë!</h3>
            <a href="#"><button class="button-19">Ndaj termin!</button> </a>
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