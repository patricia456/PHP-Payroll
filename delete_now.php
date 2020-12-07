<?php
$con = mysqli_connect("localhost","root","","payroll");;
if (isset($_POST['yes'])) {
	
$eID = $_POST['eID'];
mysqli_query($con, "DELETE FROM employee WHERE eID = '$eID'");
echo "<script>alert('Record has been deleted!');</script>";
echo "<script>window.location.href='employeelist.php';</script>";
}else{
	echo "<script>alert('CAN\'T DELETE');</script>";
}
?>