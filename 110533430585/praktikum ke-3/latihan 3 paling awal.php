<!DOCTYPE HTML PUBLIC>
<html>
<head>
	<title>Data Radio Button</title>
</head>

<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
	Jenis Kelamin
	<input type="radio" name="sex" value="pria" />Pria
	<input type="radio" name="sex" value="wanita" />Wanita <br />

	<input type="submit" value="ok" />
</form>

<?php
if (isset($_POST['sex'])) {
	echo $_POST['sex'];
}
?>

<body>
</html>