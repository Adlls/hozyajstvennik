<?php
session_start();
include('database.php');
$count = 0;
$max_id = 0;

if ($_SESSION['user']['priority'] < 6) {
  die("<br> У вас не достаточно прав для просмотра и редакции");
}

$result_set = $mysqli->query("SELECT * FROM `users_table`");
	 while (($row = $result_set->fetch_assoc()) != false) {
         
         $count++;

         $users["log".$count] = $row[login];
         $users["reg_date".$count] = $row[reg_date];
         $users["priority".$count] = $row[priority];
         $users["id".$count] = $row[id];
         //$max_id = $users["id".$count];

      if ($max_id < $users["id".$count]) {

            $max_id = $users["id".$count];
      }

       }

   $mysqli->close();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../styles/users.css">
     <script src="../../scripts/jquery.js"></script>
       <script>

          
    </script>
</head>
<body>
  

	<p class="users-title">Пользователи админки</p>
<table>

     <p style="display: none;" class="for_count"><?php echo $max_id;?></p>

   
	<tr>
		<td>Логин</td>
		<td>Время регистрации</td>
		<td>Действия</td>
		<td>Должность</td>
	</tr>
     
    
    <?php
       for ($i=1; $i <= $count; $i++) { 
          
          	if (($users["priority".$i] != 6) && ($users["priority".$i] > 0)) {
            
         
        	echo "
             <tr>

             <td>".$users["log".$i]."</td>

             <td>".$users["reg_date".$i]. "</td>

             <td> <button class = 'click_btn' value = '".$users["id".$i]."'type = 'submit' name = '".$users["id".$i]."'>Удалить</button></td>

             <td>".$users["priority".$i]."</td>

             </tr>
              
        	";

}
    }

       
    
        

       ?>


<?php





include('database.php');
//$mysqli = new mysqli("localhost", "root", "root","admin_base");
//$mysqli->query("SET NAMES 'utf8'");
$result_set = $mysqli->query("SELECT * FROM `users_table`");
while (($row = $result_set->fetch_assoc()) != false) {
            
      if ($row[id] == $_GET["id_inc"]) {
        
      $mysqli->query("DELETE FROM `users_table` WHERE `users_table`.`id` = ".$_GET["id_inc"]." ");

      header("Location: index.php");
      $mysqli->close();
      exit;

}

if ($row[id] == $_GET["id_add"]) {

      $mysqli->query("UPDATE `users_table` SET `priority` = '1' WHERE `users_table`.`id` = ".$_GET["id_add"]."");
      header("Location: index.php");
      $mysqli->close();
      exit;


}

     }
 
$mysqli->close();

?>



</table>





<p>Cписок заявок на регистрацию:</p>
<table>
  
<tr>
    <td>Логин</td>
    <td>Время регистрации</td>
    <td>Действия</td>
    <td>Должность</td>
  </tr>

 <?php
       for ($i=1; $i <= $count; $i++) { 
          
            if (($users["priority".$i] != 6) && ($users["priority".$i] == 0)) {
              
            
         
          echo "
             <tr>

             <td>".$users["log".$i]."</td>

             <td>".$users["reg_date".$i]. "</td>

             <td> <button class = 'addto' value = '".$users["id".$i]."'type = 'submit' name = '".$users["id".$i]."'>Добавить в админку</button></td>

             <td>".$users["priority".$i]."</td>

             </tr>
              
          ";

}

        }

       
    
        

       ?>



</table>



<script src="scripts/main.js"></script>

</body>
</html>
