<html>
<body bgcolor='gray'>
<?php
$dbc =mysql_connect("localhost","root","");
mysql_select_db("project",$dbc);
if (!isset($_POST['submit']))
{
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$result = mysql_query("Select username From user where username='$username'");
	
	if(mysql_num_rows($result)!=0)
	{
		$result1 = mysql_query("Select password From user where password='$password' AND username='$username'");
		if(mysql_num_rows($result1)!=0)
		{   
		    session_start();
			$_SESSION['USER']=$username;
			header("location:post.php");

		}
		else
		{
			echo "<script>"."alert('<??????  USERNAME or PASSWORD INCORRECT  ??????>')"."</script>";
			include('admin.php');

		}
	}
	else
	{
		echo "<script>"."alert('USERNAME or PASSWORD INCORRECT')"."</script>";
			include('admin.php');
    }

}
?>
</body>
</html>