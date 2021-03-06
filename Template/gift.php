<?php
define('FIREBASE_URL','https://divethru-71c56.firebaseio.com/');
define('FIREBASE_SECRET','k7AS9py1rGygBlLjQAvtfSroYaFCwpe0KzdrDAjQ');
require '../vendor/autoload.php';
use Firebase\Firebase;
use Firebase\Auth\TokenGenerator;
 ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Gift</title>
	
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/gift.css" rel="stylesheet" type="text/css">
    <link href="css/footercss.css" rel="stylesheet" type="text/css">
    <link href="css/reg.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="css/dashheader.css">
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.9.0/firebase.js"></script>
<script src="./js/credential.js"></script>

<script>
    $(document).ready(function(){

    var user=window.localStorage.getItem('user');
    if(user!=null)
    {
    //alert(user);
      $( "#result" ).load( "Template/dashbordHeader.php", function() {
        //alert( "Load was performed." );

        $(".page-loader-wrapper").fadeOut();
      });
        
    }
    else{
        $( "#result" ).load( "Template/header.php", function() {
        //alert( "Load was performed1 ." );
        $(".page-loader-wrapper").fadeOut();
      });
      
    }
  });

  </script>
</head>
	
	

<body>
	<?php //include 'header.php'; ?>
	 <div id="result"></div>
	<div class="container-fluid" style="padding: 80px 0;">
       <div class="container heading text-center" style="margin-top: 8%;">
	
		   <h2>UNLOCK THE FULL<br>DIVETHRU EXPERIENCE</h2>
		  
		   
		   <div class="row pt-5 justify-content-center">
			   
			    <div class="col-sm-4 col-10 px-0">
			       <div class="box1">
					   <h4>M O N T H L Y</h4>
					   <h2>$ 14.99</h2>
					   <p>PAID MONTH</p>
					   <a href="#" class="btn get-button">GET  AS A GIFT</a>
				   </div>
			   </div>
		   
		       <div class="col-sm-4 col-10 px-0">
			       <div class="box2">
				       <h4>Y E A R L Y</h4>
					   <h2>$ 7.99</h2>
					   <p>PAID YEARLY</p>
					   <a href="#" class="btn get-button">GET  AS A GIFT</a>
				   </div>
			   </div>
			   
			    <div class="col-sm-4 col-10 px-0">
			       <div class="box3">
					   <h4>L I F E &nbsp; T I M E</h4>
					   <h2>$ 345</h2>
					   <p>PAID ONCE</p>
					   <a href="#" class="btn get-button">GET  AS A GIFT</a>
				   </div>
			   </div>
		   
		   </div>
		       
	</div>		   
</div>
<?php include 'footer.php'; ?>
<!-- <script
  src="https://code.jquery.com/jquery-3.3.1.slim.js"
  integrity="sha256-fNXJFIlca05BIO2Y5zh1xrShK3ME+/lYZ0j+ChxX2DA="
  crossorigin="anonymous"></script> -->
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
</body>
</html>
