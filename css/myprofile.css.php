<?php
	header('Content-type: text/css');

	session_start();
	
	$xp = $_SESSION['xp'];
;

	if ($xp > 90){
		$xp_border = "25px 25px 25px 25px"; 	
	}
	else{
		$xp_border = "25px 0px 0px 25px"; 
	}
?>

body{

}

/* Deaktivviert */
.deactive{
	cursor: not-allowed;
}

/* Header */

.header_top{
height: 150px;
width: 100%;
background-color: rgba(39,35,35,1.00);	
}

.banner_logo{
	display: block;
	margin: auto;
}

/* Header - Profil */

.header_profil{
	position: absolute;
	top: 25px;
	left: 25px;
	box-sizing: border-box;
    border: 2px solid rgba(49,42,42,1.00);
	background-color: rgba(22,19,19,1.00);
	width: 250px;
	min-width: 300px;
	height: 100px;
}

.header_profil_avatar{
	margin-top: 25px;
	margin-left: 10px;
	width: 50px;
	float: left;
}

.header_profil_info{
	color: rgba(240,230,230,1.00);
	font-family: Orbitron;
	font-size: 14px;
	width: 230px;
	float: right;
	margin-top: 22.5px;
}

.username_high{
	color: rgba(33,169,191,1.00);
}

/* Navi */

.navigation{
	width: 100%;
	height: 50px;
	background-color: rgba(39,35,35,0.50);
	border-radius: 0px 0px 15px 15px;
	margin-left: 0px;
	font-family: Orbitron;
	font-size: 18px;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
	color: white;
	padding: 14px 17px;
	margin-left: 10px;
}

.active:hover {
	background-color: #111;
	cursor: pointer;
}

.navi_button{
	background-color: rgba(51,51,51,1.00);
    color: white;
    padding: 14px 17px;
    border: none;
    cursor: pointer;
	font-family: orbitron;
	font-size: 18px;
}

.navi_button:hover{
	background-color: #111;
	cursor: pointer;
}

.active2 {
    background-color: #111;
}
/* Navi - Login */
/* Full-width input fields */
.modalinput, input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
.buttonmodal {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
    color: white;
    margin: 8px 0;
    border: none;
    cursor: pointer;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.nac {
    float: right;
    padding-top: 16px;
	margin-left: 5px;
}

span.nac .rgs {
    color: #0000EE;
	text-decoration: underline;
}

span.nac .rgs:hover {
	cursor: pointer;
}


/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 25%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.nac {
       display: block;
       float: none;
    }
	span.nac .rgs {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
/* Navi - Spielersuche */
.playersuche{
	height: auto;
	width: 300px;
	float: right;
	z-index: 100000;
	position: absolute;
	top: 0;
	right: 50px;
	}
	
	.inputsuche {
    width: 200px;
    box-sizing: border-box;
    border: 2px solid rgba(49,42,42,1.00);
	border-right: none;
	border-top: none;
    border-radius: 0px 0px 0px 4px;
    font-size: 16px;
	color: white;
    background-color: rgba(22,19,19,1.00);
    padding: 10px 10px 10px 12px;
	-webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
	float: left;
}

	.inputsuche:focus{
    	border: 2px solid #41F36D;
		border-right: none;
		border-top: none;
	}
	
	.inputsuche:focus + .buttonsuche{
    	border: 2px solid #41F36D;
		border-left: none;
		border-top: none;
	}
	
	.buttonsuche {
		box-sizing: border-box;
    	border: 2px solid rgba(49,42,42,1.00);
		border-left: none;
		border-top: none;
   		border-radius: 0px 0px 4px 0px;
		background-color: rgba(22,19,19,1.00);
    	font-size: 28px;
    	color: #FFFFFF;
    	padding: 9px;
    	text-align: center;
		-webkit-transition: 0.5s;
   		transition: 0.5s;
    	outline: none;
    	text-decoration: none;
    	overflow: hidden;
    	cursor: pointer;
	}
	
	.suchimage{
		height: 20px;
		width: 20px;
	}
	
/* Error Message */
 /* The snackbar - position it at the bottom and in the middle of the screen */
#error_message {
    visibility: hidden; /* Hidden by default. Visible on click */
    min-width: 250px; /* Set a default minimum width */
    margin-left: -125px; /* Divide value of min-width by 2 */
    background-color: #333; /* Black background color */
    color: rgba(233,57,60,1.00); /* White text color */
	font-weight: bold;
    text-align: center; /* Centered text */
    border-radius: 2px; /* Rounded borders */
    padding: 16px; /* Padding */
    position: fixed; /* Sit on top of the screen */
    z-index: 1; /* Add a z-index if needed */
    left: 50%; /* Center the snackbar */
    bottom: 60px; /* 30px from the bottom */
}

/* Show the snackbar when clicking on a button (class added with JavaScript) */
#error_message.show {
    visibility: visible; /* Show the snackbar */

/* Add animation: Take 0.5 seconds to fade in and out the snackbar.
However, delay the fade out process for 2.5 seconds */
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

/* Animations to fade the snackbar in and out */
@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 60px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 60px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 60px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 60px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}

/* Content */

/* My Profile - Topbar */
.myprofile_topbar{
	height: 150px;
	width: 100%;
	background-color: rgba(18,16,16,0.90);
	margin-top: 100px;
}	

.myprofile_avatar{
	position: absolute;
	margin-top: -50px;
	margin-left: 15%;
	box-shadow: 8px 11px 23px 16px rgba(0,0,0,0.35);
}

.myprofile_name{
	position: absolute;
	font-family: Orbitron;
	font-size: 42px;
	text-align: center;
	font-weight: bold;
	margin-top: 33px;
	margin-left: 30%;
}

.myprofile_level{
	position: absolute;
	font-family: Orbitron;
	font-size: 42px;
	text-align: center;
	font-weight: bold;
	margin-top: 33px;
	margin-left: 50%;
	color: rgba(240,230,230,1.00);
}

#myProgress {
  position: relative;
  margin-top: 15px;
  width: 100%;
  height: 30px;
  background-color: #ddd;
  border-radius: 25px 25px 25px 25px;
}

#myBar {
  position: absolute;
  width: <?=$xp."%"?>;
  height: 100%;
  background-color: #4CAF50;
  border-radius: <?=$xp_border?>;
}

#label {
	position: absolute;
  text-align: center;
  font-size: 16px;
  line-height: 30px;
  color: white;
}

.myprofile_score{
	position: absolute;
	font-family: Orbitron;
	font-size: 42px;
	text-align: center;
	font-weight: bold;
	margin-top: 33px;
	margin-left: 70%;
	color: rgba(240,230,230,1.00);
}

.myprofile_level_zahl{
	color: rgba(16,184,108,1.00);
}

.myprofile_score_zahl{
	color: rgba(16,184,108,1.00);
}
	
/* My Profile - Main */

.myprofile_main{
	width: 100%;
	height: 500px;
	margin-top: 100px;
	background-color: rgba(18,16,16,0.90);
	
}

.myprofile_main_title_bar{
	width: 100%;
	height: 7.5px;
	background-color: rgba(40,38,36,1.00);
}

.myprofile_achievements{
	/* background-color: rgba(119,82,83,1.00); */
	position: absolute;
	width: 500px;
	height: 400px;
	margin-top: 50px;
	margin-left: 50px;
}

.myprofile_achievements_titel{
	text-align: center;
	font-family: Orbitron;
	font-size: 45px;
	color: rgba(240,230,230,1.00);
}

.myprofile_achievements_picture_box{

}

.myprofile_achievements_picture{
	border: rgba(40,38,36,1.00) solid 5px;
	border-radius: 5%;
	cursor: pointer;
}

.myprofile_achievements_picture_locked{
	border: rgba(40,38,36,1.00) solid 5px;
	border-radius: 5%;
	cursor: not-allowed;
}

.myprofile_achievements_picture_locked_last{
	border: rgba(40,38,36,1.00) solid 5px;
	border-radius: 5%;
	cursor: not-allowed;
}

.myprofile_achievements_picture_last{
	border: rgba(40,38,36,1.00) solid 5px;
	border-radius: 5%;
	cursor: pointer;
}

.myprofile_achievements_picture:hover{
	border: #41F36D solid 5px;
}

.myprofile_achievements_picture_last:hover{
	border: #41F36D solid 5px;
}

.myprofile_achievements_picture_locked:hover{
	border: rgba(223,15,41,1.00) solid 5px;
}

.myprofile_achievements_picture_locked_last:hover{
	border: rgba(223,15,41,1.00) solid 5px;
}

.myprofile_achievements_picture_standart{
	margin-top: 25px;
	margin-right: 53.34px;
	float: left;
}

.myprofile_achievements_picture_standart_last{
	margin-top: 25px;
	float: left;
}

.myprofile_achievements_picture_standart .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: rgba(0,0,0,0.95);
    color: rgba(40,223,89,1.00);
	font-size: 13px;
	font-family: Arial;
    text-align: center;
    padding: 5px 0px;
    border-radius: 6px;
 	opacity: 0;
    transition: opacity 1s;
	
    /* Position the tooltip text - see examples below! */
	position: absolute;
	z-index: 1;
}

/* Show the tooltip text when you mouse over the tooltip container */
.myprofile_achievements_picture_standart:hover .tooltiptext {
    visibility: visible;
	opacity: 1;
}

.myprofile_achievements_picture_standart .tooltiptext::after {
    content: " ";
    position: absolute;
    top: 50%;
    right: 100%; /* To the left of the tooltip */
    margin-top: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: transparent black transparent transparent;
}

.myprofile_achievements_picture_standart_last .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: rgba(0,0,0,0.95);
    color: rgba(40,223,89,1.00);
	font-size: 13px;
	font-family: Arial;
    text-align: center;
    padding: 5px 0px;
    border-radius: 6px;
 	opacity: 0;
    transition: opacity 1s;
	
    /* Position the tooltip text - see examples below! */
	position: absolute;
	z-index: 1;
}

/* Show the tooltip text when you mouse over the tooltip container */
.myprofile_achievements_picture_standart_last:hover .tooltiptext {
    visibility: visible;
	opacity: 1;
}

.myprofile_achievements_picture_standart_last .tooltiptext::after {
    content: " ";
    position: absolute;
    top: 50%;
    right: 100%; /* To the left of the tooltip */
    margin-top: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: transparent black transparent transparent;
}


/* Leaderboard */
.leaderbox{
	width: auto;
	height: auto;
	margin-top: 100px;
	background-color: rgba(0,0,0,0.80);
	border-radius: 25px 25px 25px 25px;
	margin-left: 37.5%;
	margin-right: 37.5%;
	padding-bottom: 20px;
	-webkit-box-shadow: 8px 11px 23px 16px rgba(0,0,0,0.75);
	-moz-box-shadow: 8px 11px 23px 16px rgba(0,0,0,0.75);
	box-shadow: 8px 11px 23px 16px rgba(0,0,0,0.75);
}

table {
    border-collapse: collapse;
    width: 80%;
	margin: auto;
	margin-top: 10px;
}

th, td {
    text-align: left;
	padding: 8px;
	color: white;
}

.rank{
	text-align: center;
	width: 10%;
	border-right: medium solid rgba(0,0,0,0.80);
}

.player{
	width: 55%;
	margin-left: 5px;
	border-right: medium solid rgba(0,0,0,0.80);
}

.score{
	text-align: center;
	width: 35%;
}

tr:nth-child(even){}

th {
    background-color: rgba(44,44,44,1.00);
    color: white;
	border-bottom: medium solid rgba(0,0,0,0.80);
	border-top: medium solid rgba(0,0,0,0.80);
}


/* Foobar */
	
.footbar{
	bottom: 0px;
	position: relative;	
	width: 100%;
	height: 50px;
	background-color: rgba(20,20,20,1.00);
	left: 0px;
	margin-top: 150px;
	float: left;
}

.footbar_text{
	float: left;
	width: auto;
	height: auto;
	margin-top: 20px;
	margin-left: 2%;
}

.footbar_navi{
	float: right;
	width: auto;
	height: auto;
	margin-top: 20px;
}

.footbar_navi_text{
	color: rgba(126,126,126,1.00);
	padding-right: 20px;
	font-size: 14px;
}
	
.footbar_navi_text:hover {
	color: #D3191C;
}
	
a{
	text-decoration: none;
	color: white;
}