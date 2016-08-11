<?php 

$servername = "127.0.0.1:3306";
$username = "root";
$password = "";

// Connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM restaurant.menu WHERE category='Lunch'";
$result = $conn->query($sql);

$sqlApp = "SELECT * FROM restaurant.menu WHERE category='Appetizer'";
$resultApp = $conn->query($sqlApp);

$sqlMain = "SELECT * FROM restaurant.menu WHERE category='Main'";
$resultMain = $conn->query($sqlMain);

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Connie's Cookhouse</title>

</head>
<body>

<div id="content">
<article>

		<!-- Appetizer drop down-->
		<p>
		<select>
		<option value"">Appetizers</option>
		<?php 
		if ($resultApp->num_rows > 0) {
			while($row = $resultApp->fetch_assoc()) { ?>
				<option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?> - $<?php echo $row['price']?></option>
				<br>
				<?php
			}
			} ?>
		</select>
		</p>

		<!-- Lunch drop down-->
		<p>
		<select id ="Lunch" name="Lunch">
		<option value"">Lunch Specials</option>
		<?php 
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) { ?>
				<option value=<?php echo $row['name']; ?>"><?php echo $row['name']; ?> - $<?php echo $row['price']?></option>
				<br>
				<?php
			}
			} ?>
		</select>
		</p>

		<!-- Main Course drop down-->
		<p>
		<select>
		<option value"">Main Courses</option>
		<?php 
		if ($resultMain->num_rows > 0) {
			while($row = $resultMain->fetch_assoc()) { ?>
				<option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?> - $<?php echo $row['price']?></option>
				<br>
				<?php
			}
			} ?>
		</select>
		</p>
		
		<p><button type="button" onclick="alert('Your order has been submitted.')">Submit</button></p>

</article>
</div>

</body>
</html>

