<?php
if(isset($_POST['submit'])){
    $email = "b.waller1@yahoo.com";
    $name = $_POST['name'];
    $from = $_POST['from'];
    $message = $_POST['message'];

    $sendMail = mail($email, $name, $from, $message);

      if($sendMail)
      {
      echo "Email Sent Successfully";
      }
      else

      {
      echo "Mail Failed";
      }
    }
?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>Downtown Crossfit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="divided">

				<!-- One -->
					<section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
						<div class="content">
							<h1>Downtown Crossfit</h1>
							<p class="major">Founded in 2018 by the McDillon brothers, Downtown Crossfit is the only crossfit gym in the area. Whether you looking to get back into shape, or a world class athlete training for the Olympics, Downtown Crossfit is the perfect environment to take your fitness to the next level.</p>
							<ul class="actions stacked"></ul>
						</div>
						<div class="image">
							<img src="https://images.pexels.com/photos/931323/pexels-photo-931323.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" />
						</div>
					</section>

				<!-- Two -->
					<section class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in" id="first">
						<div class="content">
							<h2>Warm Up</h2>
							<p>If you have never done crossfit or looking to get back into shape after a long break, our Warm Up program is for you...Don't call it a beginner program. </p>
							<ul class="actions stacked"></ul>
						</div>
						<div class="image">
							<img src="https://images.pexels.com/photos/2294400/pexels-photo-2294400.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" />
						</div>
					</section>

				<!-- Three -->
					<section class="spotlight style1 orient-left content-align-left image-position-center onscroll-image-fade-in">
						<div class="content">
							<h2>Elite</h2>
							<p>Focus on the big game, match or contest. As essential as a high caliber world class training environment is, it shouldn't be something to worry about. Be great. We'll take care of the rest.</p>
							<ul class="actions stacked"></ul>
						</div>
						<div class="image">
							<img src="https://images.pexels.com/photos/622297/pexels-photo-622297.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="" />
						</div>
					</section>

				<!-- Wrapper Two -->
					<section class="wrapper style1 align-center">
						<div class="inner">
							<p>“Strength does not come from winning. Your struggles develop your strengths. When you go through hardships and decide not to surrender, that is strength.”</p>
						</div>

						<!-- Gallery -->
							<div class="gallery style2 medium lightbox onscroll-fade-in">
								<article>
									<a href="https://images.unsplash.com/photo-1519317245869-d6943e4a4f9a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="image">
										<img src="https://images.unsplash.com/photo-1519317245869-d6943e4a4f9a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" />
									</a>
									<div class="caption">
										<h3>Relentless</h3>
										<ul class="actions fixed"></ul>
									</div>
								</article>
								<article>
									<a href="https://images.unsplash.com/photo-1541534741688-6078c6bfb5c5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1349&q=80" class="image">
										<img src="https://images.unsplash.com/photo-1541534741688-6078c6bfb5c5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1349&q=80" alt="" />
									</a>
									<div class="caption">
										<h3>Passionate</h3>
										<ul class="actions fixed"></ul>
									</div>
								</article>
								<article>
									<a href="https://images.unsplash.com/photo-1533681904393-9ab6eee7e408?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" class="image">
										<img src="https://images.unsplash.com/photo-1533681904393-9ab6eee7e408?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="" />
									</a>
									<div class="caption">
										<h3>Motivated</h3>
										<ul class="actions fixed"></ul>
									</div>
								</article>
								<article>
									<a href="https://images.unsplash.com/photo-1517344800994-80b20463999c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" class="image">
										<img src="https://images.unsplash.com/photo-1517344800994-80b20463999c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="" />
									</a>
									<div class="caption">
										<h3>Resilient</h3>
										<ul class="actions fixed"></ul>
									</div>
								</article>
								<article>
									<a href="https://images.unsplash.com/photo-1517838277536-f5f99be501cd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" class="image">
										<img src="https://images.unsplash.com/photo-1517838277536-f5f99be501cd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80" alt="" />
									</a>
									<div class="caption">
										<h3>Focused</h3>
										<ul class="actions fixed"></ul>
									</div>
								</article>
								<article>
									<a href="https://images.unsplash.com/photo-1533681475364-326b6803d677?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="image">
										<img src="https://images.unsplash.com/photo-1533681475364-326b6803d677?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="" />
									</a>
									<div class="caption">
										<h3>Determined</h3>
										<ul class="actions fixed"></ul>
									</div>
								</article>
								<article>
									<a href="https://images.unsplash.com/photo-1532384748853-8f54a8f476e2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="image">
										<img src="https://images.unsplash.com/photo-1532384748853-8f54a8f476e2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" />
									</a>
									<div class="caption">
										<h3>Fearless</h3>
										<ul class="actions fixed"></ul>
									</div>
								</article>
								<article>
									<a href="https://images.unsplash.com/photo-1532029837206-abbe2b7620e3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" class="image">
										<img src="https://images.unsplash.com/photo-1532029837206-abbe2b7620e3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="" />
									</a>
									<div class="caption">
										<h3>Driven</h3>
										<ul class="actions fixed"></ul>
									</div>
								</article>
							</div>
						</section>

				<!-- Contact Form -->
				<section class="wrapper style1 align-center">
					<div class="inner medium">
						<h2>Contact us. Be Great.</h2>
						<form method="post" action="">
							<div class="fields">
								<div class="field half">
									<label for="name">Name</label>
									<input type="text" name="name" id="name" value="" />
								</div>
								<div class="field half">
									<label for="from">Email</label>
									<input type="text" name="from" id="from" value="" />
								</div>
								<div class="field">
									<label for="message">Message</label>
									<textarea name="message" id="message" rows="6"></textarea>
								</div>
							</div>
							<ul class="actions special">
								<li><input type="submit" name="submit" id="submit" value="submit" /></li>
							</ul>
						</form>
					</div>
				</section>

			<!-- Footer -->
				<footer class="wrapper style1 align-center">
					<div class="inner">
						<ul class="icons">
							<li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
						</ul>
					</div>
				</footer>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
