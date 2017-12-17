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

					

					$phonenumber = (isset($_POST['phonenumber'])    ? $_POST['phonenumber']   : '');
					

					$sql= "SELECT firstname, lastname, email
					FROM employees
					WHERE firstname = '$firstname' OR lastname = '$lastname' LIMIT 10";

					$result = mysqli_query($conn, $sql);
					if (mysqli_num_rows($result) > 0) {
					    // output data of each row
					    while($row = mysqli_fetch_assoc($result)) {
							echo "Email: " . $row["email"]. "<br>";	
					        echo "First Name: " . $row["firstname"]. "<br>";
					        echo "Last Name: " . $row["lastname"]. "<br><hr>";
					    }
					} else {
					    echo "0 results";
					}
					mysqli_close($conn);
					?>
				</div>

				<div data-role="footer" data-theme="b">
	  <h4> elenyaapp </h4>
	</div> 	</div>
	</body>