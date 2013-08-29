<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Web Tro</title>
</head>

<body>
<div align="center">Web Tro<p>
<a href="formin.html">Add</a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="show.php">show</a>

<hr>
<?
	$cusid=$_GET['cusid'];

	$host="localhost";
	$user = "root";
	$pwd = "12345";
	$db = "tro";
	$tb1="customer";

	$fp=mysql_connect($host,$user,$pwd);
	mysql_select_db($db);
	$sql = "select * from $tb1 where cus_id= '$cusid'";
	$result=mysql_query($sql);

	$row = mysql_fetch_row($result);
	//echo "$row[0] , $row[1] , $row[2] ,$row[3] , $row[4]";
	?>
	<form method="post" action="save.php">
		<table>
				<tr>
			<td>Name</td>
			<td><input type="text" name="cusname" value="<?echo $row[1]?>"></td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td><input type="text" name="cuslname" value="<?echo $row[2]?>"></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><input type="text" name="cusadd" value="<?echo $row[3]?>"></td>
		</tr>
		<tr>
			<td>Telephone</td>
			<td><input type="text" name="custel" value="<?echo $row[4]?>"></td>
		</tr>
		</table>
		<input type="submit" value="SAVE">
        <input type="hidden" name="cusid" value="<?echo $row[0]?>">
	</form>

	<?
	mysql_close($fp);
  ?>
</body>
</html>