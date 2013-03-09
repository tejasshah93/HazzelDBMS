<?php
session_start();
include 'login.php';
?>


<html>
<head>
<link rel="stylesheet" type="text/css" href="structure.css">
<title>View</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<style>
p { background:#dad;
font-weight:bold;
font-size:16px; }
</style>
  <script src="jquery-latest.js"></script>

<script type="text/javascript">
function toggleDisplay() {
  document.getElementById("toggleMe").click();
  document.getElementById("toggleMe").style.visibility = "visible";
  document.getElementById("toggleMe").style.display = (document.getElementById("toggleMe").style.display != 'none' ? 'none' : '' );
}
</script>

<script type="text/javascript">
function toggleDisplay1() {
  document.getElementById("toggleMe1").click();
  document.getElementById("toggleMe1").style.visibility = "visible";
  document.getElementById("toggleMe1").style.display = (document.getElementById("toggleMe1").style.display != 'none' ? 'none' : '' ); 
}
</script>

<script type="text/javascript">
function toggleDisplay2() {
  document.getElementById("toggleMe2").style.visibility = "visible";
  document.getElementById("toggleMe2").style.display = (document.getElementById("toggleMe2").style.display != 'none' ? 'none' : '' ); 
}
</script>


<script type="text/javascript">
function toggleDisplay3() {
  document.getElementById("toggleMe3").style.visibility = "visible";
  document.getElementById("toggleMe3").style.display = (document.getElementById("toggleMe3").style.display != 'none' ? 'none' : '' ); 
}
</script>


<script type="text/javascript">
function toggleDisplay4() {
  document.getElementById("toggleMe4").style.visibility = "visible";
  document.getElementById("toggleMe4").style.display = (document.getElementById("toggleMe4").style.display != 'none' ? 'none' : '' ); 
}
</script>


<script type="text/javascript">
function toggleDisplay5() {
  document.getElementById("toggleMe5").style.visibility = "visible";
  document.getElementById("toggleMe5").style.display = (document.getElementById("toggleMe5").style.display != 'none' ? 'none' : '' );
}
</script>


<script type="text/javascript">
function toggleDisplay6() {
  document.getElementById("toggleMe6").style.visibility = "visible";
  document.getElementById("toggleMe6").style.display = (document.getElementById("toggleMe6").style.display != 'none' ? 'none' : '' );
}
</script>


<script type="text/javascript">
function toggleDisplay7() {
  document.getElementById("toggleMe7").style.visibility = "visible";
  document.getElementById("toggleMe7").style.display = (document.getElementById("toggleMe7").style.display != 'none' ? 'none' : '' );
}
</script>


<script type="text/javascript">
function toggleDisplay8() {
  document.getElementById("toggleMe8").style.visibility = "visible";
  document.getElementById("toggleMe8").style.display = (document.getElementById("toggleMe8").style.display != 'none' ? 'none' : '' );
}
</script>


<script type="text/javascript">
function toggleDisplay9() {
  document.getElementById("toggleMe9").style.visibility = "visible";
  document.getElementById("toggleMe9").style.display = (document.getElementById("toggleMe9").style.display != 'none' ? 'none' : '' );
}
</script>


<script type="text/javascript">
function toggleDisplay10() {
  document.getElementById("toggleMe10").style.visibility = "visible";
  document.getElementById("toggleMe10").style.display = (document.getElementById("toggleMe10").style.display != 'none' ? 'none' : '' );
}
</script>

</head>
<body>
<script>
jQuery(document).ready(function(){jQuery('p').hide();});
</script>
<br />
<button>TOGGLE TABLES</button>
<p>
<p><a href="#" onclick="toggleDisplay();">Employee</a></p>
<div id="toggleMe" style="visibility: hidden;"> 
<form action="database1.php" method="post">
Select:<br />
	<input type="hidden" name="identity" value="employee">
	<input type="checkbox" name="val1" value="name" />Name
	<input type="checkbox" name="val2" value="address" />Address
	<input type="checkbox" name="val3" value="dob" />Date of Birth
	<input type="checkbox" name="val4" value="sex" />Sex
	<input type="checkbox" name="val5" value="ssn" />Ssn
	<input type="checkbox" name="val6" value="salary" />Salary
	<input type="checkbox" name="val7" value="job_type" />Job Type
	<input type="checkbox" name="val8" value="dno" />Dept Number      
<input type="submit">
</form>
</div>

<p><a href="#" onclick="toggleDisplay1();">Branches</a></p>
<div id="toggleMe1" style="visibility: hidden;"> 
<form action="database1.php" method="post">
Select:<br />
	<input type="checkbox" name="val1" value="id" />Branch ID
	<input type="checkbox" name="val2" value="date_of_estab" />Date of establishment
	<input type="checkbox" name="val3" value="location" />Location
	<input type="checkbox" name="val4" value="ownership" />Ownership
	<input type="checkbox" name="val5" value="head_ssn" />Head_ssn
	<input type="hidden" name="identity" value="branches">
<input type="submit">
</form>
</div>

<p><a href="#" onclick="toggleDisplay2();">Vendor</a></p>
<div id="toggleMe2" style="visibility: hidden;"> 
<form action="database1.php" method="post">
Select:<br />
	<input type="checkbox" name="val1" value="id" />Vendor ID
	<input type="checkbox" name="val2" value="name" />Name
	<input type="checkbox" name="val3" value="delivery_date" />Delivery date
	<input type="checkbox" name="val4" value="order_no" />Order_no
	<input type="checkbox" name="val5" value="contract_type" />Contract_type
	<input type="hidden" name="identity" value="vendor">
<input type="submit">
</form>
</div>

<p><a href="#" onclick="toggleDisplay3();">Machinery</a></p>
<div id="toggleMe3" style="visibility: hidden;"> 
<form action="database1.php" method="post">
Select:<br />
	<input type="checkbox" name="val1" value="reg_no" />Reg_no
	<input type="checkbox" name="val2" value="power_consumed" />Power consumed
	<input type="checkbox" name="val3" value="type" />Type
	<input type="hidden" name="identity" value="machinery">
<input type="submit">
</form>
</div>

<p><a href="#" onclick="toggleDisplay4();">Expenses</a></p>
<div id="toggleMe4" style="visibility: hidden;"> 
<form action="database1.php" method="post">
Select:<br />
	<input type="hidden" name="identity" value="expenses">
	<input type="checkbox" name="val1" value="id" />ID
	<input type="checkbox" name="val2" value="essn" />Employee Ssn
	<input type="checkbox" name="val3" value="stock_id" />Stock ID
	<input type="checkbox" name="val4" value="ad_id" />Advertising ID
	<input type="checkbox" name="val5" value="m_regno" />Machine Reg_No
	<input type="checkbox" name="val6" value="maintenance_id" />Maintenance ID
<input type="submit">
</form>
</div>

<p><a href="#" onclick="toggleDisplay5();">Customer</a></p>
<div id="toggleMe5" style="visibility: hidden;"> 
<form action="database1.php" method="post">
Select:<br />
  <input type="hidden" name="identity" value="customer">
  <input type="checkbox" name="val1" value="name" />Name
  <input type="checkbox" name="val2" value="contact_no" />Contact No.
  <input type="checkbox" name="val3" value="address" />Address
  <input type="checkbox" name="val4" value="frequency" />Frequency
  <input type="checkbox" name="val5" value="id" />ID
<input type="submit">
</form>
</div>

<p><a href="#" onclick="toggleDisplay6();">Advertising</a></p>
<div id="toggleMe6" style="visibility: hidden;"> 
<form action="database1.php" method="post">
Select:<br />
  <input type="hidden" name="identity" value="advertising">
  <input type="checkbox" name="val1" value="id" />ID
  <input type="checkbox" name="val2" value="expenditure" />Expenditure
  <input type="checkbox" name="val3" value="regional" />Regional
  <input type="checkbox" name="val4" value="national" />National
  <input type="checkbox" name="val5" value="ad_slick" />Ad_Slick
  <input type="checkbox" name="val6" value="ad_type" />Ad_Type
<input type="submit">
</form>
</div>

<p><a href="#" onclick="toggleDisplay7();">Income</a></p>
<div id="toggleMe7" style="visibility: hidden;"> 
<form action="database1.php" method="post">
Select:<br />
  <input type="hidden" name="identity" value="income">
  <input type="checkbox" name="val1" value="branch_id" />Branch ID
  <input type="checkbox" name="val2" value="customer_no" />Customer No
  <input type="checkbox" name="val3" value="offers" />Offers
  <input type="checkbox" name="val4" value="online_booking" />Online booking
<input type="submit">
</form>
</div>

<p><a href="#" onclick="toggleDisplay8();">Maintenance</a></p>
<div id="toggleMe8" style="visibility: hidden;"> 
<form action="database1.php" method="post">
Select:<br />
  <input type="hidden" name="identity" value="maintenance">
  <input type="checkbox" name="val1" value="id" />Maintenance ID
  <input type="checkbox" name="val2" value="emp_salary" />Employee Salary
  <input type="checkbox" name="val3" value="human_resources" />Human Resources
  <input type="checkbox" name="val4" value="amt_spent" />Amount Spent
  <input type="checkbox" name="val5" value="reg_no" />Registration No
<input type="submit">
</form>
</div>

<p><a href="#" onclick="toggleDisplay9();">Stock</a></p>
<div id="toggleMe9" style="visibility: hidden;"> 
<form action="database1.php" method="post">
Select:<br />
  <input type="hidden" name="identity" value="stock">
  <input type="checkbox" name="val1" value="id" />ID
  <input type="checkbox" name="val2" value="supply" />Supply
  <input type="checkbox" name="val3" value="demand" />Demand
  <input type="checkbox" name="val4" value="quality" />Quality
  <input type="checkbox" name="val5" value="seasonal" />Seasonal
  <input type="checkbox" name="val6" value="type" />Type
  <input type="checkbox" name="val7" value="reg_no" />Registration No.
<input type="submit">
</form>
</div>


<p><a href="#" onclick="toggleDisplay10();">Transport</a></p>
<div id="toggleMe10" style="visibility: hidden;"> 
<form action="database1.php" method="post">
Select:<br />
  <input type="hidden" name="identity" value="transport">
  <input type="checkbox" name="val1" value="reg_no" />Registration Number
  <input type="checkbox" name="val2" value="amt_spent" />Amount Spent
  <input type="checkbox" name="val3" value="tonnage" />Tonnage
  <input type="checkbox" name="val4" value="vehicle_used" />Vehicle Used
<input type="submit">
</form>
</div>

</p>

<script>
$("button").click(function () {
$("p").toggle("slow");
});    
</script>
</body>
</html>
