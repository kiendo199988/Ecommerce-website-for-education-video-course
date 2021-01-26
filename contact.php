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
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="css/style.css" type="text/css">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width">
      <title></title>
   </head>
   <style>
      .button1 {
      background-color: #F9D5D5;
      color: black;
      border: 2px solid #008CBA; /* Blue */
      }
      .button2 {
      background-color: #F9D5D5;
      color: black;
      border: 2px solid #4CAF50; /* Green */
      }
      .button3 {
      background-color: #F9D5D5;
      color: black;
      border: 2px solid #f44336
      } /* Red */
   </style>
   <body>
      <div class="wrapper">
         <header>
            <div class="nav" style="display: inherit;">
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
               </ul>
               </nav>
            </div>
         </header>

  <!--------------------------------------------------------------------------------------------------------------------------------->
                                                                          <!--showcase-->
         <div class="container">
          <img src="img\showcase.jpg" alt="Showcase" class="showcase">
          <div class="text"><h1>GitGud</h1><br> <p>Learn Programming Online - Get Good At C# Programming</p></div>
        </div>

  <!--------------------------------------------------------------------------------------------------------------------------------->
                                                                               <!--contact-->
          <br>
         <div class="">
            <div class="container marketing">
               <div class="row">
                  <div class="col-md-4">
                     <div class="text-center">
                        <img src="img\cust-img.png" class="rounded" alt="...">
                        <h3 class="text-dark">Customer Centre Contact</h3>
                         <br>
                         <button type="button" class="btn btn-primary">Our Centre</button>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="text-center">
                        <img src="img\cust-img.png" class="rounded" alt="...">
                                                 <h3 class="text-dark">Social media</h3>
                         <br>
                         <button type="button" class="btn btn-danger" onclick="location.href = 'https://www.facebook.com';"> Via Facebook</button>
                         <button type="button" class="btn btn-danger" onclick="location.href = 'https://www.twitter.com';">Via Twitter</button>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="text-center">
                        <img src="img\cust-img.png" class="rounded" alt="...">
                         <h3 class="text-dark">Email</h3>
                         <br>
                         <button type="button" class="btn btn-info" onclick="location.href = 'https://mail.google.com';">via Email</button>
                         </div>
                  </div>
                   </div>
                  </div>
             </div>
          </div>
       <br>
       <br>

<!--------------------------------------------------------------------------------------------------------------------------------->
                                                                              <!--footer-->
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
