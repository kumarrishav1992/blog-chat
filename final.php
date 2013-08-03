<html>
<body bgcolor='black'>
<?php
include('connect.php');
session_start();
$b=$_SESSION['stor'];

	$catname = $_POST['topic_title'];
	$catdesc = $_POST['topic_text'];
	mysql_query("Update forum set title='$catname', msg='$catdesc' ,time=NOW() where id=$b",$dbc);
echo "<script>"."alert('<??????  Your Blog UPDATED Successfully  ??????>')"."</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=edit.php">';    
?>
</body>
</html>