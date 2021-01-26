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
    <title>Payment</title>
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

                                                                <!--payment from-->
<!--***************************************************************************************************************************************************** -->
<!-- radio button-->
           <div class="Payment form">
             <form action="/action_page.php">
               <div class="div-radio-wrapper">
                 <ul class="radio-wrapper">
                   <li>
                     <label class="radio-btn"><img class="visa-logo" src="img/visa.png" alt="visa">
                   <input type="radio" checked="checked" name="radio">
                   <span class="checkmark"></span>
                 </label>
                 </li>
                 <li>
                   <label class="radio-btn"><img class="mastercard-logo" src="img/mastercard.png" alt="mastercard">
                   <input type="radio" name="radio">
                   <span class="checkmark"></span>
                 </label>
                 </li>
                 <li>
                 <label class="radio-btn"><img class="americanexpress-logo" src="img/amex.jpg" alt="americanexpress">
                   <input type="radio" name="radio">
                   <span class="checkmark"></span>
                 </label>
                 </li>
                 </ul>
               </div>

<!--inputs-->
                  <div class="placeholder-form">
                   <label class="payment-label">Name on Card</label> <br>
                   <input class="placeholder-styling" type="text" name="Name" placeholder="Your Name on the card:"> <br>
                   <label class="payment-label">Card No.</label> <br>
                   <input class="placeholder-styling" type="text" name="CardNo" placeholder="CardNr: e.g 4485787105457251"> <br>
                   <label class="payment-label">Card expiration date</label> <br>
                   <input class="placeholder-styling" type="date" name="expr. date"><br>
                   <label class="payment-label">CVV</label> <br>
                   <input class="placeholder-styling" type="text" name="CVV" placeholder="123"><br>
                   <label class="payment-label">PIN</label> <br>
                   <input class="placeholder-styling" type="text" name="PINCODE" placeholder="9999">
                    <br><br>
                  <input class="submit-btn" type="submit" value="Make Payment">
                  </div>
          </form>
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
