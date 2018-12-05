<?php
	define('AWS_KEY', 'AKIAJJE4TEFILP6ZCSVQ');
	define('AWS_SECRET', 'penqkrI6rOLCZeKmsG4lYENPHf6yQcZZYCBuRUtn');
	// Replace us-west-2 with the AWS Region you're using for Amazon SES.
	define('REGION','us-east-2'); 
	//define('REGION','us-west-2');


	require '../vendor/autoload.php';
	
	use Aws\S3\S3Client;
	use Aws\S3\Exception\S3Exception;

	
	$bucket = 'divethruapp';
	//$bucket = 'divethruweb2';
	$keyname = $_POST['keyName'].'/'.$_POST["file"];

	$s3 = new S3Client([
		'version' => 'latest',
		'region'  => REGION,
		 'credentials' => array(
		'key'       => AWS_KEY,
		'secret'    => AWS_SECRET,
	  )
	]);


// Delete an object from the bucket.
try{
	$result = $s3->deleteObject([
		'Bucket' => $bucket,
		'Key'    => $keyname
	]);

	print_r($result);
} catch (S3Exception $e) {
    echo $e->getMessage() . "\n";
}


$target_dir = "uploads/meditation/";
//$target_file = $target_dir . strtolower(str_replace("-","",str_replace(" ","",basename( $_FILES["cat"]["name"]))));
$file = $_POST["file"];
$target_file = $target_dir . str_replace(array('(',')'),'',strtolower(str_replace("-","",str_replace(" ","",basename( $file)))));

if($file){
	unlink($target_file);
	echo "File Deleted";
}else{
	echo "File Path Not Found";
}


?>