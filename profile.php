<html>
<body bgcolor='black'>
<?php
$dbc =mysql_connect("localhost","root","");
mysql_select_db("project",$dbc);
	
	$username = $_POST['name'];
	$password = $_POST['pass'];
	
	$result = mysql_query("Select password From user where username='$username'");
	
	if(mysql_num_rows($result)!=0)
	{
		$row = mysql_fetch_array($result);
		if($password == $row['password'])
		{   session_start();
			$_SESSION['name'] = $username;
            $_SESSION['pass'] = $password;
			header("Location: view.php");

		}
		else
		{
			echo "<script>"."alert('<??????  Username Or Password Incorrect  ??????>')"."</script>";
			echo '<META HTTP-EQUIV="Refresh" Content="0; URL=profilelog.php">';    

		}
	}
	else
	{
		echo "<script>"."alert('USERNAME or PASSWORD INCORRECT')"."</script>";
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=profilelog.php">';    
    }


?>
</body>
</html>