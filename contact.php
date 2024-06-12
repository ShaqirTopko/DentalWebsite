<?php
include "include/headercolor.php";
?>

<?php
if (isset($_POST['send'])) {
    kontakti(
        $_POST['name'],
        $_POST['surname'],
        $_POST['email'],
        $_POST['phonenumber'],
        $_POST['message']
    );
}
?>


<div class="container contact" data-aos="zoom-in">
    <div class="contact-box">
      <div class="left">
        <img src="images/kontakt.png" style="width: 400px; height: 400px;" data-aos="fade-right" data-aos-duration="3000" loading="lazy">
      </div>
      <div class="right">
        <h2 data-aos="fade-left" data-aos-duration="3000">Appointment form</h2>
        <form method="POST" action="#" name="send" data-aos="fade-left" data-aos-duration="3000">
        <input type="text" name="name" class="field" placeholder="Name" required>
        <input type="text" name="surname" class="field" placeholder="Surname" required>
        <input type="tel" name="phonenumber" class="field" placeholder="Phone Number" required>
        <input type="email" name="email" class="field" placeholder="Email (optional)">
        <textarea placeholder="Your message for appointment..." name="message" class="field"></textarea>
        <button type="submit" class="btn" id="send" name="send" style="border-radius: 10px;">Make appointment</button>
      </form>
      </div>
    </div>
  </div>

<script>
  AOS.init();
  </script>


<?php
include "pixijs2.php";
?>


