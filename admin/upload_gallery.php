<?php
$gallery_cat=$_POST['gallery_cat'];
if($gallery_cat=='Digi_Doors_Gallery')
{
	//$target_dir = "uploads/";
	$target_dir = "../photo_gallery/doors/";
	$target_dir = $target_dir . basename( $_FILES["uploadGallery"]["name"]);
	$uploadOk=1;

	// Check if file already exists
	if (file_exists($target_dir . basename($_FILES["uploadGallery"]["name"]))) {
    	echo "Sorry, file already exists.";
	    $uploadOk = 0;
	}
}
else if($gallery_cat=='Digi_Stone_Dices_Gallery')
{
	//$target_dir = "uploads/";
	$target_dir = "../photo_gallery/stone/";
	$target_dir = $target_dir . basename( $_FILES["uploadGallery"]["name"]);
	$uploadOk=1;

	// Check if file already exists
	if (file_exists($target_dir . basename($_FILES["uploadGallery"]["name"]))) {
    	echo "Sorry, file already exists.";
	    $uploadOk = 0;
	}
}
else if($gallery_cat=='Digi_WPC_Wall_Gallery')
{
	//$target_dir = "uploads/";
	$target_dir = "../photo_gallery/wpc_wall/";
	$target_dir = $target_dir . basename( $_FILES["uploadGallery"]["name"]);
	$uploadOk=1;

	// Check if file already exists
	if (file_exists($target_dir . basename($_FILES["uploadGallery"]["name"]))) {
    	echo "Sorry, file already exists.";
	    $uploadOk = 0;
	}
}
else
{
	//$target_dir = "uploads/";
	$target_dir = "../photo_gallery/live_project/";
	$target_dir = $target_dir . basename( $_FILES["uploadGallery"]["name"]);
	$uploadOk=1;

	// Check if file already exists
	if (file_exists($target_dir . basename($_FILES["uploadGallery"]["name"]))) {
    	echo "Sorry, file already exists.";
	    $uploadOk = 0;
	}
}


	//File Uploading in DataBase
	// Check if a file has been uploaded
	if(isset($_FILES['uploadGallery'])) {
    	// Make sure the file was sent without errors
	    if($_FILES['uploadGallery']['error'] == 0) {
    	    // Connect to the database
        	$dbLink = new mysqli('166.62.8.3', 'adosurface', 'Admin@123', 'adosurface');
	        if(mysqli_connect_errno()) {
    	        die("MySQL connection failed: ". mysqli_connect_error());
        }
 
        // Gather all required data
        $name = $dbLink->real_escape_string($_FILES['uploadGallery']['name']);
        $mime = $dbLink->real_escape_string($_FILES['uploadGallery']['type']);
        $data = $dbLink->real_escape_string(file_get_contents($_FILES  ['uploadGallery']['tmp_name']));
        $size = intval($_FILES['uploadGallery']['size']);
		$gallery_cat=$_POST['gallery_cat'];
		$product_code=$_POST['product_code'];
 
        // Create the SQL query
        $query = "
            INSERT INTO `gallery` (
                `gallery_cat`,`product_code`,`name`, `mime`, `size`, `data`, `created`
            )
            VALUES (
                '{$gallery_cat}','{$product_code}','{$name}', '{$mime}', {$size}, '{$data}', NOW()
            )";
 
        // Execute the query
        $result = $dbLink->query($query);
 
        // Check if it was successfull
        if($result) {
            $uploadDBOk=1;

			//echo 'Success! Your file was successfully added!';
        }
        else {
		$uploadDBOk=0;
            //echo 'Error! Failed to insert the file'."<pre>{$dbLink->error}</pre>";
        }
    }
    else {
        echo 'An error accured while the file was being uploaded. '
           . 'Error code: '. intval($_FILES['uploadGallery']['error']);
    }
 
    // Close the mysql connection
   // $dbLink->close();
}
else {
    echo 'Error! A file was not sent!';
	
}
 





// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0 or $uploadDBOk==0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else { 
    if (move_uploaded_file($_FILES["uploadGallery"]["tmp_name"], $target_dir)) {
        echo "The file ". basename( $_FILES["uploadGallery"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


// Echo a link back to the main page
echo '<p>Click <a href="upload_gallery.html">here</a> to go back</p>';

?>
