<?php 
	session_start();
	if(isset($_POST["firstNameTextBox"])) {
		$_SESSION["firstName"] = $_POST["firstNameTextBox"];
		$_SESSION["lastName"] = $_POST["lastNameTextBox"];
		$_SESSION["phoneNum"] = $_POST["telephoneTextBox"];
		$_SESSION["RadioBox"] = $_POST["radioBox"];
		$_SESSION["selectedGame"] = $_POST["computerGames"];
		header("Location: Session2.php");
		exit;
	}
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css"/>
	</head>
	<body>
	<?php 
		include_once "Header.php"; 
		include_once "Menu.php";
	?>
	<div id="content1">
		<form method="post">
			What is your first name?
			<input type="text" name="firstNameTextBox" value="" />
			</br>
			What is your last name?
			<input type="text" name="lastNameTextBox" value="" />
			</br>
			What is your telephone number?
			<input type="text" name="telephoneTextBox" value="" />
			</br>
			<input type="Radio" name="radioBox" value="Student" />Student
			<input type="Radio" name="radioBox" value="Staff"  />Staff
			<input type="radio" name="radioBox" value="Faculty" />Faculty
			</br>
			<select name="computerGames[]" multiple="multiple">
				<option value="League of legends">League of Legends</option>
				<option value="Hero's of Newerth"> Hero's of Newerth</option>
				<option value="Defence of the Ancients">Defence of the ancients</option>
				<option value="Dawngate"> DawnGate</option>	
			</select>
			</br>
			<input type="submit" />
		</form>
	</div>
	</body>
	<?php 
		include_once "Footer.php";
	?>
<html>