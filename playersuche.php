<?php
session_start();

include 'dbh.php';

$suchinput = mysqli_real_escape_string($conn, $_GET['suchanfrage']);

$sql1 = "SELECT * FROM profile WHERE uid='$suchinput'";

$result1 = mysqli_query($conn, $sql1);

if (!$row1 = mysqli_fetch_assoc($result1)){
	$_SESSION['suchanfrage_ergebnis'] = false;
	$_SESSION['suche_eingabe'] = $suchinput;
}
else{
	$_SESSION['suche_id'] = $row1['id'];
	$_SESSION['suche_username'] = $row1['uid'];
	$_SESSION['suche_level'] = $row1['lvl'];
	$_SESSION['suche_score'] = $row1['score'];
	$_SESSION['suche_avatar'] = $row1['avatar'];
	$_SESSION['suche_xp'] = $row1['xp'];
	$_SESSION['suchanfrage_ergebnis'] = true;
	
	if ($row1['score'] >= 50){
		$update = "UPDATE profile
		SET ach_1=1
		WHERE uid='$suchinput';";
		mysqli_query($conn, $update);
	}
	if ($row1['score'] >= 100){
		$update = "UPDATE profile
		SET ach_1=1, ach_2=1
		WHERE uid='$suchinput';";
		mysqli_query($conn, $update);
	}
	if ($row1['score'] >= 150){
		$update = "UPDATE profile
		SET ach_1=1, ach_2=1, ach_3=1
		WHERE uid='$suchinput';";
		mysqli_query($conn, $update);
	}
	
	$_SESSION['suche_ach_1'] = $row1['ach_1'];
	$_SESSION['suche_ach_2'] = $row1['ach_2'];
	$_SESSION['suche_ach_3'] = $row1['ach_3'];
	$_SESSION['suche_ach_4'] = $row1['ach_4'];
	$_SESSION['suche_ach_5'] = $row1['ach_5'];
	$_SESSION['suche_ach_6'] = $row1['ach_6'];
}

header("Location: player.php");