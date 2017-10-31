<?php
	$tN = $_POST['uname'];
	$Pd = $_POST['passwd'];
	$Pd = hash('ripemd160', $Pd);
	$msg = '';
	include 'HOST.php';
	$query = "SELECT * FROM users WHERE `TeamName` = '".$tN."';";
	$checkP = mysqli_query($link, $query) -> fetch_assoc();
	echo $Pd == $checkP['Pass'];
	if($checkP['Pass'] == $Pd){
		include 'mainPage.php';
	}else{
		$msg = $msg."Incorrect credentials,go back and try again!!";
		include 'index.php';
	}
?>
