<?php include 'db.php'; ?>
<?php
// We need to use sessions, so you should always start sessions using the below code.
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
}
?>


<?php
	// SELECT QUERY
	$query = 'SELECT * FROM queryrequest';
	$results = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>List of instructors</title>
		<link rel="stylesheet" href="css/style.css">
		
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
			
            <h2>List of query raised for the driving class request.</h2>
		</header>

		
        <section class="instructors-table">
		<form action="generate_excel.php" method="post" id="export-form">
            <input type="submit" value="Download to excel" id="loginbutton" name="ExportType" />
        </form>
           
            <table class="grocery-list">
                <thead>
                    <tr>
                        
                        <th class="col-item-name">Student Name</th>
                        <th class="col-quantity">Age</th>
                        <th class="col-quantity">Mobile No.</th>
                        <th class="col-price">Preferred Slot</th>
                        <th class="col-price">Timing</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($row = mysqli_fetch_assoc($results)) : ?>
				
                    <tr>
                        
                        <td><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?>  </td>
                        <td><?php echo $row['age']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['slot']; ?></td>
                        <td><?php echo $row['time']; ?></td>
                    </tr>
				<?php endwhile; ?>	
                    
                </tbody>
            </table>
        </section>

        </div>
		
	</body>
	<script type="text/javascript">
$(document).ready(function() {
jQuery('#Export to excel').bind("click", function() {
var target = $(this).attr('id');
switch(target) {
  case 'Download to excel' :
  $('#hidden-type').val(target);
  //alert($('#hidden-type').val());
  $('#export-form').submit();
  break
}
});
    });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		
</html>