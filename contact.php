<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Z Cupcakes - Contact</title>

    <!-- css file -->
    <link rel="stylesheet" href="css/style2.css">

    <!-- css header file -->
    <link rel="stylesheet" href="css/contact.css">

    <!-- google fonts cdn link  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- boostraph cdn font awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- boostraph file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<!-- preloader starts -->

<div id="preloader"></div>

<!-- preloader ends -->

<!-- header section starts -->

<section class="header3">
    <nav class="navbar navbar-light fixed-top" style="background-color: #fef5ff;">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">Z CupCakes</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header" style="background-color: #fef5ff;">
              <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Z CupCakes</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body" style="background-color: #fef5ff;">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery2.html">Cakes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="order-here.html">Order Here</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="online-payment.html">Pay Here</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="faq.html">FAQ</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="gallery2.html" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
                    <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                      <li><a class="dropdown-item" href="birthday.html">Birthday Cake</a></li>
                      <li><a class="dropdown-item" href="wedding.html">Wedding Cake</a></li>
                      <li><a class="dropdown-item" href="debut.html">Debut Cake</a></li>
                      <li><a class="dropdown-item" href="money.html">Money Cake</a></li>
                      <li><a class="dropdown-item" href="character.html">Character Cake</a></li>
                      <li><a class="dropdown-item" href="cupcake.html">CupCake</a></li>
                      <li><a class="dropdown-item" href="others.html">Others</a></li>
                    </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </nav>

<div class="text-box3">
    <h1>Contact Us</h1>

</div>
</section>

<!-- header section ends -->

<!-- contact section starts -->

<section class="location">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9180.682292468655!2d121.11933414134195!3d14.655861075240702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b9cff5fa0679%3A0xd1001a2c1844bade!2sZCupCakes!5e0!3m2!1sen!2sph!4v1646143268894!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

</section>

<section class="contact-us">

    <div class="row">
        <div class="contact-col">
            <div>
                <i class="fas fa-home"></i>
                <span>
                    <h5>Apitong 2B, Marikina Heights</h5>
                    <p>Marikina City, Metro Manila, PHI</p>
                </span>
            </div>
            <div>
                <i class="fas fa-phone"></i>
                <span>
                    <h5>(+63) 913208412</h5>
                    <p>Monday to Saturday, 10:00AM to 5:00PM</p>
                </span>
            </div>
            <div>
                <i class="fas fa-envelope"></i>
                <span>
                    <h5>zcupcakes@gmail.com</h5>
                    <p>Email us!</p>
                </span>
            </div>
        </div>
        <div class="contact-col">

            <?php include('message.php'); ?>

            <form action="contact-code.php" method="POST">

                <input type="text" name="name" class="form-control" placeholder="Name" required>
                <input type="text" name="email" class="form-control" placeholder="Email" required>
                <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                <textarea rows="4" name="message" class="form-control" placeholder="How can we help you?" required></textarea>
                <div class="col-12">
                    <button class="btn btn-outline-primary" name="mes_contact" type="submit">Submit form</button>
                </div>

            </form>

        </div>
    </div>

</section>

<!-- contact section ends -->

<!-- footer section starts -->

<section class="footer">
    <h4>About Z Cupcakes</h4>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate,<br>libero. Aliquam ab eveniet debitis tenetur vitae sapiente,</p>
    <div class="social-icon">
        <li><a href="https://www.facebook.com/zcupcakes2013/"><ion-icon name="logo-facebook"></ion-icon></a></li>
        <li><a href="https://www.facebook.com/messages/t/379572479170636"><ion-icon name="chatbubble-ellipses-outline"></ion-icon></a></li>
    </div>
    <div class="nav-links2">
            <li><a href="index.html">Home</a></li>
            <li><a href="gallery2.html">Cakes</a></li>
            <li><a href="contact.php">Contact</a></li>
    </div>
    <p> © Z Cupcakes <i class="fas fa-heart"></i> | All Rights Reserved</p>
</section>


<!-- footer section ends -->















<!-- js file link  -->
<script src="js/script.js"></script>

<!-- js file link  -->
<script src="js/contact.js"></script>

<!-- smtjs js file link  -->
<script src="https://smtpjs.com/v3/smtp.js"></script>

<!-- preloader js file link  -->
<script src="js/preloader.js"></script>

<!-- bootstrap js file link -->
<script src="boot-js/bootstrap.js"></script>

<!-- icons file link  -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<!-- bootstrap file link  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

</body>
</html>