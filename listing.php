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

		<form action="confirmation.php">
		Name <input type="text" id="name" value=" "><br>
		City <input type="text" id="city" value=" "><br>
		Telephone <input type="text" id="telephone" value=" "><br>
		Street Address <input type="text" id="st_address" value=" "><br>
		Zip Code <input type="text" id="zip" value=" "><br>
		Email <input type="text" id="email" value=" "><br>

		<!-- Item 1 -->
		Item 1&nbsp;&nbsp;&nbsp; 
			<select id ="item1">
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
		<select id="item3">
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
		<select id="item5">
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
			<select id="item7">
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
			<select id="item9">
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
	
		<!-- Item 2 -->
		Item 2&nbsp;&nbsp;&nbsp; 
			<select id="item2">
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
			<select id="item4">
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
			<select id="item6">
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
			<select id="item8">
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
			<select id="item10">
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

		<!-- Additional Info -->
		Further Instructions <textarea id="instructions" rows="5" cols="40"></textarea>
		<br><br>

		</form>
		
		<button type="button" onclick="getOrder()">Continue</button>

		<p><h3>Order Confirmation:</h3></p>

		<p id="c_name"></p>
		<p id="c_city"></p>


		<script>
		function getOrder() {
			// contact info
			var j_name = document.getElementById("name");
			var j_city = document.getElementById("city"); 
			var j_telephone = document.getElementById("telephone");
			var j_st_address = document.getElementById("st_address");
			var j_zip = document.getElementById("zip");
			var j_email = document.getElementById("email");

			// items
			var item1 = document.getElementById("item1");
			var item2 = document.getElementById("item2");
			var item3 = document.getElementById("item3");
			var item4 = document.getElementById("item4");
			var item5 = document.getElementById("item5");
			var item6 = document.getElementById("item6");
			var item7 = document.getElementById("item7");
			var item8 = document.getElementById("item8");
			var item9 = document.getElementById("item9");
			var item10 = document.getElementById("item10");

			document.getElementByID("c_name").innerHTML = j_name;
			document.getElementByID("submission").innerHTML = j_city;
			//document.getElementByID("submission").innerHTML = j_telephone;
			//document.getElementByID("submission").innerHTML = j_st_address;
			//document.getElementByID("submission").innerHTML = j_zip;
			//document.getElementByID("submission").innerHTML = j_email;


		

		} 


</article>

</div>

</body>
</html>
