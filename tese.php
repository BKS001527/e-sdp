<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Attendance System</title>
        <link rel="stylesheet" type="text/css" href="sty.css">
    </head>
    <body id="background">
        <img src="logo.jpg">
        <table align="center"width="100%" class="data">
            <tr>
                <td align="right"><a href="index.php">Home</a></td>
                <td align="right"><a href="admin.php">Admin</a></td>
                <td align="right"><a href="http://www.veltechuniv.edu.in/contactus.html">Contact Us</a></td>
                <td align="right" ><?php echo date('d-m-Y') ?></td>
                <td align="left"><?php date_default_timezone_set('Asia/kolkata'); echo date('h:i:sa') ?></td>
            </tr>
        </table>
        <br>
            <?php 
            session_start();
            $_SESSION['user'];
            $_SESSION['pass'];
            echo 'Hello'.'&nbsp;'.$_SESSION['user']; 
            define('DB_NAME', 'a1618214_attende');
            define('DB_USER',$_SESSION['user']);
            define('DB_PASSWORD',$_SESSION['pass']);
            define('DB_HOST', 'mysql4.000webhost.com');
            $link = mysql_connect(DB_HOST,$_SESSION['user'],$_SESSION['pass']);
            If (!$link)
            {
            echo 'could not connect :'.  mysql_error();
            }
            $db_selected = mysql_select_db(DB_NAME, $link);
            if(!$db_selected)
            {
            echo 'cannot use'. DB_NAME . ':' .  mysql_error();
            }
            ?>
            <br>
            <p>Degree : Bachelor Of Technology :: Computer Science & Engineering :: Ist Year : Sec A</p>
            <table align="center" width="50%" id="lines">
            <tr>
                <td><h4>S.No.</h4></td>
                <td><h4>VTU ID</h4></td>
                <td align="center"><h4>NAME</h4></td>
                <td><h4>STATUS</h4></td>
               </tr>
            <tr>
            <td>
            <?php 
            $sql = 'SELECT * FROM `cse1a` LIMIT 0, 30 ';
            mysql_select_db('a1618214_attende');
            $retval = mysql_query( $sql, $link );
            if(! $retval )
            {
            die('Could not get data: ' . mysql_error());
            }
            while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
            {
            echo "{$row['S.No.']}"."<br><br>";
            }
            ?>
            </td> 
            <td  padding-left="10px">
            <?php 
            $sql = 'SELECT * FROM `cse1a` LIMIT 0, 30 ';
            mysql_select_db('a1618214_attende');
            $retval = mysql_query( $sql, $link );
            if(! $retval )
            {
            die('Could not get data: ' . mysql_error());
            }
            while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
            {
            echo "{$row['VTU ID']}"."<br><br>";
            }
            ?>
            </td>
            <td align="left">
            <?php
            $sql = 'SELECT * FROM `cse1a` LIMIT 0, 30 ';
            mysql_select_db('a1618214_attende');
            $retval = mysql_query( $sql, $link );
            if(! $retval )
            {
            die('Could not get data: ' . mysql_error());
            }
            while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
            {
            echo "{$row['NAME']}"."<br><br>";
            }
            ?>      
            </td>
            
            <td>
            <?php
            $sql = 'SELECT * FROM `cse1a` LIMIT 0, 30 ';
            mysql_select_db('a1618214_attende');
            $retval = mysql_query( $sql, $link );
            if(! $retval )
            {
            die('Could not get data: ' . mysql_error());
            }
   
            while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
            {
            echo "<select><option value=present>Present</option><option value=Absent>Absent</option></select>"."<br><br>";
            }
            ?>
            </td>
            </tr>
        </table>
            <form action="greet.php" method="POST" target="_self" align="center">
                        <input type="submit" value="Submit" 
                        formenctype="multipart/form-data" class="btn"></form>
       </body>
</html>
