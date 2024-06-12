<?php
session_start();
$dbconn;
dbConnection();
function dbConnection(){
    global $dbconn;
    $dbconn=mysqli_connect("localhost",'root','','webmultimedia');
    if(!$dbconn){
        die("Error connection".mysqli_error($dbconn));
    }
}

?>