<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if (isset($_POST['Register'])){
		//echo "Within Register";
	
    $url = "http://localhost/register_web_service/";
    $results = file_get_contents('http://localhost/register_web_service/index.php?username='.$username.'&password='.$password);
					//echo "Print_r result output:";
					//print_r($results);
					$res = json_decode($results,true);
					//echo "Print_r res output:";
					//print_r($res);
					if($res["result"]==1){
					session_start();
					$_SESSION["username"]=$username;
					header("Location:homepage.php");
					//echo "USer registered in successfully";
					exit();
					 }
					else{
					echo '<h3 style=color:red>Invalid Username or Password</h3><br/>';
					}

}

else if (isset($_POST['Login'])){
	
    $url = "http://localhost/login_web_service/";
    $results = file_get_contents('http://localhost/login_web_service/index.php?username='.$username.'&password='.$password);
					//echo "Print_r result output:";
					//print_r($results);
					$res = json_decode($results,true);
					//echo "Print_r res output:";
					//print_r($res);
					if($res["result"]==1){
					session_start();
					$_SESSION["username"]=$username;
					header("Location:homepage.php");
					echo "USer logged in successfully";
					exit();
					 }
					else{
					echo '<h3 style=color:red>Invalid Username or Password</h3><br/>';
					}

}

else if (isset($_POST['Upload'])){
session_start();
$url = "http://localhost/upload_web_service/";	
$username = $_SESSION["username"];
//echo $username;
if ((($_FILES["photo"]["type"] == "image/gif")
  || ($_FILES["photo"]["type"] == "image/jpeg")
  || ($_FILES["photo"]["type"] == "image/png"))
  && ($_FILES["photo"]["size"] < 1000000))
  {
  if ($_FILES["photo"]["error"] > 0)
  {
  echo "Return Code: " . $_FILES["photo"]["error"] . " ";
  }
  else
  {
    echo "Upload: " . $_FILES["photo"]["name"] . "";
    echo "<br>";
    echo "Type: " . $_FILES["photo"]["type"] . "";
    echo "<br>";
    echo "Size: " . ($_FILES["photo"]["size"] / 1024) . " Kb";
    echo "<br>";
    echo "Temp file: " . $_FILES["photo"]["tmp_name"] . "";
    echo "<br>";

  if (file_exists("users/" . $_FILES["photo"]["name"]))
  {
  echo $_FILES["photo"]["name"] . " already exists. ";
  }
  else
  {
move_uploaded_file($_FILES["photo"]["tmp_name"], "uploads/" . $_FILES["photo"]["name"]);
echo "Stored in: " . "uploads/" . $_FILES["photo"]["name"];
//print_r($_SESSION["username"]);
 $results = file_get_contents('http://localhost/upload_web_service/index.php?username='.$username.'&image_id=uploads/'.$_FILES["photo"]["name"]);
					
					$res = json_decode($results,true);
					//echo "Print_r res output:";
					print_r($res);
					if($res["result"]==1){
					echo "File uploaded successfully";
					header("homepage.php");
					exit();
					 }
					else{
					echo '<h3 style=color:red>Invalid Username or Password</h3><br/>';
					}





  }
  }
  } 
  else
  {
  echo "Invalid file";
  }
 
}
}

    
?>