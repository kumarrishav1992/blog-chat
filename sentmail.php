<html>
<body bgcolor='black'>
<?php
include ("connect.php"); 
$to=$_POST['mail'];
$id=$_POST['data'];
$sql12="SELECT username,title,msg FROM forum WHERE id='$id'";
$loop12=mysql_query($sql12,$dbc);
$row = mysql_fetch_array($loop12);
$message=' BLOGGER [ '.$row['username'].' ] </br>'.' " '.$row['title'].' " '.'</br>'.'</br>'.$row['msg'];
$subject="BLOGGER CORNER";
mail($to,$subject,$message);
echo "<script>"."alert('!!!!  MAIL SENT!!!!')"."</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=post.php">';
?>
</body>
</html>