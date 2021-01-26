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
    <title></title>
  </head>
<body>
 <div class="wrapper">
  <header>
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
                   <div class="container">
                    <img src="img\showcase.jpg" alt="Showcase" class="showcase">
                    <div class="text"><h1>GitGud</h1><br> <p>Learn Programming Online - Get Good At C# Programming</p></div>
                  </div>
                  <div class="">

                    <h2>Frequently Asked Questions</h2>
<p>Visitors to the GitGud web site often have questions that they submit using the contact form. Although I attempt to answer all questions quickly, there can sometimes be delays. Common questions and their answers will be added to this page occasionally to try to avoid any such delays.</p>
<br>
<h2>Author</h2>
<br>
<p>Who writes the articles for the GitGud web site?</p>
<br>
<p>All of the articles, tutorials and source code examples are written by me, Kim. In my real job I am the software development manager for a retail chain in the United Kingdom, where we develop enterprise software using mainly Microsoft technologies. Some of these technologies are the topics of my articles.</p>
<br>
<p>I used to be a consultant delivering Novell Netware and Windows NT solutions before moving into software training and production of learning materials. This was prior to becoming a full-time developer in 1997. You can see my ugly mug in the photograph to the right (sorry about that).</p>
<br>
<h2>GitGud Materials</h2>
<p>Can I use the source code from an article in my software project?</p>
<br>
<p>Yes. The source code on the BlackWasp web site is provided on a free-of-charge basis for use in development projects. There are a few provisos that you need to read on the copyright policy page.</p>
<br>
<p>Can I Create a Copy of an Article on my Web Site or Blog?</p>
<br>
<p>No. The copyright for all articles remains the property of GitGud. You may, of course, add links from your own pages to the article on the GitGud web site.</p>
<br>
<p>Is the information on the web site available in an eBook format?</p>
<br>
<p>No. The web site is funded through advertising revenue, which could be adversely affected by publishing the articles in other formats. Without this funding the web site may need to be closed. This position may change in the future if a suitable funding model can be designed that readers find acceptable.</p>
<br>
<p>How can I stay up to date with new GitGud articles?</p>
<br>
                      <p>Links to new articles are published to Twitter, Facebook , Google+ and the RSS feed shortly after they become available.</p>
<br>
<h2>Technology</h2>Technology
<p>What technologies is the BlackWasp web site built upon?</p>
<br>
<p>As you might expect from a web site that is focussed upon Microsoft technologies, the site is built using ASP.NET. The site uses custom code for most elements, all developed using C#. Some elements of the site use freely available web-based services. These include:</p>
<br>
<p>Lucene.Net. This library powers the search engine for the web site. It is a .NET version of Apache Lucene.
Site Uptime. This on-line service is used to monitor the BlackWasp web site and alert should the site become unavailable. Free and chargeable versions are available. The free version has a limitation on the number of web sites that may be monitored.</p>
<h2>Email Newsletter</h2>
<p>I didn't get my email newsletter. Where is it?</p>
<br>
<p>I've discontinued the newsletter due to regulations requiring that I would have to release my home address.</p>

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



<svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
