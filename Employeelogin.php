<!-- <div class="form">
<h1>Log In</h1>
<form method="post">
<input type="text" name="uname" placeholder="enter username">
<input type="password" name="upass" placeholder="enter password">
<input type="submit" name="login" value="Login">
</form>
<p>Not registered yet? <a href='EmployeeRegister.php'>Register Here</a -->
<?php 
session_start();
@$_SESSION['namee'];
if(isset($_POST['login']))
{
	$uname = $_POST['uname'];
	$upass = $_POST['upass'];
	$con = mysqli_connect("localhost","root","","payroll");
	$qry = mysqli_query($con, "select * from employee where eID = '$uname' and ePassword= '$upass'");
	if(mysqli_num_rows($qry) > 0)
	{
		$roww = mysqli_fetch_array($qry);
		$_SESSION['namee'] = $roww['eID']." ".$roww['eName'];
		echo "<script>window.location.href='homeemployee.php';</script>";
	}
	else
	{
		echo "no username/password registered";
	}
	
}
?>


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
                <input type="text" name="uname" placeholder="Username" required="" id="username" />
            </div>
            <div>
                <input type="password" name="upass" placeholder="Password" required="" id="password" />
            </div>
            <div>
                <a href="home.php"><input type="submit" name="login" value="Log In"></a>
                <span><<?php echo "You are not registered!" ?></span>
                <!-- <input type="submit" value="Log in" /> -->
                <!-- <a href="#">Lost your password?</a> -->
                
            </div>
            <div class="divv">
                <a class="aa" href="EmployeeRegister.php">Register</a>
            </div>
        </form>
        
    </section>
</div>
</body>
</html>








