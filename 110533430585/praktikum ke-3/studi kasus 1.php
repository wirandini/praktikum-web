<!DOCTYPE HTML PUBLIC>
<html>
<head>
	<title>Studi Kasus 1</title>
</head>

<body style="background:00a4bd;">
<h1 style="margin-left:500px;">W E L C O M E</h1>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post"><center>
	Makanan Favorit <center>
	<select name="job">
		<option value="Nasi Goreng"
		<?php
			if ($_POST['job']=='Nasi Goreng'){
			echo 'selected="selected"';
			}
		?>
		/>Nasi Goreng
		<option value="Mie Ayam"
		<?php
			if ($_POST['job']=='Mie Ayam'){
			echo 'selected="selected"';
			}
		?>
		/>Mie Ayam
		<option value="Burger"
		<?php
			if ($_POST['job']=='Burger'){
			echo 'selected="selected"';
			}
		?>
		/>Burger
		<option value="Hotdog"
		<?php
			if ($_POST['job']=='Hotdog'){
			echo 'selected="selected"';
			}
		?>
		/>Hotdog
	</select> <br />

	<input type="submit" value="ok" />
</form>

<?php
if (isset($_POST['job'])) {
	echo $_POST['job'];
}
?>

<body>
</html>