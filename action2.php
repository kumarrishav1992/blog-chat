<?php
include('connect.php');
$a=$_POST['use'];
mysql_query("DELETE FROM user WHERE username='$a'");
mysql_query("DELETE FROM forum WHERE username='$a'");
header("location:edit.php");
?>
