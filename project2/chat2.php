<?php
include("connect.php");
$us=$_GET['te'];
if($us!=null)
{
session_start();
$name=$_SESSION['username'];
$stor="INSERT INTO server (username, msg,time) VALUES ('$name','$us',NOW())";
mysql_query($stor);
}
?>