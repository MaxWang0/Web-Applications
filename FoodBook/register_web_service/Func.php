<?php

function get_row($username1,$password1)
{
	$connection = new mysqli("localhost", "root", "","foodbook");
if($connection){echo "<p> Database connected </p>";}
else {echo "Database not connected";}
// To protect MySQL injection for Security purpose
$username = stripslashes($username1);
$password = stripslashes($password1);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
//$db = mysql_select_db("foodbook", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = "select * from login_info where password='$password' AND username='$username'";
$result=$connection->query($query);
if($result->num_rows ==1) return "Successful";
else return null;
}
?>