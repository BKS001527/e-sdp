<?php
session_start();
$vrss=$_SESSION['vtuid'];
$u1l1=$_POST['u1s1'];
$u1l2=$_POST['u1s2'];
$u1l3=$_POST['u1s3'];
$u1l4=$_POST['u1s4'];
$u1l5=$_POST['u1s5'];
$u1l6=$_POST['u1s6'];

$u2l1=$_POST['u2s1'];
$u2l2=$_POST['u2s2'];
$u2l3=$_POST['u2s3'];
$u2l4=$_POST['u2s4'];
$u2l5=$_POST['u2s5'];
$u2l6=$_POST['u2s6'];

$m1l1=$_POST['m1s1'];
$m1l2=$_POST['m1s2'];
$m1l3=$_POST['m1s3'];
$m1l4=$_POST['m1s4'];
$m1l5=$_POST['m1s5'];
$m1l6=$_POST['m1s6'];

$m2l1=$_POST['m2s1'];
$m2l2=$_POST['m2s2'];
$m2l3=$_POST['m2s3'];
$m2l4=$_POST['m2s4'];
$m2l5=$_POST['m2s5'];
$m2l6=$_POST['m2s6'];

mysql_connect('localhost','root','') or die (mysql_error ());
	mysql_select_db("student") or die(mysql_error());
        if(isset($_POST['submit']))
    { 
       
            //$qu="UPDATE marks_s5 SET status='$prob' WHERE problem='$p'";
            //$mrk="UPDATE marks_s5 SET u1s1='$u1l1', u1s2='$u1l2', u1s3='$u1l3', u1s4='$u1l4', u1s5='$u1l5', u1s6='$u1l6', u2s1='$u2l1', u2s2='$u2l2', u2s3='$u2l3', u2s4='$u2l4', u2s5='$u2l5', u2s6='$u2l6',  m1s1='$m1l1', m1s2='$m1l2', m1s3='$m1l3', m1s4='$m1l4', m1s5='$m1l5', m1s6='$m1l6', m2s1='$m2l1', m2s2='$m2l2', m2s3='$m2l3', m2s4='$m2l4', m2s5='$m2l5', m2s6='$m2l6' WHERE vtuid='$vrss'";
            //$upd=  mysql_query($mrk) or die(mysql_error());
            
        //$que=  mysql_query($qu) or die(mysql_error());
        //echo 'succces';
            if($u1l1!=NULL)
            {
             $mrk="UPDATE marks_s5 SET u1s1='$u1l1' WHERE vtuid='$vrss'";
            $upd=  mysql_query($mrk) or die(mysql_error());
            }
            if($u1l2!=NULL)
            {
             $mrk1="UPDATE marks_s5 SET u1s2='$u1l2' WHERE vtuid='$vrss'";
            $upd1=  mysql_query($mrk1) or die(mysql_error());
            }
            if($u1l3!=NULL)
            {
             $mrk2="UPDATE marks_s5 SET u1s3='$u1l3' WHERE vtuid='$vrss'";
            $upd2=  mysql_query($mrk2) or die(mysql_error());
            }
            if($u1l4!=NULL)
            {
             $mrk3="UPDATE marks_s5 SET u1s4='$u1l4' WHERE vtuid='$vrss'";
            $upd3=  mysql_query($mrk3) or die(mysql_error());
            }
            if($u1l5!=NULL)
            {
             $mrk4="UPDATE marks_s5 SET u1s5='$u1l5' WHERE vtuid='$vrss'";
            $upd4=  mysql_query($mrk4) or die(mysql_error());
            }
            if($u1l6!=NULL)
            {
             $mrk5="UPDATE marks_s5 SET u1s6='$u1l6' WHERE vtuid='$vrss'";
            $upd5=  mysql_query($mrk5) or die(mysql_error());
            }
            if($u2l1!=NULL)
            {
             $mrk6="UPDATE marks_s5 SET u2s1='$u2l1' WHERE vtuid='$vrss'";
            $upd6=  mysql_query($mrk6) or die(mysql_error());
            }
            if($u2l2!=NULL)
            {
             $mrk7="UPDATE marks_s5 SET u2s2='$u2l2' WHERE vtuid='$vrss'";
            $upd7=  mysql_query($mrk7) or die(mysql_error());
            }
            if($u2l3!=NULL)
            {
             $mrk8="UPDATE marks_s5 SET u2s3='$u2l3' WHERE vtuid='$vrss'";
            $upd8=  mysql_query($mrk8) or die(mysql_error());
            }
            if($u2l4!=NULL)
            {
             $mrk9="UPDATE marks_s5 SET u2s4='$u2l4' WHERE vtuid='$vrss'";
            $upd9=  mysql_query($mrk9) or die(mysql_error());
            }
            if($u2l5!=NULL)
            {
             $mrk10="UPDATE marks_s5 SET u2s5='$u2l5' WHERE vtuid='$vrss'";
            $upd10=  mysql_query($mrk10) or die(mysql_error());
            }
            if($u2l6!=NULL)
            {
             $mrk11="UPDATE marks_s5 SET u2s6='$u2l6' WHERE vtuid='$vrss'";
            $upd11=  mysql_query($mrk11) or die(mysql_error());
            }
            if($m2l1!=NULL)
            {
             $mrk12="UPDATE marks_s5 SET m2s1='$m1l1' WHERE vtuid='$vrss'";
            $upd12=  mysql_query($mrk12) or die(mysql_error());                
            }
            if($m2l2!=NULL)
            {
             $mrk13="UPDATE marks_s5 SET m2s2='$m2l2' WHERE vtuid='$vrss'";
            $upd13=  mysql_query($mrk13) or die(mysql_error());                
            }
            if($m2l3!=NULL)
            {
             $mrk14="UPDATE marks_s5 SET m2s3='$m2l3' WHERE vtuid='$vrss'";
            $upd14=  mysql_query($mrk14) or die(mysql_error());                
            }
            if($m2l4!=NULL)
            {
             $mrk15="UPDATE marks_s5 SET m2s4='$m2l4' WHERE vtuid='$vrss'";
            $upd15=  mysql_query($mrk15) or die(mysql_error());                
            }
            if($m2l5!=NULL)
            {
             $mrk16="UPDATE marks_s5 SET m2s5='$m2l5' WHERE vtuid='$vrss'";
            $upd16=  mysql_query($mrk16) or die(mysql_error());                
            }
            if($m2l6!=NULL)
            {
             $mrk17="UPDATE marks_s5 SET m2s6='$m2l6' WHERE vtuid='$vrss'";
            $upd17=  mysql_query($mrk17) or die(mysql_error());                
            }
            if($m1l1!=NULL)
            {
             $mrk18="UPDATE marks_s5 SET m1s1='$m1l1' WHERE vtuid='$vrss'";
            $upd18=  mysql_query($mrk18) or die(mysql_error());                
            }
            if($m1l2!=NULL)
            {
             $mrk19="UPDATE marks_s5 SET m1s2='$m1l2' WHERE vtuid='$vrss'";
            $upd19=  mysql_query($mrk19) or die(mysql_error());                
            }
            if($m1l3!=NULL)
            {
             $mrk20="UPDATE marks_s5 SET m1s3='$m1l3' WHERE vtuid='$vrss'";
            $upd20=  mysql_query($mrk20) or die(mysql_error());                
            }
            if($m1l4!=NULL)
            {
             $mrk21="UPDATE marks_s5 SET m1s4='$m1l4' WHERE vtuid='$vrss'";
            $upd21=  mysql_query($mrk21) or die(mysql_error());                
            }
            if($m1l5!=NULL)
            {
             $mrk22="UPDATE marks_s5 SET m1s5='$m1l5' WHERE vtuid='$vrss'";
            $upd22=  mysql_query($mrk22) or die(mysql_error());                
            }
            if($m1l6!=NULL)
            {
             $mrk23="UPDATE marks_s5 SET m1s6='$m1l6' WHERE vtuid='$vrss'";
            $upd23=  mysql_query($mrk23) or die(mysql_error());                
            }          
            header('location:ment.php');
            
    }
 else {
        echo '<h1>Server is Down!!!!..</h1>';
}
        
?>