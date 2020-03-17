<?php 
session_start();

include 'dbh.php';

$username = $_POST['uname'];
$password = $_POST['psw'];
$score = 0;
$lvl = 1;
$avatar = "images/avatar/standart.png";

$sql = "SELECT uid FROM profile WHERE uid='$username'";
$result = mysqli_query($conn, $sql);
$usernamecheck = mysqli_num_rows($result); 

if ($usernamecheck > 0){
 header("Location: index.php?error=username");
 exit();
}
else{
$sql = "INSERT INTO profile (uid, pwd, score, lvl, avatar) VALUES ('$username', '$password', '$score', '$lvl', '$avatar')";

$result = mysqli_query($conn, $sql);

header("Location: index.php");
}