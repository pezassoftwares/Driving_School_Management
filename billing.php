<?php include 'fetch-data.php'?>
<?php
// We need to use sessions, so you should always start sessions using the below code.
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
		<title>Billing</title>
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

		<!-- First Form Addition of Students-->

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
	<h2>Add Student Billing Details</h2>
            <form  method="POST" action="billing_submission.php">

            <select name="studentName" id="selectAge">
                    <option>Select Student Name</option>
                <?php 
                    foreach ($student_name as $option) {
                ?>
                    <option><?php echo $option['firstname'] ?> <?php echo $option['lastname'] ?> </option>
                <?php 
                     }
                ?>
            </select>

            <select name="insName" id="selectAge">
                    <option>Select Instructor</option>
                <?php 
                    foreach ($instructor_name as $option) {
                ?>
                    <option><?php echo $option['firstname'] ?> <?php echo $option['lastname'] ?> </option>
                <?php 
                     }
                ?>
            </select>
					
            <select name="carName" id="selectAge">
                    <option>Select Car Model</option>
                <?php 
                    foreach ($model_name as $option) {
                ?>
                    <option><?php echo $option['modelname'] ?></option>
                <?php 
                     }
                ?>
            </select>
					
                <label for="amt" hidden>Enter Phone</label>
                <input type="number" name="amt"  min=1 oninput="validity.valid||(value='')" id="mobilePhone" placeholder="Enter Amount Paid">

				<select name="slotValue" id="selectTime">
					<option value="" disabled selected>Select your preferred time slot</option>
					<option value="Morning">Morning Batch 6 AM to 9 AM</option>
					<option value="Evening">Evening Batch 4 PM to 7 PM</option>
				</select>

				
                <label for="time" hidden>Enter Time</label>
                <input type="number" name="time" min=4 max=9 oninput="validity.valid||(value='')" id="timeSlot" placeholder="Enter Your Slot Time">

                <select name="statusValue" id="selectTime">
					<option value="" disabled selected>Payment Status</option>
					<option value="Paid">Paid</option>
				</select>


                <input type="submit" id="loginbutton" value="Submit">
            </form>
        </section>

        </div>
	</body>	
</html>