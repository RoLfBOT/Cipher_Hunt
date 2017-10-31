<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>LOGIN</title>
		<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
		<link href="style_login.css?v=e031e80c3d8b" rel="stylesheet">


	</head>
	<body>

		<?php if(isset($msg)) echo "<div id='myModal' class='modal'>
		  <div class='modal-content'>
		    <p>". $msg ."</p>
		  </div>

		</div>" ;?>
		<script>
			
		// Get the <span> element that closes the modal
		var moda = document.getElementById("myModal");
		var spa = document.getElementById("cross");

		// When the user clicks on <span> (x), close the modal
		spa.onclick = function() {
		    moda.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		    if (event.target == modal) {
		        moda.style.display = "none";
		    }
		}
		</script>


		<div id="container">
			<div id="logo_header"></div>
			<div id="logo">
				<img id="logo_top" src="images/ccs_logo_black.png" width="16%" height="85%">
			</div>
			<div id="heading_name">
				<img id="logo_top_mob" src="images/ccs_logo_black.png" width="12%" height="10%">CIPHER HUNT
			</div>
			<div id="login_form">
				<form id="this_form" enctype="multipart/form-data" method="POST" action="login.php">
					<div id="banner">Log-In</div>
					<input type="text" id="team_name" placeholder="Enter team-name" name="uname">
					<input type="password" id="pass" placeholder="Enter password" name="passwd">
					<button type="submit" id="sbmt">Log-in</button>
					<p id="o_r">or</p>
					<a href="signup.php"><div id="sign_up">Sign-Up</div></a>
				</form>
				<div class="messagePanel">
					<?php if(isset($message)) echo $message; ?>
				</div>
			</div>
			<div id="foot_nav">
			</div>
		</div>
	</body>
</html>
