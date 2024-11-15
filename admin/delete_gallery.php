<?php
$conn=mysql_connect("166.62.8.3","adosurface","Admin@123");
if(!$conn)
{die("Could Not Connect".mysql_error());}
mysql_select_db('adosurface');

$name=$_REQUEST['name'];
$cat=$_REQUEST['cat'];
$extension = '.jpg';

if($_REQUEST['cat']=='Digi_Stone_Dices_Gallery')
{
	if(unlink('../photo_gallery/stone/'.$name))
	{
		$result = mysql_query("DELETE FROM gallery WHERE name='".$name."' and gallery_cat='".$cat."'",$conn)or die(mysql_error()); 
	}
		mysql_close();
   
header('location:del_Gallery.php?cat='.$cat.'');
}

else if($_REQUEST['cat']=='Digi_WPC_Wall_Gallery')
{
	if(unlink('../photo_gallery/wpc_wall/'.$name))
	{
		$result = mysql_query("DELETE FROM gallery WHERE name='".$name."' and gallery_cat='".$cat."'",$conn)or die(mysql_error()); 
	}
		mysql_close();
   
header('location:del_Gallery.php?cat='.$cat.'');
}

else if($_REQUEST['cat']=='Live_Project_Gallery')
{
	if(unlink('../photo_gallery/live_project/'.$name))
	{
		$result = mysql_query("DELETE FROM gallery WHERE name='".$name."' and gallery_cat='".$cat."'",$conn)or die(mysql_error()); 
	}
		mysql_close();
   
header('location:del_Gallery.php?cat='.$cat.'');
}

else
{
	if(unlink('../photo_gallery/doors/'.$name))
	{
		$result = mysql_query("DELETE FROM gallery WHERE name='".$name."' and gallery_cat='".$cat."'",$conn)or die(mysql_error()); 
	}
		mysql_close();
   
header('location:del_Gallery.php?cat='.$cat.'');
}
?>
