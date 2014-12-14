<?php 
	session_start();
	include_once "Header.php";
	include_once "Menu.php";
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css"/>
	</head>
	<body>
	<div id="content1">
	<?php
		if(isset($_SESSION["firstName"])) {
			$firstName = $_SESSION["firstName"];
			echo"<b> First Name : </b>$firstName </br>";
		}
		if(isset($_SESSION["lastName"])) {
			$lastName = $_SESSION["lastName"];
			echo"<b> Last Name : </b> $lastName</br>";
		}
		if(isset($_SESSION["phoneNum"])) {
			$phoneNum = $_SESSION["phoneNum"];
			echo"<b> Telephone Number: </b> $phoneNum</br>";
		}
		if(isset($_SESSION["RadioBox"])) {
			$RadioBox = $_SESSION["RadioBox"];
			echo"<b>Button Selection: </b> $RadioBox</br>";
		}
		if(isset($_SESSION["selectedGame"])) {
			echo"<b>Multi-Text Selection </b></br>";
			foreach($_SESSION["selectedGame"] as $value) {
				echo"$value</br>";
			}
		}
		?>
				</div>
				</div>
				<?php 
					include_once "Footer.php";
				?>
		<html>