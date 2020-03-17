<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "player_profile");

if (!$conn){
	die("Connection failed: " . mysqli_connect_error());	
}