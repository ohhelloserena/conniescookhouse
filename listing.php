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

$sql = "SELECT * WHERE category='Lunch'";
$result = $conn->query($sql);

$sqlApp = "SELECT * WHERE category='Appetizer'";
$resultApp = $conn->query($sqlApp);

$sqlMain = "SELECT * WHERE category='Main'";
$resultMain = $conn->query($sqlMain);

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Connie's Cookhouse</title>

<?php echo "<link rel='style' type='text/css' href='style.css' />" ?>

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
	
	<div id="banner">
		<h2><span>Healthy Chinese Cooking</span></h2>
	</div>


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
