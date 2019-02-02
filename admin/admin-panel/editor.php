<?php

/*
session_start();

$mysqli = new mysqli("localhost", "root", "root","admin_base");
$mysqli->query("SET NAMES 'utf8'");
$result_set = $mysqli->query("SELECT * FROM `text_edit`");

//$text = "";

$_SESSION["text"] = "";

while (($row = $result_set->fetch_assoc()) != false) { $_SESSION["text"] = $row[text];}
*/


?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../styles/style-admin-panel.css">
	<script src="../../scripts/jquery.js"></script>
</head>
<body>

<!--
<div class="bookmarks">
	   <div class="group-bookmarks">
	<div class="bookmarks-item-header bookmark first-bookmark">Редактировать шапку</div>
	<div class="bookmarks-item-share bookmark">Редактировать Акции</div>
	<div class="bookmarks-item-delivery bookmark">Редактировать Доставку</div>
	  </div>
</div>
-->

<form method="POST" action="editor.php">
<!--
	<textarea class="editor_text" name="text_edit"></textarea>

	<input class="edit_btn" name = "btn_edit" type="submit" value="Изменить"/>
	
</form>
-->


<?php 

/*

$mysqli = new mysqli("localhost", "root", "root","admin_base");
$mysqli->query("SET NAMES 'utf8'");
$result_set = $mysqli->query("SELECT * FROM `text_edit`");

$text_trimed = "";

while (($row = $result_set->fetch_assoc()) != false) {

$text_trimed = trim($row[text]);



 echo "

<script>
$(\".editor_text\").text(\"".$text_trimed."\");
</script>


";


}





if (isset($_POST["btn_edit"])) {
  
$mysqli->query(" UPDATE `text_edit` SET `text` = '".$_POST["text_edit"]."' ");
$mysqli->close();

header("Location: index.php");

}
else {

	$mysqli->close();

}
*/

?>

<script src="scripts/main.js"></script>
</body>
</html>