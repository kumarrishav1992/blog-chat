<html>
<head>
<title>ADMIN</title>
<style>
.head{
position:absolute; 
left:500px; 
top:150px;
height: 260px; 
width:  400px; 
border: 3px groove green; 
border-radius:8px;
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
left:822px; 
top:382px; 
font-size:20px;
height: 23px; 
width:  75px; 
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
width:  60px; 
border: 3px groove red; 
border-radius:2px;
background-color: black; 
}
.new{
position:absolute; 
left:750px; 
top:390px; 
font-size:15px;
color: white;
}
#ho{
position:absolute;
top:35px;
left:480px;
color:white;
}
#ho:hover
{
color:orange;
border: 3px groove red; 
border-radius:2px;
background-color: black; 
}
</style>
</head>
<body bgcolor='gray' style="opacity:0.8; border-style:dashed;border:-width:35px;border-color:yellow;">
<div id="ho"><font face='cooper black'  size='10'>SIGN IN/SIGN UP</font></div>
<div class='head'>
<p ALIGN='CENTER'><font face='wide latin' color='yellow' size='5'>Already a Member</br>SIGN IN</font></p>
<form name='log' method='post' action='login.php'>
<div class='logs'>
<input type='text' name='username' placeholder='Username'></br>
<input type='password' name='password' placeholder='Password'>
<input type='submit' value='SUBMIT'>
</div>
</form>
</div>
<div class='new'>New User*</div><div class='hello'><a href='newuser.php'> SIGN UP</div>
<div class='hell'><a href='index.php'>HOME</div>
</body>
</html>
