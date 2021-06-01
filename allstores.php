<?php
    include "get_item.php";
    include "sort_.php";

    
    $stores = read_all_file("stores.csv");

   session_start();
   if(file_exists("installation.php")){
      die("<script>alert('Please delete installation.php first')</script>");
   }

   
    

?>
<?php
if(file_exists("installation.php")){
  die("<script>alert('Please delete installation.php first')</script>");
}



?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style/style-header-footer.css">
        <link rel="stylesheet" href="../style/style-index.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,600&family=Roboto&family=Zen+Dots&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <title>All Stores</title>
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
                       <a href="../sub/login.html">My Account</a>
                   </div>
                   <div class="item">
                       <a href="sub/admin.php">Admin Login</a>
                   </div>
                   <div class="dropdown">
                       <a href="" class="dropbtn">Browse</a>
                       <div class="dropdown-content">
                            <a href="../sub/browsebyname.html">Browse By Name</a>
                            <a href="../sub/browsebycategory.html">Browse By Category</a>
                       </div>
                   </div>
                   <div class="item">
                    <a href="shopping-cart.html">Shopping cart</a> 
                </div>
            </div>

        </div>

        <main>
            <div class="box1">
               <h2>Stores</h2>
                <div class="gallery">
                    <div class="item1">
                        <a href="../stores/stores home/Chanel-home.html"><img src="https://hyperpix.net/wp-content/uploads/2020/04/chanel-logo-font-free-download-1200x900.jpg"></a>
                        <h4><?php echo(get_store_name("0"));?></h4>
                     </div>
                    <div class="item2">
                        <a href="../stores/stores home/NIKE-home.html"><img src="https://logos-marcas.com/wp-content/uploads/2020/04/Nike-Logo.png" alt="nike"></a>
                        <h4><?php echo(get_store_name("1"));?></h4>
                     </div>
                    <div class="item3">
                        <a href="../stores/stores home/sephora-home.html"><img src="https://i.pinimg.com/originals/c2/da/ae/c2daaeea21490d8b3ad7744a3170d3ca.png" alt="sephora"></a>
                        <h4><?php echo(get_store_name("2"));?></h4>
                     </div>
                </div>
            </div>
            <div class="box2">
              
                <div class="gallery">
                    <div class="item1">
                        <a href="../stores/products/maybeline foundation.html"><img src="../img/maybellinelipstick.jpeg" alt="maybeline"></a>
                        <h4><?php echo(get_store_name("3"));?></h4>
                     </div>
                    <div class="item2">
                        <a href="../stores/products/Dior tote bag.html"><img src="https://thebaghagdiaries.com/wp-content/uploads/2019/02/Diorbooktote.jpg" alt="Dior Book Tote"></a>
                        <h4><?php echo(get_store_name("4"));?></h4>
                     </div>
                    <div class="item3">
                        <a href="../stores/products/locknlock lunch box.html"><img src="https://www.locknlock.com/common/en_us/images_m/icon/brandView1_img8.jpg" alt="Lock and Lock - household products -Lunch Box"></a>
                        <h4><?php echo(get_store_name("5"));?></h4>
                     </div>
                </div>
            </div>
            <div class="box3">
            <h2>Featured Products</h2>  
             <div class="gallery">
                 <div class="item1">
                     <a href="../stores/stores home/Cosas-home.html"><img src="../img/cosas.jfif" alt="Cosas"></a>
                     <h4><?php echo(get_product_name("0"));?></h4>
                  </div>
                 <div class="item2">
                     <a href="../stores/stores home/Gucci-home.html"><img src="../img/gucci.png" alt="Gucci"></a>
                     <h4><?php echo(get_product_name("1"));?></h4>
                  </div>
                 <div class="item3">
                    <a href="../stores/stores home/Louisvuitton-home.html"><img src="../img/lv.png" alt="LV"> </a>
                    <h4><?php echo(get_product_name("2"));?></h4>
                  </div>
             </div>
            </div>
            <div class="box4">
            <h2>New Stores</h2>
             <div class="gallery">
                 <div class="item1">
                     <a href="../stores/products/cosas Ambox.html"><img src="../img/ambox.webp" alt="Ambox"></a>
                     <h4><?php echo(get_store_name_by_time("0"));?></h4>
                  </div>
                 <div class="item2">
                     <a href="../stores/products/dior 30 montaigne.html"><img src="../img/dior 30 montaigne.webp" alt="dior 30 montaigne"></a>
                     <h4><?php echo(get_store_name_by_time("1"));?></h4>
                  </div>
                 <div class="item3">
                    <a href="../stores/products/Nike Crater Impact.html"><img src="../img/NikeCaraterImpact.jfif" alt="Nike Crater Impact"></a>
                    <h4><?php echo(get_store_name_by_time("1"));?></h4>
                  </div>
             </div>
            </div>
         </main>

        <div class="grid">
            <div class="footer">
                <div class="copyrights">
                    <a href="sub/copyrights.html"><span>&copy;</span>Horange. All Rights Reserved</a>
                </div>
                <div class="tos">
                    <a href="sub/tos.html">Terms of Service</a>
                </div>
                <div class="privacy">
                    <a href="sub/privacy.html">Privacy Policies</a>
                </div>
            </div>

        </div>

    </body>
    <div class="cookie-container">
        <p>We use cookies in this website to give you the best experience. Please accept our <a href="https://gdpr-info.eu/"> Terms and conddition</a> before using our site .</p>
        <button class="cookie-btn">
            Agree
        </button>
    </div>
    <script src="../jvs/cookies.js"></script>
</html>
