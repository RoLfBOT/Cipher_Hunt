<?php
	include 'HOST.php';
	$u = $_GET['u'];
	echo $u;
	$query = "SELECT * FROM Users WHERE TeamName = '".$u."';";
	$message = "";
	$resp = mysqli_query($link, $query);
	while($row = $resp -> fetch_assoc()){
		if($row['TeamName'] == $u){
			$message = ": Team Name already in Use<br>";
		}
	}
	if($message == ""){
		$message = ": Team Name is Available<br>";
	}
	echo $message;
?>