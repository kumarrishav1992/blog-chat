<?php
session_start();
if(isset($_SESSION['name']) && isset($_SESSION['pass']))
{
header("Location: view.php");
}
?>
<html>
<head>
<title>Login</title>
<style>
.head{
position:absolute; 
left:500px; 
top:150px;
height: 260px; 
width:  400px; 
border: 3px groove green; 
border-radius:5px;
background-color: #474724; 
}
.logs{
position:absolute; 
left:120px; 
top:110px; 
font-size:20px;
}
.hello{
position:absolute; 
left:726px; 
top:382px; 
font-size:20px;
height: 23px; 
width:  170px; 
border: 3px groove red; 
border-radius:2px;
background-color: black; 
}
.hell{
position:absolute; 
left:504px; 
top:382px; 
font-size:20px;
height: 23px; 
width:  75px; 
border: 3px groove red; 
border-radius:2px;
background-color: black; 
}
</style>
</head>
<body bgcolor='black'>
<div class='head'>
<p ALIGN='CENTER'><font color='yellow' size='6'><b><u>VIEW PROFILE</u></b></br>SIGN IN</font></p>
<form name='log' method='post' action='profile.php'>
<div class='logs'>
<input type='text' name='name' placeholder='Username'></br>
<input type='password' name='pass' placeholder='Password'>
<input type='submit' value='SUBMIT'>
</div>
</form>
</div>
<div class='hello'><a href='admin.php'> SIGN IN As Member</div>
<div class='hell'><a href='index.php'>HOME</div>
</body>
</html>