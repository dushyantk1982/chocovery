<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>ado Surface :: Manufacturer of Digi Doors, Digi Stone Dices, WPC Products, Wallpanels, Glass, etc. ::</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<meta name="description" content="After serving and delivering the vast market of WPC (wood plastic composite), AVS Industry (ado woods) launched a new digital revolutionary products range under “Ado Surface” having strategic partnership with “Yashvi Agro Industries Pvt. Ltd.” "/>
<meta name="keywords" content="Digi Doors, Digi Stone Dices, WPC, Glass, ACP panels, Mdf, Sunboard, Ply board, Ceramic tiles, Acrylic sheet, Metal sheet, Laminates, Sunmika, Wall panels, Pillar cladding, Flooring, Ceiling, Doors and Partitions, Glass panels, Schools and Institutions, Kitchen glass tile and cabinet, Bathroom wall tiles, Indoor skylights, Art pieces, Furniture   WPC Door Frames, Lift lobbies / lift interiors"/>


<link rel="stylesheet" type="text/css" href="stylesheets/main.css" /><script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
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

<body>


<div id="wrapper">
    <div id="header">
    <div class="logo"><a href="http://www.adosurface.com"><img src="images/ado_logo.png" alt="Ado Surface"></a></div>

<div class="headright">
<ul>
<li><a href="https://www.facebook.com/pages/Ado-Surface/1523668964511210" target="_blank"><img src="images/icon/Facebook.png" alt="Facebook"></a></li>
<li><a href="#"><img src="images/icon/Google-Plus.png" alt="Google+"></a></li>
<li class="callus"><img src="images/callus.png" alt="Call Us"></li>
</ul>

<div class="topbox">
<ul>
<li><a href="brochure.pdf" target="_blank" class="btnebro">E-Brochure</a></li>
<li><a href="contact_us.html" target="_parent" >Help me for <br> Design My Home</a></li>
</ul>
</div>

</div>
</div>

<div class="clear"></div>

<div id="cssmenu">
  <ul>
    <li><a href="index.html" class="link1"><span>Home</span></a></li>
    <li class="has-sub"><a href="#" class="link2"><span>About Us</span></a>
      <ul>
        <li><a href="about_us.html"><span>Company Profile</span></a></li>
        <li><a href="about_us.html#qa"><span>Quality Assurance</span></a>
        <li><a href="about_us.html#faq"><span>FAQ</span></a>
        <li><a href="Application_Areas.html"><span>Application Area</span></a></li>
        </ul>
      </li>
       <li class="has-sub"><a href="#" class="link3"><span>Products</span></a>
      <ul>
        <li><a href="Digi_Doors.html"><span>Digi Doors</span></a></li>
        <li><a href="Digi_Stone_Dices.html"><span>Digi Stone Dices</span></a></li>
        <li><a href="wpc.html"><span>WPC</span></a>
        <li><a href="glass.html"><span>Glass</span></a>
        <li><a href="Other_Products.html"><span>Other Products</span></a></li>
        </ul>
      </li>
      <li><a href="Choose_design.php" class="link4"><span>Choose Design</span></a></li>
    <li class="has-sub"><a href="#" class="link1"><span>Gallery</span></a>
      <ul>
        <li><a href="digi_doors_gallery.php"><span>Digi Doors Gallery</span></a></li>
        <li><a href="Digi_Stone_Dices_Gallery.php"><span>Digi Stone Dices Gallery</span></a></li>
        <li><a href="digi_wpc_wall_gallery.php"><span>Digi WPC Wall Gallery</span></a></li>
        <li><a href="Live_Project_Gallery.php"><span>Live Project Gallery</span></a></li>
        </ul>
      </li>
      <li><a href="Distributor_Enquiry.html" class="link2"><span>Distributor Enquiry</span></a></li>
      <li><a href="career.php" class="link3"><span>Career</span></a></li>
    <li class="last"><a href="contact_us.html" class="link4"><span>Contact Us</span></a></li>
  </ul>
</div>
<div class="clear"></div>

<div id="contentCntr">
<div class="contentRow">

<div class="innergallery">
 
<h1>Digi Stone Dices Gallery</h1>
<?php 
 $conn=mysql_connect("166.62.8.3","adosurface","Admin@123");
	if(!$conn)
		{die("Could Not Connect".mysql_error());}
	mysql_select_db('adosurface');
	echo "<ul>";
	$res=mysql_query("select * from gallery where gallery_cat='Digi_Stone_Dices_Gallery' order by '".DECS."'",$conn);
	while($r=mysql_fetch_array($res))
	{
		echo "<li>";
		echo "<a href='photo_gallery/stone/".$r['name']."' rel='example2' title='Product Code : '".$r['product_code']."'><img src='photo_gallery/stone/".$r['name']."' alt='' /></a>";
		echo "<span>Product Code : '".$r['product_code']."'";
		echo "</li>";
	}
	echo "</ul>";
?>    
<!--<ul>
<li>
<a href="photo_gallery/doors/1.jpg" rel="example2" title="Product Code : DD001"><img src="photo_gallery/doors/1.jpg" alt="" /></a>
<span>Product Code : DD001</span>
</li>
<li>
<a href="photo_gallery/doors/2.jpg" rel="example2" title="Product Code : DD002"><img src="photo_gallery/doors/2.jpg" alt="" /></a>
<span>Product Code : DD002</span>
</li>

<li>
<a href="photo_gallery/doors/3.jpg" rel="example2" title="Product Code : DD003"><img src="photo_gallery/doors/3.jpg" alt="" /></a>
<span>Product Code : DD003</span>
</li>

<li>
<a href="photo_gallery/doors/4.jpg" rel="example2" title="Product Code : DD004"><img src="photo_gallery/doors/4.jpg" alt="" /></a>
<span>Product Code : DD004</span>
</li>

<li>
<a href="photo_gallery/doors/5.jpg" rel="example2" title="Product Code : DD005"><img src="photo_gallery/doors/5.jpg" alt="" /></a>
<span>Product Code : DD005</span>
</li>

<li>
<a href="photo_gallery/doors/6.jpg" rel="example2" title="Product Code : DD006"><img src="photo_gallery/doors/6.jpg" alt="" /></a>
<span>Product Code : DD005</span>
</li>

<li>
<a href="photo_gallery/doors/7.jpg" rel="example2" title="Product Code : DD007"><img src="photo_gallery/doors/7.jpg" alt="" /></a>
<span>Product Code : DD007</span>
</li>

<li>
<a href="photo_gallery/doors/8.jpg" rel="example2" title="Product Code : DD008"><img src="photo_gallery/doors/8.jpg" alt="" /></a>
<span>Product Code : DD008</span>
</li>

<li>
<a href="photo_gallery/doors/9.jpg" rel="example2" title="Product Code : DD009"><img src="photo_gallery/doors/9.jpg" alt="" /></a>
<span>Product Code : DD009</span>
</li>

<li>
<a href="photo_gallery/doors/10.jpg" rel="example2" title="Product Code : DD010"><img src="photo_gallery/doors/10.jpg" alt="" /></a>
<span>Product Code : DD0010</span>
</li>

<li>
<a href="photo_gallery/doors/11.jpg" rel="example2" title="Product Code : DD011"><img src="photo_gallery/doors/11.jpg" alt="" /></a>
<span>Product Code : DD011</span>
</li>

</ul>
-->

</div>
</div>



</div>
</div>
</div>

<div id="footer">
<div class="footerInner">

<div class="fleft">
<div class="fleftbox1">
<h1>Quick Links</h1>
<ul>
    <li><a href="index.html" class="link1">Home</a></li>
    <li><a href="about_us.html">Company Profile</a></li>
    <li><a href="about_us.html#qa">Quality Assurance</a>
    <li><a href="about_us.html#faq">FAQ</a>
    <li><a href="Application_Areas.html">Application Area</a></li>
    <li><a href="cc_digi_doors.html">Choose Design</a>
    <li><a href="digi_doors_gallery.php">Digi Doors Gallery</a></li>
    <li><a href="Digi_Stone_Dices_Gallery.php">Digi – Stone Dices Gallery</a></li>
    <li><a href="digi_wpc_wall_gallery.php">Digi WPC Wall Gallery</a></li>
    <li><a href="Live_Project_Gallery.php">Live Project Gallery</a></li>
    <li><a href="cc_digi_doors.html">Choose Design</a>
    <li><a href="Distributor_Enquiry.html">Distributor Enquiry</a></li>
    <li><a href="career.php">Career</a></li>
    <li><a href="contact_us.html">Contact Us</a></li>
  </ul>
</div>

<div class="fleftbox2">
       <h1>Our Products</h1>
      <ul>
        <li><a href="Digi_Doors.html">Digi Doors</a></li>
        <li><a href="Digi_Stone_Dices.html">Digi Stone Dices</a></li>
        <li><a href="wpc.html">WPC</a>
        <li><a href="glass.html">Glass</a>
        <li><a href="Other_Products.html">Other Products</a></li>
      </ul>
</div>
</div>

<div class="fright">
<div class="flogo"><img src="images/ado_logo_f.png"></div>
  <ul>
    <li><span><img src="images/icon/icon_ad.png"></span>Near Motilal Mill Compoud, Resham Mill Road, Birla Nagar, Gwalior (M.P.) INDIA</li>
    <li><span><img src="images/icon/icon_phone.png"></span>Contact No. : +91 9827017152, 8989473785</li>
    <li><span><img src="images/icon/icon_landline.png"></span>Landline : +91 751 4071970</li>
    <li><span><img src="images/icon/icon_mail.png"></span>Email : adosurface@gmail.com, ado.surface@yahoo.com</li>
    <li><span><img src="images/icon/icon_web.png"></span>Website : www.adosurface.com</li>
  </ul>
</div>

</div>
</div>
<div id="footer2">
<div class="footer2Inner">
<div class="copyright">Copyright © 2015 by Ado Surface, All Rights Reserved</div>
<div class="eguruline">Website Design & Develop by : <a href="http://www.eguruonline.in" target="_blank">e-Guru Online</a></div>


</div>
 </div>

</body>
</html>
