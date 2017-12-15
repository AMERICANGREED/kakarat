<?php
// Create connection
// $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//
$conn=mysqli_init();

mysqli_ssl_set($conn, NULL, NULL, {ca-cert filename}, NULL, NULL);

mysqli_real_connect($conn, "kakarat2-mysqldbserver.mysql.database.azure.com", "mysqldbuser@kakarat2-mysqldbserver", "Etinge2017", 'mysqldatabase45775', 3306);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
