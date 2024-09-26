<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qualifications</title>
    <link rel="stylesheet" href="css/reset.css">

    <link rel="stylesheet" href="css/educationstyles.css">
</head>
<body>
    <div class="total">
      <div id="me1">
          <header>
              <img src="images/logo.png" class="logo">
              <div class="name">abdisamad ahmed.</div>
              <nav>
                  <ul>
                      <li><a href="./index.php">Home</a></li>
                      <li><a href="index.php#me2">About Me</a></li>
                      <li><a href="education.php" class="current"> Qualifications</a></li>
                      <li><a href="./addpost.php"> Add Post</a></li>
                      <li><a href="viewblog.php">View Blogs</a></li>
                      <li><a href="portfolio.php"> Portfolio</a></li>
                      <li><a href="./index.php#foot"> Contact</a></li>
                      <?php
                    session_start();
                    if (isset($_SESSION['loggedin'])) {
                        echo '<li><a href="logout.php">Logout</a></li>';
                    }

                    ?>
                  </ul>
              </nav>
          </header>
          <section class="school">
            <div class="edu">Education</div>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-icon"></div>
                  <div class="timeline-content">
                    <h2>Queen Mary University of London</h2><br>
                    <p>BSc Computer Science</p>
                    <span class="date">2023 - Present</span>
                  </div>
                </div>
                <div class="timeline-item">
                  <div class="timeline-content">
                    <h2>Wallington County Grammar School</h2><br>
                    <p>A-levels: AAA in Maths, Biology and Chemistry</p>
                    <span class="date">2020 - 2022</span>
                  </div>
      
                </div>
                <div class="timeline-item">
                    <div class="timeline-icon"></div>
                  <div class="timeline-content">
                    <h2>Wallington County Grammar School</h2><br>
                    <p>GCSE's : Grades A to B</p>
                    <span class="date">2017 - 2020</span>
                  </div>
                </div>
            </div>
          </section>
      
        </div><br>
        <div class="edu">Skills and Work Experience</div>
                    
          <div id="me2">

            <section class="skills">
              
                <h2>Skills</h2>
                <div class="skills-container">
                    <div class="skill">
                        <h3>Programming</h3>
                        <p>Java, Python, HTML, CSS</p>
                    </div>
                    <div class="skill">
                        <h3>Field</h3>
                        <p>Teamwork, Communication, Problem Solving, Time Management, Leadership</p>
                    </div>
                </div>
            </section>

            <section class="work-experience">
              <h2>Work Experience</h2>
              <div class="experience-container">
                <div class="experience">
                  <h3>Customer Service Administrator</h3>
                  <p>Construction Certification</p>
                  <span class="date">May 2023 - March 2024</span>
                </div>
                <div class="experience">
                  <h3>Class Tutor</h3>
                  <p> Learning centre</p>
                  <span class="date">Jan - May 2022</span>
                </div>
                <div class="experience">
                  <h3>Administrator</h3>
                  <p>White star care</p>
                  <span class="date">Jan - May 2021</span>
                </div>
              </div>
            </section>
          
          </div>
    </div>

        
  

</body>
</html>