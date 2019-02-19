<?php
session_start();

//require("load_text.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Загловок</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../styles/style-admin.css">
	<link rel="stylesheet" type="text/css" href="styles/fontawesome/css/fontawesome.css">
	<script src="admin-panel/scripts/jquery.js"></script>
</head>
<body>

<div class="enter"><a href="login.php">Зайти в админку</a></div>

<div class="form-cont">


<form method="POST" action="checkin.php" id = "form">
	<label>Ваш логин:</label> <br>
	<input type="name" name="name" value="">
	<span style="color: red; margin: 0; padding: 0;"> <?php echo $_SESSION["errorlog"];?> </span> 
	<br>
	<label>Ваш пароль</label> <br>
	<input type="password" name="password" value="">
	<span style="color: red; margin: 0; padding: 0;"> <?php echo $_SESSION["errorpass"];?></span> 
	 <br>
	<input type="submit" name="submit" value="Зарегистрироваться">
</form>

</div>

<!--

<div style="margin-top: 50px; margin-left: 60px; margin-right: 60px; margin-bottom: 50px;" >
	<div class="test_p1">
    <?php /* echo $set_text; */ ?>
</div>
-->


<!--
<div class="paste"> 
	...
</div>
-->
</div>

<script>
	

/*
	$(document).ready(function(){


     function succ(data) {
         
         $(".paste").text(data);
     }

     var p_1 = $(".test_p1").text();
     

     $.ajax({
       
       url: "load_text.php",
       type: "POST",
       data: ({text_1: p_1}),
       dataType: "html",
       success: succ

     });


	});
*/

</script>

</body>


</html>
