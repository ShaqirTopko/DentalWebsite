<?php
function kontakti($name, $surname,$email,$phonenumber,$message)
{
    global $dbconn;
    $sql = "INSERT INTO contactform (name,surname,email,phonenumber,message) VALUES ('$name','$surname','$email','$phonenumber','$message')";
    $result = mysqli_query($dbconn, $sql);
    header("Location: contact.php");
}

function merrKontakti(){
    global $dbconn;
    $sql = "SELECT * FROM contactform";
    return mysqli_query($dbconn, $sql);
}

function merrKontaktiId($id){
    global $dbconn;
    $sql = "SELECT * FROM contactform WHERE id=$id";
    $result = mysqli_query($dbconn, $sql);
    return mysqli_fetch_assoc($result);
}

function fshijKontakti($id){
    global $dbconn;
    $sql = "DELETE FROM contactform WHERE id=$id";
    $result = mysqli_query($dbconn, $sql);
    if ($result) {
        $_SESSION['mesazhi']="Mesazhi u fshi me sukses";
        header("Location: ../dashboard-admin/dashboard.php");
    } else {
        echo "Mesazhi nuk u fshi me sukses";
    }
}
?>