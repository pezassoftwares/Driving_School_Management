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
	$query = 'SELECT * FROM price';
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
			
            <h2>Price Chart</h2>
		</header>

        <section class="instructors-table">
           
            <table class="grocery-list">
                <thead>
                    <tr>
						
                        <th class="col-item-name">Model Name</th>
                        <th class="col-quantity">Price per month</th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php while($row = mysqli_fetch_assoc($results)) : ?>
				
                <tr>
					
                    <td><?php echo $row['modelname']; ?>  </td>
                    <td><?php echo $row['price']; ?></td>
                </tr>
            <?php endwhile; ?>	
                
                </tbody>
            </table>
        </section>

        </div>
		
	</body>
		
</html>