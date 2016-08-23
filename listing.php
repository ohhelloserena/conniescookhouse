<?php 

//$servername = "127.0.0.1:3306";
//$username = "root";
//$password = "";

// ClearDB MySQL
$DB_HOST = "us-cdbr-iron-east-04.cleardb.net";
$DB_DATABASE = "heroku_e7a6e415d917761";
$DB_USERNAME = "b6b2ab681e26b0";
$DB_PASSWORD = "4a7a9103";

// Connection
$conn = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);
//$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM menu WHERE category='Lunch'";
$result = $conn->query($sql);

$sqlApp = "SELECT * FROM menu WHERE category='Appetizer'";
$resultApp = $conn->query($sqlApp);

$sqlMain = "SELECT * FROM menu WHERE category='Main'";
$resultMain = $conn->query($sqlMain);

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Connie's Cookhouse</title>

<link rel="stylesheet" type="text/css" href="style.css" />

</head>

<body>

<div id="container">
	<header>
		<div id="header-content">
			<h1><a href="main.html" class="class1">Connie's Cookhouse</a></h1>
			
			<nav>
				<ul>
					<li><a href="http://www.conniescookhouse.com/menu.pdf" class="class1">Menu</a></li>
					<li><a href="#Bot" class="class1">Location + Hours</a></li>
					<li><a href="localhost/restaurant/listing.php" class="class1">Order Online</a></li>
				</ul>
			</nav>
		</div>
	</header>
	
	<div id="banner2">
		<h2><span>Order from the comfort of your home</span></h2>
	</div>

	<div id="content">
	<article>

	<div class="column1">

		<form action="demo_form.asp">
		Name: <input type="text" name="Name" value=""><br>
		City: <input type="text" name="City" value=""><br>
		Telephone: <input type="text" name="Telephone" value=""><br>
		</form>

		<!-- Appetizer drop down-->
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
		<!-- Lunch drop down-->
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

		</div>

		<div class="column2">

		<form action="demo_form.asp">
		Street Address: <input type="text" name="StAddress" value=""><br>
		Zip Code: <input type="text" name="ZipCode" value=""><br>
		Email: <input type="text" name="Email" value=""><br>
		</form>

		<!-- Main Course drop down-->
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
		
		</div>

</article>

<p><button type="button" onclick="alert('Your order has been submitted.')">Submit</button></p>

</div>

</body>
</html>
