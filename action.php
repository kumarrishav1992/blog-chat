
<?php
include('connect.php');
$a=$_POST['del'];
mysql_query("DELETE FROM `forum` WHERE id=$a");
header("location:edit.php");
?>
