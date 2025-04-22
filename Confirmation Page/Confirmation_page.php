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
  <title>Confermation Page</title>

  <!--
    - css link
  -->
  <link rel="stylesheet" href="../style.css">
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

  <link rel="stylesheet" href="style_confirmation_page.css">

</head>

<body>

  <!--
    - HEADER
  -->

  <header>

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
              <!-- desktop-menu-category-list-profile -->
              <ul class="desktop-menu-category-list">

                <li class="menu-category">

                  <button class="action-btn">
                    <ion-icon name="person-outline" class="menu-title"></ion-icon>
                  </button>
                  <!-- <a href="#" class="menu-title">Mobiles</a> -->

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
                  <!-- <a href="#" class="menu-title">About Us</a> -->
                </li>

                <li class="menu-category">
                  <button class="action-btn">
                    <ion-icon name="bag-handle-outline" class="menu-title"></ion-icon>
                    <span class="count">0</span>
                  </button>
                  <!-- <a href="#" class="menu-title">About Us</a> -->
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

  <main style="background-image:url('../Logo/login-background.jpg'); background-size: cover; margin-top: 10px; padding-top: 40px; padding-bottom: 40px;">
    <div class="new_container">
      <h1 style="text-align: center; margin-bottom: 30px;">Thank you for shopping!</h1>
      <p class="success-message">Your order number is... <span id="order_no"></span></p>
      <ul class="order-details">
        <li><span>Order Details:</span> <span class="details-value"><a href="../Cart/cart.php">View Details...</a></span></li>
        <li><span>Payment Status:</span> <span class="details-value">Done ✔</span></li>
        <li><span>Estimated Delivery:</span> <span class="details-value next-up">Within 5 business days</span></li>
        <hr>
        <li class="next"><b>What's next?</b></li>
        <ul class="info-list">
          <li>● We will send confirmation of the order and information about its
            progress by email.</li>
          <li>● The order will be processed after your payment is confirmed.</li>
          <li>● In case of problems with the payment, you will receive a new link
            to renew the payment to the email address provided.</li>
        </ul>
      </ul>
      <p style="margin-top: 20px;">Please feel free to <a href="../Login Page/Contact_us.html" style="display: inline;">Contact Us</a> if you have
        any questions.</p>
      <a href="../Mobile_Shop_with_Login.php" class="button">HOME</a>
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



  <script>
    function generateOrderNumber() {
        var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        var length = 8;
        var prefix = 'MOB-';
        var orderNumber = prefix;
        for (var i = 0; i < length; i++) {
            var randomIndex = Math.floor(Math.random() * characters.length);
            orderNumber += characters[randomIndex];
        }
        return orderNumber;
    }
    
    document.addEventListener("DOMContentLoaded", function() {
        var orderSpan = document.getElementById("order_no");
        if (orderSpan) {
            orderSpan.textContent = generateOrderNumber();
        }
    });
    </script>


  <!--
    - js  file
  -->
  <script src="../script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script nomodule src="./script_signin_signup.js"></script>

</body>

</html>