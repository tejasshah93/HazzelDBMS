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

$query = mysql_query("Select distinct user, select_priv, insert_priv, Update_priv, Delete_priv From user");

$numrows = mysql_num_rows($query);

$tname = $_REQUEST['tname'];
$usr = $_REQUEST['usr'];
$grant = $_REQUEST['granting'];
$revoke = $_REQUEST['revoking'];

echo "tname",$tname,"usr",$usr,"grant",$grant,"revoke",$revoke;

if($grant == 1)
{
	mysql_query("grant select on hazzel.$tname to '$usr'@'localhost'");
}
else if($grant == 2)
{
	mysql_query("grant insert on hazzel.$tname to '$usr'@'localhost'");
}
else if($grant == 3)
{
	mysql_query("grant update on hazzel.$tname to '$usr'@'localhost'");
}
else if($grant == 4)
{
	mysql_query("grant delete on hazzel.$tname to '$usr'@'localhost'");
}

if($revoke == 1)
{
	mysql_query("revoke select on hazzel.$tname from '$usr'@'localhost'");
}

echo "<table id='box-table-a' border='3' align='center'>";
echo "<tr>";
	echo "<th>Privileges</th>";
	echo "<th>Grant</th>";
	echo "<th>Revoke</th>";
echo "</tr>";

echo "<tr>";
	echo "<td>Select</td>";
	echo "<td>";
	echo "<form action='priv2.php' method='post'>";
	echo "<input type='hidden' name='granting' value='1'>";
	echo "<input type='hidden' name='tname' value='$tname'>";
	echo "<input type='hidden' name='usr' value='$usr'>";
	echo "<input type='submit' value='Grant'>";
	echo "</form>";
	echo "</td>";
	echo "<td>";
	echo "<form action='priv2.php' method='post'>";
	echo "<input type='hidden' name='revoking' value='1'>";
	echo "<input type='hidden' name='tname' value='$tname'>";
	echo "<input type='hidden' name='usr' value='$usr'>";
	echo "<input type='submit' value='Revoke'>";
	echo "</form>";
	echo "</td>";
echo "</tr>";
echo "<tr>";
	echo "<td>Insert</td>";
	echo "<td>";
	echo "<form action='priv2.php' method='post'>";
	echo "<input type='hidden' name='granting' value='2'>";
	echo "<input type='hidden' name='tname' value='$tname'>";
	echo "<input type='hidden' name='usr' value='$usr'>";
	echo "<input type='submit' value='Grant'>";
	echo "</form>";
	echo "</td>";
	echo "<td>";
	echo "<form action='priv2.php' method='post'>";
	echo "<input type='hidden' name='revoking' value='2'>";
	echo "<input type='hidden' name='tname' value='$tname'>";
	echo "<input type='hidden' name='usr' value='$usr'>";
	echo "<input type='submit' value='Revoke'>";
	echo "</form>";
	echo "</td>";
echo "</tr>";
echo "<tr>";
	echo "<td>Update</td>";
	echo "<td>";
	echo "<form action='priv2.php' method='post'>";
	echo "<input type='hidden' name='granting' value='3'>";
	echo "<input type='hidden' name='tname' value='$tname'>";
	echo "<input type='hidden' name='usr' value='$usr'>";
	echo "<input type='submit' value='Grant'>";
	echo "</form>";
	echo "</td>";
	echo "<td>";
	echo "<form action='priv2.php' method='post'>";
	echo "<input type='hidden' name='revoking' value='3'>";
	echo "<input type='hidden' name='tname' value='$tname'>";
	echo "<input type='hidden' name='usr' value='$usr'>";
	echo "<input type='submit' value='Revoke'>";
	echo "</form>";
	echo "</td>";
echo "</tr>";
echo "<tr>";
	echo "<td>Delete</td>";
	echo "<td>";
	echo "<form action='priv2.php' method='post'>";
	echo "<input type='hidden' name='granting' value='4'>";
	echo "<input type='hidden' name='tname' value='$tname'>";
	echo "<input type='hidden' name='usr' value='$usr'>";
	echo "<input type='submit' value='Grant'>";
	echo "</form>";
	echo "</td>";echo "<td>";
	echo "<form action='priv2.php' method='post'>";
	echo "<input type='hidden' name='revoking' value='4'>";
	echo "<input type='hidden' name='tname' value='$tname'>";
	echo "<input type='hidden' name='usr' value='$usr'>";
	echo "<input type='submit' value='Revoke'>";
	echo "</form>";
	echo "</td>";
echo "</tr>";

echo "</table>";


?>
</body>
</html>