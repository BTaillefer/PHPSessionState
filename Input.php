<html>
	<head>
		<link rel="stylesheet" type="text/css" href="StyleSheet.css"/>
	</head>
	<body>
	<?php 
		include_once "Header.php";
		include_once "Menu.php"; 
	?>
	<div id="content">
		<div id="left">
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
				<div id="right">
					<?php
						if(isset($_POST["firstNameTextBox"]))
							$firstName = $_POST["firstNameTextBox"];
						else 
							$firstName = "No First Name Curently Set";
						echo"<b>First Name:</b> $firstName</br>";
						
						if(isset($_POST["lastNameTextBox"]))
							$lastName = $_POST["lastNameTextBox"];
						else
							$lastName = "No Last Name Curently Set</br>";
						echo"<b>Last Name: </b> $lastName</br>";
						
						if(isset($_POST["telephoneTextBox"]))
							$phoneNum = $_POST["telephoneTextBox"];
						else
							$phoneNum = "No Telephone Number Currently Set</br>";
						echo"<b>Telephone Number:</b> $phoneNum</br>";
						
						if(isset($_POST["radioBox"]))
							$RadioBox = $_POST["radioBox"];
						else
							$RadioBox = "No Box Curently Checked</br>";
						echo"<b>Radio Box :</b> $RadioBox</br>";
						
						if(isset($_POST["computerGames"])) { 
							echo"<b>Multi Box Selection:</b> </br>";
							foreach ($_POST["computerGames"] as $values) {
								echo "$values</br>";
							}
						}
						else {
								$selection = "Nothing currently selected</br>";
						}
					?>
				</div>
		</div>
		<?php 
			include_once "Footer.php";
		?>
<html>
			
				