
<?php

$dbc =mysql_connect("localhost","root","");
if(!$dbc)
die("<br/>"."CANNOT CONNECT TO MYSQL SERVER" . mysql_error());
$db_selected=mysql_select_db("chat",$dbc);
if(!$db_selected)
die("<br/>"."CANNOT CONNECT TO DATABASE : " . mysql_error());
?>