<html>
<head>
	<title> Payroll | System </title>
	
	<link href="css/style.css" type="text/css" rel="stylesheet">
	
</head>
<body>
	<!-- <div style="border: solid black 2px; height: 70px; width: 10%;background-color:#2FA5EB !important; margin-right: 0px;">
		
		
	</div> -->
	
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
							<!-- <a href="addpayroll.php">ADD PAYROLL</a> 
							<a href="employeelist.php">EMPLOYEE LIST</a> -->
							<a href="viewpayroll.php">VIEW PAYROLL</a>
							<a href="employeelist.php"><?php
session_start();
if (isset($_SESSION['name'])) {
  echo "Welcome ".$_SESSION['namee']."
        <form method='post'>
        <input class'log' type='submit' name='logout' value='LOGOUT'>
      </form>";
}else{
  echo "<a href='index.php'>LOGOUT</a>";
}
if (isset($_POST['logout'])) {
  session_unset();
  session_destroy();
  echo "<script>window.location.href='index.php'</script>";
}
?></a>
						</font>
					</td>
				</tr>
			</table>
		</div>
	</div>
	
	<div class="middle">
		<div style="background-image:url('img/payroll-folder.jpg');">
		<p>
			<br> <br>
					Payroll  <br>
			<font size="5px"> Management System </font>
		</p> 
		</div>
	</div>
	
	<div class="bottom">
		<div>
			<table border="0">
				
			</table>
		</div>
	</div>
	
	<div class="nav_down" style="padding-top:15%;">
		<div>
		 &copy;Final Project 2019
		</div>
	</div>
	
