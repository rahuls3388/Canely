<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Canely - Maid Service</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Lato:400,300,600,700,800' rel='stylesheet'
        type='text/css'>
    <script src="js/jquery.min.js"></script>
    <!---start-slider---->
    <link rel="stylesheet" type="text/css" href="css/slider.css" />
    <script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
    <script type="text/javascript" src="js/jquery.cslider.js"></script>
    <script type="text/javascript">
        $(function () {

            $('#da-slider').cslider({
                autoplay: true,
                bgincrement: 450
            });

        });
    </script>
    <!---//start-slider---->
    <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
    <link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });
        });
    </script>
    </head>
    <body>
        
        <div class="wrap">
        <div class="pages-top">
            <div class="logo">
                <a href="index.html">
                    <img src="images/c-logo.png" alt="" /></a>
            </div>
            <div class="h_menu4">
                <!-- start h_menu4 -->
                <a class="toggleMenu" href="#">Menu</a>
                <ul class="nav">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="aboutus.html">About Us</a></li>
                </ul>
                <script type="text/javascript" src="js/nav.js"></script>
            </div>
            <!-- end h_menu4 -->
            <div class="clear">
            </div>
        </div>
        <!-- end header_main4 -->
    </div>
        
        
        <?php
        // put your code here
        ?>
    </body>
</html>
