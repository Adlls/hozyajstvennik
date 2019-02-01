<?php
include('database.php');

   
  $json_datas = array();

 $result_set = $mysqli->query("SELECT * FROM `product`");
    while (($row = $result_set->fetch_assoc()) != false) {
    	   
    	    array_push($json_datas, array('id_product'=>$row[id_product],'name_product'=>$row[name_product],'description_product'=>$row[description_product],'photo'=>$row[photo]));
    } 

$result_set = $mysqli->query("SELECT * FROM `pp4575`");
    while (($row = $result_set->fetch_assoc()) != false) {
    	   
    	   array_push($json_datas, array('type_opt'=>'pp4575','id_pp4575'=>$row[id_pp4575],'size'=>$row[size],'weight'=>$row[weight],'pack'=>$row[pack],'price'=>$row[price],'supply'=>$row[supply], 'title_pp4575'=>$row['title_pp4575'], 'product_id_product'=>$row[product_id_product]));
    } 
    
$result_set = $mysqli->query("SELECT * FROM `pp_vkladish4675`");
    while (($row = $result_set->fetch_assoc()) != false) {
    	   
  array_push($json_datas, array('type_opt'=>'pp_vkladish4675','id_ppvkladish4675'=>$row[id_ppvkladish4675],'size'=>$row[size],'weight'=>$row[weight],'pack'=>$row[pack],'price'=>$row[price],'supply'=>$row[supply],'photo'=>$row[photo],'title_pp_vkladish4675'=>$row['title_pp_vkladish4675'], 'product_id_product'=>$row[product_id_product]));
    } 

$result_set = $mysqli->query("SELECT * FROM `pptermo5090`");
    while (($row = $result_set->fetch_assoc()) != false) {
    	   
    	   array_push($json_datas, array('type_opt'=>'pptermo5090','id_pptermo5090'=>$row[id_pptermo5090],'size'=>$row[size],'weight'=>$row[weight],'pack'=>$row[pack],'price'=>$row[price],'supply'=>$row[supply], 'title_pptermo5090'=>$row['title_pptermo5090'],  'product_id_product'=>$row[product_id_product]));
    } 

$result_set = $mysqli->query("SELECT * FROM `pptermo55105`");
    while (($row = $result_set->fetch_assoc()) != false) {
    	   
    	   array_push($json_datas, array('type_opt'=>'pptermo55105','id_pptermo55105'=>$row[id_pptermo55105],'size'=>$row[size],'weight'=>$row[weight],'pack'=>$row[pack],'price'=>$row[price],'supply'=>$row[supply], 'title_pptermo55105'=>$row['title_pptermo55105'],  'product_id_product'=>$row[product_id_product]));
    } 

      $str_json = "[";
      for ($i=0; $i < count($json_datas); $i++) { 
    	
    	if ($i+1 == count($json_datas)) {
    		$str_json = $str_json.json_encode($json_datas[$i],JSON_UNESCAPED_UNICODE)."]";
    	}
    	else {
            $str_json = $str_json.json_encode($json_datas[$i],JSON_UNESCAPED_UNICODE).",\n";
    	}


    }

    echo $str_json;

$file = 'getprudcts.json';
// Открываем файл для получения существующего содержимого и записываем туда данные
file_put_contents($file, trim($str_json));

?>
