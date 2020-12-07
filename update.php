<?php 
$con = mysqli_connect("localhost","root","","payroll");
@$eID = $_REQUEST['eId'];
@$get_record = mysqli_query($con, "SELECT * FROM employee WHERE eID='$eID'");


@$get_record_num = mysqli_num_rows($get_record);

if ($get_record_num > 0) {
	while ($roww = mysqli_fetch_assoc($get_record)) {
		$db_eName = $roww['eName'];
		$db_eAge = $roww['eAge'];
		$db_eJobDesc = $roww['eJobDesc'];
		$db_eContact = $roww['eContact'];
		$db_eGender = $roww['eGender'];
		$db_eBirthday = $roww['eBirthday'];
	}

	$new_eName=$new_eAge=$new_eJobDesc=$new_eContact=$new_eGender=$new_eBirthday="";
	$new_eNameErr=$new_eAgeErr=$new_eJobDescErr=$new_eContactErr=$new_eGenderErr=$new_eBirthdayErr="";

	if (isset($_POST['update'])) {
		if (empty($_POST['new_eName'])) {
			$new_eName = "This field must not be empty!";
		}else{
			$new_eName = $_POST['new_eName'];
			$db_eName = $new_eName;
		}

		if (empty($_POST['new_eAge'])) {
			$new_eAgeErr = "This field must not be empty!";
		}else{
			$new_eAge = $_POST['new_eAge'];
			$db_eAge = $new_eAge;
		}

		if (empty($_POST['new_eJobDesc'])) {
			$new_eJobDescErr = "This field must not be empty!";
		}else{
			$new_eJobDesc = $_POST['new_eJobDesc'];
			$db_eJobDesc = $new_eJobDesc;
		}

		if (empty($_POST['new_eContact'])) {
			$new_eContactErr = "This field must not be empty!";
		}else{
			$new_eContact = $_POST['new_eContact'];
			$db_eContact = $new_eContact;
		}

		if (empty($_POST['new_eGender'])) {
			$new_eGenderErr = "This field must not be empty!";
		}else{
			$new_eGender = $_POST['new_eGender'];
			$db_eGender = $new_eGender;
		}

		if (empty($_POST['new_eBirthday'])) {
			$new_eBirthdayErr = "This field must not be empty!";
		}else{
			$new_eBirthday = $_POST['new_eBirthday'];
			$db_eBirthday = $new_eBirthday;
		}

		if ($new_eName && $new_eAge && $new_eJobDesc && $new_eContact && $new_eGender && $new_eBirthday) {
			mysqli_query($con, "UPDATE employee SET eName = '$new_eName', eAge = '$new_eAge', eJobDesc = '$new_eJobDesc', eContact = '$new_eContact', eGender = '$new_eGender', eBirthday = '$new_eBirthday' WHERE eID='$eID'");
			echo "<script>alert('record edit sucessfully');</script>";
			echo "<script>window.location.href='employeelist.php'</script>";
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
</head>
<body>
<div class="container">
    <section id="content">
        <form method="POST" autocomplete="off">
            <h1>Update Employee</h1>
            <div>
            	<input type="text" name="new_eName" placeholder="New Name" value="<?php echo @$db_eName; ?>">
				<span class="error"><?php echo @"$new_eNameErr"; ?></span><br>
            </div>
            <div>
            	<input type="text" name="new_eAge"  placeholder="New Age" value="<?php echo @$db_eAge; ?>">
				<span class="error"><?php echo @"$new_eAgeErr"; ?></span><br>
            </div>
            <div>
                <input type="text" name="new_eJobDesc"  placeholder="New Job Description" value="<?php echo @$db_eJobDesc; ?>">
				<span class="error"><?php echo @"$new_eJobDescErr"; ?></span><br>
            </div>
            <div>
                <input type="text" name="new_eContact"  placeholder="New Contact Number" value="<?php echo @$db_eContact; ?>">
				<span class="error"><?php echo @"$new_eContactErr"; ?></span><br>
            </div>
            <div>
                <input type="text" name="new_eGender"  placeholder="New Gender" value="<?php echo @$db_eGender; ?>">
				<span class="error"><?php echo @"$new_eGenderErr"; ?></span><br>
            </div>
            <div>
                <input type="text" name="new_eBirthday"  placeholder="New Birthday" value="<?php echo @$db_eBirthday; ?>">
				<span class="error"><?php echo @"$new_eBirthdayErr"; ?></span><br>
            </div>
           
            
            <div>
                <input  onclick="closeForm()" type="submit" name="update" value="UPDATE">
                
                
            </div>
        </form>
        
    </section>
</div>
</body>
</html>