<?php include 'db.php'; ?>
<?php


	
	if(!empty($_POST['studentName']) && !empty($_POST['insName']) && !empty($_POST['carName']) && !empty($_POST['amt']) && !empty($_POST['slotValue']) && !empty($_POST['time']) && !empty($_POST['statusValue'])){
		$student_Name = mysqli_real_escape_string($conn, $_POST['studentName']);
		$ins_Name = mysqli_real_escape_string($conn, $_POST['insName']);
		$car_Model = mysqli_real_escape_string($conn, $_POST['carName']);
		$fee_amt = mysqli_real_escape_string($conn, $_POST['amt']);
		$slot_Value = mysqli_real_escape_string($conn, $_POST['slotValue']);
		$time = mysqli_real_escape_string($conn, $_POST['time']);
        $fee_Status = mysqli_real_escape_string($conn, $_POST['statusValue']);

		$query = "INSERT INTO billingstatus(studentname, insname, carmodel, slot, time, fee, feestatus) VALUES('$student_Name', '$ins_Name','$car_Model','$fee_amt','$slot_Value','$time','$fee_Status')";

		if(!mysqli_query($conn, $query)){
			die(mysqli_error($conn));
		} else {
			header("Location: billing.php?success=Message%20Added");
		}

	} else {
		header("Location: billing.php?error=Please%20Fill%20In%20All%20Fields");
	}



