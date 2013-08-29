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
	 $cusid=$_GET['cusid'];
	 
	    $host = "localhost";
		$user = "root";
		$pwd = "12345";
		$db = "tro";
		$tb1 = "customer";
		//$tb2 = "vtype";

		$fp = mysql_connect($host,$user,$pwd) or die ("not connect MySql");
		$dbuse = mysql_select_db($db) or die ("not connect database");

		$sql = "DELETE FROM `tro`.`customer` WHERE `customer`.`cus_id` = $cusid";
//echo $sql;
		$result = mysql_query($sql);
		//echo $result;
		
		mysql_close($fp);
	 ?>
 </body>
</html>
