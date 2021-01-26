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
    <title>Home | GitGud</title>
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
                    <div class="text"><h1>GitGud</h1><br> <p>Welcome to your homepage, <?php echo $_SESSION['email']; ?></p></div>
                  </div>


<!--***************************************************************************************************************************************************** -->

                                                                      <!--tabs-->
<!--***************************************************************************************************************************************************** -->

                  <button class="tablink" onclick="openPage('VideoLectures', this, '#2196F3')">Video Lectures</button>
                  <button class="tablink" onclick="openPage('News', this, '#2196F3')" id="defaultOpen">News</button>
                  <button class="tablink" onclick="openPage('Books', this, '#2196F3')">Books</button>
                  <button class="tablink" onclick="openPage('Assignment', this, '#2196F3')">Assignment</button>

<!-- ***************************************Product display******************************************************************-->
                <div id="VideoLectures" class="tabcontent" >
                   <div id="columns">
                  <ul class="product-display">
                   <li>
                      <figure>
                    <img src="img\videoThumbnail2.jpg">
                    <figcaption>The Complete Guide to Console</figcaption>
                      <span class="price">$44</span>
                      <a class="button" href="cart.php">Add to Cart</a>
                      <a class="button" href="preview.php">Preview</a>
                    </figure>
                   </li>

                   <li>
                    <figure>
                    <img src="img\videoThumbnail4.png">
                    <figcaption>C# Fundementals</figcaption>
                      <span class="price">$44</span>
                      <a class="button" href="cart.php">Add to Cart</a>
                      <a class="button" href="preview.php">Preview</a>
                    </figure>
                  </li>
                 </ul>
                 </div>

                  </div>

                  <div id="News" class="tabcontent">
                    <h3>News</h3>
                    <p>Some news</p>
                  </div>

                  <div id="Books" class="tabcontent">
                    <h3>Books</h3>
                    <p>Books content</p>
                  </div>

                  <div id="Assignment" class="tabcontent">
                    <h3>Assignment</h3>
                    <p>Assignment content</p>
                  </div>
<!-- ***************************************script******************************************************************-->
                <script type="text/javascript">
                function openPage(pageName, elmnt, color) {
                // Hide all elements with class="tabcontent" by default */
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                  tabcontent[i].style.display = "none";
                }

                // Remove the background color of all tablinks/buttons
                tablinks = document.getElementsByClassName("tablink");
                for (i = 0; i < tablinks.length; i++) {
                  tablinks[i].style.backgroundColor = "";
                }

                // Show the specific tab content
                document.getElementById(pageName).style.display = "block";

                // Add the specific color to the button used to open the tab content
                elmnt.style.backgroundColor = color;
                }

                // Get the element with id="defaultOpen" and click on it
                document.getElementById("defaultOpen").click();
                </script>
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
