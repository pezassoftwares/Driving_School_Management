<?php include 'db.php'; ?>
<?php


	
	if(!empty($_POST['carName']) && !empty($_POST['carage']) && !empty($_POST['carAvailability']) && !empty($_POST['car_time'])){
		$car_Name = mysqli_real_escape_string($conn, $_POST['carName']);
		$car_age = mysqli_real_escape_string($conn, $_POST['carage']);
		$car_Ava = mysqli_real_escape_string($conn, $_POST['carAvailability']);
		$car_time = mysqli_real_escape_string($conn, $_POST['car_time']);
		

		$query = "INSERT INTO carmodels(modelname, modelage, slot, time) VALUES('$car_Name', '$car_age','$car_Ava','$car_time')";

		if(!mysqli_query($conn, $query)){
			die(mysqli_error($conn));
		} else {
			header("Location: add-car.php?success=Model%20Added");
		}

	} else {
		header("Location: add-car.php?error=Please%20Fill%20In%20All%20Fields");
	}



