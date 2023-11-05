<?php
session_start();
require "php/views.php";
error_reporting(E_ALL);
ini_set('log_errors', 1);
ini_set('error_log', 'error.txt');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/bea2eaf9dc.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/index.css">
        <script src="js/scripts.js"></script>
        <title>Mick</title>
    </head>
    <body>
        <div class="preloader">
            <div class="loader">
                <div class="orbe" style="--index: 0"></div>
                <div class="orbe" style="--index: 1"></div>
                <div class="orbe" style="--index: 2"></div>
                <div class="orbe" style="--index: 3"></div>
                <div class="orbe" style="--index: 4"></div>
            </div>
        </div>
        <main>
            <?php require "php/header.php"; ?>
            <div class="container">
                <section class="sector1">
                    <div class="Title">
                        <h1>Mick's Webshop</h1>
                        <h3>De Plaats voor al je producten!</h3>
                    </div>
                    <div class="items item1">

                    </div>
                    <div class="items item2">

                    </div>
                    <div class="items item3">

                    </div>
                    <div class="items item4">
                        
                    </div>
                    <div class="items item5">
                        
                    </div>
                    <div class="items item6">
                    
                    </div>
                    <div class="gallery">
                        <img src="" alt="image1">
                        <img src="" alt="image2">
                        <img src="" alt="image3">
                        </div>
                    </section>
                <section class="sector2">

                </section>
                <section class="sector3">

                </section>
            </div>
        </main>
    </body>
</html>