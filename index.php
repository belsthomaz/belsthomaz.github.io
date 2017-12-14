<!doctype html>
<html lang="en">
  <head>
    <!--meta-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A test site used for learning.">
    <meta name="author" content="Isabella Thomaz">
    <link rel="icon" type="image/png" href="images/logo.png">

    <title>Bels Learning Site</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="bootstrap-social-gh-pages/bootstrap-social.css">

    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">
  </head>

  <body>
    <!--nav-->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" style="box-shadow: 3px 3px 15px #101010;">
      <div id="brand_button" class="navbar-brand">Bels Learning</div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><img src="images/logo.png" alt="learn_logo"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li id="home_item" class="nav-item">
            <div id="home_button" class="nav-link">Home</div>
          </li>
          <li id="port_item" class="nav-item">
            <div id="port_button" class="nav-link">Portfolio</div>
          </li>
          <li id="diss_item" class="nav-item">
            <div id="diss_button" class="nav-link">Discussion</div>
          </li>
          <li id="about_item" class="nav-item">
            <div id="about_button" class="nav-link">About</div>
          </li>
          <li id="contact_item" class="nav-item">
            <div id="contact_button" class="nav-link">Contact</div>
          </li>
        </ul>
        <div id="logo_button"><img src="images/logo.png" alt="learn_logo" width="50px;" height="50px;"></a>
      </div>
    </nav>
    <!--main-->
    <main role="main" class="container" style="box-shadow: 3px 3px 15px #101010;">
			<div class="row">
        <!--home-->
				<div id="home" class="pane col-md-9">
					<h1>Welcome to my learning site!</h1>
					<hr>
	      	<div id="welcomeDiv" class="starter-template">
						<div id="welcome-body" class="not-center">
							<p class="lead">This website exists purely to satisfy my craving to learn and test new coding concepts for web applications. Don't judge my interests - I owe no one nothing.</p>
							<p class="center">Here is a dancing cat.</p>
							<p class="center"><img src="images/dancing_cat.gif" alt="dancing_cat"></p>
						</div>
					</div>
      	</div>
        <!--portfolio-->
        <div id="portfolio" class="pane col-md-9">
					<h1>Portfolio</h1>
					<hr>
		      <div id="portDiv" class="starter-template">
						<div id="port-body" class="not-center">
							<p class="lead">Feel free to look through projects I've worked on and done.</p>
							<p>[insert portfolio stuff here]</p>
						</div>
					</div>
				</div>
        <!--discussion-->
        <div id="discussion" class="pane col-md-9">
					<h1>Discussion Board</h1>
					<hr>
		      <div id="dissDiv" class="starter-template">
						<div id="diss-body" class="not-center">
              <!--reddit widget-->
              <p class="lead">Here are some topics to help stir a discussion:</p>
              <script src="https://www.reddit.com/hot/.embed?limit=5&t=all&bgcolor=282828" type="text/javascript"></script>
              <!--discussion board-->
						</div>
					</div>
				</div>
        <!--about-->
				<div id="about" class="pane col-md-9">
					<h1>About The Author</h1>
					<hr>
		      <div id="aboutDiv" class="starter-template">
						<div id="about-body" class="not-center">
							<p><img src="images/bels.jpg" alt="bels" width="300" height="361"></p>
							<p class="lead">Bels Thomaz</p>
							<p>[insert about info here]</p>
						</div>
					</div>
				</div>
        <!--contact-->
				<div id="contact" class="pane col-md-9">
					<h1>Contact</h1>
					<hr>
		      <div id="aboutDiv" class="starter-template">
						<div id="about-body" class="not-center">
							<p class="lead">Had a question or comment? Send me an email!</p>
              <form class="form-group" id="form" method="post" action="api/send_contact_email.php">
                <div class="form-group">
                  <label for="email">Your Email</label>
                  <input class="form-control" type="text" name="email">
                </div>
                <div class="form-group">
                  <label for="subject">Subject</label>
                  <input type="text" name="subject" class="form-control">
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea  id="message" name="message" class="form-control"></textarea>
                </div>
                <input type="submit" class="btn btn-primary">
              </form>
							<hr>
							<p class="lead">You can also see other projects from me here:</p>
							<p>Twitter: <a href="https://twitter.com/samwisethebravo" class="btn btn-social-icon btn-twitter"><span class="fa fa-twitter"></span></a></p>
							<p>Instagram: <a href="https://www.instagram.com/samwisethebravo/" class="btn btn-social-icon btn-instagram"><span class="fa fa-instagram"></span></a></p>
						</div>
					</div>
				</div>
        <!--sidebar-->
				<div id="info-sidebar" class="col-md-3 center vertical-rule">
					<img src="images/logo.png" alt="info-logo" width="150px;" height="150px;">
					<div id="sidebar-text">
						<hr>
						<h4>About</h4>
						<hr>
						<p class="not-center">A website dedicated to learn new things, present my projects, and to discuss cool and interesting topics. On occasion, shenanigans may occur.</p>
						<p class="not-center">Author: Bels Thomaz</p>
					</div>
				</div>
			</div>
    </main>
    <!--footer-->
		<footer class="container" style="box-shadow: 3px 3px 15px #101010;">
			<div id="footerDiv"><p>&copy; Bels Thomaz 2017</p></div>
		</footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>window.jQuery || document.write('<script src="js/jquery-2.2.4.min.js"><\/script>')</script>
    <script src="js/npm.js"></script>
    <script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>
  </body>
</html>
