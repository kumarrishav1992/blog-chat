<html>
<body bgcolor='gray'>
<?php
include("connect.php");
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$result = mysql_query("Select username From user where username='$username'");
	
	if(mysql_num_rows($result)!=0)
	{
		$result1 = mysql_query("Select password From user where password='$password' AND username='$username'" );
		if(mysql_num_rows($result1)!=0)
		{    session_start();
			$_SESSION['username'] = $username;
            $_SESSION['password'] = $password;		
$sql="UPDATE online SET status='yes' WHERE username='$username'";
mysql_query($sql);

		header("location:2index.php");
        
		}
		else
		{
			echo "<script>"."alert('<??????  USERNAME or PASSWORD INCORRECT  ??????>')"."</script>";
			include('2login.php');

		}
	}
	else
	{
		echo "<script>"."alert('USERNAME or PASSWORD INCORRECT')"."</script>";
			include('2login.php');
    }


?>
</body>
</html>