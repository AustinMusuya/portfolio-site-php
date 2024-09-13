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
  
  <link rel="apple-touch-icon" sizes="180x180" href="../static/assets/apple-icon-180x180.png">
  <link href="../static/assets/a.ico.ico" rel="icon">

  <title>Contact Me</title>  

<link href="../static/main.3f6952e4.css" rel="stylesheet"></head>

<body class="">
 <!-- Add your content of header -->
<?php
    include '../static/header.php';
  
  ?>

<div class="section-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="section-container-spacer text-center">
            <h1 class="h2">04 : Contact me</h1>
          </div>

          <?PHP
$email = "";
$subject = "";
$errorMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	require '../static/configure.php';

	$email = $_POST['email'];
	$subject = $_POST['subject'];
  $message = $_POST['message'];

	$db_found = new mysqli($DB_SERVER, $DB_USER, $DB_PASS, $database );

	if ($db_found) {		
		$SQL = $db_found->prepare('SELECT * FROM feedbacks WHERE email = ?');
		$SQL->bind_param('s', $email);
		$SQL->execute();
		$result = $SQL->get_result();

		if ($result->num_rows > 0) {
			$errorMessage = "<script>alert('Email already submitted, kindly wait for feedback');</script>";
      echo $errorMessage;
		}
		else {
			$SQL = $db_found->prepare("INSERT INTO feedbacks (email, subject, message) VALUES (?, ? , ?)");
			$SQL->bind_param('sss', $email, $subject, $message);
			$SQL->execute();

			header ("Location: thankyou.php");
      exit;
		}
	}
	else {
		$errorMessage = "Database Not Found";
	}
}
?>
          
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
               <form action="contact.php" method="post" class="reveal-content">
                  <div class="row">
                    <div class="col-md-7">
                      <div class="form-group">
                        <input name="email" type="email" class="form-control" id="email" placeholder="Email" required>
                      </div>
                      <div class="form-group">
                        <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required>
                      </div>
                      <div class="form-group">
                        <textarea name="message" class="form-control" rows="5" placeholder="Enter your message" required></textarea>
                      </div>
                      <button type="submit" name="submit" class="btn btn-default btn-lg">Send</button>
                    </div>
                    <div class="col-md-5 address-container">
                      <ul class="list-unstyled">
                        <li>
                          <span class="fa-icon">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                          </span>
                          + 254 724 966 576
                        </li>
                        <li>
                          <span class="fa-icon">
                            <i class="fa fa-at" aria-hidden="true"></i>
                          </span>
                          amusuya57@gmail.com
                        </li>
                        <li>
                          <span class="fa-icon">
                            <i class="fa fa fa-map-marker" aria-hidden="true"></i>
                          </span>
                          Nairobi, Kenya
                        </li>
                      </ul>
                      <h3>Contact me on social media</h3>
                      <a href="https://github.com/AustinMusuya" title="" class="fa-icon" target="_blank">
                        <i class="fa fa-github"></i>
                      </a>
                      <a href="https://upwork.com/freelancers/~013d6d4a9b8db7edc4" title="" class="fa-icon" target="_blank" >
                        <i><img src="../static/assets/upworkIcon.png" alt="upwork Icon"></i>
                        <!-- <i class="fa-brands fa-upwork"></i> -->
                      </a>
                      <a href="https://www.linkedin.com/in/austin-musuya-3b86b2187?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" title="" class="fa-icon" target="_blank">
                        <i class="fa fa-linkedin"></i>
                      </a>
                      <a href="https://wa.me/254724966576?text=Hi%20I%20would%20like%20to%20make%20request" title="" class="fa-icon" target="_blank">
                        <i class="fa fa-whatsapp"></i>
                      </a>

                    </div>
                  </div>
                </form>
            </div>

          </div>
         
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
      m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-XXXXX-X', 'auto');
  ga('send', 'pageview');
</script>

--> <script type="text/javascript" src="../static/main.70a66962.js"></script></body>

</html>