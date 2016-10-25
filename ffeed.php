<?php
session_start();
$v=$_SESSION['vtuidss'];
$n=$_SESSION['name'];
$d=$_SESSION['date'];
$t=$_SESSION['time'];
$ty=$_SESSION['type'];
$p=$_SESSION['problem'];
$prob=$_POST['prob'];
mysql_connect('localhost','root','') or die (mysql_error ());
	mysql_select_db("student") or die(mysql_error());
        if(isset($_POST['submit']))
    { 
        if($prob!=NULL)
        {
            //echo $p;
            $qu="UPDATE problems SET status='$prob' WHERE problem='$p'";

        $que=  mysql_query($qu) or die(mysql_error());
        //echo 'succces';           
        }
        else
        {
            echo 'check again';
        }
        header('location=index.php');
    }
    
        header('location:index.php');
?>