<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>DASHBOARD</title>
		<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
		<link href="style_main.css?v=e031e80c3d8b" rel="stylesheet">

		<script>
			function timer_on(){
				var timer1 = document.getElementById('timer');
				timer1.style.visibility='visible';
			}
			function load_data() {
 				var xhttp = new XMLHttpRequest();
        		xhttp.onreadystatechange = function() {
            	if (this.readyState == 4 && this.status == 200) {
					document.getElementById("ldrbrd_cont").innerHTML = this.responseText;
               	}
        	};
  				xhttp.open("GET", "leaderboard_php.php", true);//file_name will be changed
  				xhttp.send();
  				var t = setTimeout(load_data,3000);
			}
		</script>

		<style type="text/css">
			#timerPanel{
				display: inline;
			}
		</style>

	</head>
	<body onload="load_data()">
		<div id="container">
			<div id="c1"></div>

			<div id="dbrd">
				<span><?php echo $tN; ?></span>
				<br>
					<?php
						include 'HOST.php';
						$PP = "TIME LEFT: ";
						$DD = mysqli_query($link, "SELECT UNIX_TIMESTAMP() AS TST FROM DUAL;") -> fetch_assoc();
						$tStp = $DD['TST'];
						$query = "SELECT * FROM users WHERE `TeamName` = '".$tN."' ORDER BY Level ASC;";
						$response = mysqli_query($link, $query) -> fetch_assoc();
						$query = "SELECT * FROM questions WHERE `QuestionLevel` = ".$response['level'].";";
						$response = mysqli_query($link, $query) -> fetch_assoc();
						$time = strtotime($response['EndTime']) - $tStp;
						if($tStp < strtotime($response['StartTime'])){
							$PP = "Next Question In: ";
							$time = $time - strtotime($response['EndTime']) + strtotime($response['StartTime']);
						}
						if($time < 0){
							$query2 = "UPDATE users SET level = level + 1 WHERE `TeamName` = '".$tN."';";
							if(mysqli_query($link, $query2)){
								echo "SUCCESS";
							}else
								echo "DIE";
							//header("Location: index.php");
						}
						echo $PP."<div id='timerPanel'>".round($time / 60)."</div> Minutes";
					?>
			</div>
			<img id="logo_mob" src="images/ccs_logo2 (1).png" width="12%" height="10%">
			<div id="log_out" onclick="window.location = 'index.php'">Log-out</div>

			<div id="headr">
				<img id="logo" src="images/ccs_logo2 (1).png" width="7%" height="100%">
			</div>	

			<div id="event_name">
				CIPHER HUNT
			</div>

			<div id="ques">
				<p id="q_heading">
					Question:
				</p>
				<p id="ques_cont">
					<?php
						if($tStp < strtotime($response['StartTime'])){
							echo "The Question is not available as of Yet!";
						}else if($tStp > strtotime($response['EndTime'])){
							echo "The Question has been Closed for Submission. Thank You!";
						}else{
							echo $response['Question']."<br>";
							if($tStp > strtotime($response['Hint1Time'])){
								echo "<b>HINT 1: </b>".$response['HINT1']."<br>";
							}else{
								echo "<b>HINT 1</b> will load at ".$response['Hint1Time']."<br>";
							}
							if($tStp > strtotime($response['Hint2Time'])){
								echo "<b>HINT 2: </b>".$response['HINT2']."<br>";
							}
							else{
								echo "<b>HINT 2</b> will load at ".$response['Hint2Time']."<br>";
							}
							if($tStp > strtotime($response['Hint3Time'])){
								echo "<b>HINT 3: </b>".$response['HINT3']."<br>";
							}
							else{
								echo "<b>HINT 3</b> will load at ".$response['Hint3Time']."<br>";
							}
						}
					?><br><br>
				</p>
				<?php if(isset($msg)) echo $msg; ?>
			</div>
			<div id="form_id">
				<form id="this_form" method="POST" action="submitQuestion.php">
					<input id="answr" type="text" name="answer">
					<input type="hidden" name="teamID" value="<?php echo $tN; ?>">
					<input type="hidden" name="qL" value="<?php echo $response['QuestionLevel']; ?>">
					<button id="sbmt" type="submit">Submit Answer</button>
				</form>
			</div>
			<div id="ldrbrd">
				<p id="ldrbrd_head">Leaderboard</p>
				<div id="ldrbrd_cont"></div>
			</div>
		</div>

		<script type="text/javascript">
			setInterval(function(){
				var time = document.getElementById('timerPanel').innerHTML;
				time = parseInt(time);
				document.getElementById('timerPanel').innerHTML = time - 1;
				if(time <= 1){
					alert('Time for this Question is now over. You are about to be logged out...');
					window.location = 'index.php'
				}
			}, 60000)
		</script>

	</body>
</html>
