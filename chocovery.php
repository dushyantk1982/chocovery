<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Chocovery Nutritions Products</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<meta name="description" content="Manufacturer and Wholesaler of Fruit Jam, Birthday, Coffee Toffee, Dark Waffo, Break Fast Chocklate, Butter Toffees, Humpy, Dumpy, Kaju Pista Badam Coconut, Eclairs."/>
<meta name="keywords" content="Fruit Jam, Birthday, Coffee Toffee, Dark Waffo, Break Fast Chocolate, Butter Toffees, Humpy, Dumpy, Kaju Pista Badam Coconut, Eclairs, Coffee Toffee, Waffers, Chocolate Waffers"/>


<link rel="stylesheet" type="text/css" href="stylesheets/main.css" />
    
    
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="script.js"></script>
    
    
<link media="screen" rel="stylesheet" href="css/colorbox.css" />
<!--gallery script-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script src="colorbox/jquery.colorbox.js"></script>
		<script>
		$(document).ready(function(){
			//Examples of how to assign the ColorBox event to elements
			$("a[rel='example1']").colorbox();
			$("a[rel='example2']").colorbox({transition:"fade"});
			$("a[rel='example3']").colorbox({transition:"none", width:"75%", height:"75%"});
			$("a[rel='example4']").colorbox({slideshow:true});
			$(".example5").colorbox();
			$(".example6").colorbox({iframe:true, innerWidth:425, innerHeight:344});
			$(".example7").colorbox({width:"80%", height:"80%", iframe:true});
			$(".example8").colorbox({width:"50%", inline:true, href:"#inline_example1"});
			$(".example9").colorbox({
				onOpen:function(){ alert('onOpen: colorbox is about to open'); },
				onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
				onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
				onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
				onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
			});
			
			//Example of preserving a JavaScript event for inline calls.
			$("#click").click(function(){ 
				$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
				return false;
			});
		});
	</script>
    
    <!--gallery script end-->
    

<body style="background-color:#996633;">
<?php include('header.php'); ?>

<div class="clear"></div>
<?php include('menu.php'); ?>

<div class="clear"></div>

<div id="contentCntr">
<div class="contentRow">
<div class="innerCotnLeft">
  
  <div class="promenu">
  <?php
  if($_REQUEST['cat']=='breakfast')
	{
		echo "<ul>
				<li><a href='chocovery.php?cat=breakfast' class='active'><span>Break Fast</span></a></li>
				<li><a href='chocovery.php?cat=humpy_dumpy'><span>Humypy Dumpy</span></a></li>
				<li><a href='chocovery.php?cat=dark_waffo'><span>Dark Wafoo</span></a></li>
				<li><a href='chocovery.php?cat=choco_fruit_jam'><span>Fruit Jam</span></a></li>
				<li><a href='chocovery.php?cat=love_candy'><span>Love Candy</span></a></li>
      		</ul>";
	}
else if($_REQUEST['cat']=='humpy_dumpy')
{
echo "<ul>
     	 <li><a href='chocovery.php?cat=breakfast'><span>Break Fast</span></a></li>
		 <li><a href='chocovery.php?cat=humpy_dumpy' class='active'><span>Humpy Dumpy</span></a></li>
		 <li><a href='chocovery.php?cat=dark_waffo'><span>Dark Wafoo</span></a></li>
		 <li><a href='chocovery.php?cat=choco_fruit_jam'><span>Fruit Jam</span></a></li>
		 <li><a href='chocovery.php?cat=love_candy'><span>Love Candy</span></a></li>
      </ul>";
}
else if($_REQUEST['cat']=='dark_waffo')
{
echo "<ul>
     	 <li><a href='chocovery.php?cat=breakfast'><span>Break Fast</span></a></li>
		 <li><a href='chocovery.php?cat=humpy_dumpy'><span>Humpy Dumpy</span></a></li>
		 <li><a href='chocovery.php?cat=dark_waffo' class='active'><span>Dark Wafoo</span></a></li>
		 <li><a href='chocovery.php?cat=choco_fruit_jam'><span>Fruit Jam</span></a></li>
		 <li><a href='chocovery.php?cat=love_candy'><span>Love Candy</span></a></li>
      </ul>";
}
else if($_REQUEST['cat']=='choco_fruit_jam')
{
echo "<ul>
     	 <li><a href='chocovery.php?cat=breakfast'><span>Break Fast</span></a></li>
		 <li><a href='chocovery.php?cat=humpy_dumpy'><span>Humpy Dumpy</span></a></li>
		 <li><a href='chocovery.php?cat=dark_waffo'><span>Dark Wafoo</span></a></li>
		 <li><a href='chocovery.php?cat=choco_fruit_jam' class='active'><span>Fruit Jam</span></a></li>
		 <li><a href='chocovery.php?cat=love_candy'><span>Love Candy</span></a></li>
      </ul>";
}

else
{
echo "<ul>
      	 <li><a href='chocovery.php?cat=breakfast'><span>Break Fast</span></a></li>
		 <li><a href='chocovery.php?cat=humpy_dumpy'><span>Humpy Dumpy</span></a></li>
		 <li><a href='chocovery.php?cat=dark_waffo'><span>Dark Wafoo</span></a></li>
		 <li><a href='chocovery.php?cat=choco_fruit_jam'><span>Fruit Jam</span></a></li>
		 <li><a href='chocovery.php?cat=love_candy' class='active'><span>Love Candy</span></a></li></ul>";

}

  ?>
   
  </div>
</div>

<div class="innerCotn">
<?php
if($_REQUEST['cat']=='breakfast')
{
?>
<h1>Breakfast</h1>
  <div class="catagallery">
  <ul>
<li>
<a href="gallery/chocovery/IMG-20150728-WA0030.jpg" rel="example2" title="Product Name : Grapes"><img src="gallery/chocovery/IMG-20150728-WA0030 - copy.jpg" alt="" /></a>
<span>Break Fast 5/-</span>
</li>
<li>
<a href="gallery/chocovery/IMG-20150728-WA0024.jpg" rel="example2" title="Product Name : Mango"><img src="gallery/chocovery/IMG-20150728-WA0024.jpg" alt="" /></a>
<span>Break Fast 2/-</span>
</li>

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
</ul>

  </div>
<?php
}
else if($_REQUEST['cat']=='humpy_dumpy')
{
?>
<h1>Humpy Dumpy</h1>
  <div class="catagallery">
  <ul>
<li>
<a href="gallery/chocovery/IMG-20150728-WA0033.jpg" rel="example2" title="Product Name : Grapes"><img src="gallery/chocovery/IMG-20150728-WA0033 - copy.jpg" alt="" /></a>
<span>Humpy Dumpy 5/-</span>
</li>

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
</ul>

  </div>

<?php
}
else if($_REQUEST['cat']=='dark_waffo')
{
?>
<h1>Dark Waffo</h1>
  <div class="catagallery">
  <ul>
<li>
<a href="gallery/chocovery/IMG-20150728-WA0008 - Copy.jpg" rel="example2" title="Product Name : Grapes"><img src="gallery/chocovery/IMG-20150728-WA0008 - Copy.jpg" alt="" /></a>
<span>Dark Waffo 5/-</span>
</li>

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
</ul>

  </div>

<?php
}
else if($_REQUEST['cat']=='choco_fruit_jam')
{
?>
<h1>Fruit Jam</h1>
  <div class="catagallery">
  <ul>
<li>
<a href="gallery/chocovery/IMG-20150728-WA0003 - Copy.jpg" rel="example2" title="Product Name : Grapes"><img src="gallery/chocovery/IMG-20150728-WA0003 - Copy.jpg" alt="" /></a>
<span>Strawberry Flavoured 5/-</span>
</li>
<li>
<a href="gallery/chocovery/IMG-20150728-WA0005 - Copy.jpg" rel="example2" title="Product Name : Grapes"><img src="gallery/chocovery/IMG-20150728-WA0005 - Copy.jpg" alt="" /></a>
<span>Orange Flavoured 5/-</span>
</li>

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
</ul>

  </div>

<?php
}
else if($_REQUEST['cat']=='love_candy')
{
?>
<h1>Love Candy</h1>
  <div class="catagallery">
  <ul>
<li>
<a href="gallery/chocovery/IMG-20150728-WA0009 - Copy.jpg" rel="example2" title="Product Name : Grapes"><img src="gallery/chocovery/IMG-20150728-WA0009 - Copy.jpg" alt="" /></a>
<span>Love Candy 2/-</span>
</li>

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
</ul>

  </div>

<?php
}

/*
else if($_REQUEST['cat']=='coffee_toffee')
{
	$conn=mysql_connect("localhost","root","");
	if(!$conn)
		{die("Could Not Connect".mysql_error());}
	mysql_select_db('chocovery');
	echo "<h1>Coffee Toffee</h1>";
  	echo "<div class='catagallery'><ul>";
	
	$res=mysql_query("select * from file where cat='coffee_toffee' order by '".DECS."'",$conn);
	while($r=mysql_fetch_array($res))
	{
		echo "<li>";
		echo "<a href='gallery/".$r['name']."' rel='example2' title='Product Name : '".$r['product_name']."'><img src='gallery/".$r['name']."' alt='' /></a>";
		echo "<span>Product Code : '".$r['product_name']."'";
		echo "</li>";
	}
	echo "</ul></div>";
}
else
{
	$conn=mysql_connect("localhost","root","");
	if(!$conn)
		{die("Could Not Connect".mysql_error());}
	mysql_select_db('chocovery');
	echo "<h1>Fruit Jam</h1>";
  	echo "<div class='catagallery'><ul>";
	
	$res=mysql_query("select * from file where cat='fruit_jam' order by '".DECS."'",$conn);
	while($r=mysql_fetch_array($res))
	{
		echo "<li>";
		echo "<a href='gallery/".$r['name']."' rel='example2' title='Product Name : '".$r['product_name']."'><img src='gallery/".$r['name']."' alt='' /></a>";
		echo "<span>Product Code : '".$r['product_name']."'";
		echo "</li>";
	}
	echo "</ul></div>";
}*/
?>
  <!--<h1>Fruit Jam</h1>
  <div class="catagallery">
  <ul>
<li>
<a href="gallery/sweet_fruitjam/grapes.jpg" rel="example2" title="Product Name : Grapes"><img src="gallery/sweet_fruitjam/grapes.jpg" alt="" /></a>
<span>Product Name : Grapes</span>
</li>
<li>
<a href="gallery/sweet_fruitjam/mango.jpg" rel="example2" title="Product Name : Mango"><img src="gallery/sweet_fruitjam/mango.jpg" alt="" /></a>
<span>Product Name : Mango</span>
</li>

<li>
<a href="gallery/sweet_fruitjam/orange.jpg" rel="example2" title="Product Name : Orange"><img src="gallery/sweet_fruitjam/orange.jpg" alt="" /></a>
<span>Product Name : Orange</span>
</li>

<li>
<a href="gallery/sweet_fruitjam/pine.jpg" rel="example2" title="Product Name : Pine"><img src="gallery/sweet_fruitjam/pine.jpg" alt="" /></a>
<span>Product Name : Pine</span>
</li>

<li>
<a href="gallery/sweet_fruitjam/strawberry.jpg" rel="example2" title="Product Name : Strawberry"><img src="gallery/sweet_fruitjam/strawberry.jpg" alt="" /></a>
<span>Product Name : Strawberry</span>
</li>


</ul>
  </div>-->
</div>
<p>&nbsp;</p>
</div>



</div>
</div>
</div>
<?php include('footer.php'); ?>


</body>
</html>
