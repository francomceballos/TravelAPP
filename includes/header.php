<?php

    define('BASE_URL', 'http://localhost/TravelAPP/');

    session_start();

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>TravelAPP</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/templatemo-woox-travel.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/owl.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 580 Woox Travel

https://templatemo.com/tm-580-woox-travel

-->

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="<?php echo BASE_URL; ?>index.php" style="margin-top: 15px">
                      <h2 class="logo-text text-white"> TravelAPP</h2>
                        <!-- <img src="assets/images/logo.png" alt="">-->
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="<?php echo BASE_URL; ?>index.php" class="active">Home</a></li>
                        <li><a href="deals.php">Deals</a></li>
                        <!-- user menu -->
                        <?php if(isset($_SESSION['username'])): ?>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <?php echo $_SESSION['username']; ?>
                        </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item text-dark" href="<?php echo BASE_URL; ?>users/bookings.php?id=<?php echo $_SESSION['user_id']; ?>">Your bookings</a></li>
                          <li><a class="dropdown-item text-dark" href="#">Another action</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item text-dark" href="<?php echo BASE_URL; ?>auth/logout.php">Log out</a></li>
                          </ul>
                        </li>
                        <?php else: ?>
                        <li><a href="<?php echo BASE_URL; ?>auth/login.php">Login</a></li>
                        <li><a href="<?php echo BASE_URL; ?>auth/register.php">Register</a></li>
                        <?php endif; ?>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->