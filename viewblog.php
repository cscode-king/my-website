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
    <link rel="stylesheet" href="css/viewblog.css">
    
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
                  <li><a href="#"class="current">View Blogs</a></li>
                  <li><a href="portfolio.php"> Portfolio</a></li>
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
    <?php

        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "addblog";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM blog_entries";

        $result = $conn->query($sql);

        $blogEntries = [];

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $blogEntries[] = $row;
            }

            function bubbleSort(&$arr) {
                $n = count($arr);
                for ($i = 0; $i < $n - 1; $i++) {
                    for ($j = 0; $j < $n - $i - 1; $j++) {
                        $timestamp1 = strtotime($arr[$j]['date'] . ' ' . $arr[$j]['time']);
                        $timestamp2 = strtotime($arr[$j + 1]['date'] . ' ' . $arr[$j + 1]['time']);
                        if ($timestamp1 < $timestamp2) {
                            $temp = $arr[$j];
                            $arr[$j] = $arr[$j + 1];
                            $arr[$j + 1] = $temp;
                        }
                    }
                }
            }

            bubbleSort($blogEntries);
            echo "<div class='blogTitle'>
                <h1 >Blog Entries</h1>
            </div>";

            foreach ($blogEntries as $entry) {
                echo "<div class='blogs'>";
                echo "<h2>" . $entry['title'] . "</h2>";
                echo "<p><strong>Author:</strong> " . $entry['author'] . "</p>";
                echo "<p><strong>Date:</strong> " . $entry['date'] . "</p>";
                echo "<p><strong>Time:</strong> " . $entry['time'] . "</p>";
                echo "<div class='blogContent'>";
                echo "<p>" . $entry['blog'] . "</p>";
                echo "</div>";
                echo "<hr>";
                echo "</div>";
                echo "<br>";
            }
        } else {
            echo "No blog entries found.";
        }

        $conn->close();
        ?>

        </div>



</body>
</html>