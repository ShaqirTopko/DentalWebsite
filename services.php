<?php
include "include/headercolor.php";
?>

<head>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<div class=" container-services">
    <div class="services" data-aos="zoom-in-down">
        <div class="card" style="background-image: url(images/services1.jpg)"></div>
        <div class="card" style="background-image: url(images/services2.jpg)"></div>
        <div class="card" style="background-image: url(images/services3.jpg)"></div>
        <div class="card" style="background-image: url(images/services4.jpg)"></div>
        <div class="card" style="background-image: url(images/services5.jpg)"></div>
    </div>
    <div class="text-section" data-aos="fade-left">
        <h1>SERVICES</h1>
        <p>At Topko Dent, we provide a wide range of dental services for the entire family. From routine check-ups and professional cleanings to more complex treatments, our experienced team is dedicated to ensuring your oral health and comfort. We use state-of-the-art technology and personalized care to give you the best possible dental experience.</p>
    </div>
</div>


<div class="slider">
    <h2 class="slider-title">Most popular services</h2>
    <input type="radio" name="testimonial" id="t-1">
    <input type="radio" name="testimonial" id="t-2">
    <input type="radio" name="testimonial" id="t-3" checked>
    <input type="radio" name="testimonial" id="t-4">
    <input type="radio" name="testimonial" id="t-5">
    <div class="testimonials">
        <label class="item" for="t-1">
            <img src="images/zbardhim.jpg" alt="Image 1" loading="lazy">
        </label>
        <label class="item" for="t-2">
            <img src="images/dentalimplant.jpg" alt="Image 2" loading="lazy">
        </label>
        <label class="item" for="t-3">
            <img src="images/kanaltrajtim.jpg" alt="Image 3" loading="lazy">
        </label>
        <label class="item" for="t-4">
            <img src="images/rentgen.jpg" alt="Image 4" loading="lazy">
        </label>
        <label class="item" for="t-5">
            <img src="images/proteza.jpg" alt="Image 5" loading="lazy">
        </label>
    </div>
    <br/>
    <div class="dots">
        <label for="t-1"></label>
        <label for="t-2"></label>
        <label for="t-3"></label>
        <label for="t-4"></label>
        <label for="t-5"></label>
    </div>
</div>


<section class="newsletter gazeta">
    <div class="content">
        <div class="text-side" data-aos="fade-right" data-aos-duration="3000">
            <h3>How Invisalign or Clear Aligners work ?</h3>
            <p>"Invisalign or clear aligners offer a modern approach to straightening teeth through a series of custom-made, virtually invisible aligners. These aligners are designed using advanced 3D computer-imaging technology and gradually shift your teeth into place, 
                according to a plan specifically tailored for you by your orthodontist."</p>
        </div>
        <div class="video-side" data-aos="fade-left" data-aos-duration="3000">
        <iframe width="560" height="315" src="images/VIDEO.mp4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
    </div>
</section>



<div class="wrapper wrapperi">
        <h1>Our Services</h1>
             <div class="content-box">
                <div class="carda" data-aos="zoom-in" data-aos-duration="2000">
                    <i class='bx bx-plus-medical'></i>
                    <h2>Teeth whitening</h2>
                  <p>"Teeth whitening is a popular cosmetic procedure that uses bleaching agents to lighten and brighten your smile"</p>

                </div>
                <div class="carda" data-aos="zoom-in" data-aos-duration="2000">
                    <i class='bx bx-plus-medical'></i>
                    <h2>X-ray of the teeth</h2>
                   <p>"Dental X-rays are essential diagnostic tools that provide valuable information not visible during a standard dental exam."</p>
                         
                </div>
                <div class="carda" data-aos="zoom-in" data-aos-duration="2000">
                    <i class='bx bx-plus-medical'></i>

                    <h2>Dental crown</h2>
                <p>"A dental crown is a custom-made cap placed over a tooth to restore its shape, size, strength, and appearance."</p>
                         
                </div>
                <div class="carda" data-aos="zoom-in" data-aos-duration="2000">
                    <i class='bx bx-plus-medical'></i>
                    <h2>Pediatric dentistry</h2>
                    <p>"Pediatric dentistry specializes in the oral health care of children from infancy through the teenage years."</p>
                         
                </div>
                <div class="carda" data-aos="zoom-in" data-aos-duration="2000">
                    <i class='bx bx-plus-medical'></i>
                    <h2>Laser treatment</h2>
                    <p> "Laser dentistry offers a modern, less invasive approach to dental care." </p>
                         
                </div>
                <div class="carda" data-aos="zoom-in" data-aos-duration="2000">
                    <i class='bx bx-plus-medical'></i>
                    <h2>Dental implants</h2>
                    <p> "Dental implants are a durable and natural-looking solution for replacing missing teeth."</p>
                         
                </div>
             </div>
    </div>


    <div class="smile-container">
    <h1>Get started today!</h1>
    <p class="p-nalt">3 Simple steps for achieving your best smile</p>
    <div class="smile-steps" data-aos="fade-up"
     data-aos-duration="3000">
        <div class="smile-step">
            <div class="step-number">1</div>
            <img src="images/app.jpg" alt="Schedule an exam" loading="lazy">
            <p>Schedule an appointment</p>
        </div>
        <div class="smile-step" data-aos="fade-up"
     data-aos-duration="5000">
            <div class="step-number">2</div>
            <img src="images/konsult.jpg"alt="Speak with a dentist" loading="lazy">
            <p>Speak with a dentist about your goals</p>
        </div>
        <div class="smile-step" data-aos="fade-up"
     data-aos-duration="7000">
            <div class="step-number">3</div>
            <img src="images/rrugtimi.jpg"alt="Create a plan" loading="lazy">
            <p>Create a plan and start your smile journey</p>
        </div>
    </div>
    <a href="#"><button class="button-19" id="butoni1">Contact Us</button></a>
</div>


























<script>
    //Scripta per qet sllajder nalt
document.addEventListener("DOMContentLoaded", function() {
    let sliderIndex = 3; // Fillimi nga testimoneve i parë që është parazgjedhur
    const maxIndex = 5;
    const intervalTime = 3000; // Ndërrimi çdo 3000 milisekonda (3 sekonda)

    const autoSlide = () => {
        // Ndërrimi i testimoneve
        if (sliderIndex > maxIndex) {
            sliderIndex = 1; // Rikthehet te testimoneve i parë
        }
        const radioInput = document.getElementById('t-' + sliderIndex);
        if (radioInput) {
            radioInput.checked = true;
        }
        sliderIndex++;
    };

    // Nisja e ndërrimit automatik të testimoneve
    let sliderInterval = setInterval(autoSlide, intervalTime);

    // Ndërprerja e lëvizjes automatike kur përdoruesi klikon mbi ndonjë testimoneve
    document.querySelectorAll('.slider input[type="radio"]').forEach(input => {
        input.addEventListener('click', function() {
            clearInterval(sliderInterval); // Ndërpritja e intervalit
            sliderIndex = parseInt(this.id.split('-')[1]); // Përditësimi i indeksit bazuar në inputin e zgjedhur
            sliderInterval = setInterval(autoSlide, intervalTime); // Rifillimi i intervalit
        });
    });
});

    </script>


<br>
<br>
<br>



<script>
  AOS.init();
</script>





<?php
    include "include/footer.php";
?>


