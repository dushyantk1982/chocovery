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
    <style type="text/css">
		img{
  background-color: transparent;
  background-image: url(gallery/abc/back.png);
  background-repeat: repeat;
}
	</style>
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
  if($_REQUEST['cat']=='abc_fruit_jam')
	{
		echo "<ul>
				<li><a href='abc.php?cat=abc_fruit_jam' class='active'><span>Fruit Jam</span></a></li>
				<li><a href='abc.php?cat=abc_fad_cream'><span>Fad Toffee</span></a></li>
				<li><a href='abc.php?cat=abc_double_maza'><span>Double Maza</span></a></li>
				<li><a href='abc.php?cat=abc_chew_toffee'><span>Chewy Toffees</span></a></li>
				<li><a href='abc.php?cat=abc_coffee_tatoo'><span>Coffee Tatoo</span></a></li>
				<li><a href='abc.php?cat=abc_birthday'><span>Birthday</span></a></li>
				<li><a href='abc.php?cat=abc_milk_chew'><span>Milk Chew</span></a></li>
				<li><a href='abc.php?cat=abc_sors'><span>Sors</span></a></li>
				<li><a href='abc.php?cat=abc_stick_toffee'><span>Stick Toffee</span></a></li>
				<li><a href='abc.php?cat=abc_coffee_fill_jar'><span>Coffee Fill Jar</span></a></li>
				<li><a href='abc.php?cat=abc_tiny_jar'><span>Tiny Jar</span></a></li>
				<li><a href='abc.php?cat=abc_fruit_jar'><span>Fruitee Jar</span></a></li>
				<li><a href='abc.php?cat=abc_kiss_me_jar'><span>Kiss Me Jar</span></a></li>
			</ul>";
	}
else if($_REQUEST['cat']=='abc_fad_cream')
{
echo "<ul>
     	<li><a href='abc.php?cat=abc_fruit_jam'><span>Fruit Jam</span></a></li>
		<li><a href='abc.php?cat=abc_fad_cream' class='active'><span>Fad Toffee</span></a></li>
		<li><a href='abc.php?cat=abc_double_maza'><span>Double Maza</span></a></li>
		<li><a href='abc.php?cat=abc_chew_toffee'><span>Chewy Toffees</span></a></li>
		<li><a href='abc.php?cat=abc_coffee_tatoo'><span>Coffee Tatoo</span></a></li>
		<li><a href='abc.php?cat=abc_birthday'><span>Birthday</span></a></li>
		<li><a href='abc.php?cat=abc_milk_chew'><span>Milk Chew</span></a></li>
		<li><a href='abc.php?cat=abc_sors'><span>Sors</span></a></li>
		<li><a href='abc.php?cat=abc_stick_toffee'><span>Stick Toffee</span></a></li>
		<li><a href='abc.php?cat=abc_coffee_fill_jar'><span>Coffee Fill Jar</span></a></li>
		<li><a href='abc.php?cat=abc_tiny_jar'><span>Tiny Jar</span></a></li>
		<li><a href='abc.php?cat=abc_fruit_jar'><span>Fruitee Jar</span></a></li>
		<li><a href='abc.php?cat=abc_kiss_me_jar'><span>Kiss Me Jar</span></a></li>
      </ul>";
}
else if($_REQUEST['cat']=='abc_double_maza')
{
echo "<ul>
     	<li><a href='abc.php?cat=abc_fruit_jam'><span>Fruit Jam</span></a></li>
		<li><a href='abc.php?cat=abc_fad_cream'><span>Fad Toffee</span></a></li>
		<li><a href='abc.php?cat=abc_double_maza' class='active'><span>Double Maza</span></a></li>
		<li><a href='abc.php?cat=abc_chew_toffee'><span>Chewy Toffees</span></a></li>
		<li><a href='abc.php?cat=abc_coffee_tatoo'><span>Coffee Tatoo</span></a></li>
		<li><a href='abc.php?cat=abc_birthday'><span>Birthday</span></a></li>
		<li><a href='abc.php?cat=abc_milk_chew'><span>Milk Chew</span></a></li>
		<li><a href='abc.php?cat=abc_sors'><span>Sors</span></a></li>
		<li><a href='abc.php?cat=abc_stick_toffee'><span>Stick Toffee</span></a></li>
		<li><a href='abc.php?cat=abc_coffee_fill_jar'><span>Coffee Fill Jar</span></a></li>
		<li><a href='abc.php?cat=abc_tiny_jar'><span>Tiny Jar</span></a></li>
		<li><a href='abc.php?cat=abc_fruit_jar'><span>Fruitee Jar</span></a></li>
		<li><a href='abc.php?cat=abc_kiss_me_jar'><span>Kiss Me Jar</span></a></li>
      </ul>";
}
else if($_REQUEST['cat']=='abc_chew_toffee')
{
echo "<ul>
     	<li><a href='abc.php?cat=abc_fruit_jam'><span>Fruit Jam</span></a></li>
		<li><a href='abc.php?cat=abc_fad_cream'><span>Fad Toffee</span></a></li>
		<li><a href='abc.php?cat=abc_double_maza'><span>Double Maza</span></a></li>
		<li><a href='abc.php?cat=abc_chew_toffee' class='active'><span>Chewy Toffees</span></a></li>
		<li><a href='abc.php?cat=abc_coffee_tatoo'><span>Coffee Tatoo</span></a></li>
		<li><a href='abc.php?cat=abc_birthday'><span>Birthday</span></a></li>
		<li><a href='abc.php?cat=abc_milk_chew'><span>Milk Chew</span></a></li>
		<li><a href='abc.php?cat=abc_sors'><span>Sors</span></a></li>
		<li><a href='abc.php?cat=abc_stick_toffee'><span>Stick Toffee</span></a></li>
		<li><a href='abc.php?cat=abc_coffee_fill_jar'><span>Coffee Fill Jar</span></a></li>
		<li><a href='abc.php?cat=abc_tiny_jar'><span>Tiny Jar</span></a></li>
		<li><a href='abc.php?cat=abc_fruit_jar'><span>Fruitee Jar</span></a></li>
		<li><a href='abc.php?cat=abc_kiss_me_jar'><span>Kiss Me Jar</span></a></li>
      </ul>";
}
else if($_REQUEST['cat']=='abc_coffee_tatoo')
{
echo "<ul>
     	<li><a href='abc.php?cat=abc_fruit_jam'><span>Fruit Jam</span></a></li>
		<li><a href='abc.php?cat=abc_Fad_cream'><span>Fad Toffee</span></a></li>
		<li><a href='abc.php?cat=abc_double_maza'><span>Double Maza</span></a></li>
		<li><a href='abc.php?cat=abc_chew_toffee'><span>Chewy Toffees</span></a></li>
		<li><a href='abc.php?cat=abc_coffee_tatoo' class='active'><span>Coffee Tatoo</span></a></li>
		<li><a href='abc.php?cat=abc_birthday'><span>Birthday</span></a></li>
		<li><a href='abc.php?cat=abc_milk_chew'><span>Milk Chew</span></a></li>
		<li><a href='abc.php?cat=abc_sors'><span>Sors</span></a></li>
		<li><a href='abc.php?cat=abc_stick_toffee'><span>Stick Toffee</span></a></li>
		<li><a href='abc.php?cat=abc_coffee_fill_jar'><span>Coffee Fill Jar</span></a></li>
		<li><a href='abc.php?cat=abc_tiny_jar'><span>Tiny Jar</span></a></li>
		<li><a href='abc.php?cat=abc_fruit_jar'><span>Fruitee Jar</span></a></li>
		<li><a href='abc.php?cat=abc_kiss_me_jar'><span>Kiss Me Jar</span></a></li>
      </ul>";
}
else if($_REQUEST['cat']=='abc_birthday')
{
echo "<ul>
     	<li><a href='abc.php?cat=abc_fruit_jam'><span>Fruit Jam</span></a></li>
		<li><a href='abc.php?cat=abc_fad_cream'><span>Fad Toffee</span></a></li>
		<li><a href='abc.php?cat=abc_double_maza'><span>Double Maza</span></a></li>
		<li><a href='abc.php?cat=abc_chew_toffee'><span>Chewy Toffees</span></a></li>
		<li><a href='abc.php?cat=abc_coffee_tatoo'><span>Coffee Tatoo</span></a></li>
		<li><a href='abc.php?cat=abc_birthday' class='active'><span>Birthday</span></a></li>
		<li><a href='abc.php?cat=abc_milk_chew'><span>Milk Chew</span></a></li>
		<li><a href='abc.php?cat=abc_sors'><span>Sors</span></a></li>
		<li><a href='abc.php?cat=abc_stick_toffee'><span>Stick Toffee</span></a></li>
		<li><a href='abc.php?cat=abc_coffee_fill_jar'><span>Coffee Fill Jar</span></a></li>
		<li><a href='abc.php?cat=abc_tiny_jar'><span>Tiny Jar</span></a></li>
		<li><a href='abc.php?cat=abc_fruit_jar'><span>Fruitee Jar</span></a></li>
		<li><a href='abc.php?cat=abc_kiss_me_jar'><span>Kiss Me Jar</span></a></li>
      </ul>";
}
else if($_REQUEST['cat']=='abc_milk_chew')
{
echo "<ul>
     	<li><a href='abc.php?cat=abc_fruit_jam'><span>Fruit Jam</span></a></li>
		<li><a href='abc.php?cat=abc_fad_cream'><span>Fad Toffee</span></a></li>
		<li><a href='abc.php?cat=abc_double_maza'><span>Double Maza</span></a></li>
		<li><a href='abc.php?cat=abc_chew_toffee'><span>Chewy Toffees</span></a></li>
		<li><a href='abc.php?cat=abc_coffee_tatoo'><span>Coffee Tatoo</span></a></li>
		<li><a href='abc.php?cat=abc_birthday'><span>Birthday</span></a></li>
		<li><a href='abc.php?cat=abc_milk_chew' class='active'><span>Milk Chew</span></a></li>
		<li><a href='abc.php?cat=abc_sors'><span>Sors</span></a></li>
		<li><a href='abc.php?cat=abc_stick_toffee'><span>Stick Toffee</span></a></li>
		<li><a href='abc.php?cat=abc_coffee_fill_jar'><span>Coffee Fill Jar</span></a></li>
		<li><a href='abc.php?cat=abc_tiny_jar'><span>Tiny Jar</span></a></li>
		<li><a href='abc.php?cat=abc_fruit_jar'><span>Fruitee Jar</span></a></li>
		<li><a href='abc.php?cat=abc_kiss_me_jar'><span>Kiss Me Jar</span></a></li>
      </ul>";
}
else if($_REQUEST['cat']=='abc_sors')
{
echo "<ul>
     	<li><a href='abc.php?cat=abc_fruit_jam'><span>Fruit Jam</span></a></li>
		<li><a href='abc.php?cat=abc_fad_cream'><span>Fad Toffee</span></a></li>
		<li><a href='abc.php?cat=abc_double_maza'><span>Double Maza</span></a></li>
		<li><a href='abc.php?cat=abc_chew_toffee'><span>Chewy Toffees</span></a></li>
		<li><a href='abc.php?cat=abc_coffee_tatoo'><span>Coffee Tatoo</span></a></li>
		<li><a href='abc.php?cat=abc_birthday'><span>Birthday</span></a></li>
		<li><a href='abc.php?cat=abc_milk_chew'><span>Milk Chew</span></a></li>
		<li><a href='abc.php?cat=abc_sors' class='active'><span>Sors</span></a></li>
		<li><a href='abc.php?cat=abc_stick_toffee'><span>Stick Toffee</span></a></li>
		<li><a href='abc.php?cat=abc_coffee_fill_jar'><span>Coffee Fill Jar</span></a></li>
		<li><a href='abc.php?cat=abc_tiny_jar'><span>Tiny Jar</span></a></li>
		<li><a href='abc.php?cat=abc_fruit_jar'><span>Fruitee Jar</span></a></li>
		<li><a href='abc.php?cat=abc_kiss_me_jar'><span>Kiss Me Jar</span></a></li>
      </ul>";
}
else if($_REQUEST['cat']=='abc_stick_toffee')
{
echo "<ul>
     	<li><a href='abc.php?cat=abc_fruit_jam'><span>Fruit Jam</span></a></li>
		<li><a href='abc.php?cat=abc_fad_cream'><span>Fad Toffee</span></a></li>
		<li><a href='abc.php?cat=abc_double_maza'><span>Double Maza</span></a></li>
		<li><a href='abc.php?cat=abc_chew_toffee'><span>Chewy Toffees</span></a></li>
		<li><a href='abc.php?cat=abc_coffee_tatoo'><span>Coffee Tatoo</span></a></li>
		<li><a href='abc.php?cat=abc_birthday'><span>Birthday</span></a></li>
		<li><a href='abc.php?cat=abc_milk_chew'><span>Milk Chew</span></a></li>
		<li><a href='abc.php?cat=abc_sors'><span>Sors</span></a></li>
		<li><a href='abc.php?cat=abc_stick_toffee' class='active'><span>Stick Toffee</span></a></li>
		<li><a href='abc.php?cat=abc_coffee_fill_jar'><span>Coffee Fill Jar</span></a></li>
		<li><a href='abc.php?cat=abc_tiny_jar'><span>Tiny Jar</span></a></li>
		<li><a href='abc.php?cat=abc_fruit_jar'><span>Fruitee Jar</span></a></li>
		<li><a href='abc.php?cat=abc_kiss_me_jar'><span>Kiss Me Jar</span></a></li>
      </ul>";
}
else if($_REQUEST['cat']=='abc_coffee_fill_jar')
{
echo "<ul>
     	<li><a href='abc.php?cat=abc_fruit_jam'><span>Fruit Jam</span></a></li>
		<li><a href='abc.php?cat=abc_fad_cream'><span>Fad Toffee</span></a></li>
		<li><a href='abc.php?cat=abc_double_maza'><span>Double Maza</span></a></li>
		<li><a href='abc.php?cat=abc_chew_toffee'><span>Chewy Toffees</span></a></li>
		<li><a href='abc.php?cat=abc_coffee_tatoo'><span>Coffee Tatoo</span></a></li>
		<li><a href='abc.php?cat=abc_birthday'><span>Birthday</span></a></li>
		<li><a href='abc.php?cat=abc_milk_chew'><span>Milk Chew</span></a></li>
		<li><a href='abc.php?cat=abc_sors'><span>Sors</span></a></li>
		<li><a href='abc.php?cat=abc_stick_toffee'><span>Stick Toffee</span></a></li>
		<li><a href='abc.php?cat=abc_coffee_fill_jar' class='active'><span>Coffee Fill Jar</span></a></li>
		<li><a href='abc.php?cat=abc_tiny_jar'><span>Tiny Jar</span></a></li>
		<li><a href='abc.php?cat=abc_fruit_jar'><span>Fruitee Jar</span></a></li>
		<li><a href='abc.php?cat=abc_kiss_me_jar'><span>Kiss Me Jar</span></a></li>
      </ul>";
}
else if($_REQUEST['cat']=='abc_tiny_jar')
{
echo "<ul>
     	<li><a href='abc.php?cat=abc_fruit_jam'><span>Fruit Jam</span></a></li>
		<li><a href='abc.php?cat=abc_fad_cream'><span>Fad Toffee</span></a></li>
		<li><a href='abc.php?cat=abc_double_maza'><span>Double Maza</span></a></li>
		<li><a href='abc.php?cat=abc_chew_toffee'><span>Chewy Toffees</span></a></li>
		<li><a href='abc.php?cat=abc_coffee_tatoo'><span>Coffee Tatoo</span></a></li>
		<li><a href='abc.php?cat=abc_birthday'><span>Birthday</span></a></li>
		<li><a href='abc.php?cat=abc_milk_chew'><span>Milk Chew</span></a></li>
		<li><a href='abc.php?cat=abc_sors'><span>Sors</span></a></li>
		<li><a href='abc.php?cat=abc_stick_toffee'><span>Stick Toffee</span></a></li>
		<li><a href='abc.php?cat=abc_coffee_fill_jar'><span>Coffee Fill Jar</span></a></li>
		<li><a href='abc.php?cat=abc_tiny_jar' class='active'><span>Tiny Jar</span></a></li>
		<li><a href='abc.php?cat=abc_fruit_jar'><span>Fruitee Jar</span></a></li>
		<li><a href='abc.php?cat=abc_kiss_me_jar'><span>Kiss Me Jar</span></a></li>
      </ul>";
}
else if($_REQUEST['cat']=='abc_fruit_jar')
{
echo "<ul>
     	<li><a href='abc.php?cat=abc_fruit_jam'><span>Fruit Jam</span></a></li>
		<li><a href='abc.php?cat=abc_fad_cream'><span>Fad Toffee</span></a></li>
		<li><a href='abc.php?cat=abc_double_maza'><span>Double Maza</span></a></li>
		<li><a href='abc.php?cat=abc_chew_toffee'><span>Chewy Toffees</span></a></li>
		<li><a href='abc.php?cat=abc_coffee_tatoo'><span>Coffee Tatoo</span></a></li>
		<li><a href='abc.php?cat=abc_birthday'><span>Birthday</span></a></li>
		<li><a href='abc.php?cat=abc_milk_chew'><span>Milk Chew</span></a></li>
		<li><a href='abc.php?cat=abc_sors'><span>Sors</span></a></li>
		<li><a href='abc.php?cat=abc_stick_toffee'><span>Stick Toffee</span></a></li>
		<li><a href='abc.php?cat=abc_coffee_fill_jar'><span>Coffee Fill Jar</span></a></li>
		<li><a href='abc.php?cat=abc_tiny_jar'><span>Tiny Jar</span></a></li>
		<li><a href='abc.php?cat=abc_fruit_jar' class='active'><span>Fruitee Jar</span></a></li>
		<li><a href='abc.php?cat=abc_kiss_me_jar'><span>Kiss Me Jar</span></a></li>
      </ul>";
}

else
{
echo "<ul>
      	 <li><a href='abc.php?cat=abc_fruit_jam'><span>Fruit Jam</span></a></li>
		<li><a href='abc.php?cat=abc_fad_cream'><span>Fad Toffee</span></a></li>
		<li><a href='abc.php?cat=abc_double_maza'><span>Double Maza</span></a></li>
		<li><a href='abc.php?cat=abc_chew_toffee'><span>Chewy Toffees</span></a></li>
		<li><a href='abc.php?cat=abc_coffee_tatoo'><span>Coffee Tatoo</span></a></li>
		<li><a href='abc.php?cat=abc_birthday'><span>Birthday</span></a></li>
		<li><a href='abc.php?cat=abc_milk_chew'><span>Milk Chew</span></a></li>
		<li><a href='abc.php?cat=abc_sors'><span>Sors</span></a></li>
		<li><a href='abc.php?cat=abc_stick_toffee'><span>Stick Toffee</span></a></li>
		<li><a href='abc.php?cat=abc_coffee_fill_jar'><span>Coffee Fill Jar</span></a></li>
		<li><a href='abc.php?cat=abc_tiny_jar'><span>Tiny Jar</span></a></li>
		<li><a href='abc.php?cat=abc_fruit_jar'><span>Fruitee Jar</span></a></li>
		<li><a href='abc.php?cat=abc_kiss_me_jar' class='active'><span>Kiss Me Jar</span></a></li>
	</ul>";

}

  ?>
   
  </div>
</div>

<div class="innerCotn">
<?php
if($_REQUEST['cat']=='abc_fruit_jam')
{
?>
<h1>Fruit Jam</h1>
  <div class="catagallery">
  <ul>
<li>
<a href="gallery/abc/mango1.jpg" rel="example2" title="Product Name : Grapes"><img src="gallery/abc/mango1.jpg" alt="" /></a>
<span>Mango</span>
</li>
<li>
<a href="gallery/abc/orange1.jpg" rel="example2" title="Product Name : Mango"><img src="gallery/abc/orange1.jpg" alt="" /></a>
<span>Orange</span>
</li>
<li>
<a href="gallery/abc/pine1.jpg" rel="example2" title="Product Name : Mango"><img src="gallery/abc/pine1.jpg" alt="" /></a>
<span>Pinapple</span>
</li>
<li>
<a href="gallery/abc/strawberry1.jpg" rel="example2" title="Product Name : Mango"><img src="gallery/abc/strawberry1.jpg" alt="" /></a>
<span>Strawberry</span>
</li>

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
</ul>

  </div>
<?php
}
else if($_REQUEST['cat']=='abc_fad_cream')
{
?>
<h1>Fad Toffee</h1>
  <div class="catagallery">
  <ul>
<li>
<a href="gallery/abc/IMG-20150728-WA0023.png" rel="example2" title="Product Name : Grapes"><img src="gallery/abc/IMG-20150728-WA0023.jpg" alt="" /></a>
<span>Kaju Cream</span>
</li>
<li>
<a href="gallery/abc/IMG-20150728-WA0028.jpg" rel="example2" title="Product Name : Grapes"><img src="gallery/abc/IMG-20150728-WA0028.jpg" alt="" /></a>
<span>Coconut Cream</span>
</li>
<li>
<a href="gallery/abc/IMG-20150728-WA0025.jpg" rel="example2" title="Product Name : Grapes"><img src="gallery/abc/IMG-20150728-WA0025.jpg" alt="" /></a>
<span>Rich Malai</span>
</li>
<li>
<a href="gallery/abc/" rel="example2" title="Product Name : Grapes"><img src="gallery/abc/" alt="" /></a>
<span>Gold</span>
</li>



<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
</ul>

  </div>


<?php
}
else if($_REQUEST['cat']=='abc_double_maza')
{
?>
<h1>Double Maza</h1>
  <div class="catagallery">
  <ul>
<li>
<a href="gallery/abc/double_maza/IMG-20150728-WA0014.jpg" rel="example2" title="Product Name : Grapes"><img src="gallery/abc/double_maza/IMG-20150728-WA0014.jpg" alt="" /></a>
<span>Kulfi</span>
</li>
<li>
<a href="gallery/abc/double_maza/IMG-20150728-WA0019.jpg" rel="example2" title="Product Name : Grapes"><img src="gallery/abc/double_maza/IMG-20150728-WA0019.jpg" alt="" /></a>
<span>Pista Badam</span>
</li>
<li>
<a href="gallery/abc/double_maza/IMG-20150728-WA0020.jpg" rel="example2" title="Product Name : Grapes"><img src="gallery/abc/double_maza/IMG-20150728-WA0020.jpg" alt="" /></a>
<span>Rajbhog</span>
</li>

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
</ul>

  </div>

<?php
}
else if($_REQUEST['cat']=='abc_chew_toffee')
{
?>
<h1>Chewy Toffees</h1>
  <div class="catagallery">
  <ul>
<li>
<a href="gallery/abc/IMG-20150728-WA0031.jpg" rel="example2" title="Product Name : Grapes"><img src="gallery/abc/IMG-20150728-WA0031.jpg" alt="" /></a>
<span>Chewy Toffee</span>
</li>

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
</ul>

  </div>

<?php
}
else if($_REQUEST['cat']=='abc_coffee_tatoo')
{
?>
<h1>Coffee Tatoo</h1>
  <div class="catagallery">
  <ul>
<li>
<a href="gallery/abc/" rel="example2" title="Product Name : Grapes"><img src="gallery/abc/" alt="" /></a>
<span>Coffee Tatoo</span>
</li>

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
</ul>

  </div>

<?php
}
else if($_REQUEST['cat']=='abc_birthday')
{
?>
<h1>Birthday</h1>
  <div class="catagallery">
  <ul>
<li>
<a href="gallery/abc/birthday/IMG-20150728-WA0010.jpg" rel="example2" title="Product Name : Grapes"><img src="gallery/abc/birthday/IMG-20150728-WA0010.jpg" alt="" /></a>
<span>Birthday Toffee</span>
</li>

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
</ul>

  </div>

<?php
}
else if($_REQUEST['cat']=='abc_milk_chew')
{
?>
<h1>Milk Chew</h1>
  <div class="catagallery">
  <ul>
<li>
<a href="gallery/abc/" rel="example2" title="Product Name : Grapes"><img src="gallery/abc/" alt="" /></a>
<span>Milk Chew</span>
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
