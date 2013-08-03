<html>
<body bgcolor='black'>
<?php
$dbc =mysql_connect("localhost","root","");
mysql_select_db("project",$dbc);
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$result = mysql_query("Select * From admin where username='$username'",$dbc);
	
	if(mysql_num_rows($result)>0)
	{
		$row = mysql_fetch_array($result, MYSQL_BOTH);
		if($password == $row["password"])
		{   session_start();
			$_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
			header("Location: edit.php");

		}
		else
		{
			echo "<script>"."alert('<??????  Username Or Password Incorrect  ??????>')"."</script>";
			echo '<META HTTP-EQUIV="Refresh" Content="0; URL=superuser.php">';    

		}
	}
	else
	{
		echo "<script>"."alert('USERNAME or PASSWORD INCORRECT')"."</script>";
			echo '<META HTTP-EQUIV="Refresh" Content="0; URL=superuser.php">';    
    }

?>
</body>
</html>