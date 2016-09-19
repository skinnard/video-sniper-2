<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Work+Sans:600,500,400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/animate.css"> <!-- Resource style -->
    <link rel="stylesheet" href="assets/css/ionicons.min.css"> <!-- Resource style -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
  </head>
  <body>

  <div class="wrapper">
    <a href="#" class="logo hidden-md hidden-lg"><img src="assets/images/logo.png" width="35" height="35" alt="Logo" /></a>
      <div class="nav-trigger" id="nav-trigger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    	<div id="nav-menu">
        <a href="#" class="logo"><img src="assets/images/logo.png" width="35" height="35" alt="Logo" /></a>
    			<ul class="navigation cd-single-item-wrapper">
    				<li><a href="index.php">Home</a></li>
    				<li><a href="about.php">About</a></li>
    				<li><a href="portfolio-filter.php">Portfolio</a></li>
    				<li><a href="contact.php">Contact</a></li>
    			</ul> <!-- cd-single-item-wrapper -->

    			<!-- <div class="nav-social">
    				<ul>
    					<li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
    					<li><a href="#"><i class="ion-social-dribbble-outline"></i></a></li>
    					<li><a href="#"><i class="ion-social-github"></i></a></li>
              <li><a href="#"><i class="ion-social-linkedin-outline"></i></a></li>
    				</ul>
    			</div> -->
      </div>

    <!-- Homepage Main Section-->
  <div class="main">
    <section class="split-home">
      <section class="left-section wow fadeIn" data-wow-delay=".2s">
        </section>
        <section class="right-section">
        <a href="#" class="logo hidden-xs hidden-sm"><img src="assets/images/logo.png" width="35" height="35" alt="Logo" /></a>
          <div class="split-contact">
            <div class="split-contact-intro">
              <h4 class="wow fadeInDown"  data-wow-delay=".1s">Contact Me</h4>
              <h1 class="wow fadeInDown"  data-wow-delay=".2s">Feel free to give me shout if you want to chat.</h1>
            <div class="split-form">
              <form class="wow fadeIn" data-wow-delay=".4s" id="contact-form" method="post" action="assets/php/contact.php" role="form">
				        <div class="messages"></div>
        					<div class="controls">
        						<div class="row">
        							<div class="col-md-6">
        								<label for="form_name">Firstname *</label>
        								<input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required">
                        <div class="help-block with-errors"></div>
                      </div>
        							<div class="col-md-6">
        									<label for="form_lastname">Lastname *</label>
        									<input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Your lastname *" required="required">
                          <div class="help-block with-errors"></div>
                      </div>
        							<div class="col-md-6">
        									<label for="form_email">Email *</label>
        									<input id="form_email" type="email" name="email" class="form-control" placeholder="Enter your email *" required="required">
                          <div class="help-block with-errors"></div>
                    	</div>
        							<div class="col-md-6">
        									<label for="form_phone">Phone</label>
        									<input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Phone number">
                          <div class="help-block with-errors"></div>
                      </div>
        							<div class="col-md-12">
        									<label for="form_message">Message *</label>
        									<textarea id="form_message" name="message" class="form-control" placeholder="Your message *" rows="4" required="required"></textarea>
                          <div class="help-block with-errors"></div>
                      </div>
        							<div class="col-md-12">
        									<input type="submit" class="btn btn-send" value="Send message">
        							</div>
        							<div class="col-md-12">
        									<p class="text-muted"><strong>*</strong> Required.</p>
        							</div>
        						</div>
        					</div>
				        </form>
             </div>
           </div>
          </div>

<!-- Footer Split Home -->
     <div class="footer-personal text-center">
        <ul>
          <li><a href="about.php">About me</a></li>
          <li><a href="portfolio-filter.php">Portfolio</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      <br>
    </div>
   </section>
  </section>
 </div><!-- Main-->
</div><!-- Wrapper -->

<!-- Jquery and Js Plugins -->
    <script type="text/javascript" src="assets/js/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/plugins.js"></script>
    <script type="text/javascript" src="assets/js/menu.js"></script>
    <script type="text/javascript" src="assets/js/contact.js"></script>
    <script type="text/javascript" src="assets/js/validator.js"></script>
    <script type="text/javascript" src="assets/js/custom.js"></script>
  </body>
</html>
