<?php
session_start();
include 'login.php';
?>


<html>
<head>
<link rel="stylesheet" type="text/css" href="structure.css">
<style>
p { background:#dad;
font-weight:bold;
font-size:16px; }
</style>
  <script src="jquery-latest.js"></script>

<title>Insert</title>
<link rel="stylesheet" type="text/css" href="style.css" />

<script type="text/javascript">
function toggleDisplay() {
  document.getElementById("toggleMe").style.visibility = "visible";
  document.getElementById("toggleMe").style.display = (document.getElementById("toggleMe").style.display != 'none' ? 'none' : '' );
}
</script>

<script type="text/javascript">
function toggleDisplay1() {
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
<form action="database.php" method="post">
<input type="hidden" value="employee" name="identity" />
<table border="0">
    <tr>
      <td>Ssn: </td>
      <td><input type="text" name="val1" required="required"/></td>
    </tr>
    <tr>
      <td>Name: </td>
      <td><input type="text" name="val3" required="required"/></td>
    </tr>
      <tr>
      <td>Date of Birth: </td>
      <td><input type="date" name="val5" /></td>
    </tr>
    <tr>
      <td>Address: </td>
      <td><input type="text" name="val4" /></td>
    </tr>
    <tr>
      <td>Sex: </td>
      <td><input type="radio" name="val2" value="male" />Male
      <input type="radio" name="val2" value="female" />Female</td>
    </tr>
    <tr>
      <td>Salary: </td>
      <td><input type="number" name="val6" /></td>
    </tr>
    <tr>
      <td>Dept Number: </td>
      <td><input type="number" name="val8" required="required"/></td>
    </tr>
    <tr>
      <td>Job type: </td>
      <td><select name="val7">
      <option value="NULL" selected="selected">None</option>
      <option value="secretary">Secretary</option>
      <option value="sales_person">Sales Person</option>
      <option value="maintenance_staff">Maintenance Staff</option>
      </select></td>
    </tr>
</table>
<input type="submit" />
</form>
</div>
<br />
<p><a href="#" onclick="toggleDisplay1();">Branches</a></p>
<div id="toggleMe1" style="visibility: hidden;"> 
<form action="database.php" method="post">
<input type="hidden" name="identity" value="branches">
<table border="0">
    <tr>
      <td>Branch_ID: </td>
      <td><input type="number" name="val1" required="required" /></td>
    </tr>
    <tr>
      <td>Date of Establishment:</td>
      <td><input type="date" name="val2" /></td>
    </tr>
    <tr>
      <td>Location: </td>
      <td><input type="text" name="val3" /></td>
    </tr>
    <tr>
      <td>Ownership: </td>
      <td><input type="radio" name="val4" value="personally_owned" />Personally Owned 
         <input type="radio" name="val4" value="on_loan" />On Loan</td>
    </tr>
    <tr>
      <td>Head_Ssn: </td>
      <td><input type="text" name="val5" required="required"/></td>
    </tr>
</table>
<input type="submit" />
</form>
</div>

<p><a href="#" onclick="toggleDisplay2();">Vendor</a></p>
<div id="toggleMe2" style="visibility: hidden;"> 
<form action="database.php" method="post">
<input type="hidden" name="identity" value="vendor">
<table border="0">
    <tr>
      <td>ID: </td>
      <td><input type="number" name="val1" required="required" /></td>
    </tr>
    <tr>
      <td>Name: </td>
      <td><input type="text" name="val2" /></td>
    </tr>
    <tr>
      <td>Delivery date: </td>
      <td><input type="date" name="val3" /></td>
    </tr>
    <tr>
      <td>Order No: </td>
      <td><input type="number" name="val4" /></td>
    </tr>
    <tr>
      <td>Contract Type: </td>
      <td><input type="radio" name="val5" value="permanent" />Permanent 
         <input type="radio" name="val5" value="temp" />Temporary</td>
    </tr>
</table>   
<input type="submit" />
</form>
</div>

<p><a href="#" onclick="toggleDisplay3();">Machinery</a></p>
<div id="toggleMe3" style="visibility: hidden;"> 
<form action="database.php" method="post">
<input type="hidden" name="identity" value="machinery">
<table border="0">
    <tr>
      <td>Reg_No: </td>
      <td><input type="number" name="val1" required="required" /></td>
    </tr>
    <tr>
      <td>Power Consumed: </td>
      <td><input type="text" name="val2" /></td>
    </tr>
    <tr>
      <td>Type: </td>
      <td><input type="radio" name="type" value="val3" />Rental 
          <input type="radio" name="type" value="val3" />Owned</td>
    </tr>      
</table>
<input type="submit" />
</form>
</div>

<p><a href="#" onclick="toggleDisplay4();">Expenses</a></p>
<div id="toggleMe4" style="visibility: hidden;"> 
<form action="database.php" method="post">
<input type="hidden" name="identity" value="expenses" />
<table border="0">
    <tr>
      <td>ID: </td>
      <td><input type="number" name="val1" required="required" /></td>
    </tr>
    <tr>
      <td>Employee Ssn: </td>
      <td><input type="text" name="val2" /></td>
    </tr>
    <tr>
      <td>Stock ID: </td>
      <td><input type="number" name="val3" /></td>
    </tr>
    <tr>
      <td>Advertising ID: </td>
      <td><input type="number" name="val4" /></td>
    </tr>
    <tr>
      <td>M_reg number: </td>
      <td><input type="number" name="val5" /></td>
    </tr>
    <tr>
      <td>Maintenance ID: </td>
      <td><input type="number" name="val6" /></td>
    </tr>
</table>
<input type="submit" />
</form>
</div>

<p><a href="#" onclick="toggleDisplay5();">Customer</a></p>
<div id="toggleMe5" style="visibility: hidden;"> 
<form action="database.php" method="post">
<input type="hidden" value="customer" name="identity" />
<table border="0">
    <tr>
      <td>Name: </td>
      <td><input type="text" name="val1" required="required"/></td>
    </tr>
    <tr>
      <td>Contact No: </td>
      <td><input type="number" name="val2" required="required"/></td>
    </tr>
    <tr>
      <td>Address: </td>
      <td><input type="text" name="val3" /></td>
    </tr>
    <tr>
      <td>Frequency: </td>
      <td><input type="number" name="val4" /></td>
    </tr>
    <tr>
      <td>ID: </td>
      <td><input type="number" name="val5" /></td>
    </tr>
</table>
<input type="submit" />
</form>
</div>

<p><a href="#" onclick="toggleDisplay6();">Advertising</a></p>
<div id="toggleMe6" style="visibility: hidden;"> 
<form action="database.php" method="post">
<input type="hidden" value="advertising" name="identity" />
<table border="0">
    <tr>
      <td>ID: </td>
      <td><input type="number" name="val1" required="required" /></td>
    </tr>
    <tr>
      <td>Expenditure: </td>
      <td><input type="number" name="val2" /></td>
    </tr>
    <tr>
      <td>Regional: </td>
      <td><input type="text" name="val3" /></td>
    </tr>
    <tr>
      <td>National: </td>
      <td><input type="text" name="val4" /></td>
    </tr>
    <tr>
      <td>Ad_Slick: </td>
      <td><input type="text" name="val5" /></td>
    </tr>
    <tr>
      <td>Ad_Type: </td>
      <td><input type="text" name="val6" /></td>
    </tr>
</table>
<input type="submit" />
</form>
</div>

<p><a href="#" onclick="toggleDisplay7();">Income</a></p>
<div id="toggleMe7" style="visibility: hidden;"> 
<form action="database.php" method="post">
<input type="hidden" value="income" name="identity" />
<table border="0">
    <tr>
      <td>Branch ID: </td>
      <td><input type="number" name="val1" required="required" /></td>
    </tr>
    <tr>
      <td>Customer No: </td>
      <td><input type="number" name="val2"/></td>
    </tr>
    <tr>
      <td>Offers: </td>
      <td><input type="text" name="val3" /></td>
    </tr>
    <tr>
      <td>Online booking: </td>
      <td><input type="number" name="val4" /></td>
    </tr>
</table>
<input type="submit" />
</form>
</div>

<p><a href="#" onclick="toggleDisplay8();">Maintenance</a></p>
<div id="toggleMe8" style="visibility: hidden;"> 
<form action="database.php" method="post">
<input type="hidden" value="maintenance" name="identity" />
<table border="0">
    <tr>
      <td>Maintenance ID: </td>
      <td><input type="number" name="val1"  required="required" /></td>
    </tr>
    <tr>
      <td>Employee Salary: </td>
      <td><input type="number" name="val2"/></td>
    </tr>
    <tr>
      <td>Human Resources: </td>
      <td><input type="text" name="val3" /></td>
    </tr>
    <tr>
      <td>Amount Spent: </td>
      <td><input type="number" name="val4" /></td>
    </tr>
    <tr>
      <td>Registration Number: </td>
      <td><input type="text" name="val5" /></td>
    </tr>
</table>
<input type="submit" />
</form>
</div>

<p><a href="#" onclick="toggleDisplay9();">Stock</a></p>
<div id="toggleMe9" style="visibility: hidden;"> 
<form action="database.php" method="post">
<input type="hidden" value="stock" name="identity" />
<table border="0">
    <tr>
      <td>ID: </td>
      <td><input type="number" name="val1"  required="required" /></td>
    </tr>
    <tr>
      <td>Supply: </td>
      <td><input type="number" name="val2"/></td>
    </tr>
    <tr>
      <td>Demand: </td>
      <td><input type="number" name="val3" /></td>
    </tr>
    <tr>
      <td>Quality: </td>
      <td><input type="text" name="val4" /></td>
    </tr>
    <tr>
      <td>Seasonal: </td>
      <td><input type="text" size="1" name="val5" /></td>
    </tr>
    <tr>
      <td>Type: </td> 
      <td><input type="number" name="val6" /></td>
    </tr>
    <tr>
      <td>Registration No.: </td>
      <td><input type="text" name="val7" /></td>
    </tr>
</table>
<input type="submit" />
</form>
</div>


<p><a href="#" onclick="toggleDisplay10();">Transport</a></p>
<div id="toggleMe10" style="visibility: hidden;"> 
<form action="database.php" method="post">
<input type="hidden" value="transport" name="identity" />
<table border="0">
    <tr>
      <td>Registration Number: </td>
      <td><input type="text" name="val1" /></td>
    </tr>
    <tr>
      <td>Amount Spent: </td>
      <td><input type="number" name="val2" /></td>
    </tr>
    <tr>
      <td>Tonnage: </td>
      <td><input type="number" name="val3" /></td>
    </tr>
    <tr>
      <td>Vehicle Used: </td>
      <td><input type="text" name="val4" /></td>
    </tr>
</table>
<input type="submit" />
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