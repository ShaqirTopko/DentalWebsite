<?php
session_start(); // Fillon sesionin për të qenë në gjendje të aksesoni variablat e tij

// Kontrollon nëse përdoruesi është i loguar, pastaj e çlogon
if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true) {
    // Pastrohen të gjitha të dhënat e sesionit
    $_SESSION = array(); // Zbraz variablat e sesionit

    // Fshin sesionin
    if (ini_get("session.use_cookies")) { // Kontrollon nëse sesioni përdor cookies
        $params = session_get_cookie_params(); // Merr parametrat e cookie-t të sesionit
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    session_destroy(); // Shkatërron sesionin
    header('Location: login.php'); // Ridrejto përdoruesin në faqen e logimit
    exit;
} else {
    // Nëse përdoruesi nuk është i loguar, ridrejto direkt në faqen e logimit
    header('Location: login.php');
    exit;
}
?>
