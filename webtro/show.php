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
	    $host = "localhost";
		$user = "root";
		$pwd = "12345";
		$db = "tro";
		$tb1 = "customer";
		//$tb2 = "vtype";

		$fp = mysql_connect($host,$user,$pwd) or die ("not connect MySql");
		$dbuse = mysql_select_db($db) or die ("not connect database");

		$sql = "select * from $tb1";

		$result = mysql_query($sql);
		$num = mysql_num_rows($result);
		echo "<table border='0' width='80%'>";
		echo "<tr><th>ID<th>Name</th><th>Last Name</th><th>Address</th><th>Telephone</th><th>Edit</th><th>Delete</th></tr>";
		for($i = 1;$i<=$num;$i++){
			$rec = mysql_fetch_row($result);

			echo "<tr align='center'><td>$rec[0]</td><td> $rec[1] </td><td> $rec[2] </td><td> $rec[3] </td><td> $rec[4] </td><td><a href='edit.php?cusid=$rec[0]'>Edit</a></td><td><a href='delete.php?cusid=$rec[0]'>delete</a></td></tr>";
			 
		}
		echo "</table>";
		mysql_close($fp);
	 ?>
 </body>
</html>
