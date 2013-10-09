<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Login</title>
<style type="text/css">
#apDiv1 { /* kotak tengah */
	position: absolute;
	left: 478px;
	top: 86px;
	width: 334px;
	z-index: 1;
	background-color: #D2FFFF;
	border: 7px solid #88C4FF;
	visibility: visible;
	right: auto;
	bottom: auto;
	margin: 2px;
	padding: 20px;
	font-size: 36px;
	font-style: oblique;
	font-weight: bold;
	font-family: Verdana, Geneva, sans-serif;
	color: #06F;
	text-align: left;
	height: 288px;
}
#apDiv2 {
	position: absolute;
	left: 530px;
	top: 204px;
	width: 233px;
	height: 184px;
	z-index: 2;
	color: #09F;
	background-color: #a1ccf1;
	font-size: 18px;
}
</style>
<script>
function cek(a) {
al = /^[A-Za-z]{1,}$/; //Cek validitas harus huruf
return al.test(a);
}
function val(){
var x=document.forms["myForm"]["nama"].value;
var y=document.forms["myForm"]["pass"].value;
if (x==null || x=="" && y==null || y=="") //cek tidak boleh kosong
  {
  alert("Username atau Password Belum diisi");
  myForm.nama.focus();
  return false;
  }
if (!cek(x) || !cek(y)){ //pemanggilan fungsi cek
	alert ('Username Dan Password harus dalam huruf');
	return false;
}}
</script>
</head>
<body bgcolor="a1dbf1">
<?php  
session_start();    
?>  
<div id="apDiv1" align="left">
    <label style="margin-left:50px; color:#34048c; font-family:Snap ITC">L O G I N</label>
  <hr align="left" width="300" size="5" color="#34048c">
  </div>
<div id="apDiv2" align="left">
   <form name="myForm" method="POST" action="vali.php" onSubmit="return val()">
    <label style="color:#34048c;">Username :</label>
    <br>
    <input type="text" name="nama" id="nama" width="200" value="<?php echo isset($_POST['nama']) ? $_POST['nama'] : '';?>">
    <br><br>
    <label style="color:#34048c;">Password :</label>
    <br>
    <input type="password" name="pass" id="pass" width="200"> 
    <br><br>
    <input type="submit" name="Login" value="Login">
    <input type="reset" name="Reset" value="Reset">
  </form>
</div>
</body>
</html>
