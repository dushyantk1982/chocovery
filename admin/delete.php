<?php
$conn=mysql_connect("localhost","root","");
if(!$conn)
{die("Could Not Connect".mysql_error());}
mysql_select_db('mytable');


	$name=$_REQUEST['name'];
        $extension = '.jpg';
        if(unlink('uploads/'.$name))
        {
            $result = mysql_query("DELETE FROM file WHERE name='".$name."'",$conn)or die(mysql_error()); 
        }
		mysql_close();
   
header('location:display.php');

/*$res=mysql_query("select * from file",$conn);
while($r=mysql_fetch_array($res))
{
echo "<img src='uploads/".$r['name']."' height='200' width='200' /><a href='delete.php?id=".$r['id']."'>Delete</a><br />";
}
*/
?>
