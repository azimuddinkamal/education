
<?php

require_once "config.php";

// build the query to display all data from table complaint
$query = "SELECT * FROM complaint";

// execute the query
 if ( !( $result = mysqli_query($connection, $query) ) ) 
 {
	die("Could not execute query!" . mysqli_error($connection));
 } 

while ( $row = mysqli_fetch_row( $result ) )
{

	$row[3]=str_replace("<br>","\n",$row[3]);
	$table = "
	<table>
	<tr><td class=\"bold\">Name:</td><td>$row[0]</td></tr>
	<tr><td class=\"bold\">Email:</td><td>
                               <a href=mailto:$row[1]>$row[1]</a></td></tr>
	<tr><td class=\"bold\">Tel:</td><td>$row[2]</td></tr>
	<tr><td valign=top class=\"bold\">Complaint:</td><td>$row[3]</td></tr>
	</table><hr>
	";
} 
?>
<!DOCTYPE html>
<html>
<head><title>View page</title>
<style type=text/css>
.bold {font-weight: bold}
</style>
</head>
<body>
<tr>
<?php
	echo $table;
?>
</tr>

</body>
</html>