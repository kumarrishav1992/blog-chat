
<html>
<body bgcolor='black' style="opacity:0.8;">
<table border='3' style='position:relative;top:20px; left:560px;'><tr><td><FONT COLOR=red FACE="cooper black" SIZE=10>E-MAIL</FONT></td></tr></table>
<div style='position:relative; left:755px;'>
<a href='post.php'>BACK</a>
</div>
<h3 style='position:relative; left:365px; COLOR:WHITE;'>U LIKED THE BLOG????? Wanna GET IT...JUST Enter.... BLOG-ID</h3>
<table border='1' style='position:relative;left:460px;'>
<tr><td>
<form action="sentmail.php" name='form' method='post'>
<FONT COLOR='WHITE'>BLOG-ID:-</FONT><input type='number' min='1' max='1000' name="data">
<input type='text' name='mail' placeholder='your E-mail Id'>
<input type='submit' value='MAIL ME!'>
</form>
</td>
</table>
<table border ='1' style='position:relative;top:20px;border-color:white;'>
<tr><td><FONT COLOR=WHITE FACE="Geneva, Arial" SIZE=3>ID</FONT></td><td><FONT COLOR=WHITE FACE="Geneva, Arial" SIZE=3>USERNAME</FONT></td><td><FONT COLOR=WHITE FACE="Geneva, Arial" SIZE=3><center>TITLE</center></FONT></td><td><FONT COLOR=WHITE FACE="Geneva, Arial" SIZE=3>DATE</FONT></td></tr>
<?php
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