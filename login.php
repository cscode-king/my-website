<?php
session_start();

$servername = 'localhost';
$username = 'root'; 
$password = 'root'; 
$dbname = 'MyPortfolio3'; 

$con = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {
   
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if (!isset($_POST['username'], $_POST['password'])) {
    exit('Please fill both the username and password fields!');
}


if ($statement = $con->prepare('SELECT id, password FROM Users WHERE username = ?')) {
    $statement->bind_param('s', $_POST['username']);
    $statement->execute();
    $statement->store_result();

    if ($statement->num_rows > 0) {
        $statement->bind_result($id, $password);
        $statement->fetch();

        if ($_POST['password'] === $password) {
            
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            echo 'Welcome back, ' . htmlspecialchars($_SESSION['name'], ENT_QUOTES) . '!';
            header('Location: addpost.php');
            exit;
        } else {
            
            echo '<script>alert("Incorrect password. Please try again.");</script>';
            header('Location: login.html');
            
        }
    } else {
        echo '<script>alert("Incorrect password. Please try again.");</script>';
    }



    $statement->close();
}
?>
