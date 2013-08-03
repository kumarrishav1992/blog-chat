<?php
$dbc =mysql_connect("localhost","root","");
if(!$dbc)
die("<br/>"."CANNOT CONNECT TO MYSQL SERVER" . mysql_error());
else
{
$sql="CREATE DATABASE project";
if (mysql_query($sql,$dbc))
{
$db_selected=mysql_select_db("project",$dbc);
if(!$db_selected)
{
die("<br/>"."CANNOT CONNECT TO DATABASE : " . mysql_error());
}
else
{
$sql1 = "CREATE TABLE forum"."(USERNAME VARCHAR(100),TITLE VARCHAR(1000),MSG VARCHAR(10000),TIME DATETIME)";
mysql_query( $sql1, $dbc);
}
}
else
mysql_select_db("project",$dbc);
$sql1 = "CREATE TABLE forum"."(USERNAME VARCHAR(100),TITLE VARCHAR(1000),MSG VARCHAR(10000),TIME DATETIME)";
mysql_query( $sql1, $dbc);
}
?>