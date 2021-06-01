<?php session_start();
    unset($_SESSION["loggedIn"]);
    unset($_SESSION["userData"]);
    header("Location: login.php");  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="../style/Style-account.css">
    <link rel="stylesheet" href="../style/style-header-footer.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

  </head>
  <body>
    <div class="grid">
    <div class="header">
        <div class="logo">
            <a href="../index.html"><img src="../img/logo.png" alt="logo"></a>
        </div>
        <div class="slogan">
            <p>Horange Mall</p>
        </div>
        <div class="nav-bar">
           <div class="item">
               <a href="../index.html">Home</a>
           </div>
           <div class="item">
               <a href="../sub/aboutus.html">About Us</a>
           </div>
           <div class="item">
               <a href="../sub/fees.html">Fees</a>
           </div>
           <div class="item">
               <a href="../sub/contact.html">Contact</a>
           </div>
           <div class="item">
               <a href="../sub/faqs.html">FAQs</a>
           </div>
           <div class="item">
               <a href="../sub/login.php">My Account</a>
           </div>
           <div class="dropdown">
               <a href="" class="dropbtn">Browse</a>
               <div class="dropdown-content">
                    <a href="../sub/browsebyname.html">Browse By Name</a>
                    <a href="../sub/browsebycategory.html">Browse By Category</a>
               </div>
           </div>
        </div>
    </div>
  </div>

  <div class="grid">
      <div class="footer">
          <div class="copyrights">
              <a href="../sub/copyrights.html"><span>&copy;</span>Horange. All Rights Reserved</a>
          </div>
          <div class="tos">
              <a href="../sub/tos.html">Terms of Service</a>
          </div>
          <div class="privacy">
              <a href="../sub/privacy.html">Privacy Policies</a>
          </div>
      </div>
  </div>
  <script src='https://cdn.jsdelivr.net/g/lodash@4(lodash.min.js+lodash.fp.min.js)'></script>
  <script src="../jvs/login.js"></script>
  <script src="../jvs/logged.js"></script>
</body>
</html>
