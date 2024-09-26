<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/portfolio.css">
</head>
<body>
    <div id="me1">

        <header>
          <img src="images/logo.png" class="logo">
          <div class="name">abdisamad ahmed.</div>
  
          <nav>
  
              <ul>
                  <li><a href="./index.php">Home</a></li>
                  <li><a href="index.php#me2">About Me</a></li>
                  <li><a href="education.php" > Qualifications</a></li>
                  <li><a href="./addpost.php"> Add Post</a></li>
                  <li><a href="viewblog.php">View Blogs</a></li>
                  <li><a href="#"class="current"> Portfolio</a></li>
                  <li><a href="./index.php#foot"> Contact</a></li>
                  <?php
                    if (isset($_SESSION['loggedin'])) {
                        echo '<li><a href="logout.php">Logout</a></li>';
                    }

                    ?>
              </ul>
          </nav>
        </header>
      </div>

        <div class="portfolio">
            <div class="project">
            <h2>Project 1</h2>
            <h3>Making my own Website</h3>
            <div class="photocontainer">
                <img id="website" src="images/websitephoto.png" alt="My website">
                <img id="website" src="images/aboutphoto.png" alt="about me">
            </div>
            <p>This project is my very own porfolio website that you see before you now. I really enjoyed the process and gained a lot of knowledge and experience along the way, as it all came together through the use of: HTML, CSS, PHP and JavaScript.  </p>
            </div>
            <div class="project">
            <h2>Project 2</h2>
            <h3>Making a Horse Race Simulator</h3>
            <br>
            <img src="images/horse.png" alt="">
            <p>This project was a part of the OOP coursework in my second semester at Univeristy. I was tasked with completing the development of a Horse Race Simulator written in Java, along with a GUI to display this well as well as a vitual betting system.</p>
            </div>
            <div class="project">
            <h2>Project 3</h2>
            <p>Project 3 coming soon...</p>
            </div>
            <div class="project">
            <h2>Project 4</h2>
            <p>Project 4 coming soon...</p>
            </div>
        </div>


</body>
</html>