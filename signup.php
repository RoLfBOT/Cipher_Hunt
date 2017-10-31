<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>SIGN UP</title>
		<script></script>
		<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
		<link href="style_signup.css?v=e031e80c3d8b" rel="stylesheet">
	</head>

	<style type="text/css">
		.messagePanel{
			text-align: center;
		}
	</style>

	<script type="text/javascript">
		function load_data() {
 				var xhttp = new XMLHttpRequest();
        		xhttp.onreadystatechange = function() {
            	if (this.readyState == 4 && this.status == 200) {
					document.getElementById("ldrbrd_cont").innerHTML = this.responseText;
               	}
        	};
  				xhttp.open("GET", "userData.php?u=" + document.getElementById('team_name').value, true);//file_name will be changed
  				xhttp.send();
  				var t = setTimeout(load_data,3000);
			}
	</script>

	<body>
		<div id="container">
			<div id="logo_header"></div>
			<div id="logo">
				<img id="logo_top" src="images/ccs_logo_black.png" width="16%" height="85%">
			</div>
			<div id="heading_name">
				<img id="logo_top_mob" src="images/ccs_logo_black.png" width="12%" height="10%">CIPHER HUNT
			</div>
			<div id="login_form">
				<form id="this_form" enctype="multipart/form-data" method="POST" action="register.php">
					<div id="banner">Sign-Up</div>
					<input type="text" id="team_name" name="tName" placeholder="Enter team-name" onkeypress="load_data();" required>
					<div id="ldrbrd_cont"></div>
					<input type="text" id="team_mem" name="m1" placeholder="Member 1" required>
					<input type="text" id="team_mem" name="r1" class="rnum" placeholder="Roll no." required>

					<input type="text" id="team_mem" name="m2" placeholder="Member 2">
					<input type="text" id="team_mem" name="r2" class="rnum" placeholder="Roll no.">

					<input type="text" id="team_mem" name="m3" placeholder="Member 3">
					<input type="text" id="team_mem" name="r3" class="rnum" placeholder="Roll no.">

					<input type="password" id="pass" name="pwd" placeholder="Set password" required>
					<input type="password" id="pass_rpt" name="pwdCnf" placeholder="Confirm password" required>

					<input type="text" id="e_mail" name="mail" placeholder="Enter your gmail id" required>

					<input type="text" id="ph_no" name="phno" placeholder="Enter your phone number">

					<button type="submit" id="sbmt">Sign-up</button>
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
