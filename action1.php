
<html>
<body bgcolor='black'>
<?php
session_start();
$a=$_POST['edit'];
$_SESSION['stor']=$a;
include('connect.php');
$chk=mysql_query("SELECT *  FROM forum where id=$a",$dbc);
	if(mysql_num_rows($chk)==0)
	{
    header("location:edit.php");    
	}
?>
<form action="final.php" method="post" name="TopicForm" enctype="multipart/form-data">
<table width="70%" border="0" cellpadding="7" cellspacing="0" bgcolor="#F5F5FF" style="position:absolute; left:210px; top:100px;">
  <tr>
    <td colspan="2" bgcolor="#627EB0" style="color:#FFFFFF;border:solid 1px #627EB0;font-weight:bold">Post New Topic</td>
    </tr>
	<?php  
include('connect.php');
$edit=mysql_query("SELECT title,msg FROM forum WHERE id=$a",$dbc);
$change=mysql_fetch_array($edit);?>
  <tr>
    <td align="left" style="border-bottom:solid 1px #D1D1E1;border-left:solid 1px #D1D1E1;">Topic Title</td>
    <td style="border-bottom:solid 1px #D1D1E1;border-right:solid 1px #D1D1E1;"><textarea name="topic_title"  style="width:75% ;height:130%;"/><?php echo $change['title'];?>
</textarea> *</td>
  </tr>
  <tr>
    <td align="left" style="border-bottom:solid 1px #D1D1E1;border-left:solid 1px #D1D1E1;">Topic Message</td>
    <td style="border-bottom:solid 1px #D1D1E1;border-right:solid 1px #D1D1E1;"><textarea name="topic_text" style="width:95%;display:block; float:left;" rows="5"><?php echo $change['msg'];?></textarea>
	<div style="float:left; padding-left:5px;">*</div></td>
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
<div style="position:absolute; left:1040px; top:350px;">
<a href="edit.php">BACK</a>
</div>
</body>
</html>