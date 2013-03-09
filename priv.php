<html>
<head>
	<link rel="stylesheet" type="text/css" href="structure.css">	
	<link rel="stylesheet" type="text/css" href="another1.css">
</head>
<body>

<?php
session_start();
include 'login.php';
$con = mysql_connect('localhost','root','propwd ');
if (!$con)
{
		//header('Location: /hazzel/index.html');
		die('Could not connect: ' . mysql_error());
}
mysql_select_db("mysql", $con);

$query = mysql_query("select distinct User from mysql.user");

$numrows = mysql_num_rows($query);

echo "<table id='box-table-a' border='3' align='center'>";
echo "<tr>";
	echo "<th>Users</th>";
	echo "<th>Privileges</th>";
echo "</tr>";
for($i=0;$i<$numrows;$i++)
{
	echo "<tr>";
		$res=mysql_result($query,$i,'User');
		echo "<td>$res</td>";
		echo "<td>";
		echo "<form action='priv1.php' method='post'>";
		echo "<input type='hidden' name='viewing' value='$i'>";
		echo "<input type='hidden' name='usr' value='$res'>";
		echo "<input type='submit' value='View all tables'>";
		echo "</form>";
		echo "</td>";
		echo "</tr>";

}
echo "</table>";
?>
</body>
</html>