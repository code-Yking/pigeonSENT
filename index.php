	<?php
session_start();
$iid = $_SESSION['error'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="PigeonSENT : The nextgen chatting platform.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>PigeonSENT</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_orange-orange.min.css" />
    <link rel="stylesheet" href="styles.css">
		<style>
.alert {
    padding: 20px;
    background-color: #f44336;
    color: white;
}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}
</style>
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>
  <body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
        <div class="mdl-layout__header-row">
        </div>
        <div class=" mdl-layout__header-row">
         <img height="144px" width="144px" src="PS_logo_new.png" alt="logo"> <img src="PigeonSent.png">
        </div>
        <div class=" mdl-layout__header-row">
        </div>
        <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
          <a href="#overview" class="mdl-layout__tab is-active">Home</a>
					<a href="#features" class="mdl-layout__tab">Log In/Sign Up</a>
										<a href="#about" class="mdl-layout__tab">About</a>
					<a href="#contact" class="mdl-layout__tab">Contact Us</a>
				

					      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
																										<button id="demo-show-toast" class="mdl-button mdl-js-button" type="button">Show Our Cookie Policy</button>
<div id="demo-toast-example" class="mdl-js-snackbar mdl-snackbar">
  <div class="mdl-snackbar__text"></div>
  <button class="mdl-snackbar__action" type="button"></button>
	<script>
(function() {
  'use strict';
  window['counter'] = 0;
  var snackbarContainer = document.querySelector('#demo-toast-example');
  var showToastButton = document.querySelector('#demo-show-toast');
  showToastButton.addEventListener('click', function() {
    'use strict';
    var data = {message: 'The Cookie Policy applies to any websites, branded pages on third party platforms (such as Facebook or YouTube), and applications accessed or used through such websites or third party platforms. By using PigeonSENT, you are consenting to our use of cookies in accordance with the Cookie Policy. If you do not agree to our use of cookies in this way, you should set your browser settings accordingly or not use PigeonSENT.'};
    snackbarContainer.MaterialSnackbar.showSnackbar(data);
  });
}());
</script>
</div>
        </div>
      </header>
      <main class="mdl-layout__content">
        <div class="mdl-layout__tab-panel is-active" id="overview">
					<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong>Service offline!</strong> This site is under maintainence and several functions may not work.
</div>
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
              <div class="mdl-card__supporting-text">
                <h4>Welcome!</h4>
                Welcome to PigeonSENT - The NextGen Chatting App! This application is still under early development, so please report any glitches or bugs at our Discord Server. To contact us otherwise, add "Help" in your PigeonSENT Contacts and we'll be more than happy to help you out with your issue.            </div>
            <br><button id="discord" a onclick="discord()" type="button" class="mdl-button mdl-button--raised">Visit Discord Server</button></div>
            <br>
<br>
	            
						<button id="show-modal-example" type="button" class="mdl-button mdl-button--raised">View Changelog</button>

<dialog class="mdl-dialog" id="modal-example">
    <div class="mdl-dialog__content">
        <p>
					Welcome back to PigeonSENT! Here's some changes we've made :  </p><iframe style="width:100%; height:77%;" frameBorder="0" src="http://pigeonsent.ueuo.com/news.html" ></iframe>
    </div>
    <div class="mdl-dialog__actions mdl-dialog__actions--full-width">
        <button type="button" class="mdl-button">Okay!</button>
    </div>
</dialog>
            <script>
							(function() {
        'use strict';
        var dialog = document.querySelector('#modal-example');
        var closeButton = dialog.querySelector('button');
        var showButton = document.querySelector('#show-modal-example');
        if (! dialog.showModal) {
            dialogPolyfill.registerDialog(dialog);
        }
        var closeClickHandler = function(event) {
            dialog.close();
        };
        var showClickHandler = function(event) {
            dialog.showModal();
        };
        showButton.addEventListener('click', showClickHandler);
        closeButton.addEventListener('click', closeClickHandler);
    }());
						</script>
             </section>
  	        </div>
        <div class="mdl-layout__tab-panel" id="features">
          <section class="section--center mdl-grid mdl-grid--no-spacing">
            <div class="mdl-cell mdl-cell--12-col">
              <h4>Log In / Sign Up Now!</h4>
              Log In / Sign Up to access the extensive features of PigeonSENT!
<br>
              <br>
             	<!--FORM STARTS-->
    <div class="page-content"><form action="http://pigeonsent.ueuo.com/login/login.php" method="POST">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" placeholder="Enter Username" name="uid" id="Uid" required>
    <label class="mdl-textfield__label" for="sample3">Name: &nbsp</label>
  </div>
      <br>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="password" placeholder="Enter Password" name="pwd" required>
    <label class="mdl-textfield__label" for="sample3">Password &nbsp</label>
  </div>
<br><br>
			
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"type="submit" style="float:middle">
 Log In
</button>&nbsp
			
			
						<button id="show-modal-exampl" type="button" class="mdl-button mdl-button--raised">Sign Up</button>

<dialog class="mdl-dialog" id="modal-exampl">
    <div class="mdl-dialog__content">
        <iframe src="Register.php" scrolling="no" height="510px">
					
			</iframe>
    </div>
    <div class="mdl-dialog__actions mdl-dialog__actions-">
        <button type="button" class="mdl-button">Close</button>
    </div>
</dialog>
			     <script>
							(function() {
        'use strict';
        var dialog = document.querySelector('#modal-exampl');
        var closeButton = dialog.querySelector('button');
        var showButton = document.querySelector('#show-modal-exampl');
        if (! dialog.showModal) {
            dialogPolyfill.registerDialog(dialog);
        }
        var closeClickHandler = function(event) {
            dialog.close();
        };
        var showClickHandler = function(event) {
            dialog.showModal();
        };
        showButton.addEventListener('click', showClickHandler);
        closeButton.addEventListener('click', closeClickHandler);
    }());
						</script>
			
			

      <!--button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" a onclick="signup()" style="float:middle">
  Sign Up
</a>&nbsp&nbsp
		<script>
function signup() {
    window.open("http://pigeonsent.ueuo.com/Register.php", "_blank", "toolbar=no,scrollbars=no,resizable=no,top=500,left=500,width=400,height=400");
}
</script--!>
	<?php
echo "<span style='color:#FF0000;text-align:center;'> $iid </span> ";
?>
</form>
</div>
	

								<script>
function discord() {
    window.open("https://discord.gg/m9dg7U3", "_blank");
}
</script>
				<!--Login-form-ends-here-->
          <br>
							<br>
							
							<h2>
								
							</h2>
							<br>
    
  	        </div>
          </section>
	
        </div>
				
				<div class="mdl-layout__tab-panel" id="about">
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
              <div class="mdl-card__supporting-text">
                <h4>About</h4>
               At PigeonSENT, we are focused on providing great services with the highest levels of customer satisfaction – we will do everything we can to meet your expectation
With a variety of options to choose from, we’re sure you’ll be happy working with us
            </div>
            <br>
<br>
						
          
             </section><br><br>
					
					<section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
						<div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
	            <div class="mdl-card__supporting-text">
								<h4>By Martin Luther King Day 2018 can &nbsp;</h4>
               	<style>
.demo-list-item {
  width: 300px;
}
</style>

<ul class="demo-list-item mdl-list">
  <li class="mdl-list__item">
    <span class="mdl-list__item-primary-content">
      	&#8226; &nbsp; Use Swag "DPs"
		
</span>
  </li>
  <li class="mdl-list__item">
    <span class="mdl-list__item-primary-content">
      &#8226; &nbsp; Transfer your files safely!
    </span>
  </li>
  <li class="mdl-list__item">
    <span class="mdl-list__item-primary-content">
      &#8226; &nbsp; Create Groups to chat!
    </span>
  </li>
	  <li class="mdl-list__item">
    <span class="mdl-list__item-primary-content">
      &#8226; &nbsp; Verify new accounts using Email!
    </span>
  </li>
	  <li class="mdl-list__item">
    <span class="mdl-list__item-primary-content">
      &#8226; &nbsp; Forget your Password to recover it with us!
    </span>
  </li>
		  <li class="mdl-list__item">
    <span class="mdl-list__item-primary-content">
      &#8226; &nbsp; Contact Us!
    </span>
  </li>
</ul>
            </div>
						</div>
						</section>
  	        </div>

				<div class="mdl-layout__tab-panel" id="contact">
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
              <div class="mdl-card__supporting-text">
								<h4>Contact us </h4>
              Contact us at Discord or by contacting "Help" in PigeonSENT!
            </div>
            <br><button id="discord" a onclick="discord()" type="button" class="mdl-button mdl-button--raised">Discord </button></div>
            <br>
<br>
						
          
             </section><br><br>
					
  	        </div>
				
  	        </div>
          
	
        </div>
				
				
      </main>
    </div>


    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>

  </body>
</html>
