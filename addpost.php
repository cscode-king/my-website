<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/blog.css">
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
                <li><a href="#" class="current"> Add Post</a></li>
                <li><a href="viewblog.php">View Blogs</a></li>
                <li><a href="portfolio.php"> Portfolio</a></li>
                <li><a href="./index.php#foot"> Contact</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
      </header>
    </div>

      <div class="wrapper">
        <form id="postForm" action="addblog.php" method="POST">

          <h2>Write a Blog!</h2>
          <div class="input-box">
            <input
              id="author"
              type="text"
              name="author"
              placeholder="Author" 
              required
            />
          </div>
          <div class="input-box">
            <input
              id="title"
              type="text"
              name="title"
              placeholder="Title"
              required
            />
          </div>
          <div class="input-box">
            <textarea id="blog" name="blog" cols="60" rows="10" placeholder="Write your blog here."></textarea>
          </div>
          
          <div class="button-wrapper">
            <button type="submit" id="post" class="btn">Post</button>

            <button type="button" id="clearBtn" class="btn">Clear</button>
          </div>

        </form>
        
      </div>

      <script src="js/clear.js"></script>
      <script src="js/empty.js"></script>


    



</body>

</html>


