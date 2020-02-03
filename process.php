
<?php
require_once "config.php";

$name 		= $_POST['name'];	
$email		= $_POST['email'];
$tel 		= $_POST['tel'];
$complaint	= $_POST['complaint'];

// build the query to insert data into complaint table
$query = "INSERT INTO complaint (name, email, tel, complaint) values ('$name', '$email', '$tel', '$complaint')";
$result = mysqli_query($connection, $query);
// execute the query
if ( !( $result = mysqli_query($connection, $query) ) ) {

	die("Could not execute query!" . mysqli_error($connection));
} 
// disconnect from the server
mysqli_close($connection);

?>
<!DOCTYPE html>
<html>
<head>
<title>Submit</title>
</head>
<body>
	<p>"Complaint submitted!</p>
	<br>
	<a href=view.php>View Complaint</a>
</body>
</html>
