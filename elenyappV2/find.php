<html>
		<head>
	<title>Employee Search</title>
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles/custom.css" />
<link rel="stylesheet" href="themes/rasmussenthemeroller.min.css" />
<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script> -->
</head>
	<body>
		<div id="page" data-role="page" data-theme="b" >
	<div data-role="header" data-theme="b">
<h1>
	Employee Search
		</h1>	</div>
				<div data-role="content">


					<?php
					include 'config.php';
					include 'opendb.php';
					$id = (isset($_POST['id'])    ? $_POST['id']   : '');
					$firstname = (isset($_POST['fname'])    ? $_POST['fname']   : '');

					$lastname = (isset($_POST['lname'])    ? $_POST['lname']   : '');


					$sql= "SELECT id , firstname, lastname FROM ktable
				WHERE lastname = '$lname' OR firstname = '$fname'  OR id = '$id'";
					$result = mysqli_query($conn, $sql);

					if (mysqli_num_rows($result) > 0) {
					    // output data of each row
					    while($row = mysqli_fetch_assoc($result)) {
									echo "ID: " . $row["id"]. "<br>";
					        echo "First Name: " . $row["fname"]. "<br>";
					        echo "Last Name: " . $row["lname"]. "<br><hr>";
					    }
					} else {
					    echo "0 results";
					}

					mysqli_close($conn);

					?>
				</div>
			</div>
				<div data-role="footer" data-theme="b">
	  <h4> elenyaapp </h4>
	</div>
	</body>
</html>
