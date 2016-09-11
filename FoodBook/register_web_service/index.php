<?php 

$un=$_GET['username'];
$pwd=$_GET['password'];

//echo $un;
//echo $pwd;


$con=mysqli_connect("localhost","root","","foodbook");
 if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$data = array("result" => 0, "message" => "Error");

$query="INSERT INTO login_info (username, password) VALUES ('$un', '$pwd')";
//print_r($result);

if(mysqli_query($con, $query)) {
	//echo "Query is true";
$data = array("result" => 1, "message" => "Success");
}

else{
//	echo "Query is false";

exit(json_encode($data));
}
mysqli_close($con);
//echo(json_encode($data));
exit(json_encode($data));

?> 