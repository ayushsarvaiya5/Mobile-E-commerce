<?php
session_start();
if(!isset($_SESSION["User_Id"])){
header("Location: ../Login Page/Login.html");
exit(); }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta author="Ayush Sarvaiya, Rachit Parmar">
    <title>Cart</title>

    <!--
    - css link
  -->
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="../code_for_responsive.css">

    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!--
    - favicon logos
  -->
    <link rel="shortcut icon" href="../assets/images/logo/favicon.ico" type="image/x-icon">

    <!-- Cart page Links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="style_cart.css">

    <script src="script_cart.js"></script>

</head>

<body>

    <!--
    - HEADER
  -->

    <header style="margin-bottom: 0px;">

        <div class="header-top">

            <div class="container">

                <ul class="header-social-container">

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>

                </ul>

                <div class="header-alert-news">
                    <p>
                        <b>Free Shipping</b>
                        This Week Order Over - &#8377;10,000
                    </p>
                </div>

                <div class="header-top-actions">

                    <select name="currency">

                        <option value="eur">INR &#8377;</option>
                        <option value="usd">USD &dollar;</option>

                    </select>

                    <select name="language">

                        <option value="en-US">English</option>
                        <option value="es-ES">Hindi</option>

                    </select>

                </div>

            </div>

        </div>

        <div class="header-main">

            <div class="container">

                <a href="#" class="header-logo">
                    <img src="../Logo/Logo.jpeg" alt="logo" width="180" height="60">
                </a>

                <div class="header-search-container">

                    <form id="mobileForm" onsubmit="submitForm(event)">

                        <input type="search" id="mobile" name="search" class="search-field"
                            placeholder="Enter your Mobile name..." list="mobile_name" spellcheck="false">

                        <button class="search-btn" type="submit">
                            <ion-icon name="search-outline" onclick="submitForm(event)"></ion-icon>
                        </button>

                    </form>

                </div>

                <div class="header-user-actions">

                    <nav class="desktop-navigation-menu">

                        <div class="container">

                            <ul class="desktop-menu-category-list">

                                <li class="menu-category">

                                    <button class="action-btn">
                                        <ion-icon name="person-outline" class="menu-title"></ion-icon>
                                    </button>

                                    <div class="dropdown-panel-for-profile">

                                        <ul class="dropdown-panel-list">

                                            <li class="menu-title">
                                                <a href="#">Profile</a>
                                            </li>

                                            <li class="panel-list-item">
                                                <a href="../logout.php">Logout</a>
                                            </li>

                                        </ul>

                                    </div>
                                </li>

                                <li class="menu-category">
                                    <button class="action-btn">
                                        <ion-icon name="heart-outline" class="menu-title"></ion-icon>
                                        <span class="count">0</span>
                                    </button>
                                </li>

                                <li class="menu-category">
                                    <button class="action-btn">
                                        <ion-icon name="bag-handle-outline" class="menu-title"></ion-icon>
                                        <span class="count">0</span>
                                    </button>
                                </li>

                            </ul>


                        </div>

                    </nav>

                </div>

            </div>

        </div>

        <nav class="desktop-navigation-menu">

            <div class="container">

                <ul class="desktop-menu-category-list">

                    <li class="menu-category">
                        <a href="#" class="menu-title">Home</a>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Mobiles</a>

                        <div class="dropdown-panel">

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">iPhone</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">iPhone 15 Pro Max</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">iPhone 15 Pro</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">iPhone 15 Plus</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">iPhone 15</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Many More...</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img src="../Logo/iphone_logo.png" alt="iphone" id="img">
                                    </a>
                                </li>

                            </ul>

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">OnePlus</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">OnePlus 12 5G</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">OnePlus Nord 3 5G</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">OnePlus 10 Pro</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">OnePlus Nord 2T</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Many More...</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img src="../Logo/OnePlus.png" alt="One plus" id="img">
                                    </a>
                                </li>

                            </ul>

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">Samsung</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Samsung Galaxy S24</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Samsung Galaxy S23</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Samsung Galaxy M55</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Samsung Galaxy A14 5G</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Many More...</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img src="../Logo/samsung_logo_1.jpg" alt="Samsung" id="img">
                                    </a>
                                </li>

                            </ul>

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">Vivo</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Vivo V29e</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Vivo T2 Pro</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Vivo Y200 5G</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Vivo Y73</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Many More...</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">
                                        <img src="../Logo/Vivo-Logo.png" alt="vivo" id="img">
                                    </a>
                                </li>

                            </ul>

                        </div>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">About Us</a>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Services</a>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Contact Us</a>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Hot Offers</a>
                    </li>

                </ul>

            </div>

        </nav>

        <!-- -->

        <div class="mobile-bottom-navigation">

            <button class="action-btn" data-mobile-menu-open-btn>
                <ion-icon name="menu-outline"></ion-icon>
            </button>

            <button class="action-btn">
                <ion-icon name="bag-handle-outline"></ion-icon>

                <span class="count">0</span>
            </button>

            <button class="action-btn">
                <ion-icon name="home-outline"></ion-icon>
            </button>

            <button class="action-btn">
                <ion-icon name="heart-outline"></ion-icon>

                <span class="count">0</span>
            </button>

            <button class="action-btn" data-mobile-menu-open-btn>
                <ion-icon name="grid-outline"></ion-icon>
            </button>

        </div>

        <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

            <div class="menu-top">
                <h2 class="menu-title">Menu</h2>

                <button class="menu-close-btn" data-mobile-menu-close-btn>
                    <ion-icon name="close-outline"></ion-icon>
                </button>
            </div>

            <ul class="mobile-menu-category-list">

                <li class="menu-category">
                    <a href="#" class="menu-title">Home</a>
                </li>



                <li class="menu-category">
                    <a href="#" class="menu-title">About Us</a>
                </li>

                <li class="menu-category">
                    <a href="#" class="menu-title">Services</a>
                </li>

                <li class="menu-category">
                    <a href="#" class="menu-title">Contact Us</a>
                </li>

                <li class="menu-category">
                    <a href="#" class="menu-title">Hot Offers</a>
                </li>

            </ul>

            <div class="menu-bottom">

                <ul class="menu-category-list">

                    <li class="menu-category">

                        <button class="accordion-menu" data-accordion-btn>
                            <p class="menu-title">Language</p>

                            <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
                        </button>

                        <ul class="submenu-category-list" data-accordion>

                            <li class="submenu-category">
                                <a href="#" class="submenu-title">English</a>
                            </li>

                            <li class="submenu-category">
                                <a href="#" class="submenu-title">Hindi</a>
                            </li>

                        </ul>

                    </li>

                    <li class="menu-category">
                        <button class="accordion-menu" data-accordion-btn>
                            <p class="menu-title">Currency</p>
                            <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
                        </button>

                        <ul class="submenu-category-list" data-accordion>

                            <li class="submenu-category">
                                <a href="#" class="submenu-title">INR &#8377;</a>
                            </li>

                            <li class="submenu-category">
                                <a href="#" class="submenu-title">USD &dollar;</a>
                            </li>

                        </ul>
                    </li>

                </ul>

                <ul class="menu-social-container">

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>

                </ul>

            </div>

        </nav>

    </header>


    <!--
    - MAIN
  -->

    <main
        style="background-image:url('../Logo/login-background.jpg');background-size: cover; padding-left: 30px; padding-bottom: 60px;">

        <div class="container mt-0" style="margin-left: 22%">
            <div class="row pt-5">
                <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="row pt-3 pb-3">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 ">
                                    <span style="font-size:22px; font-weight:700; color:black; padding-left: 8%;">My
                                        Cart (3)</span>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12  text-right">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Deliver to : &nbsp;<input
                                        type="text" placeholder="Address" style="padding: 3px;">
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card-body">
                                <div class="row pb-3">
                                    <div class="col-xl-4  col-lg-2 col-md-3 col-sm-4 col-12 pt-5 text-center">
                                        <img class="image" src="../Mobile_Photos/OnePlus 12 5G/OnePlus_12_5G_1.jpg" height="200px">
                                        <div class="text-left">
                                            <select name="Qunatity" class="custom-select mt-2 second">
                                                <option selected>1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-10 col-md-8 col-sm-8 col-12 pt-5 pt-5">
                                        <p class="mobile_title"><b>OnePlus 12 5G</b></p>
                                        <p>Desert Green</p>
                                        <p>12 GB RAM | 256 GB ROM</p>
                                        <p>Price: &#8377;62,000</p>
                                        <p><a href="#/" style="font-weight:700">REMOVE</a></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row pb-3">
                                    <div class="col-xl-4 col-lg-2 col-md-3 col-sm-3 col-12 pt-5 text-center">
                                        <img class="image" src="../Mobile_Photos/OnePlus Nord 2T/Screenshot 2024-03-10 115500.png" height="200px">
                                        <div class="text-left">
                                            <select name="Qunatity" class="custom-select mt-2 third text-center">
                                                <option selected>1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-8  col-lg-9 col-md-8 col-sm-8 col-8 pt-5 pt-5 pt-5">
                                        <p class="mobile_title"><b>OnePlus Nord 2T</b></p>
                                        <p>Gray Shadow</p>
                                        <p>8 GB RAM | 128 GB ROM</p>
                                        <p>Price:&nbsp;&#8377;15,800</p>
                                        <p><a href="#/" style="font-weight:700">REMOVE</a></p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row pb-3 ">
                                    <div class="col-xl-4 col-lg-2 col-md-3 col-sm-3 col-12 pt-5 text-center">
                                        <img class="image" src="../Mobile_Photos/iphone 15 pro max 1/i (1) (1).png" height="200px">
                                        <div class="text-left">
                                            <select name="Qunatity" class="custom-select mt-2 first">
                                                <option selected>1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-8 col-lg-10 col-md-8 col-sm-8 col-12 pt-5">
                                        <p class="mobile_title"><b>IPhone 15 Pro Max</b></p>
                                        <p>Natural Titanium</p>
                                        <p>8 GB RAM | 256 GB ROM</p>
                                        <p>Price:&nbsp;&#8377;1,49,000</p>
                                        <p><a href="#/" style="font-weight:700">REMOVE</a></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col pr-5 text-right">
                                        <p style=" margin-top: 20px; margin-left: 260px;"><button
                                                style="text-transform: uppercase; padding:3% 8%; background-color: tomato; color:white; border-radius: 5px; border-color:transparent"
                                                data-toggle="collapse" data-target="#collapseTwo,#payment-option"><a
                                                    href="../Payment/payment.php" style="color: white;">Place Order</a></button>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>





    <!--
    - FOOTER
  -->

    <footer>

        <div class="footer-category">

            <div class="container">

                <div class="blog-container has-scrollbar">
                    <h2 class="footer-category-title">Awailable Brands:</h2>

                    <div class="footer-category-box">

                        <div class="blog-card">

                            <a href="#">
                                <img src="../Logo/oneplus_logo.png" alt="oneplus_logo" class="blog-banner" width="100"
                                    height="200px">
                            </a>

                            <div class="blog-content">

                                <a href="#" class="blog-category">OnePlus</a>

                            </div>

                        </div>

                    </div>

                    <div class="footer-category-box">
                        <div class="blog-card">

                            <a href="#">
                                <img src="../Logo/Vivo-Logo.png" alt="vivo_logo" class="blog-banner" width="100"
                                    height="200px">
                            </a>

                            <div class="blog-content">

                                <a href="#" class="blog-category">Vivo</a>

                            </div>

                        </div>
                    </div>

                    <div class="footer-category-box">
                        <div class="blog-card">

                            <a href="#">
                                <img src="../Logo/samsung_logo_1.jpg" alt="samsung_logo" class="blog-banner" width="100"
                                    height="200px">
                            </a>

                            <div class="blog-content">

                                <a href="#" class="blog-category">Samsung</a>

                            </div>

                        </div>
                    </div>

                    <div class="footer-category-box">
                        <div class="blog-card">

                            <a href="#">
                                <img src="../Logo/iPhone_logo_2.jpeg" alt="iphone_logo" class="blog-banner" width="100"
                                    height="200px">
                            </a>

                            <div class="blog-content">

                                <a href="#" class="blog-category">iPhone</a>

                            </div>

                        </div>
                    </div>

                    <div class="footer-category-box">
                        <div class="blog-card">

                            <a href="#">
                                <img src="../Logo/realme-logo.webp" alt="realme-logo" class="blog-banner" width="100"
                                    height="200px" style="border: 2px solid white;">
                            </a>

                            <div class="blog-content">

                                <a href="#" class="blog-category">Realme</a>

                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="footer-nav">

            <div class="container">

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Products</h2>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Prices drop</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">New mobiles</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Best sales</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Contact us</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Sitemap</a>
                    </li>

                </ul>

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Our Company</h2>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Delivery</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Legal Notice</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Terms and conditions</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">About us</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Secure payment</a>
                    </li>

                </ul>

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Services</h2>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Prices drop</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">New mobiles</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Best sales</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Contact us</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Sitemap</a>
                    </li>

                </ul>

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Contact</h2>
                    </li>

                    <li class="footer-nav-item flex">
                        <div class="icon-box">
                            <ion-icon name="location-outline"></ion-icon>
                        </div>

                        <address class="content">
                            Birla Vishwkarma Mahavidhyalaya,
                            Vallabh Vidhyanagar, Gujarat, INDIA, 388001
                        </address>
                    </li>

                    <li class="footer-nav-item flex">
                        <div class="icon-box">
                            <ion-icon name="call-outline"></ion-icon>
                        </div>

                        <a href="tel:+91 12345 67890" class="footer-nav-link">+91 12345 67890</a>
                    </li>

                    <li class="footer-nav-item flex">
                        <div class="icon-box">
                            <ion-icon name="mail-outline"></ion-icon>
                        </div>

                        <a href="mailto:example@gmail.com" class="footer-nav-link">galaxymobile@gmail.com</a>
                    </li>

                </ul>

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Follow Us</h2>
                    </li>

                    <li>
                        <ul class="social-link">

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                            </li>

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-twitter"></ion-icon>
                                </a>
                            </li>

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-linkedin"></ion-icon>
                                </a>
                            </li>

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                            </li>

                        </ul>
                    </li>

                </ul>

            </div>

        </div>

        <div class="footer-bottom">

            <div class="container">

                <img src="../Logo/payment.png" alt="payment method" class="payment-img">

                <p class="copyright">
                    Copyright &copy; <a href="#">Galaxy</a> all rights reserved.
                </p>

            </div>

        </div>

    </footer>


    <!--
    - js  file
  -->
    <script src="../script.js"></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
        AOS.init({
            once: true,
            duration: 1000,
        });
    </script>
</body>

</html>