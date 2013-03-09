<?php
session_start();
$logid=$_REQUEST['logid'];
if($logid)
{
	session_unset();
	header('Location: /hazzel/index.html');
}
$con = mysql_connect('localhost','dummy','dummy');
$username=mysql_real_escape_string($_REQUEST['user']);
$password=mysql_real_escape_string($_REQUEST['password']);
//$username="dummy";
if($username and $password)
{
	$_SESSION['username']=$username;
	$_SESSION['password1']=$password;
}
$con = mysql_connect('localhost',$_SESSION['username'],$_SESSION['password1']);
if (!$con)
{
		header('Location: /hazzel/index.html');
		die('Could not connect: ' . mysql_error());
}
mysql_select_db("hazzel", $con);
?>

<html>
<head>
	<title>Hazzel</title>
<link rel="stylesheet" type="text/css" href="structure.css">
</head>
<body>
<br />
<!--pre style="font-size:large">
Welcome..
This is the home page for the Hazzel.Inc..
To navigate, please select one of the following options..
</pre-->
<script>
function home()
{
    window.location="login.php";
}
function insert()
{
    window.location="insert.php";
}
function view()
{
    window.location="view.php";
}
function priv()
{
    window.location="priv.php";
}
</script>
<?php
echo "Welcome, ",$_SESSION['username'];
?>
<form method="post">
	<input type="button" class="btnLogin1" value="Home" onclick=home()>
    <input type="button" class="btnLogin1" value="Insert" onclick=insert()>
    <input type="button" class="btnLogin1" value="View" onclick=view()>
    <?php
    if($_SESSION['username'] == "root")
    echo "<input type='button' class='btnLogin1' value='Privileges' onclick=priv()>";
    ?>
    <input type="button" class="btnLogin1" value=" &lt;-- BACK " onclick="history.go(-1);return false;" />
</form>
<form action="login.php">
	<input type="hidden" name="logid" value="yes">
	<input type="submit" class="btnLogin1" value="Logout">
</form> 
</body>
</html>