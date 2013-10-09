<html>
<head>
	<title>Studi Kasus 2</title>
</head>
<body style="background:00a4bd;">
	<h1 style="margin-left:500px;">W E L C O M E</h1>
	<h3 style="margin-left:400px;">Warna favorit mu? bisa pilih lebih dari satu loohhh !!</h3>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		<input type="checkbox" name="warna[]" value="Biru" 
		<?php if (isset($_POST['warna'])) {
			foreach ($_POST['warna'] as $key => $value) {
				if ($value=='Biru') {
					echo "checked";
				}
		}
			
		} ?>
		>Biru<br>
		<input type="checkbox" name="warna[]" value="Putih" 
		<?php if (isset($_POST['warna'])) {

			foreach ($_POST['warna'] as $key => $value) {
				if ($value=='Putih') {
					echo "checked";
				}
		}
			
		} ?>
		>Putih<br>
		<input type="checkbox" name="warna[]" value="Merah"
		<?php if (isset($_POST['warna'])) {

			foreach ($_POST['warna'] as $key => $value) {
				if ($value=='Merah') {
					echo "checked";
				}
		}
			
		} ?>
		>Merah<br>
		<input type="checkbox" name="warna[]" value="Hijau"
		<?php if (isset($_POST['warna'])) {

			foreach ($_POST['warna'] as $key => $value) {
				if ($value=='Hijau') {
					echo "checked";
				}
		}
			
		} ?>
		>Hijau<br>
		<input type="submit" value="OK">
	</form>
	<?php 
	if (isset($_POST['warna'])) {
		echo "<div id='pilihan'>Ketahuan !! ternyata kamu suka warna:</div><br/>";
		echo "<ul>";
		foreach ($_POST['warna'] as $key => $value) {
			echo "
			<li>".$value."</li>
			";
		}

		echo "</ul>";
	}
	 ?>

</body>
</html>