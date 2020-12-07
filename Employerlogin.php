<?php
session_start();
@$_SESSION['namee'];
if(isset($_POST['login']))
{
    $uname = $_POST['uname'];
    $upass = $_POST['upass'];
    $con = mysqli_connect("localhost","root","","payroll");
    $qry = mysqli_query($con, "select * from employer where emID = '$uname' and emPassword= '$upass'");
    if(mysqli_num_rows($qry) > 0)
    {
        $roww = mysqli_fetch_array($qry);
        $_SESSION['namee'] = $roww['emID']." ".$roww['emName'];
        echo "<script>window.location.href='homeEmployer.php';</script>";
    }
    else
    {
        echo"<center>no username/password registered</center>";
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
                <a href="index.php"><input type="submit" name="login" value="Log In"></a>
                <span><<?php echo "You are not registered!" ?></span>
                <!-- <input type="submit" value="Log in" /> -->
                <!-- <a href="#">Lost your password?</a> -->
                
            </div>
            <div class="divv">
                <a class="aa" href="EmployerRegister.php">Register</a>
            </div>
        </form>
        
    </section>
</div>
</body>
</html>