<?php
    
    session_start();
    
    if (isset($_POST["submit"])) {
        
        $name =  htmlspecialchars($_POST["name"]);
        $password = htmlspecialchars($_POST["password"]);
        $error_name = "";
        $error = false;
        $error_valid = "";
        
        
        
        
        
        if ($name == "" || $name == " " || $name == null) {
            $error_name = "Вы не написал логин";
            $error = true;
        }
        
        if ($password == "" || $password == " " || $password == null) {
            $error_password = "Вы не написал пароль";
            $error = true;
        }
        
        
        if (!$error)
        {
            require ("admin-panel/database.php");
            
            //$mysqli = new mysqli("localhost", "root", "root", "admin_base");
            //$mysqli->query("SET NAMES 'utf8'");
            $result_set = $mysqli->query("SELECT * FROM `users_table`");
            
            while (($row = $result_set->fetch_assoc()) != false) {
                
                
                if ($name == $row['login'] && md5($password) == $row['password'] &&  $row['priority'] > 0) {
                    
                    $_SESSION['user'] = ['login' => $name, 'priority' => $row['priority']];
                    header("Location: admin-panel/index.php");
                    die;
                }
                else
                {
                    $error_valid = "Неверный пароль или логин";
                }
                
            }
            
            $mysqli->close();
            
            
        }
        
        if($error_valid || $error) {
            header("Location: login.php");
            
        }
        
        $_SESSION["name"] = $name;
        $_SESSION["password"] = $password;
        
        
    }
    
    
    
    ?>

