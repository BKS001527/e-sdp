<?php
session_start();
$vres=$_SESSION['vtuid'];
$name=$_SESSION['name'];
$mentori=$_SESSION['mentorid'];
  
$type1=$_POST['type1'];
$problem1=$_POST['problem1'];

$type2=$_POST['type2'];
$problem2=$_POST['problem2'];
$type3=$_POST['type3'];
$problem3=$_POST['problem3'];
        $date=date("Y/m/d");
        $_SESSION['date']=$date;
        date_default_timezone_set('Asia/Kolkata');
        $time=date("h:i:sa");
        $_SESSION['time']=$time;
mysql_connect('localhost','root','') or die (mysql_error ());

	mysql_select_db("student") or die(mysql_error());
        if(isset($_POST['submit']))
    { 
        if($problem1!=NULL)
        {
        $qu = "INSERT INTO problems (vtuid,name,mentorid,type,problem,status,date,time) VALUES ('$vres','$name','$mentori','$type1','$problem1','','$date','$time')";
        $que=  mysql_query($qu) or die(mysql_error());
                    
        }
        if($problem2!=NULL)
        {
        $query = "INSERT INTO problems (vtuid,type,problem,status,date,time) VALUES ('$vres','$type2','$problem2','','$date','$time')";
        $quer=  mysql_query($query) or die(mysql_error());
                    
        }
        if($problem3!=NULL)
        {
        $querya = "INSERT INTO problems (vtuid,type,problem,status,date,time) VALUES ('$vres','$type3','$problem3','','$date','$time')";
        $que=  mysql_query($querya) or die(mysql_error());
                    
        }
        header('location:index.php');
    }
?>