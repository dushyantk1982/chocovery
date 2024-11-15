<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>

<body>


	
	<img src="companylogos/images/dulogo1.jpg" alt="rotating image" name="cmatrotator" width="90" height="60" id="cmatrotator" />

<!-- Images for Rotation-->
<script type="text/javascript">
	(function() {
	var rotator = document.getElementById('cmatrotator');
	var imageDir = 'companylogos/images/';
	var delayInSeconds = 1;
	var images = ['abc logo1.jpg','applelogo1.jpg','dulogo1.jpg','abc logo1.jpg','applelogo1.jpg','dulogo1.jpg'];
	var num = 0;
	var changeImage = function() {
	var len = images.length;
	rotator.src = imageDir + images[num++];
	if (num == len) {
	num = 0;
	}
	};
	setInterval(changeImage, delayInSeconds * 3000);
	})();
    </script>

</body>
</html>
