<?php
include('connect.php');
$a=mysql_real_escape_string($_POST['use']);
mysql_query("DELETE FROM user WHERE username='$a'");
mysql_query("DELETE FROM forum WHERE username='$a'");
header("location:edit.php");
?>
