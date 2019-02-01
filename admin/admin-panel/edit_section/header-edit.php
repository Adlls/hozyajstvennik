<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../../styles/style-admin-panel.css">
<script src="../../scripts/jquery.js"></script>
</head>
<body>
<div class="bookmarks">
	   <div class="group-bookmarks">
	<div class="bookmarks-item-header bookmark first-bookmark active-bookmark">Редактировать шапку</div>
	<div class="bookmarks-item-share bookmark">Редактировать Акции</div>
	<div class="bookmarks-item-delivery bookmark">Редактировать Доставку</div>
	  </div>
</div>



   <div class="group-form-header"> 
<form method="POST" action="edit_section/header-edit.php" class="form-header" name = "form_header">
	<label>Меняем заголовок</label><br><br>
	<input type="text" name="title_header" class="title-header"><br><br>
	<label>Меняем призывающее описание кнопки</label><br><br>
	<input type="text" name="promo_header" class="promo-header"><br><br>
	<label>Меняем описание компании</label><br><br>
	<textarea name="description_header" class="description-header"></textarea><br>
		<input name = "button_header" type="submit" value="Сохранить"/>
</form>
   </div>




<?php 
  
  include('../database.php');

  $result_set = $mysqli->query("SELECT * FROM `header_section`");

  $title = "";
  $promo = "";
  $description = "";
  $count_header = 0;
  while (($row = $result_set->fetch_assoc()) != false) {

    $count_header++;
    $title = trim($row[title]);
  	$promo = trim($row[promo]);
  	$description = trim($row[description]);

}

$mysqli->close();

//$arrayheaders = array("title" $title,$promo,$$description);






if (isset($_POST["button_header"])) {
    
    include('../database.php');

$mysqli->query(" UPDATE `header_section` SET `title` = '".$_POST["title_header"]."' ");
$mysqli->query(" UPDATE `header_section` SET `promo` = '".$_POST["promo_header"]."' ");
$mysqli->query(" UPDATE `header_section` SET `description` = '".$_POST["description_header"]."' ");

$mysqli->close();

header("Location: ../index.php");

}
else {

	//$mysqli->close();

}





?>

<?php for($i = 0; $i < $count_header; $i++):?>

<script>
document.form_header.title_header.value= <?="\"".$title."\""?>;
$(".promo-header").text(<?="\"".$promo."\""?>);
document.form_header.promo_header.value= <?="\"".$promo."\""?>;
$(".description-header").text(<?="\"".$description."\""?>);


</script>

<?php endfor; ?>



 <script src="scripts/main.js"></script>
</body>
</html>


