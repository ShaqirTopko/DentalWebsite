<?php
include "../include/sidebar.php";

if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
    header('Location: /DentalWebsiteTest/login.php'); // Ridrejto në faqen e logimit
    exit;
}
?>

<section id="content" class="box">
            <table id="members">
                <tbody>
                    <tr>
                        <th>Name and Sername</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Message</th>
                        <th>Delete</th>
                    </tr>
                    <?php

                    $kontaktet=merrKontakti();
                    $i=0;
                    while($contactform = mysqli_fetch_assoc($kontaktet)){
                        $id=$contactform['id'];
                        if($i%2==0){echo "<tr>";}else{echo "<tr class='alt'>";}
                        $i++;
                        echo "<td>". $contactform['name'] . " " . $contactform['surname'] . "</td>";
                        echo "<td>". $contactform['email']  . "</td>";
                        echo "<td>". $contactform['phonenumber'] . "</td>";
                        echo "<td>". $contactform['message']  . "</td>";
                        echo "<td><a href='delete_contact.php?kid={$id}'class='link_delete'>Delete</a></td>";
                        echo "</tr>";
                    }

                    ?>

                </tbody>
            </table>
</section>

