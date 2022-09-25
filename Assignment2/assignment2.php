<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Assignment 2</title>
</head>
<body>
	<?php
		$usd = array("cad" => 1.25, "eur" => 0.91);
		$cad = array("usd" => 0.80, "eur" => 0.72);
		$eur = array("cad" => 1.38, "usd" => 1.11);

		if ($_GET['currency1'] == "usd") {
			if ($_GET["currency2"] == "cad") {$converted = $_GET['from'] * $usd["cad"];}
			elseif($_GET["currency2"] == "eur") {$converted = $_GET['from'] * $usd["eur"];}
			else {$converted = $_GET['from'];}
		}
		elseif ($_GET['currency1'] == "cad") {
			if ($_GET["currency2"] == "usd") {$converted = $_GET['from'] * $cad["usd"];}
			elseif($_GET["currency2"] == "eur") {$converted = $_GET['from'] * $cad["eur"];}
			else {$converted = $_GET['from'];}
		}
		else {
			if ($_GET["currency2"] == "usd") {$converted = $_GET['from'] * $eur["usd"];}
			elseif($_GET["currency2"] == "cad") {$converted = $_GET['from'] * $eur["cad"];}
			else {$converted = $_GET['from'];}
		}
	?>

	<form action="assignment2.php" method="GET">
		<label for="from" style="width: 40px; display: inline-block;">From: </label>
		<input type="text" name="from" value="<?php echo $_GET['from'];?>">

		<label for="currency1">Currency:</label>
		<select  name="currency1">
			<option value="usd" <?php if($_GET['currency1'] == 'usd'): ?> selected="selected" <?php endif; ?>>US Dollar</option>
			<option value="cad" <?php if($_GET['currency1'] == 'cad'): ?> selected="selected" <?php endif; ?>>Canadian Dollar </option>
			<option value="eur" <?php if($_GET['currency1'] == 'eur'): ?> selected="selected" <?php endif; ?>>Euro</option>
		</select><br>

		<label for="to" style="width: 40px; display: inline-block;">To:</label>
		<input type="text" name="to" value="<?php echo $converted; ?>" />

		<label for="currency2">Currency: </label>
		<select name="currency2">
			<option value="usd" <?php if($_GET['currency2'] == 'usd'): ?> selected="selected" <?php endif; ?>>US Dollar</option>
			<option value="cad" <?php if($_GET['currency2'] == 'cad'): ?> selected="selected" <?php endif; ?>>Canadian Dollar </option>
			<option value="eur" <?php if($_GET['currency2'] == 'eur'): ?> selected="selected" <?php endif; ?>>Euro</option>
		</select><br><br>

		<label style="width: 337px; display: inline-block;"></label>
		<input type="submit" name="convert" value="Convert">
	</form>
</body>
</html>