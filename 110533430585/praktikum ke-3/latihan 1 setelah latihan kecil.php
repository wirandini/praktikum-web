<!DOCTYPE HTML PUBLIC>
<html>
<head>
	<title>Identifikasi Metode</title>
</head>

<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
Nama
<input type="text" name="nama" ?>

<input type="submit" value="OK" />
</form>

<?php
if (isset($_REQUEST['nama'])) {
	echo 'Metode, ' . $_SERVER['REQUEST_METHOD'];
}
?>

<body>
</html>