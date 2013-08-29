<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Web Tro</title>
<meta http-equiv="refresh" content="0;url=show.php">
</head>

<body>
<div align="center">Web Tro<p>
<a href="formin.html">Add</a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="show.php">show</a>

<hr>

<?
	$cusid=$_POST['cusid'];
	$cusname=$_POST['cusname'];
	$cuslname=$_POST['cuslname'];
	$cusadd=$_POST['cusadd'];
	$custel=$_POST['custel'];

	$host="localhost";
	$user="root";
	$pwd="12345";
	$db = "tro";
	$tb = "customer";

	$fp=mysql_connect($host,$user,$pwd);
	mysql_select_db($db);

	$sql="update $tb set cus_name='$cusname',cus_lname='$cuslname',cus_address='$cusadd',cus_tel='$custel' where cus_id='$cusid' ";
	
	echo $sql;
	$result=mysql_query($sql);
	if($result)echo "success";
	else echo "fail";
	mysql_close($fp);
  ?>

</body>
</html>