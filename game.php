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
	<link rel="stylesheet" href="css/myprofile.css" >

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
        		<form name="suche2">
				<input id="suchanfrageinput" class="inputsuche" type="text" name="sucheanfrage" value="" size="20" maxlength="50" placeholder="Search for Players..." onkeydown="if (event.keyCode == 13) { profilsuchen(); return false; }" />
                <button class="buttonsuche"><img class="suchimage" src="images/assets/search_icon1.png" /></button>
				</form>                 
</div>  
<div class="header_top">
    	<!-- <a href="game.php"> --> <img src="images/assets/banner_logo.png" class="banner_logo" alt="Logo"/> <!-- </a> --> 
 </div>
    <!-- Header --> 
    
    <!-- Navi -->
    
    <div class="navigation">
    	 <ul>
  			<li><a href="index.php">Home</a></li>
  			<li><a href="news.php">News</a></li>
 			<li><a href="leaderboard.php">Leaderboard</a></li>
            
            <?php 
			if (isset($_SESSION['login_tester']) == false){
            ?>
            <li class="active" style="float:right" onclick="document.getElementById('register').style.display='block'">Register</li>
            <li class="active" style="float:right" onclick="document.getElementById('login').style.display='block'">Login</li>
            <?php
			}else{
			?>
            <li><a class="active2" href="myprofile.php">My Profile</a></li>
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
		// Get the modal
		var modal = document.getElementById('login');

		// When the user clicks anywhere outside of the modal, close it
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
		// Get the modal
		var modal2 = document.getElementById('register');

		// When the user clicks anywhere outside of the modal, close it
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
    <div class="myprofile_topbar">
    	<div class="myprofile_avatar">
        	<img src="<?php echo $_SESSION['avatar'];?>" height="150px" width="150px" />
        </div>
        <div class="myprofile_name">
        	<span class="username_high"><?php echo $_SESSION['username']; ?></span>
        </div>
        <div class="myprofile_level">
        	Level: <span class="myprofile_level_zahl"><?php echo $_SESSION['level']; ?></span>
        </div>
        <div class="myprofile_score">
        	Score: <span class="myprofile_score_zahl"><?php echo $_SESSION['score']; ?></span>
        </div>
    </div>
    
    <div class="myprofile_main">
    	<div class="myprofile_achievements">
        	<div class="myprofile_achievements_titel">
            	Achievements
            </div>	
            <div class="myprofile_main_title_bar">
            	<!-- Design -->
            </div>
            <div class="myprofile_achievements_picture_box">
            
            	<div class="myprofile_achievements_picture_standart">
				<?php if($_SESSION['ach_1'] == 0){echo "<img class=\"myprofile_achievements_picture_locked\" src=\"images/ach/1_0.png\" height=\"75px\" width=\"75px\"/>"; }else{ echo "<img class=\"myprofile_achievements_picture\" src=\"images/ach/1_1.png\" height=\"75px\" width=\"75px\"/>";} ?>
                <span class="tooltiptext">Get 50 Clicks in One Game!</span>
                </div>
                
                <div class="myprofile_achievements_picture_standart">
                <?php if($_SESSION['ach_2'] == 0){echo "<img class=\"myprofile_achievements_picture_locked\" src=\"images/ach/2_0.png\" height=\"75px\" width=\"75px\"/>"; }else{ echo "<img class=\"myprofile_achievements_picture\" src=\"images/ach/2_1.png\" height=\"75px\" width=\"75px\"/>";} ?>
                <span class="tooltiptext">Get 100 Clicks in One Game!</span>
                </div>
                
                <div class="myprofile_achievements_picture_standart">
                <?php if($_SESSION['ach_3'] == 0){echo "<img class=\"myprofile_achievements_picture_locked\" src=\"images/ach/3_0.png\" height=\"75px\" width=\"75px\"/>"; }else{ echo "<img class=\"myprofile_achievements_picture\" src=\"images/ach/3_1.png\" height=\"75px\" width=\"75px\"/>";} ?>
                <span class="tooltiptext">Get 150 Clicks in One Game!</span>
                </div>
                
                <div class="myprofile_achievements_picture_standart_last">
                <?php if($_SESSION['ach_4'] == 0){echo "<img class=\"myprofile_achievements_picture_locked_last\" src=\"images/ach/4_0.png\" height=\"75px\" width=\"75px\"/>"; }else{ echo "<img class=\"myprofile_achievements_picture_last\" src=\"images/ach/4_1.png\" height=\"75px\" width=\"75px\"/>";} ?>
                <span class="tooltiptext">Get into the Top 3!</span>
                </div>
                
                <div class="myprofile_achievements_picture_standart">
                <?php if($_SESSION['ach_5'] == 0){echo "<img class=\"myprofile_achievements_picture_locked\" src=\"images/ach/5.png\" height=\"75px\" width=\"75px\"/>"; }else{ echo "<img class=\"myprofile_achievements_picture\" src=\"images/ach/5.png\" height=\"75px\" width=\"75px\"/>";} ?>
                <span class="tooltiptext">Play your first Game!</span>
                </div>
                
                <div class="myprofile_achievements_picture_standart">
                <?php if($_SESSION['ach_6'] == 0){echo "<img class=\"myprofile_achievements_picture_locked\" src=\"images/ach/6.png\" height=\"75px\" width=\"75px\"/>"; }else{ echo "<img class=\"myprofile_achievements_picture\" src=\"images/ach/6.png\" height=\"75px\" width=\"75px\"/>";} ?>
                <span class="tooltiptext">Play atleast 10 Games!</span>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Content -->
    
    <!-- Footbar -->
        <div class="footbar">
   			<div class="footbar_text">
         		<a target="_blank" href="http://steamcommunity.com/id/iYKu/" >
                <font style="font-family: orbitron;font-size: 14px;font-style: italic;color: rgba(126,126,126,1.00);">&copy; Reflex</font></a>
                <br>
                <!-- <a target="_blank" href="https://playoverwatch.com" ><font style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;font-weight: bold;font-size: 12px;font-style: italic;color: rgba(126,126,126,1.00);">Extra Text</font></a> -->
   			</div> 
            <div class="footbar_navi">
            	<a class="footlink" target="_self" href="FAQ"><font class="footbar_navi_text">FAQ</font></a>
                <a class="footlink" target="_self" href="404"><font class="footbar_navi_text">Privacy Policy</font></a>
                <a class="footlink" target="_self" href="404"><font class="footbar_navi_text">Terms of Service</font></a>
                <a class="footlink" target="_self" href="404"><font class="footbar_navi_text">Contact Us</font></a>
            </div>
    	</div>
        <!-- Footbar -->


</body>
</html>