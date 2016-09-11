<?php
include('Signin.php'); // Includes Login Script
session_start();
$username = $_SESSION["username"];


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../introducingphp/assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="This is the Home page for the User on FoodBook">
  <title>Foodbook</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="../introducingphp/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../introducingphp/assets/mobirise/css/style.css">
  <link rel="stylesheet" href="../introducingphp/assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
</head>
<body>
<section class="engine"><a rel="nofollow" href="http://www.google.com"></a></section>
<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse" id="ext_menu-6">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                    <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
                        <span class="mbr-brand__logo"><a href="../introducingphp/FoodBook.com"><img class="mbr-navbar__brand-img mbr-brand__img" src="../introducingphp/assets/images/174-128x128-24.png" alt="Foodbook_favicon"></a></span>
                        <span class="mbr-brand__name"><a class="mbr-brand__name text-white" href="http://www.google.com" align="top">FOODBOOK</a></span>
                    </span>
                </div>
                <div class="mbr-navbar__hamburger mbr-hamburger text-white"><span class="mbr-hamburger__line"></span></div>
              <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                    <aside align ="right" style="color:white">
                    <a href = "homepage.php "> My Profile </a>
                     <a href = "logout.php"> Logout </a>
                     </aside></nav></div></div></div>
                     <div class="mbr-navbar__container" style="color:white" align="center">
                    <form action="website.php" method="post" enctype="multipart/form-data">
    				Share the yummy food you had/prepared by uploading the photos <br><br>
    				<p><input type="file" name="photo" id ="file"/></p><br>
    				<p><input type="submit" value="Upload" name="Upload"/></p>
					</form> </div>
      <div class="mbr-navbar__container" style="color:white" align="left">
                     <p> <h2>Recent Posts</h2></p>  
                    <?php 
					mysql_connect("localhost", "root", "");
	mysql_select_db("foodbook");
	$res=mysql_query("SELECT * FROM user_images");
	echo "<table>";
	while ($row=mysql_fetch_array($res)) {
		echo "<td>"; echo $row["username"]; echo "</td>";
		echo "<td>";?> <img src="<?php echo $row["image_id"]; ?>" <?php echo "</td>";
		
	}
	echo "</table>";
	
					
					//echo "<p><h6>Username:" .$username."</p></h6>";
					 ?>
        <img src="" width="128" height="128" alt=""/><br>
        <a href ="Like.php">Like</a></p>
</nav>
        </div>
            </div>
        
    
</section>

<script src="../introducingphp/assets/jquery/jquery.min.js"></script>
  <script src="../introducingphp/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="../introducingphp/assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="../introducingphp/assets/mobirise/js/script.js"></script>
  
  
</body>
</html>