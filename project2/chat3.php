<?php
include("connect.php");
$sql1=mysql_query("SELECT * FROM server ORDER BY time DESC");
if(mysql_num_rows($sql1)>50)
{
mysql_query("DELETE FROM server ORDER BY time ASC LIMIT 2");
}
$sql2=mysql_query("SELECT username FROM online WHERE status='yes'");
echo "<table>";
echo "<tr>";
echo "<td>";
while($row=mysql_fetch_array($sql1))
{echo "<font color='green' size='4' face='COMIC SANS MS'>".$row['username']."</font>"."</br>"."<font color='orange' size='1'>"."(".$row['time'].")"."</font>"."</br>".$row['msg']."</br>";}
echo "</td>";
echo "<td style='position:fixed;top:100px; left:900px;color:yellow;'>"."<u>"."ONLINE GUYS"."</u>".'</br>';
while($row=mysql_fetch_array($sql2))
{echo $row['username'].'*'."</br>";}
echo "</td>";
echo "</tr>"."</table>";
?>