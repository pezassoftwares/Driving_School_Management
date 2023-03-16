<?php include 'db.php'; ?>
<?php


	
	if(!empty($_POST['insfirstName']) && !empty($_POST['inslastName']) && !empty($_POST['expValue']) && !empty($_POST['insageValue']) && !empty($_POST['insAvailability']) && !empty($_POST['ins_time'])){
		$ins_first_Name = mysqli_real_escape_string($conn, $_POST['insfirstName']);
		$ins_last_Name = mysqli_real_escape_string($conn, $_POST['inslastName']);
		$ins_exp_Value = mysqli_real_escape_string($conn, $_POST['expValue']);
		$ins_age_Value = mysqli_real_escape_string($conn, $_POST['insageValue']);
		$ins_slot_Value = mysqli_real_escape_string($conn, $_POST['insAvailability']);
		$ins_time = mysqli_real_escape_string($conn, $_POST['ins_time']);

		$query = "INSERT INTO instructors(firstname, lastname, exp, age, slot, time) VALUES('$ins_first_Name', '$ins_last_Name','$ins_exp_Value','$ins_age_Value','$ins_slot_Value','$ins_time')";

		if(!mysqli_query($conn, $query)){
			die(mysqli_error($conn));
		} else {
			header("Location: dashboard.php?success=Instructor%20Added");
		}

	} else {
		header("Location: dashboard.php?error=Please%20Fill%20In%20All%20Fields");
	}



