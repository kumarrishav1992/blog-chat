<html>
<head>
<title>Login</title>
<style>
.hell{
position:absolute; 
left:1170px; 
top:25px; 
font-size:20px;
font-family:cooper black;
height: 25px; 
width:  150px; 
border: 3px groove blue; 
border-radius:2px;
background-color: white; 
}
.pic{
position:absolute; 
left:13px; 
top:45px; 
font-family:cooper black;
height: 100px; 
width:  100px; 
border: 5px groove red; 
border-radius:7px;
}
.avatar{
position:absolute; 
left:1px; 
top:500px; 
font-size:13px;
color: white;
}
.ava{
position:absolute; 
left:13px; 
top:170px;  
border: 2px groove blue; 
border-radius:7px;
}
#hov
{
font-family:cooper black;
color:green;
font-size:40;
}
#hov:hover
{
font-size:50;
color:blue;
}
</style>
<script>
function pass()
{
document.getElementById("hide").style.display='block';
}
function pic()
{
document.getElementById("hid").style.display='block';
}
</script>
</head>
<body bgcolor='gray'>
<div id='hov' style='position:absolute;left:420px;top:40px;'>YOUR BLOG HISTORY</div>
<?php
session_start();
if(!isset($_SESSION['name']) || !isset($_SESSION['pass'])){
 header("Location: profilelog.php");
} 
?>
<div style='position:absolute;left:10px;'><font face='cooper black' color='yellow' size='6'>&nbsp;<?php echo $_SESSION['name'];?></font></div>
<div class='hell'><table border='1'><tr><td><a href="index.php">HOME</a></td><td><a href="logout.php">SIGN-OUT</a></td></tr></table></div>
<div class='pic'>
<?php
include ("connect.php"); 
$pro=$_SESSION['name'];
$sql4="SELECT avtar FROM user WHERE username='$pro'";
$loop4=mysql_query($sql4,$dbc);
$row = mysql_fetch_array($loop4);
echo '<img src=' .'upload/'.$row['avtar']." height='100' width='100'>";
?>
</div>
<div class='ava'>
<?php
include ("connect.php"); 
$pro=$_SESSION['name'];
$sql5="SELECT title,msg,time FROM forum WHERE username='$pro' ORDER BY time DESC";
$loop5=mysql_query($sql5,$dbc);
while($row = mysql_fetch_array($loop5))
  {
  echo "<font color='orange' size='2' face='COMIC SANS MS'>"."<b>".'"'.strtoupper($row['title']).'"'."</b>"."</font>".str_repeat('&nbsp',5)."<font color='purple'>"."posted on".str_repeat('&nbsp',2).$row['time']."</font>"."</br>";
  echo "<font color='black'size='4'>";
  echo "</br>".$row['msg']."<div style='border-bottom:solid 3px #D1D1E1;'>"."</div>"."</br>";
  echo "</font>";
  }
?>
</div>
<div style='position:absolute;left:1172px;top:65px;'>
<input type="button" value="CHANGE PASSWORD" onclick="pass()">
</div>
<div style='position:absolute;left:1172px;top:95px;'>
<input type="button" value="CHANGE AVTAR" onclick="pic()">
</div>
<div id='hide' style='display:none;'>
<form action='cpass.php' method='post' name='change' style='position:absolute;left:1000px;top:68px;'>
<input type='password' name='new' placeholder='New Password'></br>
<input type='password' name='rnew' placeholder='Confirm New Password'></br>
<input type='submit' value='SUBMIT'>
</form></div>
<div id='hid' style='display:none;'>
<form action='avtar.php' method='post' enctype="multipart/form-data"name='change' style='position:absolute;left:1172px;top:118px;'>
<input type='file' name='file'>
<input type='submit' value='SUBMIT'><font color='violet'>( jpg / png )</font>
</form></div>
</body>
</html>