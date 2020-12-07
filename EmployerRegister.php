<?php
session_start();
@$_SESSION['namee'];
if(isset($_POST['save']))
{
$con = mysqli_connect("localhost","root","","payroll");
$emID = $_POST['emID'];
$emName = $_POST['emName'];
$emPassword = $_POST['emPassword'];
if( $emID == "" or $emName == "" or $emPassword == "" )
{
    echo "Please fill out all fields";
}
else
{
if(mysqli_query($con, "insert into employer( emID, emName, emPassword) values('$emID','$emName','$emPassword')"))
{
    echo "<script>alert('record saved');</script>";
    echo "<script>window.location.href='Employerlogin.php'</script>";
}
else
{
    echo "saving failed";
}
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
            <h1>Register</h1>
            <div>
                <input type="text" name="emID" placeholder="Employee Id" required="" id="username" />
            </div>
            <div>
                <input type="text" name="emName" placeholder="Username" required="" id="username" />
            </div>
            <div>
                <input type="password" name="emPassword" placeholder="Password" required="" id="password" />
            </div>
            <div>
                <a href="index.php"><input type="submit" name="save" value="Register"></a>
                <span><<?php echo "You are not registered!" ?></span>
            </div>
        </form>
        
    </section>
</div>
</body>
</html>