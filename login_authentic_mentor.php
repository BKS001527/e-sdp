<?php
session_start();
$_SESSION['musername']=$_POST['muser'];
$_SESSION['mpassword']=$_POST['mpass'];

define('DB_NAME', 'student');
           define('DB_HOST', 'localhost');
            $sql= mysql_connect(DB_HOST, $_SESSION['musername'],  $_SESSION['mpassword']);
            $db_selected = mysql_select_db(DB_NAME, $sql);
            If (!$sql && !$db_selected)
            {
            echo 'could not connect :'.  mysql_error();
            $info="Check Your Username & Password.";
            header('location:men.php');
            }
            else
            {
                header('location:men1.php');
            }
            

?>