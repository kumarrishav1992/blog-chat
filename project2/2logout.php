<?php
include("connect.php");
session_start();
$use=$_SESSION['username'];
$sql="UPDATE online SET status='no' WHERE username='$use'";
mysql_query($sql);
session_destroy();
header("location:2login.php");
exit();
?>