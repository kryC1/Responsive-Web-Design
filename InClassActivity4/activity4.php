<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Results</title>
</head>
<body>
	<h1>Preview</h1>
	<?php
		if(empty($_POST['name']) == false) {
			echo $_POST["name"]."<br>";
		}
		else {
			echo "Name: Not Provided <br>";
		}

		if(empty($_POST['username']) == false) {
			echo $_POST["username"]."<br>";
		}
		else {
			echo "Username: Not Provided <br>";
		}

		if(empty($_POST['password']) == false) {
			echo $_POST["password"]."<br>";
		}
		else {
			echo "Password: Not Provided <br>";
		}

		if(empty($_POST['adress']) == false) {
			echo $_POST["adress"]."<br>";
		}
		else {
			echo "Adress: Not Provided <br>";
		}

		if(empty($_POST['countries']) == false) {
			echo $_POST["countries"]."<br>";
		}
		else {
			echo "Country: Not Provided <br>";
		}

		if(empty($_POST['zip']) == false) {
			echo $_POST["zip"]."<br>";
		}
		else {
			echo "ZIP: Not Provided <br>";
		}

		if(empty($_POST['email']) == false) {
			echo $_POST["email"]."<br>";
		}
		else {
			echo "Email: Not Provided <br>";
		}

		if(empty($_POST['sex']) == false) {
			echo $_POST["sex"]."<br>";
		}
		else {
			echo "Sex: Not Provided <br>";
		}

		if (empty($_POST['language']) == true) {
			echo "Language: Not Provided <br>";
		}
		else {
			for ($i=0; $i < sizeof($_POST["language"]); $i++) { 
				echo $_POST["language"][$i].", ";
			}
			echo "<br>";
		}

		if(empty($_POST['about']) == false) {
			echo $_POST["about"]."<br>";
		}
		else {
			echo "About: Not Provided <br>";
		}
	?>
</body>
</html>