<html>
<head>
<style>
#mydiv
{
position:absolute; 
left:530px; 
top:70px;
word-break:break-all;
font-family:arial;
height: 450px;
overflow-y:scroll; 
width:  325px; 
border: 7px groove orange; 
border-radius:13px;
background-color: white; 
color:blue;
}
#hi
{
position:absolute; 
left:530px; 
top:550px;
font-family:COMIC SANS MS;
font-size:15px
height: 30px; 
width:  78px; 
border: 5px groove pink; 
border-radius:3px;
background-color: white; 
color:BROWN;
}
#use
{
position:absolute; 
left:10px; 
top:10px;
font-family:cooper black;
font-size:20px;
height: 30px; 
width:  200px; 
border: 2px groove blue; 
border-radius:3px;
background-color: white;  
color:RED;
}
#but
{
position:absolute; 
left:900px; 
top:590px;
border: 2px groove blue; 
border-radius:3px;
}
</style>
<script>
var xmlhttp;
var xmlhttp1;
var tex;
function loadXMLDoc()
{
tex=document.getElementById("hi").value;
if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  
  xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {

    }
  }
 
xmlhttp.open("GET","chat2.php?te="+tex,true);
xmlhttp.send();
refresh();
}

function refresh()
{
document.getElementById("hi").value="";
}

function loadXMLDoc1()
{
if (window.XMLHttpRequest)
  {
  xmlhttp1=new XMLHttpRequest();
  }
else
  {
  xmlhttp1=new ActiveXObject("Microsoft.XMLHTTP");
  }
  
  xmlhttp1.onreadystatechange=function()
  {
  if (xmlhttp1.readyState==4 && xmlhttp1.status==200)
    {
	var c=xmlhttp1.responseText;
    document.getElementById("mydiv").innerHTML=c;
    }
  }
 
xmlhttp1.open("GET","chat3.php",true);
xmlhttp1.send();
setTimeout(function(){loadXMLDoc1()},100);
}
window.onload=loadXMLDoc1;
</script>
</head>
<body bgcolor='black'>
<?php
session_start();
if(!isset($_SESSION['username']) || !isset($_SESSION['password'])){
header("Location: 2login.php");
}?> 
<h2 align='center'><font face='algerian' color='white' size='8'>CONFERENCE ROOM</FONT></h2>
<div id='use'>hi <?php echo $_SESSION['username']; ?> &nbsp;&nbsp;&nbsp;&nbsp;<a href='2logout.php'>HOME</a></div>
<div id="mydiv"></div></br>
<textarea  name='te' size='30' id='hi' style="width:25% ;" rows="3"></textarea>
<button type="button" id='but' onclick="loadXMLDoc()">POST</button>
</body>
</html>