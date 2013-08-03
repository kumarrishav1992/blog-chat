<html>
<body bgcolor='white'>
<?php
$k=0;
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];
    if (($file_size > 1024*1024))
    {
	echo "<script>"."alert('<??????  File too large. File must be less than 1 MB.  ??????>')"."</script>";
    $k++;}	
	if( $file_type != "image/jpeg" && $file_type != "image/jpg"  && $file_type != "image/png")
    {echo "<script>"."alert('<??????  Invalid file type. Only  JPG, and PNG types are accepted. ??????>')"."</script>";
    $k++;} 
	
	if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
	  echo "<script>"."alert('<<<-----SORRY.....THIS AVTAR Already Exist-----Try AGAIN With Other AVTAR-------->>>')"."</script>";
      $k++;
	  }
 if($k==0)
 {

      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
	  $fz= $_FILES["file"]["name"];
	  session_start();
      $pro=$_SESSION['name'];
       include("connect.php");
      mysql_query("UPDATE user SET avtar='$fz' WHERE username='$pro'");
      header("location:view.php");
 }
 else
 header("location:view.php");

?>
</body>
</html>