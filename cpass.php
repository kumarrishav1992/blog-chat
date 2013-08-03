<html>
<body bgcolor='black'>
<?php
$new=$_POST['new'];
$rnew=$_POST['rnew'];
session_start();
$pro=$_SESSION['name'];
include("connect.php");
if($new==$rnew)
{
mysql_query("UPDATE user SET PASSWORD='$new' WHERE username='$pro'");
echo "<script>"."alert('<??????  Password Changed  ??????>')"."</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=view.php">'; 
}
else
echo "<script>"."alert('<??????  Password NOT Matching  ??????>')"."</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=view.php">'; 
?>
</body>
</html>