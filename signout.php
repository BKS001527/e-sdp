<?php
session_start();
//mysql_close();
session_abort();
header('location:index.php');