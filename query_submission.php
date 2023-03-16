<?php include 'db.php'; ?>
<?php
	
	if(!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['ageValue']) && !empty($_POST['phone']) && !empty($_POST['slotValue']) && !empty($_POST['time'])){
		$first_Name = mysqli_real_escape_string($conn, $_POST['firstName']);
		$last_Name = mysqli_real_escape_string($conn, $_POST['lastName']);
		$age_Value = mysqli_real_escape_string($conn, $_POST['ageValue']);
		$mobile_Phone = mysqli_real_escape_string($conn, $_POST['phone']);
		$slot_Value = mysqli_real_escape_string($conn, $_POST['slotValue']);
		$time = mysqli_real_escape_string($conn, $_POST['time']);

		$query = "INSERT IGNORE INTO queryrequest(firstname, lastname, age, phone, slot, time) VALUES('$first_Name', '$last_Name','$age_Value','$mobile_Phone','$slot_Value','$time')";

		if(!mysqli_query($conn, $query)){
			
			die(mysqli_error($conn));
			//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
		} else {
			header("Location: dashboard.php?success=Message%20Added");
		}

	} else {
		header("Location: dashboard.php?error=Please%20Fill%20In%20All%20Fields");
	}



