<html>
<head>
	<link rel="stylesheet" type="text/css" href="structure.css">	
	<link rel="stylesheet" type="text/css" href="another1.css">
</head>
<body>

<?php
session_start();
include 'login.php';
/*$con = mysql_connect('localhost','root','propwd ');
if (!$con)
{
		//header('Location: /hazzel/index.html');
		die('Could not connect: ' . mysql_error());
}
mysql_select_db("mysql", $con);*/

$query = mysql_query("show tables");

$numrows = mysql_num_rows($query);
$usr = $_REQUEST['usr'];
echo "<table id='box-table-a' border='3' align='center'>";
echo "<tr>";
	echo "<th>Table Name</th>";
	echo "<th>Change permissions</th>";
echo "</tr>";
for($i=0;$i<$numrows;$i++)
{
	echo "<tr>";
		$res=mysql_result($query,$i,'Tables_in_hazzel');
		echo "<td>$res</td>";
		echo "<td>";
		echo "<form action='priv2.php' method='post'>";
		echo "<input type='hidden' name='viewing' value='$i'>";
		echo "<input type='hidden' name='tname' value='$res'>";
		echo "<input type='hidden' name='usr' value='$usr'>";
		echo "<input type='submit' value='Grant/Revoke'>";
		echo "</form>";
		echo "</td>";
		echo "</tr>";

}
echo "</table>";
?>
</body>
</html>