<?php
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];
$conn=mysql_connect("localhost","root","");
//$conn=mysql_connect("166.62.8.3","adosurface","Admin@123");
if(!$conn)
{die("Could Not Connect".mysql_error());}
mysql_select_db('adosurface');
$res=mysql_query('select * from user',$conn);
while($r=mysql_fetch_array($res))
{
if($uid==$r['uid'] && $pwd==$r['pwd'])
{
header('location:admin_home.php');
}
}

?>