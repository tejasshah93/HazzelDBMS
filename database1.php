<html>
<head>
	<link rel="stylesheet" type="text/css" href="structure.css">	
	<link rel="stylesheet" type="text/css" href="another1.css">
</head>
<body>

<?php
session_start();
include 'login.php';
/*$con = mysql_connect('localhost','dummy');
if (!$con)
{
		die('Could not connect: ' . mysql_error());
}
mysql_select_db("hazzel", $con);*/

$val[1]=mysql_real_escape_string($_REQUEST['val1']);
$val[2]=mysql_real_escape_string($_REQUEST['val2']);
$val[3]=mysql_real_escape_string($_REQUEST['val3']);
$val[4]=mysql_real_escape_string($_REQUEST['val4']);
$val[5]=mysql_real_escape_string($_REQUEST['val5']);
$val[6]=mysql_real_escape_string($_REQUEST['val6']);
$val[7]=mysql_real_escape_string($_REQUEST['val7']);
$val[8]=mysql_real_escape_string($_REQUEST['val8']);
$ident=mysql_real_escape_string($_REQUEST['identity']);
//echo $val1,$val2,$val3,$val4,$val5,$val6,$val7,$val8;
$i=1;
$query="";
$count=0;
for($i=1;$i<9;$i++)
{
	if($val[$i]!=NULL)
	{
		$var1[$count]=$val[$i];
		$count++;
		if($query==NULL)
		{
			$query="$val[$i]";
		}
		else
		{
			$query="$query,$val[$i]";
		}
	}
}
//echo $query;
$kk1="ssn,name,sex";
$prim=mysql_query("select Column_name from information_schema.columns where table_schema = 'hazzel' and table_name ='$ident' and column_key='PRI'");
$prim_result=mysql_result($prim, 0 , 'Column_name' );
$query1=mysql_query("select $query,$prim_result from $ident");

//echo "dfsf",$query1,"sfsdf";
$numrows = mysql_num_rows($query1);
//echo "<table border='1' align='center'>";
echo "<table id='box-table-a' border='3' align='center'>";
echo "<tr>";
for($j=0;$j<$count;$j++)
{
	echo "<th>$var1[$j]</th>";
}
echo "<th>Delete</th>";
echo "</tr>"; 
for($i=0;$i<$numrows;$i++)
{
	echo "<tr>";
	for($j=0;$j<$count;$j++)
	{
		$variable=mysql_result($query1,$i,$var1[$j]);
		echo "<td>$variable</td>";
	}
	
	echo "<td>";
	echo "<form action='database1.php' method='post'>";
	echo "<input type='hidden' name='deleting[$i]' value='$i'>";
	echo "<input type='hidden' name='val1' value='$val[1]'>";
	echo "<input type='hidden' name='val2' value='$val[2]'>";
	echo "<input type='hidden' name='val3' value='$val[3]'>";
	echo "<input type='hidden' name='val4' value='$val[4]'>";
	echo "<input type='hidden' name='val5' value='$val[5]'>";
	echo "<input type='hidden' name='val6' value='$val[6]'>";
	echo "<input type='hidden' name='val7' value='$val[7]'>";
	echo "<input type='hidden' name='val8' value='$val[8]'>";
	echo "<input type='hidden' name='identity' value='$ident'>";
	echo "<input type='submit' value='Delete'>";

	echo "</form>";
	echo "</td>";

	echo "</tr>";
}
echo "</table>";

$del = -1;
for($i=0;$i<$numrows;$i++)
{
	echo "checking ",$i;
	echo $_POST["deleting['$i']"];
	if(isset($_POST['deleting[$i]']))
	{
		echo "i = ",$i;
		$del=$_POST['deleting[$i]'];
		break;
	}
}
if($del >= 0 )
{
	echo "in if";
	echo $del;
	$del_result = mysql_result($query1, $del, $prim_result );
	$del_query = mysql_query("delete from $ident where $prim_result=$del_result");
	//unset($_POST['deleting[$i]']);
}

?>
</body>
</html>
