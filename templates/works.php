<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
 
  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link rel="apple-touch-icon" sizes="180x180" href=".../static/assets/apple-icon-180x180.png">
  <link href=".../static/assets/a.ico.ico" rel="icon">

  <title>Works</title>  

<link href="../static/main.3f6952e4.css" rel="stylesheet"></head>

<body class="">
<?php
    include '../static/header.php';
  
  ?>

 <!-- Add your content of header -->
<div class="section-container">
  <div class="container">
    <div class="row">
      
      <div class="col-sm-8 col-sm-offset-2 section-container-spacer">
        <div class="text-center">
          <h1 class="h2">02 : Projects</h1>
          <p>Explore a collection of my diverse projects, each a testament to my passion for creating exceptional
            digital experiences. From web development to design, my work showcases my skills and dedication. 
            If you're interested in collaborating or learning more, please get in touch through <a href="./contact.php">Contact Page</a>. Thank you for visiting!</p>
        </div>
      </div>

      <div class="col-md-12">
     
      <div id="myCarousel" class="carousel slide projects-carousel">
        <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="row">
                    <div class="col-sm-4">

                      <a href="./hotelapp.php" title="" class="black-image-project-hover">
                        <img src="../static/assets/images/hotel001-hover.jpg" alt="Hotel Desktop Application Image" class="img-responsive">
                      </a>
                      <div class="card-container card-container-lg">
                        <h4>001/006</h4>
                        <h3>Hotel Management Desktop App</h3>
                        <p>A custom-built Hotel Management Desktop App in C#.</p>
                        <a href="./hotelapp.php" title="" class="btn btn-default">Discover on Github</a>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <a href="https://github.com/AustinMusuya/Employee-Management-System" title="" class="black-image-project-hover" target="_blank">
                        <img src="../static/assets/images/office.jpg" alt="Office Desk Setup" class="img-responsive">
                      </a>
                      <div class="card-container card-container-lg">
                        <h4>002/006</h4>
                        <h3>Employee Management System</h3>
                        <p>A custom-built Employee Mangement System in Java to track employee goal points </p>
                        <a href="https://github.com/AustinMusuya/Employee-Management-System" title="" class="btn btn-default" target="_blank">Discover On Github</a>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <a href="https://github.com/AustinMusuya/My-Portfolio-Site" title="" class="black-image-project-hover" target="_blank">
                        <img src="../static/assets/images/portfolio.jpg" alt="" class="img-responsive">
                      </a>
                      <div class="card-container card-container-lg">
                        <h4>003/006</h4>
                        <h3>My Portfolio Site</h3>
                        <p>A repository on this portfoilio site built and designed by yours truly</p>
                        <a href="https://github.com/AustinMusuya/My-Portfolio-Site" title="" class="btn btn-default" target="_blank">Discover On Github</a>
                      </div>
                    </div>
                    
                </div>
                <!--/row-->
            </div>
            <!--/item-->
            <div class="item">
                <div class="row">
                  <div class="col-sm-4">
                    <a href="https://github.com/AustinMusuya/Python_basics_beginner_projects" class="black-image-project-hover" target="_blank">
                      <img src="../static/assets/images/python.jpg" alt="Python Programming Language Logo" class="img-responsive">
                    </a>
                    <div class="card-container">
                      <h4>004/006</h4>
                      <h3>Python Projects</h3>
                      <p>Beginner Projects in Python for everyone</p>
                      <a href="https://github.com/AustinMusuya/Python_basics_beginner_projects" class="btn btn-default" target="_blank">Discover on Github</a>
                    </div>
                  </div>
                   <div class="col-sm-4">
                      <a href="https://github.com/AustinMusuya" class="black-image-project-hover" target="_blank">
                        <img src="../static/assets/images/android.jpg" alt="Image" class="img-responsive">
                      </a>
                      <div class="card-container">
                        <h4>005/006</h4>
                        <h3>E-Commerce android App</h3>
                        <p>Work in progress. Check out my github!</p>
                        <a href="https://github.com/AustinMusuya" class="btn btn-default" target="_blank">Discover On Github</a>
                      </div>
                    </div>
                    
                    <div class="col-sm-4">
                      <a href="https://github.com/AustinMusuya" class="black-image-project-hover" target="_blank">
                        <img src="../static/assets/images/airline.jpg" alt="Image" class="img-responsive">
                      </a>
                      <div class="card-container">
                        <h4>006/006</h4>
                        <h3>Airline Ticketing App</h3>
                        <p>Work in progress. Check out my github!</p>
                        <a href="https://github.com/AustinMusuya" class="btn btn-default" target="_blank">Discover On Github</a>
                      </div>
                    </div>
                    
                </div>
                <!--/row-->
            </div>
            
            <!--/item-->
        </div>
        <!--/carousel-inner--> 
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>

        <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
     </div>



    <!--/myCarousel-->
    </div>



    </div>
  </div>
</div>

<?php
    include '../static/footer.php';
  ?>

<script>
  document.addEventListener("DOMContentLoaded", function (event) {
     navActivePage();
  });
</script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID 

<script>
  (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date(); a = s.createElement(o),
      m = s.getElementsByTagName(o)[0s]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-XXXXX-X', 'auto');
  ga('send', 'pageview');
</script>

--> <script type="text/javascript" src="../static/main.70a66962.js"></script></body>

</html>