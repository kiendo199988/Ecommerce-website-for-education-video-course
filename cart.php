<!DOCTYPE html>
<?php
session_start();
$loggedin = $_SESSION['loggedin'];

if (isset($loggedin) && $loggedin)
{
  // yes
  $_SESSION['email'];

}
else
{
  // no
  echo '<p>yo dont have access to this page!</p>';
}
 ?>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>My Shopping Cart</title>
  </head>
<body>
 <div class="wrapper">
  <header>
<!--***************************************************************************************************************************************************** -->

                                                                            <!--navbar-->
<!--***************************************************************************************************************************************************** -->
<div class="nav">
   <nav>
    <ul class="nav-dropdown">
         <li class="logo-wrapper"><a href="homepage.php"><img class="logo" src="img\git-gud-logo.png"></a></li>
         <li><h1><a href = "homepage.php">GitGud</a></h1></li>
         <li class="searchbar"><input type="text" class="search-input" placeholder="Search.."></li>
         <li class ="home"><a href="homepage.php">Home</a></li>
         <li class="contact"><a href="contact.php">Contact</a></li>
         <li class="about-us"><a href="aboutUs.php">About us</a></li>
         <li><a href="cart.php"><img class="icon" src="img\bucket.png"></a></li>
       <li class="icon-dropdown"><a href="library.php"><img src="img\user.png"></a>
       <ul class="dropdown-content">
           <li><a href="library.php">Library</a></li>
           <li><a href="logout.php">Sign Out</a></li>
    </ul>
  </li>
</ul>
   </nav>
  </div>
  </header>


  <!--***************************************************************************************************************************************************** -->

                                                                        <!--showcase-->
  <!--***************************************************************************************************************************************************** -->
                   <div class="container">
                    <img src="img\showcase.jpg" alt="Showcase" class="showcase">
                    <div class="text"><h1>GitGud</h1><br> <p>Learn Programming Online - Get Good At C# Programming</p></div>
                  </div>

<!--***************************************************************************************************************************************************** -->

                                                                                        <!--table-->
<!--***************************************************************************************************************************************************** -->
                  <div class="table">
                   <table>
                        <tr>
                          <th>ItemNo</td>
                          <th>Item name</td>
                          <th>Price</td>
                        </tr>
                        <tr>
                          <td>123</td>
                          <td>C# Fundamentals</td>
                          <td>44$</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td>Total: 44$</td>
                        </tr>
                      </table>

<!--***************************************************************************************************************************************************** -->

                                                                    <!--checkout-or-continue-shopping btn-->
<!--***************************************************************************************************************************************************** -->
<ul class="checkout-flexbox">
<li><button onclick="location.href = 'homepage.php';" class="checkout-btn" type="button" name="Continue Shopping">Continue Shopping</button></li>
<li><button onclick="location.href = 'makepayment.php';" class="checkout-btn" type="button" name="Proceed to Checkout">Proceed to Checkout</button></li>
</ul>
 </div>


 <!--***************************************************************************************************************************************************** -->

                                                                       <!--footer-->
 <!--***************************************************************************************************************************************************** -->

           <footer>
            <div class="footer-wrapper">
            <ul class="footer">
              <li><a href="#">Terms and Privacy</a></li>
              <li><a href="aboutUs.php">About</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="aboutUs.php">FAQS</a></li>
              <li><a href="https://www.instagram.com"><img class="instagram-icon" src = "img\instagram-icon.png"></a></li>
              <li><a href="https://www.facebook.com"><img class="facebook-icon" src = "img\facebook-icon.png"></a></li>
              <li><a href="#">English</a></li>
              <li><a href="#">Dutch</a></li>
            </ul>

          </div>
         </footer>
</body>
</html>
