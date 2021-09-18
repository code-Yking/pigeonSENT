<html>
	<head>
		<title>PigeonSENT</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/noscript.css" />
		    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_orange-orange.min.css" />
		    <link rel="stylesheet" href="styles.css">
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Wrapper -->
					<div id="wrapper">

						<!-- Panel (Banner) -->
							<section class="panel banner right">
								<div class="content color0 span-3-75">
									<h1 class="major">Welcome to<br />
									PigeonSENT!</h1>
									<p>Welcome to PigeonSENT - The NextGen Chatting App! This application is still under construction, so report any gliches or bugs at our Discord Server.             </div>
</p>
									<ul class="actions">
										<li><a href="#first" class="button special color1 circle icon fa-angle-right">Next</a></li>
									</ul>
								</div>
								<div class="image filtered span-1-75" data-position="25% 25%">

								</div>
							</section>

						<!-- Panel (Spotlight) -->
							<section class="panel spotlight medium right" id="first">
								<div class="content span-7">
									<h2 class="major">Log In / Sign Up</h2>
             	<!--FORM STARTS-->
    <div class="page-content"><form action="http://pigeonsent.ueuo.com/login/login.php" method="POST">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" placeholder="Enter Username" name="uid" id="Uid" required>
  </div>
      <br>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="password" placeholder="Enter Password" name="pwd" required>
  </div>
<br><br>


            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"type="submit" style="float:middle">
 Log In
</button> <p>
			Don't have an account? <a href="http://pigeonsent.ueuo.com/Register.php">Sign Up</a> here.
			</p>

	<?php
echo "<span style='color:#FF0000;text-align:center;'> $iid </span> ";
?>
</form>
</div>

	<script>
function signup() {
    window.open("http://pigeonsent.ueuo.com/Register.php", "_blank", "toolbar=no,scrollbars=no,resizable=no,top=500,left=500,width=400,height=400");
}
</script>
								<script>
function discord() {
    window.open("https://discord.gg/m9dg7U3", "_blank");
}
</script>
				<!--Login-form-ends-here-->
								</div>
								<div class="image filtered tinted" data-position="top left">
									<img src="images/pic02.jpg" alt="" />
								</div>
							</section>

						<!-- Panel -->
							<section class="panel color1">
								<div class="intro joined">
									<h2 class="major">ChangeLog</h2>
									<iframe style="width:100%; height:77%;" frameBorder="0" src="http://pigeonsent.ueuo.com/news.html" ></iframe>
								</div>
								<div class="inner">
									<ul class="grid-icons three connected">
										<li><span class="icon fa-diamond"><span class="label">Lorem</span></span></li>
										<li><span class="icon fa-camera-retro"><span class="label">Ipsum</span></span></li>
										<li><span class="icon fa-cog"><span class="label">Dolor</span></span></li>
										<li><span class="icon fa-paper-plane"><span class="label">Sit</span></span></li>
										<li><span class="icon fa-bar-chart"><span class="label">Amet</span></span></li>
										<li><span class="icon fa-code"><span class="label">Nullam</span></span></li>
									</ul>
								</div>
							</section>

						<!-- Panel (Spotlight) -->
							<section class="panel spotlight large left">
								<div class="content span-5">
									<h2 class="major">Our Cookie Policy</h2>
									<p>The Cookie Policy applies to any websites, branded pages on third party platforms (such as Facebook or YouTube), and applications accessed or used through such websites or third party platforms. By using PigeonSENT, you are consenting to our use of cookies in accordance with the Cookie Policy. If you do not agree to our use of cookies in this way, you should set your browser settings accordingly or not use PigeonSENT.</p>
								</div>
								<div class="image filtered tinted" data-position="top right">
									<img src="images/pic03.jpg" alt="" />
								</div>
							</section>


						<!-- Panel -->
							<section class="panel color4-alt">
								<div class="intro color4">
									<h2 class="major">Contact</h2>
									<p>We are more than happy to hear you!</p>
								</div>
								<div class="inner columns divided">
									<div class="span-3-25">
										<form method="post" action="#">
											<div class="field half">
												<label for="name">Name</label>
												<input type="text" name="name" id="name" />
											</div>
											<div class="field half">
												<label for="email">Email</label>
												<input type="email" name="email" id="email" />
											</div>
											<div class="field">
												<label for="message">Message</label>
												<textarea name="message" id="message" rows="4"></textarea>
											</div>
											<ul class="actions">
												<li><input type="submit" value="Send Message" class="button special" /></li>
											</ul>
										</form>
									</div>
									<div class="span-1-5">
										<ul class="contact-icons color1">
											<li class="icon fa-twitter"><a href="https://twitter.com/share?url=http://pigeonsent.ueuo.com">@twitter</a></li>
											<li class="icon fa-facebook"><a href="http://www.facebook.com/sharer.php?u=http://pigeonsent.ueuo.com">@facebook</a></li>
											<li class="icon fa-medium"><a href="mailto:?Subject=Lets%20chat%20using%20PigeonSENT!&Body=I%20saw%20this%20and%20thought%20%20http://pigeonsent.ueuo.com">E-Mail</a></li>
										</ul>
									</div>
								</div>
							</section>


					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
