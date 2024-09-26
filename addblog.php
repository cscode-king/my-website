<?php

session_start();


if (!isset($_SESSION['loggedin'])) {
    header('Location: login.html');
    exit;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "addblog";

    $conn = new mysqli($servername, $username, $password, $dbname);


    $author = $_POST['author']; 
    $title = $_POST['title'];
    $blog = $_POST['blog'];

    date_default_timezone_set('Europe/London');

    $date = date('Y-m-d');
    $time = date('H:i:s');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO blog_entries (author, title, blog, date, time)
            VALUES ('$author', '$title', '$blog', '$date', '$time')";

    if ($conn->query($sql) === TRUE) {
        header("Location: viewblog.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    } else {
        
        header('Location: addPost.html');
        exit;
    }
    ?>
