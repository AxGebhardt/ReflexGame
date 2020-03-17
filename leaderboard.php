<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
	session_start();
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700&subset=vietnamese' rel='stylesheet' type='text/css'/>
    <link href='https://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'/>
    <link href="https://fonts.googleapis.com/css?family=Orbitron:400,500" rel="stylesheet" type="text/css"/>
    <link href='https://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet' type='text/css'>
	<title>Leaderboard</title>
    
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="favicon.png" sizes="32x32">
    
    <!-- Mobile -->
	<meta name="viewport" content="width=device-width; initial-scale=1.0;" />  

	<!-- CSS -->
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/leaderboard.css" >

</head>

<body style="background-image:url(images/assets/background.jpg);background-size:cover;background-repeat:no-repeat;">

<!-- Header -->	
			<?php 
				if (isset($_SESSION['login_tester']) == false){
            ?>
            	<!-- Nothing -->
            <?php
				}else{
			?>
            	<div class="header_profil">
            		<div class="header_profil_avatar">
                    	<img src="<?php echo $_SESSION['avatar'];?>" height="50px" width="50px" />
                    </div>
                    <div class="header_profil_info">
                    	Welcome <span class="username_high"><?php echo $_SESSION['username']; ?></span> <br />
                        Highest Score: <?php echo $_SESSION['score']; ?><br />
                        Level: <?php echo $_SESSION['level']; ?><br />
                    </div>
            	</div>
            <?php
				}
			?>
<div class="playersuche">
        		<form name="suche2" action="playersuche.php" method="get">
				<input id="suchanfrageinput" class="inputsuche" type="text" name="suchanfrage" value="" size="20" maxlength="50" placeholder="Search for Players..." />
                <button class="buttonsuche"><img class="suchimage" src="images/assets/search_icon1.png" /></button>
				</form>                     
</div>  
<div class="header_top">
    	<!-- <a href="game.php"> --> <img src="images/assets/top10_bannerlogo.png" class="banner_logo" alt="Logo"/> <!-- </a> --> 
 </div>
    <!-- Header --> 
    
    <!-- Navi -->
    
    <div class="navigation">
    	 <ul>
  			<li><a href="index.php">Home</a></li>
  			<li><a href="" class="deactive">News</a></li>
 			<li><a class="active2" href="leaderboard.php">Leaderboard</a></li>
            
            <?php 
			if (isset($_SESSION['login_tester']) == false){
            ?>
            <li class="active" style="float:right" onclick="document.getElementById('register').style.display='block'">Register</li>
            <li class="active" style="float:right" onclick="document.getElementById('login').style.display='block'">Login</li>
            <?php
			}else{
			?>
            <li><a href="myprofile.php">My Profile</a></li>
            <form action="logout.php" method="post">
			<button class="navi_button" style="float:right" type="submit">Log out</button>
            </form>
            <?php
			}
			?>
		</ul> 
    </div>
    
    <!-- Navi -->
    
    <!-- Login -->
    <!-- Login Fenster -->
	<div id="login" class="modal">
  		<span onclick="document.getElementById('login').style.display='none'"
		class="close" title="Close Modal">&times;</span>

  	<!-- Login Content -->
  	<form class="modal-content animate" action="login.php" method="POST">
    <div class="imgcontainer">
      <img src="images/assets/avatar.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input class="modalinput" type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button class="buttonmodal" type="submit" name="login_button">Login</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('login').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="nac">No Account yet? <span class="rgs" onclick="document.getElementById('login').style.display='none'; document.getElementById('register').style.display='block'">Register</span></span>
    </div>
  </form>
  </div>
  
  <?php
  if (!isset($_SESSION['button_gedrueckt'])){
	
}
  else{
	echo "<div id=\"error_message\">Wrong Username or Password!</div>"; 
	echo "<script language='javascript'>
	{
    var x = document.getElementById(\"error_message\")

    x.className = \"show\";

    setTimeout(function(){ x.className = x.className.replace(\"show\", \"\"); }, 3000);
}
	</script>";
	echo "<script language='javascript'>document.getElementById('login').style.display='block';</script>";
	
	session_destroy();
  }
  ?>
  <!-- Script -->	
  	<script>
		var modal = document.getElementById('login');

		window.onclick = function(event) {
  	  if (event.target == modal) {
  	      modal.style.display = "none";
   	 }
		}
	</script>
    <!-- Script -->
    <!-- Login -->
    
    <!-- Register -->
    <!-- Register Fenster -->
	<div id="register" class="modal">
  		<span onclick="document.getElementById('register').style.display='none'"
		class="close" title="Close Modal">&times;</span>

  	<!-- Register Content -->
  	<form class="modal-content animate" action="signup.php" method="POST">
    <div class="imgcontainer">
      <img src="images/assets/avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input class="modalinput" type="text" placeholder="Enter Username" name="uname" maxlength="10" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button class="buttonmodal" type="submit">Sign Up</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('register').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
  </div>
  <!-- Script -->	
  	<script>
		var modal2 = document.getElementById('register');

		window.onclick = function(event) {
  	  if (event.target == modal2) {
  	      modal2.style.display = "none";
   	 }
		}
	</script>
    <!-- Script -->
    
    <?php
  	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	
	if (strpos($url, 'error=username') !== false){
		echo "<div id=\"error_message\">Username already exists!</div>"; 
		echo "<script language='javascript'>
	{
    var x = document.getElementById(\"error_message\")

    x.className = \"show\";

    setTimeout(function(){ x.className = x.className.replace(\"show\", \"\"); }, 3000);
}
	</script>";
	echo "<script language='javascript'>document.getElementById('login').style.display='block';</script>";	
	}
	?>
    
    <!-- Register -->
    
    <!-- Content -->
    <div class="leaderbox">
    <table>
  <tr>
    <th class="rank">Rank</th>
    <th class="player">Player</th>
    <th class="level">Level</th>
    <th class="score">Score</th>
  </tr>
  <?php 
	$verbindung = mysqli_connect ("localhost", "root", "") 
	or die("Fehler im System"); 

	mysqli_select_db ($verbindung, "player_profile") 
	or die("Es konnte keine Verbindung zur Datenbank hergestellt werden.");

	$abfrage = "SELECT uid, lvl, score, FIND_IN_SET( score, (
SELECT GROUP_CONCAT( score
ORDER BY score DESC ) 
FROM profile )
) AS rank
FROM profile
ORDER BY RANK ASC";
	$ergebnis = $verbindung->query($abfrage);
	$anzahl = 1;

	while($row2 = $ergebnis->fetch_assoc())
		{
			if ($anzahl <= 10){
			echo "<tr>
			<td class=\"rank\">" . $row2["rank"] . "</td>" . 
				"<form id=\"sucheleaderboard\" action=\"playersuche.php\" method=\"get\">
					<td class=\"player\">" . "<button id=\"sucheleaderboard\" class=\"leaderboard_name\" name=\"suchanfrage\" type=\"submit\" value=\"" . $row2['uid'] . "\"" . ">" . $row2['uid'] . "</button>" . "</td>
				</form>" . 
			"<td class=\"level\">" . $row2["lvl"] . "</td>" . 
			"<td class=\"score\">" . $row2["score"] . "</td>
			</tr>";
			$anzahl++;
			}
			else
			{
				mysqli_close($verbindung); 
				break;
			}
		} 
	?>﻿
	</table>
    </div>
    
    <!-- Content -->
    
    <!-- Footbar -->
        <div class="footbar">
   			<div class="footbar_text">
         		<a target="_blank" href="http://steamcommunity.com/id/iYKu/" >
                <font style="font-family: orbitron;font-size: 14px;font-style: italic;color: rgba(126,126,126,1.00);">&copy; Reflex</font></a>
                <br>
   			</div> 
            <div class="footbar_navi">
            	<a class="footlink deactive" target="_self" href=""><font class="footbar_navi_text">FAQ</font></a>
                <a class="footlink deactive" target="_self" href=""><font class="footbar_navi_text">Privacy Policy</font></a>
                <a class="footlink deactive" target="_self" href=""><font class="footbar_navi_text">Terms of Service</font></a>
                <a class="footlink deactive" target="_self" href=""><font class="footbar_navi_text">Contact Us</font></a>
            </div>
    	</div>
        <!-- Footbar -->


</body>
</html>