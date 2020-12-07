<html>
<head>
  <title> Payroll | System </title>
  
  <link href="css/style.css" type="text/css" rel="stylesheet">
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 2px;
    text-align: left;
}
header {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}

</style>
  
</head>
<body>
  
  <div class="top">
    <div>
      Information Management & Web System And Techonologies 2
     <!-- Contact Us +91 96366 20000 / 01 | ukh@hospital.com  -->
    </div>
  </div>
  
  <div class="logo">
    <div>
      <table>
        <tr>
          <td width="400px" style="font-size:50px;font-family:forte;"> <font color="#428bca"> Payroll  </font><font color="#000"> System</font> </td>
          <td> <br> <br>
            <font size="4px"> 
              <a href="homeemployee.php">HOME</a>
              <a href="addpayroll.php">VIEW PAYROLL</a> 
              <!-- <a href="contact.html">VIEW PAYROLL</a> -->
            </font>
          </td>
        </tr>
      </table>
    </div>
  </div>
  
  
  <div style="width:800px; height:900px; font-family:calibri;">
    <div>
<?php 
session_start();
@$_SESSION['namee'];
?>
<form method="post">
<?php
@$eID = $_POST['eID']; 
echo '<input type="text" name="eID" placeholder="Enter Employee ID">' ?>
<input style="font-size: 30px;margin-left: 10px; margin-top: 20px;" type="submit" name="submit" value="Submit" required>
</form>
<br /><br />
<?php
$con = mysqli_connect("localhost","root","","payroll");
$qry = mysqli_query($con, "select * from payroll where eID = $eID ");
if(isset($_POST['submit'])){
while($row = mysqli_fetch_array($qry))
{
	echo'
	<body>

<table style="width:50%">
  <caption><header><h1>My Payroll</h1></header></caption>
	<tr>
		<td>Name:</td>
		<td>'.$row['eName'].'</td>
	</tr><br>
	<tr>
		<td>Rate Per Hour:</td>
		<td>'.$row['rateperhour'].'</td>
	</tr><br>
	<tr>
		<td>Hour Per Day:</td>
		<td>'.$row['hourperday'].'</td>
	</tr><br>
	<tr>
		<td>Number Of days work:</td>
		<td>'.$row['numberofdayswork'].'</td>
	</tr><br>
	<tr>
		<td>Gross Salary:</td>
		<td>'.$row['grossSalary'].'</td>
	</tr><br>
	<tr>
		<td>Tax:</td>
		<td>'.$row['tax'].'</td>
	</tr><br>
	<tr>
		<td>Philhealth:</td>
		<td>'.$row['philhealth'].'</td>
	</tr><br>
	<tr>
		<td>SSS:</td>
		<td>'.$row['sss'].'</td>
	</tr><br>
	<tr>
		<td>Total Deduction:</td>
		<td>'.$row['totaldeduct'].'</td>
	</tr><br>
	<tr>
		<td>Net Salary:</td>
		<td>'.$row['netsalary'].'</td>
	</tr>
	</table>
	</body>
	';



	/*echo $row['eID']." ".$row['eName']." ".$row['rateperhour'].", ".$row['hourperday'].", ".$row['numberofdayswork']." ".$row['tax'].", ".$row['philhealth'].", ".$row['sss'].", ".$row['totaldeduct'].", ".$row['netsalary'];
	echo "<br>";*/
}
}
?>
      
    </div>
  </div>
  
  <div class="nav_down" style="padding-top:15%;">
    <div>
     &copy;Final Project 2019
    </div>
  </div>
  








