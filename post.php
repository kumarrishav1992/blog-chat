<html>
<head>
<style>
#ho
{

border: 3px groove red; 
border-radius:2px;
background-color: black;
 }
#ho:hover
{color:white;
}
</style>
</head>
<body body bgcolor='008B8B' style="opacity:0.7; border-style:dashed;border:-width:35px;border-color:white;">
<div id="ho" ALIGN='CENTER'><font face='cooper black'  COLOR='RED' size='10'>POST YOUR BLOG</font></div>
<form action="entry.php" method="post" name="TopicForm" enctype="multipart/form-data">
<table width="70%" border="1" cellpadding="7" cellspacing="0" bgcolor="#F5F5FF" style="position:absolute; left:210px; top:190px;border-style:dashed;border:-width:35px;border-color:yellow;">
  <tr>
    <td colspan="2" bgcolor="#627EB0" style="color:#FFFFFF;border:solid 1px #627EB0;font-weight:bold">Post New Topic</td>
    </tr>
  <tr>
    <td align="left" style="border-bottom:solid 1px #D1D1E1;border-left:solid 1px #D1D1E1;">Topic Title</td>
    <td style="border-bottom:solid 1px #D1D1E1;border-right:solid 1px #D1D1E1;"><textarea name="topic_title"  style="width:75% ;height:130%;" value="" /></textarea> *</td>
  </tr>
  <tr>
    <td align="left" style="border-bottom:solid 1px #D1D1E1;border-left:solid 1px #D1D1E1;">Topic Message</td>
    <td style="border-bottom:solid 1px #D1D1E1;border-right:solid 1px #D1D1E1;"><textarea name="topic_text" style="width:95%;display:block; float:left;" rows="5"></textarea> <div style="float:left; padding-left:5px;">*</div></td>
  </tr>
  <tr>
    <td colspan="2" align="left" style="border-bottom:solid 1px #D1D1E1;border-left:solid 1px #D1D1E1;border-right:solid 1px #D1D1E1;">* - required fields</td>
    </tr>
  <tr>
  <tr>
    <td style="border-bottom:solid 1px #D1D1E1;border-left:solid 1px #D1D1E1;">&nbsp;</td>
    <td style="border-bottom:solid 1px #D1D1E1;border-right:solid 1px #D1D1E1;"><input name="button" type="submit" value="Post topic" /></td>
  </tr>
</table>
</form>
<div style="position:absolute; left:1040px; top:400px;">
<a href="index.php">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="mail.php">E-MAIL</a>
</div>
</body>
</html>