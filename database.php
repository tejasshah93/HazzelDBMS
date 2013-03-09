<?php
session_start();
include 'login.php';
//$con = mysql_connect('localhost','dummy','dummy');
//if (!$con)
//{
		//die('Could not connect: ' . mysql_error());
//}
//mysql_select_db("hazzel", $con);
$val1=mysql_real_escape_string($_REQUEST['val1']);
$val2=mysql_real_escape_string($_REQUEST['val2']);
$val3=mysql_real_escape_string($_REQUEST['val3']);
$val4=mysql_real_escape_string($_REQUEST['val4']);
$val5=mysql_real_escape_string($_REQUEST['val5']);
$val6=mysql_real_escape_string($_REQUEST['val6']);
$val7=mysql_real_escape_string($_REQUEST['val7']);
$val8=mysql_real_escape_string($_REQUEST['val8']);
$ident=mysql_real_escape_string($_REQUEST['identity']);
echo $val1,$val2,$val3,$val4,$val5,$val6,$val7,$val8;
if($ident=="employee")
{
	$vari="employee";
	if($val1==NULL or $val2==NULL or $val3==NULL or $val4==NULL or $val5==NULL or $val6==NULL or $val7==NULL or $val8==NULL)
	{
		die("<h2 id=\"header\">INVALID INPUT</h2>");
	}
	$xx="'$val1','$val2','$val3','$val4','$val5','$val6','$val7','$val8'";

}
else if($ident=="branches")
{
	$vari="branches";
$xx="'$val1','$val2','$val3','$val4','$val5'";

}
else if($ident=="vendor")
{
	$vari="vendor";
$xx="'$val1','$val2','$val3','$val4','$val5'";

}
else if($ident="machinery")
{
	$vari="machinery";
$xx="'$val1','$val2','$val3'";

}
else if($ident=="expenses")
{
	$vari="expenses";
	echo "afsd",$val6,"sdfsdf";
	$xx="'$val1','$val2','$val3','$val4','$val5','$val6'";
}


$query=mysql_query("SELECT * FROM $vari");
$query1=mysql_query("select * from $vari where ssn=$val1");
$numrows = mysql_num_rows($query1);
/*$i=0;
while ($i < $num) 
{
	$variable=mysql_result($query,$i,"sex");
	echo $variable;
		$i++;
}
for($i=0; $i<$fields_num; $i++)
{
	    $field = mysql_fetch_field($query);
	        echo $field->name;
}*/
if($numrows==0)
{
	mysql_query("INSERT INTO $vari VALUE($xx)") or die('could not enter '. mysql_error());
	}       
	else    
	{
			die("<h2 id=\"header\">Already registered Can't modyfy data</h2>");
	}
echo "done";
mysql_close($con);


?>
