<html>
<body bgcolor='black'>
<table border='3' style='position:relative;top:40px; left:570px;'><tr><td><FONT COLOR=red FACE="cooper black" SIZE=10>ADMIN</FONT></td></tr></table>
<div style='position:relative;top:20px; left:500px;'>
<?php 
echo "<a href='index.php'>HOME</a>";
?></div>
<div style='position:relative; left:790px;'>
<?php
echo "<a href='logout.php'>LOG OUT</a>";?>
</div>
<table border='2' align='center'>
<tr><td>
<form action="action.php" name='form' method='post'>
<FONT COLOR='WHITE'>BLOG-ID:-</FONT><input type='number' min='1' max='1000' name="del">
<input type='submit' value='DELETE BLOG'>
</form>
</td>
<td>
<form action="action1.php" name='form1' method='post'>
<FONT COLOR='WHITE'>BLOG-ID:-</FONT><input type='number' min='1' max='1000' name="edit">
<input type='submit' value='EDIT BLOG'>
</form>
</td>
<td>
<form action="action2.php" name='form2' method='post'>
<FONT COLOR='WHITE'>USERNAME:-</FONT><input type='text' name="use">
<input type='submit' value='REMOVE USER'>
</form>
</td>
</table>
<table border ='1' style='position:relative;top:50px;border-color:white;'>
<tr><td><FONT COLOR=WHITE FACE="Geneva, Arial" SIZE=3>ID</FONT></td><td><FONT COLOR=WHITE FACE="Geneva, Arial" SIZE=3>USERNAME</FONT></td><td><FONT COLOR=WHITE FACE="Geneva, Arial" SIZE=3><center>TITLE</center></FONT></td><td><FONT COLOR=WHITE FACE="Geneva, Arial" SIZE=3>DATE</FONT></td></tr>
<?php
session_start();
if(!isset($_SESSION['username']) || !isset($_SESSION['password'])){
 header("Location: superuser.php");
} 
include ("connect.php"); 
$sql="SELECT id,username,title,time FROM forum";
$loop=mysql_query($sql,$dbc);
while($row = mysql_fetch_array($loop))
  {
  echo "<tr>"."<td>"."<font color='yellow' size='3' face='COMIC SANS MS'>".$row['id']."</font>"."</td>"."<td>"."<font color='yellow' size='3' face='COMIC SANS MS'>".$row['username']."</font>"."</td>"."<td>"."<font color='yellow' size='3' face='COMIC SANS MS'>".strtoupper($row['title'])."</font>"."</td>"."<td>"."<font color='yellow' size='3' face='COMIC SANS MS'>".$row['time']."</font>"."</td>"."</tr>";
  }
?>
</table>
</body>
</html>