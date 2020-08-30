<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="technocolabstyle.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Technocolabs</title>
</head>
<body>
 
    <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero"><h1><span>T</span>ECHNO<span>C</span>OLABS</h1></a>
        </div>
        <div class="nav-list">
          <div class="surja"><div class="bar"></div>
        </div>
          <ul>
            <li><a href="#hero" data-after="Home"><strong>Home</strong></a></li>
            <li><a href="#courses" data-after="Courses"><strong>Courses</strong></a></li>
            <li><a href="#projects" data-after="Projects"><strong>Projects</strong></a></li>
            <li><a href="technoanbassador.html" data-after="anbassador"><strong>Ambassador</strong></a></li>
            <li><a href="technoabout.php" data-after="About"><strong>About</strong></a></li>
            <li><a href="#contact" data-after="Contact"><strong>Contact</strong></a></li>
            <li><a href="technologin.php" data-after="Account"><strong>Register</strong></a></li>

          </ul>
        </div>
      </div>
    </div>
  </section>
  


  
  <section id="hero">
    <div class="hero container">
      <div>
        <h1><?php
session_start();
if(isset($_SESSION['user_name'])){
  echo "Hello , ".$_SESSION['user_name'];

  echo '<a href="technologout.php">Logout</a>';
}

?> <span></span></h1>
        <h1>Welcome To<span></span></h1>
        <h1>Technocolabs <span></span></h1>
        <a href="technologin.php" type="button" class="cta">JOIN NOW</a>
      </div>
    </div>
  </section>


  
  <section id="courses">
    <div class="courses container">
      <div class="course-top">
        <h1 class="section-title">Cou<span>r</span>ses</h1>
        <p>Take courses from the world's best instructors and recriuters. Courses include recorded auto-graded and peer-reviewed assignments, video lectures, and community discussion forums. When you complete a course, you’ll be eligible to receive a shareable electronic Course Certificate for a small fee.</p>
      </div>
      <div class="course-bottom">
        <div class="course-item">
          <div class="icon"><a href="technowd.php"><img src="99.jpg"/></a></div>
          <h2>Web Development</h2>
          <p>Web development is the work involved in developing a Web site for the Internet (World Wide Web) or an intranet (a private network). ... Among Web professionals, "Web development" usually refers to the main non-design aspects of building Web sites: writing markup..</p>
        </div>
        <div class="course-item">
          <div class="icon"><a href="technods.php"><img src="00.jpg"/></a></div>
          <h2>Data Science</h2>
          <p>Data Science is one of the hottest fields of the 21st century. Accelerate business value with a scalable data science platform. It is in high demand across the globe with bigwigs like Amazon, Google, Microsoft paying handsome salaries and perks to data scientists..</p>
        </div>
        <div class="course-item">
          <div class="icon"><a href="technoml.php"><img src="5.jpg"></a></div>
          <h2>Machine Learning</h2>
          <p>Machine learning is an application of (AI) that provides systems the ability to automatically learn and improve from experience without being explicitly programmed. Machine learning focuses on development of programs that access databases..</p>
        </div>
        <div class="course-item">
          <div class="icon"><a href="technopd.php"><img src="6.jpg"/></a></div>
          <h2>Python databases</h2>
          <p>A database is an abstraction over an operating system's file system that makes it easier for developers to build applications that create, read, update and delete persistent data. A database is also a short cut to the path / route of any ongoing coding process.</p>
        </div>
        <div class="course-item">
          <div class="icon"><a href="technoj.php"><img src="ll.jpg"/></a></div>
          <h2>JAVA</h2>
          <p>Java is a high-level programming language developed by Sun Microsystems. ... Instead, Java programs are interpreted by the Java Virtual Machine, or JVM, which runs on multiple platforms. This means all Java programs are multiplatform and can run on different platforms.</p>
        </div>
        <div class="course-item">
          <div class="icon"><a href="technocs.php"><img src="cy.jpg"/></a></div>
          <h2>Cyber Security</h2>
          <p>Cyber security has never been simple. And because attacks evolve every day as attackers become more inventive, it is critical to properly define cyber security and identify what constitutes good cyber security.Cyber security protects the data and integrity of computing. </p>
        </div>
        <div class="course-item">
          <div class="icon"><a href="technodl.php"><img src="de.jpg"/></a></div>
          <h2>Deep Learning</h2>
          <p>Deep learning is a class of machine learning algorithms that uses multiple layers to progressively extract higher level features from raw input. Example, in image processing, lower layers may identify edges, higher layers may identify the concepts relevant to a human such as faces.</p>
        </div>
      </div>
    </div>
  </section>
  

<section id="projects">
  <div class="projects">
  <div class="project"></div><h1 class="section-title">pro<span>j</span>ects</h1></div>
<div class="bhai">
  <div class="box">
    <div class="icon"><a href="project task 13.php"><i class="fa fa-files-o" aria-hidden="true"></i></a></div>
    <div class="content">
      <h3>WD PROJECT 1</h3>
      <p>In this project, It displays information about using color in a home and color swatches with varying lightness, saturation, and hue.</p>
    </div>
  </div>
  <div class="box">
    <div class="icon"><a href="project task 14.php"><i class="fa fa-files-o" aria-hidden="true"></i></a></div>
    <div class="content">
      <h3>WD PROJECT 2</h3>
      <p>Aoife has been writing about her travels for nearly two decades. Before the launch of novel Tide Blade,features the stories of characters in Morocco. </p>
    </div>
  </div>
  <div class="box">
    <div class="icon"><a href="project task 11.php"><i class="fa fa-files-o" aria-hidden="true"></i></a></div>
    <div class="content">
      <h3>WD PROJECT 3</h3>
      <p>In this project, you will follow step-by-step instructions to fix a fictional restaurant’s website. </p>
    </div>
  </div>
  <div class="box">
    <div class="icon"><a href="project task 12.php"><i class="fa fa-files-o" aria-hidden="true"></i></a></div>
    <div class="content">
      <h3>WD PROJECT 4</h3>
      <p>In this project, you will use properties such as display and position to improve the layout of the landing page for a fictional design firm, Broadway Design</p>
    </div>
  </div>
  <div class="box">
    <div class="icon"><a href="project task 16.php"><i class="fa fa-files-o" aria-hidden="true"></i></a></div>
    <div class="content">
      <h3>WD PROJECT 5</h3>
      <p>In this project, you will follow step-by-step instructions to fix a to-do web app. All of the HTML and most of the CSS is intact, however, a few Flexbox values are missing</p>
    </div>
  </div>
  <div class="box">
    <div class="icon"><a href="project task 15.php"><i class="fa fa-files-o" aria-hidden="true"></i></a></div>
    <div class="content">
      <h3>WD PROJECT 6</h3>
      <p>In this project, you’ll edit the existing Tsunami Coffee website code so that the website appears correctly on varying screen sizes</p>
    </div>
  </div>
  
</div>
</div>

</section>



  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="./tech.png"/>
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title"> <span>About us</span></h1>
        <p>Technocolabs is a Software Development Services Company that Provide Services in Application Development, Web development, API Management, Cloud Application Development , Website Integretion, Data Science, Data Mining, Search Engine Optimization (SEO), Product Development Services, Android Application Development Services, Python Software Development Services, Java Web application Services, Machine learning App Development, Deep learning Model Tunning, Serverside Optimization, Data Base Development Services etc..</p>
      </div>
    </div>
  </section>
  

  
  <section id="contact">
    <div class="contact container">
      <div><h1 class="section-title">Contact <span>info</span></h1></div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="contact.jpg"/></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+1 02512357817</h2>
            <h2>+91 83192 91391</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="mail.jpg"/></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>technocollabs@gmail.com</h2>
            
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="location.jpg"/></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>Indore, INDIA</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  


  <section id="footer">
    <div class="footer container">
      <div class="brand"><h1><span>T</span>ECHNO<span>C</span>OLABS</h1></div>
      <h2>Your Complete Web Solution</h2>
      <h3><a href="technofaq.php">FAQ</a></h3>
      <h3><a href="technotac.php">Terms and Conditions</a></h3>
      <div class="social-icon">
        <div class="social-item">
          <a href="https://m.facebook.com/Technocolabs/?tsid=0.08217880817115475&source=result"><img src="fa.png"/></a>
        </div>
        <div class="social-item">
          <a href="https://instagram.com/technocolabs94?igshid=jse39duoebbu"><img src="e.png"/></a>
        </div>
        <div class="social-item">
          <a href="https://www.linkedin.com/company/technocolabs"><img src="0.png"/></a>
        </div>
        
      </div>
      <p>Copyright © 2020 Technocolabs. All rights reserved</p>
    </div>
  </section>
  <script src="./technohome.js"></script>
  
  
</body>
</html>

  