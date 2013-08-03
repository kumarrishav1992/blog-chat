
<html>
<body bgcolor='#008B8B'>
<?php
session_start();
include("connect.php");
$c=$_POST['topic_title'];
$d=$_POST['topic_text'];
$user=$_SESSION['USER'];
if($c!='' && $d!='')
{
$query="INSERT INTO forum"."(USERNAME,TITLE,MSG,TIME)"."VALUES('$user','$c','$d',NOW())";
$db=mysql_query($query,$dbc);
{
echo "<script>"."alert('<??????  Your Blog Posted Successfully  ??????>')"."</script>";
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=post.php">';    
}
}
else 
echo "<script>"."alert('<??????  Dude Write Something ??????>')"."</script>";
include("post.php");
?>
</body>
</html>