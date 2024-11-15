<?php
$conn=mysql_connect("166.62.8.3","adosurface","Admin@123");
if(!$conn)
{die("Could Not Connect".mysql_error());}
mysql_select_db('adosurface');

$name=$_REQUEST['name'];
$cat=$_REQUEST['cat'];
$extension = '.jpg';


	if(unlink('../photo_gallery/common_catalogue/'.$name))
	{
		$result = mysql_query("DELETE FROM file WHERE name='".$name."' and design_cat='".$cat."'",$conn)or die(mysql_error()); 
	}
		mysql_close();
   
header('location:del_Choose_design.php?cat='.$cat.'');

/*$res=mysql_query("select * from file",$conn);
while($r=mysql_fetch_array($res))
{
echo "<img src='uploads/".$r['name']."' height='200' width='200' /><a href='delete.php?id=".$r['id']."'>Delete</a><br />";
}
*/
?>
