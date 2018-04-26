<?php
//JSON
header('Content-Type: application/json');
include('db_connect.php');

//query to get data from the table
$query = sprintf("SELECT day(tanggal) as tanggal, sum(isi) as througput FROM bangsal1 GROUP BY day(tanggal)");

//execute query
$result = $con->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$con->close();

//now print the data
print json_encode($data);
?>
