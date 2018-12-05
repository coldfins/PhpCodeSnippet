<?php

if(!empty($_FILES["cat"]["name"]) ){
$target_dir = "category/";
//$target_file = $target_dir . strtolower(str_replace("-","",str_replace(" ","",basename( $_FILES["cat"]["name"]))));
$target_file = $target_dir . str_replace(array('(',')'),'',strtolower(str_replace("-","",str_replace(" ","",basename( $_FILES["cat"]["name"])))));
$name = strtolower(str_replace("-","",str_replace(" ","",basename( $_FILES["cat"]["name"]))));
$filepath = $_FILES['cat']['tmp_name'];
//return;
}else if(!empty($_FILES["subcat"]["name"])){
$target_dir = "subcategory/";	
//$target_file = $target_dir . strtolower(str_replace("-","",str_replace(" ","",basename( $_FILES["subcat"]["name"]))));
$target_file = $target_dir . str_replace(array('(',')'),'',strtolower(str_replace("-","",str_replace(" ","",basename( $_FILES["subcat"]["name"])))));
$name = strtolower(str_replace("-","",str_replace(" ","",basename( $_FILES["subcat"]["name"]))));
$filepath = $_FILES['subcat']['tmp_name'];

}else if(!empty($_FILES["bundle"]["name"])){
$target_dir = "bundle/";	
//$target_file = $target_dir . strtolower(str_replace("-","",str_replace(" ","",basename( $_FILES["bundle"]["name"]))));
$target_file = $target_dir . str_replace(array('(',')'),'',strtolower(str_replace("-","",str_replace(" ","",basename( $_FILES["bundle"]["name"])))));
$name = strtolower(str_replace("-","",str_replace(" ","",basename( $_FILES["bundle"]["name"]))));
$filepath = $_FILES['bundle']['tmp_name'];
}else if(!empty($_FILES["session"]["name"]) ){
$target_dir = "session/";	
//$target_file = $target_dir . strtolower(str_replace("-","",str_replace(" ","",basename( $_FILES["session"]["name"]))));
$target_file = $target_dir . str_replace(array('(',')'),'',strtolower(str_replace("-","",str_replace(" ","",basename( $_FILES["session"]["name"])))));
$name = strtolower(str_replace("-","",str_replace(" ","",basename( $_FILES["session"]["name"]))));
$filepath = $_FILES['session']['tmp_name'];
}else if(!empty($_FILES["meditation"]["name"]) ){
$target_dir = "meditation/";	
//$target_file = $target_dir . strtolower(str_replace("-","",str_replace(" ","",basename( $_FILES["meditation"]["name"]))));
$target_file = $target_dir . str_replace(array('(',')'),'',strtolower(str_replace("-","",str_replace(" ","",basename( $_FILES["meditation"]["name"])))));
$name = strtolower(str_replace("-","",str_replace(" ","",basename( $_FILES["meditation"]["name"]))));
$filepath = $_FILES['meditation']['tmp_name'];
}
else if(!empty($_FILES["userprofile"]["name"])){
$target_dir = "profile_image/";	
//$target_file = $target_dir . strtolower(str_replace("-","",str_replace(" ","",basename( $_FILES["subcat"]["name"]))));
$name = strtolower(str_replace("-","",str_replace(" ","",basename( $_FILES["userprofile"]["name"]))));
$target_file = $target_dir . str_replace(array('(',')'),'',strtolower(str_replace("-","",str_replace(" ","",basename( $_FILES["userprofile"]["name"])))));
$filepath = $_FILES['userfile']['tmp_name'];

}else if(!empty($_FILES["quote"]["name"])){
$target_dir = "quote/";	
//$target_file = $target_dir . strtolower(str_replace("-","",str_replace(" ","",basename( $_FILES["subcat"]["name"]))));
$target_file = $target_dir . str_replace(array('(',')'),'',strtolower(str_replace("-","",str_replace(" ","",basename( $_FILES["quote"]["name"])))));
$name = strtolower(str_replace("-","",str_replace(" ","",basename( $_FILES["quote"]["name"]))));
$filepath = $_FILES['quote']['tmp_name'];
}
//$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

define('AWS_KEY', 'AKIAJJE4TEFILP6ZCSVQ');
define('AWS_SECRET', 'penqkrI6rOLCZeKmsG4lYENPHf6yQcZZYCBuRUtn');
// Replace us-west-2 with the AWS Region you're using for Amazon SES.
define('REGION','us-east-2'); 

define('SUBJECT','Amazon SES test (AWS SDK for PHP)');

define('HTMLBODY','<div>TEST AWS SES with New credentials</div>');
define('TEXTBODY','This email was send with Amazon SES using the AWS SDK for PHP.');
define('CHARSET','UTF-8');

require '../vendor/autoload.php';

use Aws\Common\Exception\MultipartUploadException;
use Aws\S3\MultipartUploader;
use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;


$bucket = 'divethruapp';
$keyname = $target_dir.$name;
// $filepath should be absolute path to a file on disk                      
//$filepath = $target_file;

// Instantiate the client.
/*$s3 = S3Client::factory(array(
    'version'=> 'latest',     
    'region' => REGION,
    'credentials' => array(
    'key'       => AWS_KEY,
    'secret'    => AWS_SECRET,
  ),
    'http'    => [
        'verify' => false
    ]
));

try {
    // Upload data.
    $result = $s3->putObject(array(
        'Bucket' => $bucket,
        'Key'    => $keyname,
		'Content-Type' => 'audio/*',
        'SourceFile'   => $filepath,
        'ACL'    => 'public-read'
    ));



    // Print the URL to the object.
    echo $result['ObjectURL'] . "\n";
} catch (S3Exception $e) {
    echo $e->getMessage() . "\n";
}*/
 
 
 $s3 = new S3Client([
    'version' => 'latest',
    'region'  => REGION,
	 'credentials' => array(
    'key'       => AWS_KEY,
    'secret'    => AWS_SECRET,
  ),
    'http'    => [
        'verify' => false
    ],
  'use_accelerate_endpoint' => True
]);

// Prepare the upload parameters.
$uploader = new MultipartUploader($s3, $filepath, [
    'bucket' => $bucket,
    'key'    => $keyname
	
]);

// Perform the upload.
try {
    $result = $uploader->upload();
    echo $result['ObjectURL'];
} catch (MultipartUploadException $e) {
    echo $e->getMessage() . PHP_EOL;
} 
 
 
/*require_once('MP3.php');
//print_r($_FILES["meditation"]["size"]);
//return;
if(!empty($_FILES["cat"]["name"]) ){
$target_dir = "uploads/category/";
$target_file = $target_dir . basename($_FILES["cat"]["name"]);
	
//return;
}else if(!empty($_FILES["subcat"]["name"])){
$target_dir = "uploads/subcategory/";	
$target_file = $target_dir . basename($_FILES["subcat"]["name"]);
}else if(!empty($_FILES["bundle"]["name"])){
$target_dir = "uploads/bundle/";	
$target_file = $target_dir . basename($_FILES["bundle"]["name"]);
}else if(!empty($_FILES["session"]["name"]) ){
$target_dir = "uploads/session/";	
$target_file = $target_dir . basename($_FILES["session"]["name"]);
}else if(!empty($_FILES["meditation"]["name"]) ){
$target_dir = "uploads/meditation/";	
$target_file = $target_dir . basename($_FILES["meditation"]["name"]);
}else if(!empty($_FILES["quote"]["name"]) ){
$target_dir = "uploads/quote/";	
$target_file = $target_dir . basename($_FILES["quote"]["name"]);
}else if(!empty($_FILES["slide"]["name"]) ){
$target_dir = "uploads/slide/";	
$target_file = $target_dir . basename($_FILES["slide"]["name"]);
}
//echo $target_file;

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
//if(isset($_POST["submit"])) {
	if(!empty($_FILES["cat"]["name"]) ){
    $check = getimagesize($_FILES["cat"]["tmp_name"]);
	}else if(!empty($_FILES["subcat"]["name"])){
		$check = getimagesize($_FILES["subcat"]["tmp_name"]);
	}else if(!empty($_FILES["bundle"]["name"])){
		$check = getimagesize($_FILES["bundle"]["tmp_name"]);
	}else if(!empty($_FILES["session"]["name"]) ){
		$check = getimagesize($_FILES["session"]["tmp_name"]);
	}else if(!empty($_FILES["meditation"]["name"]) ){
		$check = $_FILES["meditation"]["size"];
	}else if(!empty($_FILES["quote"]["name"]) ){
		$check = $_FILES["quote"]["size"];
	}else if(!empty($_FILES["slide"]["name"]) ){
		$check = $_FILES["slide"]["size"];
	}

    if($check !== false) {
       // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
      //echo "File is not an image.";
        $uploadOk = 0;
    }
//}

// Check if file already exists
/*if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}*/

// Check file size
/*if($_FILES["cat"]["size"] > 500000 ){
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
	}else if($_FILES["subcat"]["size"] > 500000){
		 echo "Sorry, your file is too large.";
    $uploadOk = 0;
	}else if($_FILES["bundle"]["size"] > 500000){
		 echo "Sorry, your file is too large.";
    $uploadOk = 0;
	}else if($_FILES["session"]["size"] > 500000 ){
	 echo "Sorry, your file is too large.";
    $uploadOk = 0;
	}*/


// Allow certain file formats
/*if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}*/
// Check if $uploadOk is set to 0 by an error
/*if ($uploadOk == 0) {
    return "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
	if(!empty($_FILES["cat"]["name"]) ){
		if (move_uploaded_file($_FILES["cat"]["tmp_name"], $target_file)) {
			echo  $target_dir.basename( $_FILES["cat"]["name"]);
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}else if(!empty($_FILES["subcat"]["name"]) ){
	
		if (move_uploaded_file($_FILES["subcat"]["tmp_name"], $target_file)) {
			echo $target_dir.basename( $_FILES["subcat"]["name"]);
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}else if(!empty($_FILES["bundle"]["name"]) ){
		if (move_uploaded_file($_FILES["bundle"]["tmp_name"], $target_file)) {
			echo $target_dir.basename( $_FILES["bundle"]["name"]);
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}else if(!empty($_FILES["session"]["name"]) ){
		
		if (move_uploaded_file($_FILES["session"]["tmp_name"], $target_file)) {
			echo $target_dir.basename( $_FILES["session"]["name"]);
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}else if(!empty($_FILES["meditation"]["name"]) ){
		//echo basename( $_FILES["meditation"]["name"]);
		if (move_uploaded_file($_FILES["meditation"]["tmp_name"], $target_file)) {
			echo $target_dir.basename( $_FILES["meditation"]["name"]);
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}else if(!empty($_FILES["quote"]["name"]) ){
		//echo basename( $_FILES["meditation"]["name"]);
		if (move_uploaded_file($_FILES["quote"]["tmp_name"], $target_file)) {
			echo $target_dir.basename( $_FILES["quote"]["name"]);
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}else if(!empty($_FILES["slide"]["name"]) ){
		//echo basename( $_FILES["meditation"]["name"]);
		if (move_uploaded_file($_FILES["slide"]["tmp_name"], $target_file)) {
			echo $target_dir.basename( $_FILES["slide"]["name"]);
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
}
*/
?>


