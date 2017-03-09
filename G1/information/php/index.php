<?php
	include 'functions.php';
	require_once('config.php');
	session_start();

	// Connect to server and select database.
	($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
	((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
	$tbl_name="topic"; // Table name
?>

	
<!-- ==========================================================	-->
<!--	Created by Devit Schizoper                          	-->
<!--	Created HomePages http://LoadFoo.starzonewebhost.com   	-->
<!--	Created Day 01.12.2006                              	-->
<!-- ========================================================== -->


<!DOCTYPE html>
<html lang="en">
<head>
   <title>Forum</title>
   <link rel="icon" href="../../images/titleimg2.ico"/>
   
   <style></style>
   <meta charset="utf-8">
   <link rel="stylesheet" href="../../styles/base.css" />
   <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet"/>
</head>

<body>
   <nav>
        <div id="navwrapper">
            <div id="navleft">
                <ul>
                    <li>
						<!-- Button is seperate from the div -->
						<div class="dropdown"><a href="../../products/mouse.html" class="dropdown">Mice</a>
							<div class="dropdown_content">
							<p><a href="../../products/mouse.html#pricebracketlow">$</a></p>
							<p><a href="../../products/mouse.html#pricebracketmid">$$</a></p>
							<p><a href="../../products/mouse.html#pricebrackethigh">$$$</a></p>
							</div>
						</div>
					</li>
                    <li><div class="dropdown"><a href="../../products/keyboard.html" class="dropdown">Keyboard</a>
                            <div class="dropdown_content">
                            <p><a href="../../products/keyboard.html#pricebracketlow">$</a></p>
                            <p><a href="../../products/keyboard.html#pricebracketmid">$$</a></p>
                            <p><a href="../../products/keyboard.html#pricebrackethigh">$$$</a></p>
                            </div>
                        </div>
                    </li>
                    <li><div class="dropdown"><a href="../../products/monitor.html" class="dropdown">Monitor</a>
                            <div class="dropdown_content">
                            <p><a href="../../products/monitor.html#pricebracketlow">$</a></p>
                            <p><a href="../../products/monitor.html#pricebracketmid">$$</a></p>
                            <p><a href="../../products/monitor.html#pricebrackethigh">$$$</a></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
                <a href="../../index/index.html"><img id="imgid" src="../../images/logonew.PNG" alt="Logo"></a>
            <div id="navright">    
                <ul>
                    <li><div class="dropdown"><a href="../info.html" class="dropdown">About Us</a></div></li>
                    <li><div class="dropdown"><a href="../info.html#contactheader" class="dropdown">Contact</a></div></li>
                    <li><div class="dropdown"><a href="forum.php" class="dropdown">Forum</a></div></li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="indexSignUp_LogIn">
        <a href="register_form.php">Sign Up</a>
        <a href="login_form">Log In</a>
    </div>    
    <main id="indexMainWrapper">
        <div class="indexPictures">
        	<!-- <p class="indexPicturesText">MKM<br>REVIEWS</p> -->
            <img id="indexlargepicture" src="../../images/monitorhighcropped.jpg" alt="Main Pictures">
        </div>
    </main>


    



<!-- Footer -->
   <footer>
		<div class="footerconstraint">
        <div class="bottomleftcolumn">
            <ul>
                <li><a href="../../index/index.html">Home</a></li>
                <li><a href="../info.html#contactheader">Contact</a></li>
				<li><a href="../info.html">About Us</a></li>
			</ul>
		</div>
		<div class="middleleftcolumn">
			<ul>
                <li><a href="../../products/mouse.html">Mice</a></li>
                <li><a href="../../products/keyboard.html">Keyboard</a></li>
                <li><a href="../../products/monitor.html">Monitor</a></li>
			</ul>
		</div>
		<div class="middlerightcolumn">
			<ul>

                <li><a href="forum.php">Forum</a></li>				
            </ul>
        </div>
        <div class="bottomrightcolumn">
            <ul>
				<li><a href="../signup.html">Sign-Up</a></li>
                <li><a href="../sitemap.html">Sitemap</a></li>
            </ul>
        </div>
		<p>&copy; Copyright 2017 | lol </p>
		</div>
   </footer>
   
</body>
</html>