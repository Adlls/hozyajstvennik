<?php
session_start();
if(empty($_SESSION['user'])) {
     header("Location: ./../login.php");
     die;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Административная панель</title>
	<meta charset="utf-8">
<!--<meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../styles/style-admin-panel.css">
    <script src="../../scripts/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="../../styles/font-awesome/css/font-awesome.min.css">

</head>

<body>



<div class="left-content clearfix">

<div class="user-prof">
	<!--<a href="index.php"><div class = "photo-user">фото</div></a> -->
	<div class="user-name"><?php echo $_SESSION['user']['login']; ?></div>
	</div>

	<div class="menu-left-content">
		<ul>
		<!--	<li id="users-show"> <i class="fa fa-list-ul" aria-hidden="true" style="padding-right: 15px;"> </i>  Список юзеров</li> -->
			<li id="text-change"> <i class="fa fa-list-ul" aria-hidden="true" style="padding-right: 15px;"> </i> Акции</li>
			<li id = "catalog"> <i class="fa fa-shopping-cart" style="padding-right: 15px;" aria-hidden="true"></i></i> Список товаров</li>
		</ul>
		</div>
</div>


<div class="main-content clearfix">
 	
<div class="top-content">
</div>
<div class="prof-content">
	
<!--	<div class = "photo-user photo-prof">фото</div> -->
	<div class="user-name user-prof-2"><?php echo $_SESSION['user']['login']; ?></div>
<div class="exit"><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> </a> </div>
</div>
<div class="setup">   
<p class="load"></p>
</div>

 </div> 

<script src="scripts/main.js"></script>
</body>
</html>