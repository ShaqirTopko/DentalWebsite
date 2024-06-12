<?php
include "../include/sidebar.php";
?>

<section id="content" class="box">
           
        <?php
                    
            if (isset($_GET['kid'])) {
                $id = $_GET['kid'];
                $contactform = merrKontaktiId($id);
                $name = $contactform['name'];
                $surname = $contactform['surname'];
                $email = $contactform['email'];
                $phonenumber = $contactform['phonenumber'];
                $message = $contactform['message'];
            }
                if(isset($_POST['fshij'])){
                     fshijKontakti($id);
                }
                    
        ?>
        
        <form method="post" id="kontakti" class="box forma-modifikim">
            <legend>Deleting messages</legend>
            <fieldset class="form-group">
                <label class="form-label">Name:</label>
                <input disabled type="text" name="name" id="emri" value="<?php if(!empty($name)) echo $name; ?>" class="form-input"><br />
            </fieldset>
            <fieldset class="form-group">
                <label class="form-label">Surname:</label>
                <input disabled type="text" name="surname" id="mbiemri" value="<?php if(!empty($surname)) echo $surname; ?>" class="form-input"><br />
            </fieldset>
            <fieldset class="form-group">
                <label class="form-label">Email:</label>
                <input disabled type="email" name="email" id="email" value="<?php if(!empty($email)) echo $email; ?>" class="form-input"><br />
            </fieldset>
            <fieldset class="form-group">
                <label class="form-label">Phone Number:</label>
                <input disabled type="text" name="phonenumber" id="telefoni" value="<?php if(!empty($phonenumber)) echo $phonenumber; ?>" class="form-input"><br />
            </fieldset>
            <fieldset class="form-group">
                <label class="form-label">Messages:</label>
                <textarea disabled rows="7" name="message" class="form-input"><?php if (!empty($message)) echo $message; ?></textarea>
            </fieldset>
            <input type="submit" name="fshij" value="Delete" class="form-submit-delete">

            <a href="dashboard.php" class="cancel-btn">Cancel</a>
    </form>

 </section>
