<!DOCTYPE HTML PUBLIC>
<html>
<head>
	<title>Metode POST</title>
</head>

<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Nama
<input type="text" name="nama" ?>

<input type="submit" value="OK" />
</form>

<?php
if (isset($_POST['nama'])) {
	echo 'Hallo, ' . $_POST['nama'];
}
?>

<body>
</html>