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
<script src="js/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/jquery.validate.js" type="text/javascript"></script>
<script src="script.js"></script>
<style>
.cls1{color:red;}
</style>
<script>
function fun1()
{
	$("#form1").validate({errorClass:'cls1'})
}
</script>

<body onload="fun1()">>


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
		<h1>Career Form</h1>
  			<div class="distri">
    			<h4>Thank you for your interest in a career with ADO Surface.</h4>
				  <p>&nbsp;</p>
                  
                  <?php
if ($_SERVER['REQUEST_METHOD']=="POST"){

   // Set the "To" email address
   $to="ajay.dhamaniya@gmail.com";

	//Subject of the mail
   $subject="Enquiry Form";

   // Get the sender's name and email address plug them a variable to be used later
   $from = stripslashes($_POST['name'])."<".stripslashes($_POST['email']).">"."<".stripslashes($_POST['phone']).">"."<".stripslashes($_POST['address']).">"."<".stripslashes($_POST['descri']).">";
	
	// Check for empty fields
   if(empty($_POST['name'])  || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['address']) || empty($_POST['descri']))
	{
		$errors .= "\n Error: all fields are required";
	}
	
	// Get all the values from input
	$name = $_POST['name'];
	$email_address = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$descri = $_POST['descri'];

	// Check the email address
	/*if (!eregi(	"^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email_address))
	{
		$errors .= "\n Error: Invalid email address";
	}
*/
   // Now Generate a random string to be used as the boundary marker
   $mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";

   // Now Store the file information to a variables for easier access
   $tmp_name = $_FILES['filename']['tmp_name'];
   $type = $_FILES['filename']['type'];
   $file_name = $_FILES['filename']['name'];
   $size = $_FILES['filename']['size'];

   // Now here we setting up the message of the mail
   $message = "\n\n Name: $name \n\n Email: $email_address \n\nPhone: $phone \n\nAddress: $address \n\ndescription: $descri \n\nInterest: $interest \n\nHere is your file: $file_name";

   // Check if the upload succeded, the file will exist
   if (file_exists($tmp_name)){

      // Check to make sure that it is an uploaded file and not a system file
      if(is_uploaded_file($tmp_name)){

         // Now Open the file for a binary read
         $file = fopen($tmp_name,'rb');

         // Now read the file content into a variable
         $data = fread($file,filesize($tmp_name));

         // close the file
         fclose($file);

         // Now we need to encode it and split it into acceptable length lines
         $data = chunk_split(base64_encode($data));
     }

      // Now we'll build the message headers
      $headers = "From: $from\r\n" .
         "MIME-Version: 1.0\r\n" .
         "Content-Type: multipart/mixed;\r\n" .
         " boundary=\"{$mime_boundary}\"";

      // Next, we'll build the message body note that we insert two dashes in front of the  MIME boundary when we use it
      $message = "This is a multi-part message in MIME format.\n\n" .
         "--{$mime_boundary}\n" .
         "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
         "Content-Transfer-Encoding: 7bit\n\n" .
         $message . "\n\n";

      // Now we'll insert a boundary to indicate we're starting the attachment we have to specify the content type, file name, and disposition as an attachment, then add the file content and set another boundary to indicate that the end of the file has been reached
      $message .= "--{$mime_boundary}\n" .
         "Content-Type: {$type};\n" .
         " name=\"{$file_name}\"\n" .
         //"Content-Disposition: attachment;\n" .
         //" filename=\"{$fileatt_name}\"\n" .
         "Content-Transfer-Encoding: base64\n\n" .
         $data . "\n\n" .
         "--{$mime_boundary}--\n";

      // Thats all.. Now we need to send this mail... :)
      if (@mail($to, $subject, $message, $headers))
	  {
         echo "<div><center><h4 style='color:#d40000; font-style:normal'>"."Thank You for submitting your information..." . " <b>$name </b>" . "<br> Our representative will get in touch with you shortly..."."</h4></center><br><br></div>";
	  }else
	  {
         ?>
         <div><center>
           <h1>Error !! Unable to send Mail..</h1></center></div>
         <?php
	  }
   }
}
?>
    
				<div class="distriform">

					<form id="form1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">

						<div class="frow">
						<div class="frowleft">Candidate Name: <font class="redcolor">*</font></div>
						<div class="frowright"><input type="text" name="name" id="name" class="required"></div>
						</div>

						<div class="frow">
						<div class="frowleft">Telephone / Mobile: <font class="redcolor">*</font></div>
						<div class="frowright"><input type="text" name="phone" id="phone" class="required number"></div>
						</div>

						<div class="frow">
						<div class="frowleft">E-mail Id <font class="redcolor">*</font></div>
						<div class="frowright"><input type="text" name="email" id="email" class="email required"></div>
						</div>

						<div class="frow">
						<div class="frowleft">Address: <font class="redcolor">*</font></div>
						<div class="frowright"><input type="text" name="address" id="address" class="required"></div>
						</div>

						<div class="frow">
						<div class="frowleft">Upload Your CV: <font class="redcolor">*</font></div>
						<div class="frowright"><input type="file" name="filename" id="tele"></div>
						</div>

						<div class="frow">
						<div class="frowleft">Area of Interest: <font class="redcolor">*</font></div>
						<div class="frowright">
						  <label for="interest"></label>
						  <select name="interest" id="interest" class="Selection Required">
						    <option>Select any Area of Interest</option>
						    <option>Sales &amp; Marking </option>
						    <option>Back Office</option>
						    <option>Helper</option>
						    <option>Installer</option>
						    <option>Account</option>
						    <option>Operator</option>
							  </select></div>
						</div>

						<div class="frow">
						<div class="frowleft">Brief Description: <font class="redcolor">*</font></div>
						<div class="frowright">
							  <textarea name="descri" id="descri" class="required"></textarea>
						</div>
						</div>
						<div class="frow">
						  <div class="frowleft">&nbsp;</div>
							<div class="frowright">
								<input name="Submit" type="submit" value="Submit" class="formbtn"><input name="Reset" type="reset" value="Reset" class="readmore">
							</div>
						</div>
				</form>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
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