
<html>
<head>
<title>Login</title>
<style>
.head{
position:absolute; 
left:500px; 
top:150px;
height: 350px; 
width:  400px; 
border: 3px groove green; 
border-radius:5px;
background-color: #474724; 
}
.logs{
position:absolute; 
left:70px; 
top:90px; 
font-size:20px;
font-color:blue;
}
.hello{
position:absolute; 
left:278px; 
top:322px; 
font-size:20px;
color: white;
height: 20px; 
width:  115px; 
border: 3px groove red; 
border-radius:2px;
background-color: black; 
}
.hell{
position:absolute; 
left:1px; 
top:322px; 
font-size:20px;
color: white;
height: 20px; 
width:  60px; 
border: 3px groove red; 
border-radius:2px;
background-color: black; 
}
.avatar{
position:absolute; 
left:1px; 
top:250px; 
font-size:13px;
color: white;
}
#err4
{
font-family:forte;
color:pink;
font-size:30px;
position:absolute;
left:180px;
top:175px;
}
</style>
<script>
function cap()
{
var b="";
var letter="0123456789abcdfghijkmnpqrstvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"
for(var a=0;a<7;a++)
b=b.concat(letter[(Math.floor(Math.random()*62))]);
document.getElementById("err4").innerHTML=b;
var c;
window.c=b;
}
function capt()
{
var aa=log.text.value;
if (aa==window.c)
return true;
else
{
alert("TRY AGAIN! WRONG CAPTCHE ENTERED");
location.reload();
return false; 
}
}
window.onload=cap;
</script>
</head>
<body bgcolor='black'>
<div class='head'>
<p ALIGN='CENTER'><font color='yellow' size='5'><i>NEW USER REGISTRATION FORM</i></font></p>
<form name='log' method='post' action="newuservalid.php" enctype="multipart/form-data" onsubmit="return capt()">
<div class='logs'>
<input type='text' name='username' placeholder='Username' size='40px'></br>
<input type='text' name='email' placeholder="Email" size='40px'></br>
<input type='tel' name='contact' placeholder="Contact No." size='40px'></br>
<input type='text' name='address' placeholder="Address" size='40px'></br>
<input type='password' name='password' placeholder='Password' size='40px'></br>
<input type='password' name='rpassword' placeholder='Confirm Password' size='40px'></br>
<input type="file" name="file" /></br>
<input type="text" name="text" placeholder="Enter The Captche"/></br>
<div id ="err4"></div>
<input type='submit' value='SUBMIT'></br>
</div>
</form>
<div class='avatar'>Your Avatar*</div>
<div class='hello'><a href="admin.php">SIGN IN  Page</a></div>
<div class='hell'><a href="index.php">HOME</a></div>
</div>
</body>
</html>