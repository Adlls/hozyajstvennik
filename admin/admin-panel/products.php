<?php
if (isset($_POST["create_product"])) {
	header("Location: index.php");
}

if (isset($_POST["edit_product"])) {
	header("Location: index.php");
}

if (isset($_POST["sub_pdf"])) {
	header("Location: index.php");
}

if ($_GET['id']!=null) {
	header("Location: index.php");
}



 include("database.php");
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../../styles/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../../styles/style-admin-panel.css">
<script src="../../scripts/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="../../styles/font-awesome/css/font-awesome.min.css">

</head>
<body>




<div class="clearfix">
<button class="add_product form-control">Добавить продукт</button>
</div>



<table class="list_product">
	
    <tr>
		<th>Имя товара</th>
		<th class="action">Действия</th>
		<th>id</th>
	</tr>

	
     <?php $result_set = $mysqli->query("SELECT * FROM `product`");?>
     <?php  while (($row = $result_set->fetch_assoc()) != false): ?>
         
         <tr>
         <td><?php echo $row[name_product] ?></td>
		<td class="action">
			<div class="edit_product" data-id= "<?php echo $row[id_product]?>">✎</div>
			<div class="del_product" data-id= "<?php echo $row[id_product]?>">&times;</div>
		</td>
		<td><?php echo $row[id_product]?></td>
    </tr>



    <?php endwhile; ?>


</table>
<div class="popup_delete">
	<div class="close_popup_delete">&#215;</div>
	<h3>Вы действительно хотите удалить товар?</h3>
	<form action="products.php" method="POST" id="delete_form">
		
         <div class="row row_delete">
    <div class="col">
      <input type="submit" class="form-control yes_delete" name="yes_delete"  value="Да" onclick="$('.setup').load('products.php');">
    </div>
    <div class="col">
      <input type="button" class="form-control no_delete" value="Нет">
    </div>
  </div>
	</form>
</div>





<div class="popup_edit_product">
	<p class="title_popup">Изменить товар</p>
	<div class="close_popup_product">&#215;</div>
	<div class="move_left edit">&larr;</div>
	<div class="move_right edit" >&rarr;</div>
  <button class="edit_markbook"> <span class="count_card"></span>  Добавить вкладку</button>


<form method="POST" action="products.php" id="edit_form" enctype="multipart/form-data">

   <div class="card card_1 name_desc_product card_edit start_editfr">
   
  <div class="form-group">
    <label for="exampleFormControlInput1">Название товара</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Мешки обыкновенные" name= "name_product" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Описание товара</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Прекрасные мешки..." name="desc_product" type="text"></textarea>
  </div>
  <div class="form-group">
  	 <label for="exampleFormControlInput2">Фото товара</label>
    <input type="file" class="form-control-file" id="exampleFormControlInput2" placeholder="" name="photo_product">
    <div class="photo_name"></div>
     </div>
  
   </div>



   <div class="card card_3 ppvk4675 card_edit start_card" id="edit_card">

   	 <div class="form-group">
     <input type="text" class="form-control" name="title_ppvk4675[]" placeholder="Название раздела" style="margin-bottom: 10px;">
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Размер, см" name="ppvkladish4675_size[]">
    </div>
    <div class="form-group">
   
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Вес, грамм" name="ppvkladish4675_weight[]">
    </div>
    <div class="form-group">
  
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Упаковка, штук" name="ppvkladish4675_pack[]">
    </div>
    <div class="form-group">
     
      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Цена, рублей/штука" name="ppvkladish4675_price[]">
      </div>
      <div class="form-group">
    
      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Оптовые поставки" name="ppvkladish4675_supply[]">
    </div>
    <div class="form-group" style="position: relative;">
    
    <input type="file" class="form-control-file addphoto_btn" id="formGroupExampleInput2" placeholder="Фото" name="ppvkladish4675_photo[]">
    
     <button type="button" class="button_deletephoto" value="no" placeholder="удалить фото">Удалить фото</button>

    
    <div class="photo_ppvkladish4675"></div>
   
    <div class="page_card">1</div>
   <button type="button" class="button_delmb_edit" data-count_card_edit>Удалить вкладку</button>

  </div>

   </div>

<button type="submit" name="edit_product" class="button_editpr">Изменить</button>
<input type="hidden" name="edit" value="edit_product">
<input type="hidden" name="get_id_product">
<div class="group_add"></div>
</form>
</div>



<!-- end edit -->



<div class="popup_add_product">
	<p class="title_popup">Добавить товар</p>
	<div class="close_popup_product">&#215;</div>
	<div class="move_left add">&larr;</div>
	<div class="move_right add">&rarr;</div>
  <button class="add_markbook"> <span class="count_card">(1)</span>  Добавить вкладку</button>

<form method="POST" action="products.php" id="add_form" enctype="multipart/form-data">


   <div class="card card_1 name_desc_product card_add">
   
  <div class="form-group">
    <label for="exampleFormControlInput1">Название товара</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Мешки обыкновенные" name= "name_product" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Описание товара</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Прекрасные мешки..." name="desc_product" type="text"></textarea>
  </div>
  <div class="form-group">
  	 <label for="exampleFormControlInput2">Фото товара</label>
    <input type="file" class="form-control-file" id="exampleFormControlInput2" placeholder="" name="photo_product" required>
     </div>
  
   </div>


   <div class="card card_3 ppvk4675 card_add" id="add_card" data-count_card_dv>
   	
  <div class="form-group">
     <input type="text"  class="form-control" name="title_ppvk4675[]" style="margin-bottom: 10px;" placeholder="Название раздела">
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Размер, см" name="ppvkladish4675_size[]">
  </div>
  <div class="form-group">
   
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Вес, грамм" name="ppvkladish4675_weight[]">
  </div>
  <div class="form-group">
  
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Упаковка, штук" name="ppvkladish4675_pack[]">
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Цена, рублей/штука" name="ppvkladish4675_price[]">
  </div>
  <div class="form-group">
    
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Оптовые поставки" name="ppvkladish4675_supply[]">
  </div>
  <div class="form-group">
    
    <input type="file" class="form-control-file" id="formGroupExampleInput2" placeholder="Фото" name="ppvkladish4675_photo[]">
  </div>

   <div class="page_card">1</div>
   <button class="button_delmb" id="button_delmb_id" data-count_card>Удалить вкладку</button>


   </div>


<button type="submit" name="create_product" class="button_createpr" onclick="$('.setup').load('products.php');">Создать</button>
<input type="hidden" name="add" value="add_product">

</form>

<div id="someid"></div>
</div>

<form method="POST" action="products.php" enctype="multipart/form-data">
<div class="cont_pdf">
  <div class="titpdf">прайс-лист(pdf)</div>
<input type="file" name="pdf" class="download_pdf">
<div class="paste_name_pdf"></div> 
<button class="btn_pdf form-control" type="submit" name="sub_pdf">Сохранить</button>
</div>
</form>

<script src="scripts/main.js"></script>
</body>
</html>




<?php 

//Загружаем pdf
if (isset($_POST["sub_pdf"])) {

    $path = '../../';
 // Обработка запроса
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 // Загрузка файла и вывод сообщения
 if (!@copy($_FILES['pdf']['tmp_name'], $path . $_FILES['pdf']['name'])) {
     echo 'kek';
}

else {
  
}

if ($_FILES['pdf']['size'] > 0) {
  rename($path . $_FILES['pdf']['name'], $path . "hoz.pdf");
  }

}

}



//Редактируем продукт
if (isset($_POST["edit_product"])) {
     
  
  $mysqli->query("UPDATE `product` SET  `name_product` = '".$_POST["name_product"]."', `description_product` = '".$_POST["desc_product"]."' WHERE `id_product` = ".$_POST["get_id_product"]." "); 

    
  $count = 0;

   $result_set = $mysqli->query("SELECT * FROM `pp_vkladish4675`");
   while (($row = $result_set->fetch_assoc()) != false) {
    
      if ($_POST["get_id_product"] == $row[product_id_product]) {
        

        //обнавляем влкадку
        for ($i=0; $i < count($_POST[ppvkladish4675_size]); $i++) { 
          
          $mysqli->query("UPDATE `pp_vkladish4675` SET  `size` = '".$_POST["ppvkladish4675_size"][$i]."', `weight` = '".$_POST["ppvkladish4675_weight"][$i]."', `pack` = '".$_POST["ppvkladish4675_pack"][$i]."', `price` = '".$_POST["ppvkladish4675_price"][$i]."', `supply` = '".$_POST["ppvkladish4675_supply"][$i]."', `title_pp_vkladish4675` = '".$_POST['title_ppvk4675'][$i]."' WHERE `product_id_product` = ".$_POST["get_id_product"]." AND `count` = ".$count." ");  
          $count++;
          
        }
      }
    }

  //добавляем вкладку
    foreach ($_POST[arr_addin] as $value) {
      $mysqli->query("INSERT INTO `pp_vkladish4675` (`size`,`weight`,`pack`,`price`,`supply`,`photo`,`title_pp_vkladish4675`,`product_id_product`, `count`) VALUES ('".$_POST[ppvkladish4675_size][$value]."','".$_POST[ppvkladish4675_weight][$value]."','".$_POST[ppvkladish4675_pack][$value]."','".$_POST[ppvkladish4675_price][$value]."','".$_POST[ppvkladish4675_supply][$value]."','".$_FILES['ppvkladish4675_photo']['name'][$value]."','".$_POST['title_ppvk4675'][$value]."','".$_POST["get_id_product"]."','".$value."');");
      }
     //удаляем вкладку
      for ($i=0; $i < count($_POST[arr_delin]); $i++) {   
        $mysqli->query("DELETE FROM `pp_vkladish4675` WHERE `pp_vkladish4675`.`product_id_product` = ".$_POST["get_id_product"]." AND `count` = ".$_POST['arr_delin'][$i]."");
      }

    
    $path = 'i/';
 // Обработка запроса
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 // Загрузка файла и вывод сообщения

 if (!@copy($_FILES['photo_product']['tmp_name'], $path . $_FILES['photo_product']['name'])) {

     //echo 'Что-то пошло не так';
     $_FILES["photo_product"]['name'] = "";
}

else {

}

if ($_FILES['photo_product']['size'] > 0) {
  	    
  	    $mysqli->query("UPDATE `product` SET `photo`= '".$_FILES["photo_product"]['name']."' ");

  }

}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 // Загрузка файла и вывод сообщения

 if (!@copy($_FILES['ppvkladish4675_photo']['tmp_name'], $path . $_FILES['ppvkladish4675_photo']['name'])) {

     //echo 'Что-то пошло не так';
    // $_FILES["ppvkladish4675_photo"]['name'] = "";
}

else {
	
}






$result_set = $mysqli->query("SELECT * FROM `pp_vkladish4675`");
while (($row = $result_set->fetch_assoc()) != false) {

  foreach ($_POST[arr_addphoto_count] as $count) {
    if ($_POST["get_id_product"] == $row[product_id_product]) {

      if ($count == $row[count]) { 
        $mysqli->query("UPDATE `pp_vkladish4675` SET `photo` = '".$_FILES['ppvkladish4675_photo']['name'][$count]."' WHERE `count` = '".$count."' AND `product_id_product` = '".$_POST["get_id_product"]."' ");
        //echo $count."count is";
        //echo $_FILES['ppvkladish4675_photo']['name'][$count]."photo is";
     }
     
    }

    }

}


/*
foreach ($_FILES['ppvkladish4675_photo']['size'] as $size) {
  foreach ($_FILES['ppvkladish4675_photo']['name'] as $name) {
    if ($size > 0) {
        $mysqli->query("UPDATE `pp_vkladish4675` SET `photo` = '".$_FILES['ppvkladish4675_photo']['name'][0]."' ");
      }
    }
    }
*/



/*
if ($_FILES['ppvkladish4675_photo']['size'] > 0) {
  	    
  	    $mysqli->query("UPDATE `pp_vkladish4675` SET `photo` = '".$_FILES['ppvkladish4675_photo']['name'][0]."' ");

  }
*/

}



$result_set = $mysqli->query("SELECT * FROM `pp_vkladish4675`");
while (($row = $result_set->fetch_assoc()) != false) {

foreach ($_POST[arr_delphoto_count] as $count) {
  if ($_POST["get_id_product"] == $row[product_id_product]) {

  if ($count == $row[count]) {
     $mysqli->query(" UPDATE `pp_vkladish4675` SET `photo` = null WHERE `product_id_product` = '".$_POST["get_id_product"]."' AND `count` = '".$count."' ");
  }

  }
}

}


/*
if ($_POST['delete_sphoto'] == 'yes') {
//echo $_POST['photo_namefordel']."str";
$mysqli->query(" UPDATE `pp_vkladish4675` SET `photo` = ' ' WHERE `product_id_product` = '".$_POST["get_id_product"]."' ");

}
*/

$mysqli->close();
exit;
}




//Удаляем продукт
if ($_GET['id']!=null) {

   $mysqli->query("DELETE FROM `product` WHERE `product`.`id_product` = ".$_GET['id']."");
   $mysqli->query("DELETE FROM `pp4575` WHERE `pp4575`.`product_id_product` = ".$_GET['id']."");
   $mysqli->query("DELETE FROM `pp_vkladish4675` WHERE `pp_vkladish4675`.`product_id_product` = ".$_GET['id']."");
   $mysqli->query("DELETE FROM `pptermo5090` WHERE `pptermo5090`.`product_id_product` = ".$_GET['id']."");
   $mysqli->query("DELETE FROM `pptermo55105` WHERE `pptermo55105`.`product_id_product` = ".$_GET['id']."");

$mysqli->close();
 exit;
}



//Создаем продукт
if (isset($_POST["create_product"])) {
	
//Добавляем товар
$mysqli->query("INSERT INTO `product` ( `name_product`, `description_product`,photo) VALUES ('".$_POST[name_product]."', '".$_POST[desc_product]."', '".$_FILES["photo_product"]['name']."');");

   
    $id;
    $result_set = $mysqli->query("SELECT * FROM `product`");
    while (($row = $result_set->fetch_assoc()) != false) {$id = $row[id_product];} 
     

     $count = 0;
     for ($i=0; $i < count($_POST[ppvkladish4675_size]); $i++) { 
         $mysqli->query("INSERT INTO `pp_vkladish4675` (`size`,`weight`,`pack`,`price`,`supply`,`photo`,`title_pp_vkladish4675`,`product_id_product`, `count`) VALUES ('".$_POST[ppvkladish4675_size][$i]."','".$_POST[ppvkladish4675_weight][$i]."','".$_POST[ppvkladish4675_pack][$i]."','".$_POST[ppvkladish4675_price][$i]."','".$_POST[ppvkladish4675_supply][$i]."','".$_FILES['ppvkladish4675_photo']['name'][$i]."','".$_POST['title_ppvk4675'][$i]."','".$id."','".$count."');");
         $count++;
}

$path = 'i/';
 // Обработка запроса
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 // Загрузка файла и вывод сообщения

 if (!@copy($_FILES['photo_product']['tmp_name'], $path . $_FILES['photo_product']['name'])) {

     echo 'Что-то пошло не так';
     $_FILES["photo_product"]['name'] = "";
}

else {
	
	echo 'Загрузка удачна';

}



}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 // Загрузка файла и вывод сообщения

 if (!@copy($_FILES['ppvkladish4675_photo']['tmp_name'], $path . $_FILES['ppvkladish4675_photo']['name'])) {

     echo 'Что-то пошло не так';
     $_FILES["ppvkladish4675_photo"]['name'] = "";
}

else {
	
	echo 'Загрузка удачна';

}

}
 
$mysqli->close();
 exit;


}

?>








