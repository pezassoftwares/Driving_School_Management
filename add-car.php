<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>DASHBOARD</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>
	
	<body>
	
        <div class="container">
		<header>
			<nav class="site-nav">
				<ul>
                	<li><a href="dashboard.php">Add Students</a></li>
					<li><a href="report.php">Student List</a></li>
					<li><a href="add-instructor.php">Add Instructor</a></li>
					<li><a href="instructors.php">Instructor List</a></li>
					<li><a href="add-car.php">Add Car</a></li>
					<li><a href="cars.php">Car List</a></li>
					<li><a href="price.php">Price List</a></li>
					<li><a href="billing.php">Billing</a></li>
					<li><a href="billing_report.php">Billing Report</a></li>
					
				</ul>
			</nav>
			<nav class="site-nav-logout">
				<ul>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</nav>
		</header>

		<!-- Form Addition of Instructor-->
		<section class="query-form">
		<?php if(isset($_GET['error'])): ?>
		<div class="w3-panel w3-red">
  			<p><?php echo $_GET['error']; ?></p>
		</div> 	
	<?php endif; ?>
	<?php if(isset($_GET['success'])): ?>
		<div class="w3-panel w3-green">
  			<p><?php echo $_GET['success']; ?></p>
		</div> 	
	<?php endif; ?>
	<h2>Add Available Cars for Training</h2>
            <form  method="POST" action="add_carmodels.php">
					
                <label for="carName" hidden>Enter Car Name</label>
                <input type="text"  name="carName" id="firstName" placeholder="Enter Car Name">


				<select name="carage" id="selectAge">
					<option value="" disabled selected>Select Car Age.</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				</select>

				<select name="carAvailability" id="selectTime">
					<option value="" disabled selected>Availability</option>
					<option value="Morning">Morning Batch 6 AM to 9 AM</option>
					<option value="Evening">Evening Batch 4 PM to 7 PM</option>
				</select>

				
                <label for="time" hidden>Enter Time</label>
                <input type="number" name="car_time" min=4 max=9 oninput="validity.valid||(value='')" id="timeSlot" placeholder="Enter Availability Slot Time">

                <input type="submit" id="loginbutton" value="Add Car">
            </form>
        </section>
        </div>
	</body>	
</html>