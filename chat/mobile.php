<!DOCTYPE HTML>
<html>
	<head>
		<title>Chats</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		 <script src="http://pigeonsent.ueuo.com/chat/chat_functions_mobile.js"></script>
		
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="#">PigeonSENT</a></h1>
						<nav class="links">
							<ul>
								
							</ul>
						</nav>
						<nav class="main">
							<ul>
								<li class="search">
									<a class="fa-search" href="#search">Search</a>
									<form id="search" method="get" action="#">
										<input type="text" name="query" placeholder="Search" />
									</form>
								</li>
								<li class="menu">
									<a class="fa-bars" href="#menu">Menu</a>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Menu -->
					<section id="menu">

						<!-- Search -->
							<section>
								<form class="search" method="get" action="#">
									<input type="text" name="query" placeholder="Search" />
								</form>
							</section>

						<!-- Links -->
							<section>
								<ul class="links" id="contacts">
									<?php session_start(); echo $_SESSION['list'];    ?>
								</ul>
							</section>

						<!-- Actions -->
							<section>
								<ul class="actions vertical">
									<li><a href="http://pigeonsent.ueuo.com/login/logout.php" class="button big fit">Log Out</a></li>
								</ul>
							</section>

					</section>

				<!-- Main -->
					<div style="height:444px; overflow:scroll;" id="DIV_CHAT">
					</div>
				<section>
 <input class="search" id="txtmsg" style="width: 350px" type="text" name="msg" spellcheck="true">
 <button id="Submit2" type="button" value="Send" onclick="set_chat_msg()" class="button big fit">
  Send
</button>
			</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>