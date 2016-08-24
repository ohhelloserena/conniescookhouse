<?php 

/*
$servername = "127.0.0.1:3306";
$username = "root";
$password = "";
*/


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

$sqlLunch = "SELECT * FROM menu WHERE category = 'Lunch'";
$result = $conn->query($sqlLunch);
$result2 = $conn->query($sqlLunch);
$result3 = $conn->query($sqlLunch);
$result4 = $conn->query($sqlLunch);
$result5 = $conn->query($sqlLunch);
$result6 = $conn->query($sqlLunch);
$result7 = $conn->query($sqlLunch);
$result8 = $conn->query($sqlLunch);
$result9 = $conn->query($sqlLunch);
$result10 = $conn->query($sqlLunch);

$sqlApp = "SELECT * FROM menu WHERE category='Appetizer'";
$resultApp = $conn->query($sqlApp);
$resultApp2 = $conn->query($sqlApp);
$resultApp3 = $conn->query($sqlApp);
$resultApp4 = $conn->query($sqlApp);
$resultApp5 = $conn->query($sqlApp);
$resultApp6 = $conn->query($sqlApp);
$resultApp7 = $conn->query($sqlApp);
$resultApp8 = $conn->query($sqlApp);
$resultApp9 = $conn->query($sqlApp);
$resultApp10 = $conn->query($sqlApp);

$sqlMain = "SELECT * FROM menu WHERE category='Main'";
$resultMain = $conn->query($sqlMain);
$resultMain2 = $conn->query($sqlMain);
$resultMain3 = $conn->query($sqlMain);
$resultMain4 = $conn->query($sqlMain);
$resultMain5 = $conn->query($sqlMain);
$resultMain6 = $conn->query($sqlMain);
$resultMain7 = $conn->query($sqlMain);
$resultMain8 = $conn->query($sqlMain);
$resultMain9 = $conn->query($sqlMain);
$resultMain10 = $conn->query($sqlMain);

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
			<h1><a href="https://conniescookhouse.herokuapp.com/" class="class1">Connie's Cookhouse</a></h1>
			
			<nav>
				<ul>
					<li><a href="http://www.conniescookhouse.com/menu.pdf" class="class1">Menu</a></li>
					<li><a href="https://conniescookhouse.herokuapp.com/main.html#Bot" class="class1">Location + Hours</a></li>
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
		Name <input type="text" name="Name" value=" "><br>
		City <input type="text" name="City" value=" "><br>
		Telephone <input type="text" name="Telephone" value=" "><br>
		</form>

		<!-- Item 1 -->
		Item 1&nbsp;&nbsp;&nbsp; 
			<select>
			<option value"">Please Select</option>

			<?php if ($resultApp->num_rows > 0) { ?>
				<option value"">---Appetizers---</option> 
				
				<?php while($row = $resultApp->fetch_assoc()) { ?>
							<option value="<?php echo $row['price']; ?>"><?php echo $row['name']; ?> - $<?php echo $row['price']?></option>
				<?php } } ?>

				<?php if ($resultMain->num_rows > 0) { ?>
				<option value"">---Main Courses---</option> 
				
				<?php while($row = $resultMain->fetch_assoc()) { ?>
							<option value="<?php echo $row['price']; ?>"><?php echo $row['name']; ?> - $<?php echo $row['price']?></option>
							<br>
				<?php } } ?>

				<?php if ($result->num_rows > 0) { ?>
				<option value"">---Lunch Specials---</option> 
				
				<?php while($row = $result->fetch_assoc()) { ?>
							<option value="<?php echo $row['price']; ?>"><?php echo $row['name']; ?> - $<?php echo $row['price']?></option>
							<br>
				<?php } } ?>

			</select>
			<br>

		<!-- Item 3 -->
		Item 3&nbsp;&nbsp;&nbsp; 
		<select>
			<option value"">Please Select</option>

			<?php if ($resultApp3->num_rows > 0) { ?>
				<option value"">---Appetizers---</option> 
				
				<?php while($row = $resultApp3->fetch_assoc()) { ?>
							<option value="<?php echo $row['price']; ?>"><?php echo $row['name']; ?> - $<?php echo $row['price']?></option>
				<?php } } ?>

				<?php if ($resultMain3->num_rows > 0) { ?>
				<option value"">---Main Courses---</option> 
				
				<?php while($row = $resultMain3->fetch_assoc()) { ?>
							<option value="<?php echo $row['price']; ?>"><?php echo $row['name']; ?> - $<?php echo $row['price']?></option>
							<br>
				<?php } } ?>

				<?php if ($result3->num_rows > 0) { ?>
				<option value"">---Lunch Specials---</option> 
				
				<?php while($row = $result3->fetch_assoc()) { ?>
							<option value="<?php echo $row['price']; ?>"><?php echo $row['name']; ?> - $<?php echo $row['price']?></option>
							<br>
				<?php } } ?>

			</select>
			<br>

		<!-- Item 5 -->
		Item 5&nbsp;&nbsp;&nbsp; 
		<select>
			<option value"">Please Select</option>

			<?php if ($resultApp5->num_rows > 0) { ?>
				<option value"">---Appetizers---</option> 
				
				<?php while($row = $resultApp5->fetch_assoc()) { ?>
							<option value="<?php echo $row['price']; ?>"><?php echo $row['name']; ?> - $<?php echo $row['price']?></option>
				<?php } } ?>

				<?php if ($resultMain5->num_rows > 0) { ?>
				<option value"">---Main Courses---</option> 
				
				<?php while($row = $resultMain5->fetch_assoc()) { ?>
							<option value="<?php echo $row['price']; ?>"><?php echo $row['name']; ?> - $<?php echo $row['price']?></option>
							<br>
				<?php } } ?>

				<?php if ($result5->num_rows > 0) { ?>
				<option value"">---Lunch Specials---</option> 
				
				<?php while($row = $result5->fetch_assoc()) { ?>
							<option value="<?php echo $row['price']; ?>"><?php echo $row['name']; ?> - $<?php echo $row['price']?></option>
							<br>
				<?php } } ?>

			</select>
			<br>

		<!-- Item 7 -->
		Item 7&nbsp;&nbsp;&nbsp; 
			<select>
			<option value"">Please Select</option>

			<?php if ($resultApp7->num_rows > 0) { ?>
				<option value"">---Appetizers---</option> 
				
				<?php while($row = $resultApp7->fetch_assoc()) { ?>
							<option value="<?php echo $row['price']; ?>"><?php echo $row['name']; ?> - $<?php echo $row['price']?></option>
				<?php } } ?>

				<?php if ($resultMain7->num_rows > 0) { ?>
				<option value"">---Main Courses---</option> 
				
				<?php while($row = $resultMain7->fetch_assoc()) { ?>
							<option value="<?php echo $row['price']; ?>"><?php echo $row['name']; ?> - $<?php echo $row['price']?></option>
							<br>
				<?php } } ?>

				<?php if ($result7->num_rows > 0) { ?>
				<option value"">---Lunch Specials---</option> 
				
				<?php while($row = $result7->fetch_assoc()) { ?>
							<option value="<?php echo $row['price']; ?>"><?php echo $row['name']; ?> - $<?php echo $row['price']?></option>
							<br>
				<?php } } ?>

			</select>
			<br>

		<!-- Item 9 -->
		Item 9&nbsp;&nbsp;&nbsp; 
			<select>
			<option value"">Please Select</option>

			<?php if ($resultApp9->num_rows > 0) { ?>
				<option value"">---Appetizers---</option> 
				
				<?php while($row = $resultApp9->fetch_assoc()) { ?>
							<option value="<?php echo $row['price']; ?>"><?php echo $row['name']; ?> - $<?php echo $row['price']?></option>
				<?php } } ?>

				<?php if ($resultMain9->num_rows > 0) { ?>
				<option value"">---Main Courses---</option> 
				
				<?php while($row = $resultMain9->fetch_assoc()) { ?>
							<option value="<?php echo $row['price']; ?>"><?php echo $row['name']; ?> - $<?php echo $row['price']?></option>
							<br>
				<?php } } ?>

				<?php if ($result9->num_rows > 0) { ?>
				<option value"">---Lunch Specials---</option> 
				
				<?php while($row = $result9->fetch_assoc()) { ?>
							<option value="<?php echo $row['price']; ?>"><?php echo $row['name']; ?> - $<?php echo $row['price']?></option>
							<br>
				<?php } } ?>

			</select>
			<br>
		</div>

		<div class="column2">

		<form action="demo_form.asp">
		Street Address <input type="text" name="StAddress" value=" "><br>
		Zip Code <input type="text" name="ZipCode" value=" "><br>
		Email <input type="text" name="Email" value=" "><br>
		</form>

		<!-- Item 2 -->
		Item 2&nbsp;&nbsp;&nbsp; 
			<select>
			<option value"">Please Select</option>

			<?php if ($resultApp2->num_rows > 0) { ?>
				<option value"">---Appetizers---</option> 
				
				<?php while($row = $resultApp2->fetch_assoc()) { ?>
							<option value="<?php echo $row['price']; ?>"><?php echo $row['name']; ?> - $<?php echo $row['price']?></option>
				<?php } } ?>

				<?php if ($resultMain2->num_rows > 0) { ?>
				<option value"">---Main Courses---</option> 
				
				<?php while($row = $resultMain2->fetch_assoc()) { ?>
							<option value="<?php echo $row['price']; ?>"><?php echo $row['name']; ?> - $<?php echo $row['price']?></option>
							<br>
				<?php } } ?>

				<?php if ($result2->num_rows > 0) { ?>
				<option value"">---Lunch Specials---</option> 
				
				<?php while($row = $result2->fetch_assoc()) { ?>
							<option value="<?php echo $row['price']; ?>"><?php echo $row['name']; ?> - $<?php echo $row['price']?></option>
							<br>
				<?php } } ?>

			</select>
			<br>

			<!-- Item 4 -->
		Item 4&nbsp;&nbsp;&nbsp; 
			<select>
			<option value"">Please Select</option>

			<?php if ($resultApp4->num_rows > 0) { ?>
				<option value"">---Appetizers---</option> 
				
				<?php while($row = $resultApp4->fetch_assoc()) { ?>
							<option value="<?php echo $row['price']; ?>"><?php echo $row['name']; ?> - $<?php echo $row['price']?></option>
				<?php } } ?>

				<?php if ($resultMain4->num_rows > 0) { ?>
				<option value"">---Main Courses---</option> 
				
				<?php while($row = $resultMain4->fetch_assoc()) { ?>
							<option value="<?php echo $row['price']; ?>"><?php echo $row['name']; ?> - $<?php echo $row['price']?></option>
							<br>
				<?php } } ?>

				<?php if ($result4->num_rows > 0) { ?>
				<option value"">---Lunch Specials---</option> 
				
				<?php while($row = $result4->fetch_assoc()) { ?>
							<option value="<?php echo $row['price']; ?>"><?php echo $row['name']; ?> - $<?php echo $row['price']?></option>
							<br>
				<?php } } ?>

			</select>
			<br>

		<!-- Item 6 -->
		Item 6&nbsp;&nbsp;&nbsp; 
			<select>
			<option value"">Please Select</option>

			<?php if ($resultApp6->num_rows > 0) { ?>
				<option value"">---Appetizers---</option> 
				
				<?php while($row = $resultApp6->fetch_assoc()) { ?>
							<option value="<?php echo $row['price']; ?>"><?php echo $row['name']; ?> - $<?php echo $row['price']?></option>
				<?php } } ?>

				<?php if ($resultMain6->num_rows > 0) { ?>
				<option value"">---Main Courses---</option> 
				
				<?php while($row = $resultMain6->fetch_assoc()) { ?>
							<option value="<?php echo $row['price']; ?>"><?php echo $row['name']; ?> - $<?php echo $row['price']?></option>
							<br>
				<?php } } ?>

				<?php if ($result6->num_rows > 0) { ?>
				<option value"">---Lunch Specials---</option> 
				
				<?php while($row = $result6->fetch_assoc()) { ?>
							<option value="<?php echo $row['price']; ?>"><?php echo $row['name']; ?> - $<?php echo $row['price']?></option>
							<br>
				<?php } } ?>

			</select>
			<br>

		<!-- Item 8 -->
		Item 8&nbsp;&nbsp;&nbsp; 
			<select>
			<option value"">Please Select</option>

			<?php if ($resultApp8->num_rows > 0) { ?>
				<option value"">---Appetizers---</option> 
				
				<?php while($row = $resultApp8->fetch_assoc()) { ?>
							<option value="<?php echo $row['price']; ?>"><?php echo $row['name']; ?> - $<?php echo $row['price']?></option>
				<?php } } ?>

				<?php if ($resultMain8->num_rows > 0) { ?>
				<option value"">---Main Courses---</option> 
				
				<?php while($row = $resultMain8->fetch_assoc()) { ?>
							<option value="<?php echo $row['price']; ?>"><?php echo $row['name']; ?> - $<?php echo $row['price']?></option>
							<br>
				<?php } } ?>

				<?php if ($result8->num_rows > 0) { ?>
				<option value"">---Lunch Specials---</option> 
				
				<?php while($row = $result8->fetch_assoc()) { ?>
							<option value="<?php echo $row['price']; ?>"><?php echo $row['name']; ?> - $<?php echo $row['price']?></option>
							<br>
				<?php } } ?>

			</select>
			<br>

		<!-- Item 10 -->
		Item 10&nbsp;&nbsp; 
			<select>
			<option value"">Please Select</option>

			<?php if ($resultApp10->num_rows > 0) { ?>
				<option value"">---Appetizers---</option> 
				
				<?php while($row = $resultApp10->fetch_assoc()) { ?>
							<option value="<?php echo $row['price']; ?>"><?php echo $row['name']; ?> - $<?php echo $row['price']?></option>
				<?php } } ?>

				<?php if ($resultMain10->num_rows > 0) { ?>
				<option value"">---Main Courses---</option> 
				
				<?php while($row = $resultMain10->fetch_assoc()) { ?>
							<option value="<?php echo $row['price']; ?>"><?php echo $row['name']; ?> - $<?php echo $row['price']?></option>
							<br>
				<?php } } ?>

				<?php if ($result10->num_rows > 0) { ?>
				<option value"">---Lunch Specials---</option> 
				
				<?php while($row = $result10->fetch_assoc()) { ?>
							<option value="<?php echo $row['price']; ?>"><?php echo $row['name']; ?> - $<?php echo $row['price']?></option>
							<br>
				<?php } } ?>

			</select>
			<br>
		</div>

</article>

</div>

</body>
</html>

