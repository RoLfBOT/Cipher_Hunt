<?php

	function endsWith($haystack, $needle){
		$length = strlen($needle);
		return $length === 0 || 
		(substr($haystack, -$length) === $needle);
	}
	function mailStatus($mailID){
		return endsWith($mailID, '@gmail.com');
	}

	$tName = $_POST['tName'];
	$mem1 = $_POST['m1'];
	$mem2 = $_POST['m2'];
	$mem3 = $_POST['m3'];
	$rol1 = $_POST['r1'];
	$rol2 = $_POST['r2'];
	$rol3 = $_POST['r3'];
	$pawd = $_POST['pwd'];
	$cPd = $_POST['pwdCnf'];
	$mail = $_POST['mail'];
	$PhNo = $_POST['phno'];

	$message = "";

	if($pawd != $cPd){
		$message = $message."Passwords Do not match. Aborting".$pawd." ".$cPd."<br>";
	}
	if(!mailStatus($mail)){
		$message = $message."Mail Invalid<br>";
	}
	if(strlen($PhNo) != 10){
		$message = $message."Phone Number Invalid<br>";
	}
	if(strlen($rol1) != 9){
		$message = $message."Team Member 1 Roll Number Invalid<br>";
	}
	if(strlen($rol2) != 9 && strlen($rol2) != 0){
		$message = $message."Team Member 2 Roll Number Invalid<br>";
	}
	if(strlen($rol3) != 9 && strlen($rol3) != 0){
		$message = $message."Team Member 1 Roll Number Invalid<br>";
	}
	if($rol2 == '')
		$rol2 = 'NULL';
	if($rol3 == '')
		$rol3 = 'NULL';
	if($PhNo== '')
		$PhNo = 'NULL';

	$pawd = hash('ripemd160', $pawd);
	include 'HOST.php';
	$query = "INSERT INTO users VALUES ('".$tName."', '".$mem1."', '".$mem2."', '".$mem3."', ".$rol1.", ".$rol2.", ".$rol3.", '".$pawd."', '".$mail."', ".$PhNo.", '0', '0');";
	if($msg == '' && mysqli_query($link, $query)){
		$message = "Registration Success";
	}else{
		if($msg == '')
			$message = $message."Issue registering<br>Probably team name is already taken...";
	}
	include 'index.php';
?>