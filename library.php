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
    <title>My Library</title>
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
    </ul>
    </nav>
   </div>
  </header>

  <!--***************************************************************************************************************************************************** -->

                                                                    <!--showcase-->
  <!--***************************************************************************************************************************************************** -->
                   <div class="container">
                    <img src="img\showcase.jpg" alt="Showcase" class="showcase">
                    <div class="text"><h1>GitGud</h1><br> <p>Welcome to your Library, <?php echo $_SESSION['email']; ?></p></div>
                  </div>
                  <div class="">

<!--***************************************************************************************************************************************************** -->

                                                        <!--tabs for library-->
<!--***************************************************************************************************************************************************** -->
                    <button class="tablink" onclick="openPage('VideoLectures', this, '#2196F3')">Video Lectures</button>
                    <button class="tablink" onclick="openPage('News', this, '#2196F3')" id="defaultOpen">News</button>
                    <button class="tablink" onclick="openPage('Books', this, '#2196F3')">Books</button>
                    <button class="tablink" onclick="openPage('Assignment', this, '#2196F3')">Assignment</button>

                   <div id="VideoLectures" class="tabcontent" >
                      <div id="columns">
                        <h1>My Library</h1>

                        <!------------------------------------------------------->
                        <!--video plays - lightbox-->
                        <div id="light">
                        <a class="boxclose" id="boxclose" onclick="lightbox_close();"></a>
                        <video id="VisaChipCardVideo" width="600"  controls>
                            <source src="video/mov_bbb.mp4" type="video/mp4">
                            <!--Browser does not support <video> tag -->
                          </video>
                        </div>

                        <div id="fade" onClick="lightbox_close();"></div>

                        <div>
                        <!--Video that you purchased-->
                        <div id="columns">
                        <ul class="product-display">
                        <li>
                           <figure>
                         <img src="img\videoThumbnail2.jpg">
                         <figcaption>The Complete Guide to Console</figcaption>
                            <a class="button" href="#" onclick="lightbox_open();">Watch</a>
                           </figure>
                        </li>
                        </ul>
                        </div>
                        </div>

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

<!--Script----------------------------------------------------------------------------------->
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

                  </div>
 </div>
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

<!-- script for lightbox video-->
<script type="text/javascript">
window.document.onkeydown = function(e) {
  if (!e) {
    e = event;
  }
  if (e.keyCode == 27) {
    lightbox_close();
  }
}

function lightbox_open() {
  var lightBoxVideo = document.getElementById("VisaChipCardVideo");
  window.scrollTo(0, 0);
  document.getElementById('light').style.display = 'block';
  document.getElementById('fade').style.display = 'block';
  lightBoxVideo.play();
}

function lightbox_close() {
  var lightBoxVideo = document.getElementById("VisaChipCardVideo");
  document.getElementById('light').style.display = 'none';
  document.getElementById('fade').style.display = 'none';
  lightBoxVideo.pause();
}
</script>
