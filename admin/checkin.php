<?php

session_start();
if (isset($_POST["submit"])) {
	
	$name =  htmlspecialchars($_POST["name"]);
	$password = htmlspecialchars($_POST["password"]);
	$error_name = "";
	$error = false;


include('admin-panel/database.php');
//$mysqli = new mysqli("localhost", "root", "root", "admin_base");
//$mysqli->query("SET NAMES 'utf8'");
$result_set = $mysqli->query("SELECT * FROM `users_table`");

while (($row = $result_set->fetch_assoc()) != false) {
              
          if ($name == $row[login]) {
            	$error_name = "Такой логин уже есть";
            	$error = true;
            	$_SESSION["errorlog"] = $error_name;

            }

        }
$mysqli->close();

if ($name == "" || $name == " " || $name == null) {
	$error_name = "Вы не написал логин";
	$error = true;
}

if ($password == "" || $password == " " || $password == null) {
	$error_password = "Вы не написал пароль";
	$_SESSION["errorpass"] = $error_password;

	$error = true;
}


if (!$error) 
{
	$_SESSION["errorlog"] = " ";
	$_SESSION["errorpass"] = " ";
	//$mysqli = new mysqli("localhost", "root", "root", "admin_base");
    //$mysqli->query("SET NAMES 'utf8'");
    include('admin-panel/database.php');
    $success = $mysqli->query("INSERT INTO `users_table` (`login`,`password`,`reg_date`) VALUES ('".$name."','".md5($password)."','".time()."')");
    echo "<p> Ваша заявка успешно обрабатывается.</p>";
    $mysqli->close();
    exit;
}

else { 
  
  header("Location: index.php");
}



//$_SESSION["name"] = $name;
//$_SESSION["password"] = $password;




}

?>

