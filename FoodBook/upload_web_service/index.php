<?php 

$username=$_GET['username'];
$image_id=$_GET['image_id'];

//echo $un;
//echo $pwd;


$con=mysqli_connect("localhost","root","","foodbook");
 if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$data = array("result" => 0, "message" => "Error");

$query="INSERT INTO user_images (username, image_id, datetime) VALUES ('$username', '$image_id',NOW())";
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