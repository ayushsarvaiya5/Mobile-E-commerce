<?php
session_start();
if (!isset($_SESSION["User_Id"])) {
    header("Location: ../Login Page/Login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta author="Ayush Sarvaiya, Rachit Parmar">
    <title>Payment</title>

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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!--
    - favicon logos
  -->
    <link rel="shortcut icon" href="../assets/images/logo/favicon.ico" type="image/x-icon">

    <!-- Payment page Links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="style_payment.css">
    <script src="script_payment.js"></script>

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

                        <input type="search" id="mobile" name="search" class="search-field" placeholder="Enter your Mobile name..." list="mobile_name" spellcheck="false">

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

    <main style="background-image:url('../Logo/login-background.jpg');background-size: cover; padding-left: 30px; padding-bottom: 60px; padding-top: 30px;">

        <div style="color: white; text-align: center; font-size: 50px;"><b>Payment</b></div>

        <div class="container mt-3">
            <div class="row pt-5">
                <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header">
                                <div class="row pt-3">
                                    <div class="col-2 text-center">
                                        <span style="padding:2% 8%;border:1px solid transparent;background-color: rgb(197, 191, 191);">1</span>
                                    </div>
                                    <div class="col-6">
                                        <span style="font-size:15px;font-weight:600;color:grey;text-transform: uppercase;">delivery
                                            address</span>
                                        <p>User Address</p>
                                    </div>
                                    <div class="col-4 pl-0">
                                        <button class="btn btn-primary" data-toggle="collapse" data-target="#collapseOne" id="button-hidder" style='text-transform: uppercase;'>Change</button>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseOne" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="row pl-3 ">
                                        <div class="col-6 ">
                                            <input type="radio" class="hide-for-front" name="address" checked>&nbsp;&nbsp;&nbsp;&nbsp;<span style="text-transform:uppercase;font-size:15px;">username</span>
                                        </div>
                                        <div class="col-6 text-right pr-5">
                                            <a href="#/" class="edit hide-for-front" style="text-transform: uppercase;">edit</a>
                                        </div>
                                    </div>
                                    <div class="row pl-5 pb-3 hide-for-front">
                                        <div class="col">
                                            <span>User Address</span>
                                        </div>
                                    </div>
                                    <div class="row pl-5 hide-for-front">
                                        <div class="col">
                                            <p><button style="text-transform: uppercase;padding:2% 5%;background-color: tomato;color:white;border-color:transparent; border-radius: 5px;" data-toggle="collapse" data-target="#collapseOne,#collapseTwo" id="button-hidder-1">delivery here</button></p>
                                        </div>
                                    </div>
                                    <div class="container show-for-front">
                                        <div class="row pl-3 ">
                                            <input type="radio" checked>&nbsp;&nbsp;&nbsp;&nbsp;<span style="text-transform:uppercase;font-size:15px;">EDIT ADDRESS</span>
                                        </div>
                                        <div class="row pl-5 pt-3 pb-3 ">
                                            <button class="btn-primary text-white pl-4 pr-4 pt-2 pb-2" style="border-radius:10px;">Use my current location</button>
                                        </div>
                                        <div class="row pb-3">
                                            <div class="col-6 text-right pr-0">
                                                <input type="text" placeholder="NAME" style="width:90%;height:50px;" class="pl-3">
                                            </div>
                                            <div class="col-6">
                                                <input type="text" placeholder="10-digit mobile number" style="width:90%;height:50px;" class="pl-3">
                                            </div>
                                        </div>
                                        <div class="row pr-0 pb-3">
                                            <div class="col-6 text-right pr-0">
                                                <input type="text" placeholder="Pincode" style="width:90%;height:50px;" class="pl-3">
                                            </div>
                                            <div class="col-6">
                                                <input type="text" placeholder="Locality" style="width:90%;height:50px;" class="pl-3">
                                            </div>
                                        </div>
                                        <div class="row pb-3" style="padding-left:4.7%">
                                            <div class="col">
                                                <input type="text" placeholder="Address (Area and  Street)" style="width:95%;height:50px;" class="pl-3">
                                            </div>
                                        </div>
                                        <div class="row pb-3">
                                            <div class="col-6 text-right pr-0">
                                                <input type="text" placeholder="City/District/Town" style="width:90%;height:50px;" class="pl-3">
                                            </div>
                                            <div class="col-6">
                                                <input type="text" placeholder="State" style="width:90%;height:50px;" class="pl-3">
                                            </div>
                                        </div>
                                        <div class="row pr-0 pb-3">
                                            <div class="col-6 text-right pr-0">
                                                <input type="text" placeholder="Landmark (optional)" style="width:90%;height:50px;" class="pl-3">
                                            </div>
                                            <div class="col-6">
                                                <input type="text" placeholder="Alternate Phone (Optional)" style="width:90%;height:50px;" class="pl-3">
                                            </div>
                                        </div>
                                        <div class="row pl-5">
                                            <button class="btn-primary text-white pl-4 pr-4 pt-2 pb-2" style="border-radius:10px;text-transform: uppercase;font-weight: 600;">save
                                                and deliver here</button>
                                            &nbsp;&nbsp;&nbsp;<span class="pt-2 call-back"><a href="#/" style="text-transform: uppercase;">cancle</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <div class="row pt-3 pb-3">
                                        <div class="col-2 text-center">
                                            <span style="padding:2% 8%;border:1px solid transparent;background-color: rgb(197, 191, 191);">2</span>
                                        </div>
                                        <div class="col-10">
                                            <span style="font-size:15px;font-weight:600;color:grey;text-transform: uppercase;">Order
                                                Summary</span>
                                        </div>
                                    </div>
                                </div>
                                <div id="collapseTwo" class="collapse">
                                    <div class="container mt-0 pb-3">
                                        <div class="row pt-0">
                                            <div class="col-xl-0 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                                                <div class="card">
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
                                                                    <p class="data">Desert Green</p>
                                                                    <p class="data">12 GB RAM | 256 GB ROM</p>
                                                                    <p class="data">Price: &#8377;62,000</p>
                                                                    <p class="data"><a href="#/" style="font-weight:700">REMOVE</a></p>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <div class="row pb-3">
                                                                <div class="col-xl-4 col-lg-2 col-md-3 col-sm-3 col-12 pt-5 text-center">
                                                                    <img class="image" src="../Mobile_Photos/OnePlus Nord 2T/Screenshot 2024-03-10 115500.png" height="200px">
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
                                                                <div class="col-xl-8  col-lg-9 col-md-8 col-sm-8 col-8 pt-5 pt-5 pt-5">
                                                                    <p class="mobile_title"><b>OnePlus Nord 2T</b></p>
                                                                    <p class="data">Gray Shadow</p>
                                                                    <p class="data">8 GB RAM | 128 GB ROM</p>
                                                                    <p class="data">Price:&nbsp;&#8377;15,800</p>
                                                                    <p class="data"><a href="#/" style="font-weight:700">REMOVE</a></p>
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
                                                                    <p class="data">Natural Titanium</p>
                                                                    <p class="data">8 GB RAM | 256 GB ROM</p>
                                                                    <p class="data">Price:&nbsp;&#8377;1,49,000</p>
                                                                    <p class="data"><a href="#/" style="font-weight:700">REMOVE</a></p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col pr-5 text-right">
                                                                    <p style=" margin-top: 20px; margin-left: 260px;">
                                                                        <button style="text-transform: uppercase; padding:3% 8%; background-color: tomato; color:white; border-radius: 5px; border-color:transparent" data-toggle="collapse" data-target="#collapseTwo,#payment-option"><a href="payment.html" style="color: white;">Place
                                                                                Order</a></button>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <div class="row pt-3 pb-3">
                                        <div class="col-2 text-center">
                                            <span style="padding:2% 8%;border:1px solid transparent;background-color: rgb(197, 191, 191);">3</span>
                                        </div>
                                        <div class="col-10">
                                            <span style="font-size:15px;font-weight:600;color:grey;text-transform: uppercase;">Payment
                                                Options</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="collapse" id="payment-option">
                                        <div class="row">
                                            <div class="col pl-4 pb-3" id="phone-pe-hidder" style="display: inline-flex; align-items: center;">
                                                <input type="radio" name="payment-method" data-toggle="collapse" data-target="#phonepe" class="input">
                                                <img src="../Logo/phone-pe.png" style="height:30px;">
                                                <span style="margin-left: 5px;">PhonePe</span>
                                            </div>
                                        </div>
                                        <div id="phonepe" class="collapse">
                                            <div class="row pt-2">
                                                <div class="col text-center">
                                                    <p class="alert">You'll be redirected to PhonePe page, where you can
                                                        pay using
                                                        UPI, credit/debit card or wallet.</p>
                                                </div>
                                            </div>
                                            <div class="row pl-5">
                                                <div class="col">
                                                    <p>
                                                        <a href="https://www.phonepe.com/business-solutions/payment-gateway/" style="text-decoration: none; color: white;">
                                                            <button style="text-transform: uppercase;padding:1.5% 7%;background-color: tomato;color:white;border-color:transparent; border-radius: 5px;" data-toggle="collapse" data-target="#payment-option" onclick="navigation()">
                                                                continue
                                                            </button>
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col pl-4" id="debit-hidder">
                                                <p><input type="radio" name="payment-method" data-toggle="collapse" data-target="#debit">&nbsp;&nbsp;&nbsp;Credit/Debit/ATM Card</p>
                                            </div>
                                        </div>
                                        <div class="collapse" id="debit">
                                            <div class="row">
                                                <div class="col pl-5">
                                                    <p><input type="text" placeholder="Enter Card Number" class="pt-2 pb-2 pl-4 card-number" style="border-radius: 5px; border-color: black;">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-4 col-md-4  col-sm-6  col-12  pl-5">
                                                    <p><input type="date" placeholder="DD/MM/YY" class="pt-2 pb-2 pl-2 pr-2 date" style="border-radius: 5px; border-color: black;">
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-2  col-sm-3  col-12 pl-5 ">
                                                    <p><input type="text" placeholder="CVV" class="pt-2 pb-2 pl-4 cvv" style="border-radius: 5px; border-color: black;">
                                                </div>
                                                <div class="col-xl-6 pl-5 ">
                                                    <p>
                                                        <a href="../Confirmation Page/Confirmation_page.php" style="text-decoration: none; color: white;">
                                                            <button style="text-transform: uppercase; margin-top: 0%; padding:3.5% 7%;background-color: tomato; color:white; border-color:transparent; border-radius: 5px;" data-toggle="collapse" data-target="#payment-option" onclick="navigation()">
                                                                PAY &#8377;2,26,800
                                                            </button>
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col pl-4" id="net-banking-hidder">
                                                <p><input type="radio" name="payment-method" data-target="#net-banking" data-toggle="collapse">&nbsp;&nbsp;&nbsp;Net Banking</p>
                                            </div>
                                        </div>
                                        <div class="collapse" id="net-banking">
                                            <div class="row pl-4 pr-4">
                                                <div class="col-12 pb-2">
                                                    POPULAR BANKS
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-md-6 pt-3"
                                                    style="display: inline-flex; align-items: center;">
                                                    <input type="radio" name="bank" class="data1" value="hdfc">
                                                    <img src="../Logo/hdfc-logo.png" style="width: 20px;" class="data2">
                                                    <span style="margin-left: 5px;" class="data3">HDFC Bank</span>
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-md-6 pt-3"
                                                    style="display: inline-flex; align-items: center;">
                                                    <input type="radio" name="bank" class="data1" value="icici">
                                                    <img src="../Logo/ici-logo_1.png" style="width: 20px;"
                                                        class="data2">
                                                    <span style="margin-left: 5px;" class="data3">ICICI Bank</span>
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-md-6 pt-3"
                                                    style="display: inline-flex; align-items: center;">
                                                    <input type="radio" name="bank" class="data1" value="kotak">
                                                    <img src="../Logo/kotak-logo.jpeg" style="width: 20px;"
                                                        class="data2">
                                                    <span style="margin-left: 5px;" class="data3">Kotak Bank</span>
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-md-6 pt-3"
                                                    style="display: inline-flex; align-items: center;">
                                                    <input type="radio" name="bank" class="data1" value="axis">
                                                    <img src="../Logo/axis-logo.jpg" style="width: 20px;" class="data2">
                                                    <span style="margin-left: 5px;" class="data3">Axis Bank</span>
                                                </div>
                                                <div class="col-xl-4 col-lg-4 col-md-6 pt-3"
                                                    style="display: inline-flex; align-items: center;">
                                                    <input type="radio" name="bank" class="data1" value="bob">
                                                    <img src="../Logo/state-logo.png" style="width: 20px;"
                                                        class="data2">
                                                    <span style="margin-left: 5px;" class="data3">Bank of Baroda</span>
                                                </div>
                                            </div>
                                            <div class="row pt-3 pl-4">
                                                <div class="col-12">
                                                    <span>Other Bank : </span>
                                                    <span>
                                                        <select name="cars" id="cars">
                                                            <option>Select Bank</option>
                                                            <option value="Bank of India">Bank of India</option>
                                                            <option value="Punjab National Bank">Punjab National Bank</option>
                                                            <option value="State Bank of India">State Bank of India</option>
                                                            <option value="Union Bank of India">Union Bank of India</option>
                                                          </select>
                                                    </span>
                                                </div>
                                                <div class="col-12 pt-4">
                                                    <p>
                                                        <a style="text-decoration: none; color: white;">
                                                            <button id="payButton"
                                                                style="text-transform: uppercase;padding:1.5% 7%;background-color: tomato;color:white; border-color:transparent;font-weight: 600; border-radius: 5px;"
                                                                data-toggle="collapse" data-target="#payment-option">
                                                                PAY ₹2,26,800
                                                            </button>
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col pl-4" id="cash-hidder">
                                                <p><input type="radio" name="payment-method" data-toggle="collapse" data-target="#cash">&nbsp;&nbsp;&nbsp;Cash on Delivery</p>
                                                <div class="collapse" id="cash">
                                                    <a href="../Confirmation Page/Confirmation_page.php" style="text-decoration: none; color: white;">
                                                        <p class="pl-3"><button style="text-transform: uppercase;padding:1.5% 7%;background-color: tomato;color:white; border-color:transparent; font-weight: 600; border-radius: 5px;" data-toggle="collapse" data-target="#payment-option" onclick="navigation()">
                                                                confirm
                                                            </button>
                                                        </p>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 pt-4">
                    <div class="container">
                        <div class="card">
                            <div class="card-header">PRICE DETAILS</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col text-left">
                                        Price(3) :
                                    </div>
                                    <div class="col text-right" id="price">
                                        &#8377;2,26,800
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-7 text-left ">
                                        Delivery Charges :
                                    </div>
                                    <div class="col text-right" id="deliveryCharges">
                                        ₹500
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-7 text-left ">
                                        Discount <span id="displayDiscount"></span>
                                    </div>
                                    <div class="col text-right" id="discount" style="color: red;">
                                        
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col text-left">
                                        Total Amount :
                                    </div>
                                    <div class="col text-right" id="totalAmount">
                                        &#8377;2,26,800
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
                                <img src="../Logo/oneplus_logo.png" alt="oneplus_logo" class="blog-banner" width="100" height="200px">
                            </a>

                            <div class="blog-content">

                                <a href="#" class="blog-category">OnePlus</a>

                            </div>

                        </div>

                    </div>

                    <div class="footer-category-box">
                        <div class="blog-card">

                            <a href="#">
                                <img src="../Logo/Vivo-Logo.png" alt="vivo_logo" class="blog-banner" width="100" height="200px">
                            </a>

                            <div class="blog-content">

                                <a href="#" class="blog-category">Vivo</a>

                            </div>

                        </div>
                    </div>

                    <div class="footer-category-box">
                        <div class="blog-card">

                            <a href="#">
                                <img src="../Logo/samsung_logo_1.jpg" alt="samsung_logo" class="blog-banner" width="100" height="200px">
                            </a>

                            <div class="blog-content">

                                <a href="#" class="blog-category">Samsung</a>

                            </div>

                        </div>
                    </div>

                    <div class="footer-category-box">
                        <div class="blog-card">

                            <a href="#">
                                <img src="../Logo/iPhone_logo_2.jpeg" alt="iphone_logo" class="blog-banner" width="100" height="200px">
                            </a>

                            <div class="blog-content">

                                <a href="#" class="blog-category">iPhone</a>

                            </div>

                        </div>
                    </div>

                    <div class="footer-category-box">
                        <div class="blog-card">

                            <a href="#">
                                <img src="../Logo/realme-logo.webp" alt="realme-logo" class="blog-banner" width="100" height="200px" style="border: 2px solid white;">
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