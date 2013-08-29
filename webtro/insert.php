<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Web Tro</title>
<meta http-equiv="refresh" content="0;url=show.php">
</head>

<body>
<div align="center">Web Tro<p>
Add &nbsp;&nbsp;&nbsp;&nbsp;<a href="show.php">show</a>
<hr>

<?
		$cusname=$_POST['cusname'];
		$cuslname=$_POST['cuslname'];
		$cusadd=$_POST['cusadd'];
		$custel=$_POST['custel'];

		$host="localhost";
		$user="root";
		$pwd="12345";
		$db="tro";
		$tb="customer";

		$fp=mysql_connect($host,$user,$pwd) or die ("can't connect MySql");
		$dbuse=mysql_select_db($db);
		
		$sql="insert into $tb value(cus_id,'$cusname','$cuslname','$cusadd','$custel')";

		$result=mysql_query($sql);
/*
		if(!$result) echo "äÁèÊÒÁÒÃ¶ºÑ¹·Ö¡Å§ã¹ $tb ä´é";
		else { echo "ºÑ¹·Ö¡¢éÍÁÙÅàÃÕÂºÃéÍÂáÅéÇ";
				echo "$barcode    $brand    $model    $price";
		}*/

		mysql_close($fp);
		?>
        </div>
</body>
</html>
