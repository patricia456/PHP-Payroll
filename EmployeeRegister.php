
<?php
if(isset($_POST['save']))
{
$con = mysqli_connect("localhost","root","","payroll");
$eID = $_POST['eID'];
$eName = $_POST['eName'];
$eAge = $_POST['eAge'];
$eJobDesc = $_POST['eJobDesc'];
$eContact = $_POST['eContact'];
$eGender = $_POST['eGender'];
$eAddress = $_POST['eAddress'];
$eBirthday = $_POST['eBirthday'];
$ePassword = $_POST['ePassword'];
if( $eID =="" or $eName == "" or $eAge == "" or $eJobDesc == "" or $eContact == "" or $eGender == "" or $eAddress == "" or $eBirthday == "" or $ePassword == "")
{
	echo "Please fill out all fields";
}
else
{
if(mysqli_query($con, "insert into employee( eID, eName, eAge, eJobDesc, eContact, eGender, eAddress,eBirthday,ePassword) values('$eID','$eName','$eAge','$eJobDesc','$eContact','$eGender','$eAddress','$eBirthday','$ePassword')"))
{
	echo "<script>alert('record saved');</script>";
	echo "<script>window.location.href='Employeelogin.php';</script>";
}
else
{
	echo "saving failed";
}
}
}
?>
</body>
</html>




<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Paper Stack</title>
<link rel="stylesheet" type="text/css" href="css/login.css" />
<style type="text/css"></style>
</head>
<body>
<div class="container">
    <section id="content">
        <form method="POST" autocomplete="off">
            <h1>Login Form</h1>
			 <div>
            	<input type="text" name="eID" placeholder="Employee ID" id="username" required>
            </div>
            <div>
            	<input type="text" name="eName" placeholder="Employee Name" id="username" required>
            </div>
            <div>
            	<input type="text" name="eAge" placeholder="Age"required>
            </div>
            <div>
            	<input type="text" name="eJobDesc" placeholder="Job Description" required>
            </div>
            <div>
            	<input type="text" name="eContact" placeholder="Contact Number" required>
            </div>
            <div>
            	<input type="text" name="eGender" placeholder="Male or Female" required>
            </div>
            <div>
            	<input type="text" name="eAddress"placeholder="Address" required>
            </div>
            <div style="font-size: 20px;">
            	Birthday <input style="font-size: 20px;" type="date" name="eBirthday" required>
            </div>
            <div style="margin-top: 10px;">
            	<input type="password" name="ePassword" placeholder="Password" required><br>
            </div>
            <div>
               <input type="submit" name="save" value="REGISTER">
            </div>
        </form>
        
    </section>
</div>
</body>
</html>
