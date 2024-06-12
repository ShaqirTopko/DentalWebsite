<?php
include "functions.php";
include "db_connect.php";
?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="icon" type="image/x-icon" href="../images/icon.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body>

<div class="wrapper">
    <div class="navbar">
        <div class="profile">
            <div class="profile_img">
                <img src="../images/admin.png" alt="">
            </div>
            <div class="profile_info">
                <h2 class="name">Shaqir Topko</h2>
                <p class="role">Administrator</p>
            </div>
        </div>

        <ul>

            <div class="sidebar_link">
                <li>
                    <a href="../home.php">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="title_2">Home</span>
                    </a>
                </li>
            </div>   

            <div class="sidebar_link">
                <li>
                    <a href="../dashboard-admin/dashboard.php">
                        <span class="icon"><i class="fas fa-envelope"></i></span>
                        <span class="title_2">Messeages</span>
                    </a>
                </li>
            </div>    


        <div class="logout-link">  
            <div class="sidebar_link">
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-cog"></i></span>
                        <span class="title_2">Settings</span>
                    </a>
                </li>
            </div>

            <div class="sidebar_link">
                <li>
                    <a href="../logout.php">
                        <span class="icon"><i class="fas fa-power-off"></i></span>
                        <span class="title_2">Log Out</span>
                    </a>
                </li>
            </div>  
        </div>

        </ul>
    </div>
</div>