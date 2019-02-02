

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
	<div class="bookmarks-item-share bookmark active-bookmark">Редактировать Акции</div>
	<div class="bookmarks-item-delivery bookmark">Редактировать Доставку</div>
	  </div>
</div>
-->


<div class="group-form-share"> 
<form method="POST" action="edit_section/share-edit.php" class="form-share" name = "form_share" enctype="multipart/form-data">
	  <div class="share-cont">
	  	<!--
	<input type="file" name="photo_share" class="photo-share" id="deletetest">
	<input type="text" name="title_share" class="title-share">
	<textarea name="description_share" class="description_share"></textarea>
	<button type="button" name="delete_share" class="delete_share" id="delbtn">Удалить</button>
	<br>
-->
 
    <input type="text" name="sendtophoto_1" value="dgdgf" style="display: none;">
   <div class="file-cont"> <div class="name_file_1 name_file"></div> <input type="file" name="photo_share_1" class="photo-share photo1"> </div>
	<input type="text" name="title_share_1" class="title-share">
	<textarea name="description_share_1" class="description_share"></textarea>
	<button type="submit" name="delete_share_1" class="delete_share_1">Удалить</button>
	<br>

     <input type="text" name="sendtophoto_2" value="dgdgf" style="display: none;">
     <div class="file-cont"> <div class="name_file_2 name_file"></div> <input type="file" name="photo_share_2" class="photo-share"></div>
	<input type="text" name="title_share_2" class="title-share">
	<textarea name="description_share_2" class="description_share"></textarea>
	<button type="submit" name="delete_share_2" class="delete_share_2">Удалить</button>
	<br>

    <input type="text" name="sendtophoto_3" value="dgdgf" style="display: none;">
    <div class="file-cont"> <div class="name_file_3 name_file"></div> <input type="file" name="photo_share_3" class="photo-share"> </div>
	<input type="text" name="title_share_3" class="title-share">
	<textarea name="description_share_3" class="description_share"></textarea>
	<button type="submit" name="delete_share_3" class="delete_share_3">Удалить</button>
	<br>

    <input type="text" name="sendtophoto_4" value="dgdgf" style="display: none;">
    <div class="file-cont"> <div class="name_file_4 name_file"></div> <input type="file" name="photo_share_4" class="photo-share"> </div>
	<input type="text" name="title_share_4" class="title-share">
	<textarea name="description_share_4" class="description_share"></textarea>
	<button type="submit" name="delete_share_4" class="delete_share_4">Удалить</button>
	<br>
  </div>

<!-- <button type ="button" name ="add_share" class="add_share">Добавить</button> -->

<button type="submit" name="save_share" class="save_share">Сохранить</button>
</form>
   </div>

 <?php 

 

//счетчик для массива данных из бд
$count = 0;
// Путь загрузки фоток для акции
$path = 'i/';
include('../database.php');


        $arrshare_photo = array();
        $arrshare_title = array();
        $arrshare_description = array();

     $result_set = $mysqli->query("SELECT * FROM `share_section`");
     while (($row = $result_set->fetch_assoc()) != false) {
     $count++;
    //$photo["photo".$count] = trim($row[photo]);
  	//$title["title".$count] = trim($row[title]);
  	//$description["description".$count] = trim($row[description]);
     array_push($arrshare_photo, trim($row[photo]));
     array_push($arrshare_title, trim($row[title]));
     array_push($arrshare_description, trim($row[description]));
}

$mysqli->close();


//for ($i=1; $i <= $count; $i++) { 


//}

  if (isset($_POST["save_share"])) {
    
    header("Location: ../index.php");


 // Обработка запроса
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
 // Загрузка файла и вывод сообщения
	for ($i=1; $i <= $count; $i++) { 
 if (!@copy($_FILES['photo_share_'.$i]['tmp_name'], $path . $_FILES['photo_share_'.$i]['name'])) 
 {
 echo 'Что-то пошло не так';
 $_FILES["photo_share_".$i]['name'] = "";
}
else {echo 'Загрузка удачна';}

  
  if ($_FILES['photo_share_'.$i]['size'] > 0) {
  	    
  	    $_POST['sendtophoto_'.$i] = $_FILES['photo_share_'.$i]['name'];

  }


}

}

include('../database.php');

for ($i=1; $i <= $count; $i++) { 

$mysqli->query(" UPDATE `share_section` SET `photo` = '".$_POST['sendtophoto_'.$i]."' WHERE `inc` = '".$i."'");
$mysqli->query(" UPDATE `share_section` SET `title` = '".$_POST["title_share_".$i]."' WHERE `inc` = '".$i."'");
$mysqli->query(" UPDATE `share_section` SET `description` = '".$_POST["description_share_".$i]."' WHERE `inc` = '".$i."'");

}

$mysqli->close();

}


for ($i=1; $i <= $count; $i++) { 

  if (isset($_POST["delete_share_".$i])) {
       

       include('../database.php');

      $mysqli->query(" UPDATE `share_section` SET `photo` = '' WHERE `inc` = '".$i."' ");
      $mysqli->query(" UPDATE `share_section` SET `title` = '' WHERE `inc` = '".$i."' ");
      $mysqli->query(" UPDATE `share_section` SET `description` = '' WHERE `inc` = '".$i."' ");
      
      $mysqli->close();

      //unlink($path.$_POST["sendtophoto_".$i]);
      
      header("Location: ../index.php");
      exit;
     
     
    
}

}

?> 

<?php for($i = 0; $i < $count; $i++): ?>

<script>

document.<?="form_share.title_share_".trim($i+1)?>.value=<?="\"".$arrshare_title[$i]."\""?>;
document.<?="form_share.description_share_".trim($i+1)?>.value=<?="\"".$arrshare_description[$i]."\""?>;
document.<?="form_share.description_share_".trim($i+1)?>.value=<?="\"".$arrshare_description[$i]."\""?>;
document.<?="form_share.sendtophoto_".trim($i+1)?>.value= <?="\"".$arrshare_photo[$i]."\""?>;
$(<?="\".name_file_".trim($i+1)."\""?>).text(<?="\"".$arrshare_photo[$i]."\""?>);

</script>

<?php endfor; ?>



<script src="scripts/main.js"></script>
</body>
</html>