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
	<h2>Add Students</h2>
	<p>Number must be unique.</p>
            <form  method="POST" action="query_submission.php">
					
                <label for="firstName" hidden>Enter Name</label>
                <input type="text"  name="firstName" id="firstName" placeholder="Enter Name">

                <label for="lastName" hidden>Enter lastName</label>
                <input type="text" name="lastName" id="lastName" placeholder="Enter Last Name">

				<select name="ageValue" id="selectAge">
					<option value="" disabled selected>Select your age</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
					<option value="32">32</option>
					<option value="33">33</option>
					<option value="34">34</option>
					<option value="35">35</option>
					<option value="36">36</option>
					<option value="37">37</option>
					<option value="38">38</option>
					<option value="39">39</option>
					<option value="40">40</option>
				</select>

                <label for="phone" hidden>Enter Phone</label>
                <input type="tel" name="phone" id="mobilePhone" placeholder="Enter Your Mobile Number">

				<select name="slotValue" id="selectTime">
					<option value="" disabled selected>Select your preferred time slot</option>
					<option value="Morning">Morning Batch 6 AM to 9 AM</option>
					<option value="Evening">Evening Batch 4 PM to 7 PM</option>
				</select>

				
                <label for="time" hidden>Enter Time</label>
                <input type="number" name="time" min=4 max=9 oninput="validity.valid||(value='')" id="timeSlot" placeholder="Enter Your Slot Time">

                <input type="submit" id="loginbutton" value="Submit Request">
            </form>
        </section>

        </div>
	</body>	
</html>