<!DOCTYPE html>
<HTML>
<HEAD>
<TITLE>BLOGGER CORNER</TITLE>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<style>
.header{
position:absolute; 
left:300px; 
top:12px;
height: 138px; 
width:  778px; 
border: 3px groove green; 
border-radius:13px;
background-color: #474724; 
}
.header:hover{
position:absolute; 
left:300px; 
top:12px;
height: 138px; 
width:  778px; 
border: 3px groove blue; 
border-radius:5px;
background-color: purple; 
}
.love{
word-break:break-all;
border-radius: 15px;
width:57%;}
.footer{
height: 30px; 
width:  770px;
border: 3px groove green;
border-radius:10px;
background-color:  #916E00; 
}
.scroll{
position:relative; 
left:1150px; 
top:100px;
}
</style>
</HEAD>
<BODY BGCOLOR= #FFFF7F>
<div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<div class="fb-follow" style="position:fixed; left:1095px; top:19px;" data-href="https://www.facebook.com/rishav.raj.737001" data-show-faces="true" data-width="250"></div>
<div class="fb-like-box" style="position:fixed; left:1px; top:1px;" data-href="https://www.facebook.com/rishavblogger1994" data-width="250" data-height="510" data-show-faces="true" data-stream="true" data-show-border="true" data-header="true"></div>
<div id ="fb" style="position:absolute; left:915px; top:23px;" >
<span class='st_facebook_large' displayText='Facebook'></span>
<span class='st_twitter_large' displayText='Tweet'></span>
<span class='st_linkedin_large' displayText='LinkedIn'></span>
<span class='st_email_large' displayText='Email'></span>
</div>
<table width='300px' layout='fixed'>
<div class='header'>
<h3><font face="algerian" color="red" size='6'>BLOGGER CORNER</font></h3>
<p><font size="2" color="yellow" face="Verdana, Arial, Helvetica, sans-serif">
              Blogger Corner is a cool website for those who like Blogging. 
              It includes various features that a web application can have and have good administration 
              features.This DELTA PROJECT is aimed to be a good easy to use and manage web based content 
              management system of "BLOGGER CORNER".....<font size="4" color="white" face="cooper black">by--->@Kumar Rishav</font>
			  </font> </p></div>
            <table width='600' class='love' bgcolor="#F0F8FF" style="position:absolute; left:298px; top:160px;">
            <tr><td>
<?php
include ("connect.php"); 
$sql="SELECT user.username,title,msg,time,avtar FROM forum,user WHERE forum.username=user.username ORDER BY time DESC";
$loop=mysql_query($sql,$dbc);
while($row = mysql_fetch_array($loop))
  {
  echo "<font color='green' size='2' face='COMIC SANS MS'>"."<b>".'"'.strtoupper($row['title']).'"'."</b>"."</font>".str_repeat('&nbsp',10)."<font color='purple'>"." by&nbsp;&nbsp;".$row['username'].str_repeat('&nbsp',2).'<img src=' .'upload/'.$row['avtar']." height='20' width='30'></font>".str_repeat('&nbsp',6)."<font color='purple'>"."posted on".str_repeat('&nbsp',2).$row['time']."</font>"."</br>";
  echo "<font color='black'size='4'>";
  echo "<br>".$row['msg']."<div style='border-bottom:solid 3px #D1D1E1;'>"."</div>"."</br>";
  echo "</font>";
  }
?>
</td></tr>

         <tr><td><div class='footer'>
				<strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;<a href="admin.php">CREATE NEW BLOG/LOGIN </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></strong>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="project2/2login.php">CHAT</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="profilelog.php">VIEW PROFILE</a></font></strong>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><a href="superuser.php">ADMIN</a></font></strong
             </div></td></tr>       
    </table>
	</table>
</BODY>
</HTML>