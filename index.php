
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,regular,500,600,700" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Kalam:300,regular,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light:regular" rel="stylesheet" />
</head>
<body>

    <div id="me1">

        <header>
            <img src="images/logo.png" class="logo">
            <div class="name">abdisamad ahmed.</div>

            <nav>

                <ul>
                    <li><a href="#me1" class="current">Home</a></li>
                    <li><a href="#me2"> About Me</a></li>
                    <li><a href="education.php"> Qualifications</a></li>
                    <li><a href="./addpost.php"> Add Post</a></li>
                    <li><a href="viewblog.php">View Blogs</a></li>
                    <li><a href="portfolio.php"> Portfolio</a></li>
                    <li><a href="#foot"> Contact</a></li>
                    <?php
                    session_start();
                    if (isset($_SESSION['loggedin'])) {
                        echo '<li><a href="logout.php">Logout</a></li>';
                    }

                    ?>

                </ul>
            </nav>
        </header>
        
               
        <div class="info">
            <h1><span class="hi">Hi 👋 </span>, I'm <span>Abdisamad</span>, a CS student at <span>QMUL.</span></h1>
            <p>Behold... Here is my portfolio website to teach you all about <span>ME</span>. I hope you enjoy learning!</p>
            <img src="images/curly.png" class="curly">
            <?php
        
        
            if (!isset($_SESSION['loggedin'])) {
                echo '<a href="addpost.php" class="login"> Login</a>';
            }
            else{
                
                
                echo '<a href="addpost.php" class="login"> Post Blogs!</a>';
            }

            ?>
        </div>
        
        

        
    </div>

    <div id="me2">

            
        <section class="about">
            
            <figure>
                <img src="images/skyme.jpg" class="pic">
                <figcaption>This is Me.</figcaption>
            </figure>
            
            <article >
                <h2>About Me</h2>
                <p><span class="description">Welcome </span>to my portfolio site! I'm an enthusiastic computer science student that enjoys coding and problem solving. I approach every project with eagerness and a commitment to quality, always seeking to push boundaries and accomplish great things. Before starting <span class="description">university</span>, I went on a transforming journey, taking a gap year to immerse myself in Egyptian culture and study <span class="description">Arabic</span>.This was an awesome experience to have and one that I deeply appreciate.  Aside from technology, I'm a big fan of sports, especially basketball. Whether on the court or on the <span class="description">computer</span>, I am driven by a never-ending search of progress and innovation. Let's connect and make something amazing <span class="description">together!</span></p>
            </article>
        </section>

    </div>

    <footer id="foot">
        <div class="footercontainer">
            <div class="socials"> 
                <a href="https:www.linkedin.com/in/abdisamad-ahmed"><i class="fa-brands fa-linkedin"></i></a> 
                <a href="mailto:abddisamad@gmail.com"><i class="fa-brands fa-google-plus"></i></a>

            </div>
            <div class="footernavs">
                <ul>
                    <li><a href="#me1">Home</a></li>
                    <li><a href="#me2">About Me</a></li>
                    <li><a href="mailto:abddisamad@gmail.com">Contact Me</a></li>
                </ul>
            </div>
            <div class="footercopy">
                <p>Copyright &copy; 2024 Abdisamad Ahmed</p>
            </div>

        </div>
    </footer>
    

</body>

</html>

