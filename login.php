<?php
session_start();

include 'dbh.php';

$username = mysqli_real_escape_string($conn, $_POST['uname']);
$password = mysqli_real_escape_string($conn, $_POST['psw']);

$sql = "SELECT * FROM profile WHERE uid='$username' AND pwd='$password'";

$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)){
	$_SESSION['button_gedrueckt'] = true;
}
else{
	$_SESSION['id'] = $row['id'];
	$_SESSION['username'] = $row['uid'];
	$_SESSION['level'] = $row['lvl'];
	$_SESSION['score'] = $row['score'];
	$_SESSION['avatar'] = $row['avatar'];
	$_SESSION['xp'] = $row['xp'];
	$_SESSION['login_tester'] = true;
	
	if ($row['score'] >= 50){
		$update = "UPDATE profile
		SET ach_1=1
		WHERE uid='$username';";
		mysqli_query($conn, $update);
	}
	if ($row['score'] >= 100){
		$update = "UPDATE profile
		SET ach_1=1, ach_2=1
		WHERE uid='$username';";
		mysqli_query($conn, $update);
	}
	if ($row['score'] >= 150){
		$update = "UPDATE profile
		SET ach_1=1, ach_2=1, ach_3=1
		WHERE uid='$username';";
		mysqli_query($conn, $update);
	}
	
	$_SESSION['ach_1'] = $row['ach_1'];
	$_SESSION['ach_2'] = $row['ach_2'];
	$_SESSION['ach_3'] = $row['ach_3'];
	$_SESSION['ach_4'] = $row['ach_4'];
	$_SESSION['ach_5'] = $row['ach_5'];
	$_SESSION['ach_6'] = $row['ach_6'];
	}


header("Location: index.php");