<?php

$unmae= "interncrowddb";
$password = "";

$db_name = "newdb";

// $conn = mysqli_connect($sname, $unmae, $password, $db_name);

$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "https://github.com/ajaykumarvarma/phpwebapp/blob/main/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($conn, "ajayinterncrowd.mysql.database.azure.com", "interncrowddb", "", "newdb", 3306, MYSQLI_CLIENT_SSL)

if (!$conn) {
	echo "Connection failed!";
}
