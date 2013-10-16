<DOCTYPE html>
<html>
	<head>
		<title>KALKULATOR</title>
	</head>
	<body style="background:00a4bd;">
	<h1 style="margin-left:500px;">W E L C O M E</h1>
	<body>
		
			<?php 
				$angka_1 = $_POST ['angka_1'];
				$angka_2 = $_POST ['angka_2'];
				$operator = $_POST ['operator'];
				$hasil = 0;

				if ($operator == 'tambah'){
					$hasil = $angka_1 + $angka_2;
				}elseif($operator == 'kurang'){
					$hasil = $angka_1 - $angka_2;
				}elseif($operator == 'kali'){
					$hasil = $angka_1 * $angka_2;
				}elseif($operator == 'bagi'){
					$hasil = $angka_1 / $angka_2;
				}
				echo "hasil  " .$hasil;
			?>



		<div>
			<h1>KALKULATOR SEDERHANA</h1>
			<br/>
			<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
				<input type="text"  name="angka_1" value="<?php  echo isset ($_POST['angka_1']) ? $_POST['angka_1']:''; ?>">
				<select name="operator">
					<option value="tambah">+</option>
					<option value="kurang">-</option>
					<option value="kali">*</option>
					<option value="bagi">:</option>
				</select>
				<input type="text"  name="angka_2" value="<?php  echo isset ($_POST['angka_2']) ? $_POST['angka_2']:''; ?>">
				<input type="submit" value="=">
				<input type="text"  name="hasil" value="<?php echo isset ($hasil) ? ($hasil) :''; ?>">
			</form>



		</div>
	</body>
</html>