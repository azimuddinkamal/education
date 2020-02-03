<?php
//Define database credentials
define('DB_SERVER','localhost'); //your server name
define('DB_USERNAME','root'); //your database username
define('DB_PASSWORD',''); //your database password
define('DB_NAME','company'); //your database name

/* Connect to MySQL database */
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

/* Check connection */
if($connection == false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
