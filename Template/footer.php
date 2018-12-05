<?php 
require_once("credential.php");
require '../vendor/autoload.php';
use Firebase\Firebase;
use Firebase\Auth\TokenGenerator;

 
$fb = Firebase::initialize(FIREBASE_URL, FIREBASE_SECRET);

$cms = get("cms");


function get($path){
    	$fb = Firebase::initialize(FIREBASE_URL, FIREBASE_SECRET);

//or set your own implementation of the ClientInterface as second parameter of the regular constructor
$fb = new Firebase([ 'base_url' => FIREBASE_URL, 'token' => FIREBASE_SECRET ], new GuzzleHttp\Client());

$nodeGetContent = $fb->get($path);

return $nodeGetContent;
}
?>
<link href="css/divecorporat.css" rel="stylesheet" type="text/css">
<div class="container-fluid footer-bg">
     <div class="container">
          <div class="row justify-content-center text-center text-md-left">
               
                <div class="col-md-6 col-lg-3">
                      <h6>COMMUNITY</h6>
                      <hr class="footer-hr">
                      <ul>
                         <li><a href="http://divethru.com/blog/" target="_blank">Blog</a></li>
                         <li><a href="https://www.facebook.com/DiveThru-2375273575879029/?ref=br_rs">Facebook Group</a></li>
                      </ul>
                 </div>
                
                <div class="col-md-6 col-lg-3">
                     <h6>DIVE THRU</h6>
                     <hr class="footer-hr">
                     <ul>
                         <li><a href="registration.php">Join</a></li>
                         <li><a href="WhyDiveThru.php">Why Dive Thru</a></li>
                         <li><a href="javascript:void(0)" data-toggle="modal" data-target="#divecorporateModal">Dive Thru For Corporate</a></li>
                         <li><a href="DiveThruKids.php">Dive Thru For Youth</a></li>
                         <li><a href="gift.php">Gift</a></li>
                      </ul>
                </div>
                
                <div class="col-md-6 col-lg-3">
                     <h6>ABOUT</h6>
                     <hr class="footer-hr">
                     <ul>
                         <li><a href="about.php">About Dive Thru</a></li>
                         <li><a href="pressandcollaboration.php">Press</a></li>
                      </ul>
                </div>
                
                <div class="col-md-6 col-lg-3">
                     <h6>HELP</h6>
                     <hr class="footer-hr">
                     <ul>
                         <li><a href="support.php">Support</a></li>
                         <li><a href="contact.php">Contact Us</a></li>
                         <li><a href="termsandconditions.php">Terms & Conditions</a></li>
                         <li><a href="privacypolicy.php">Privacy</a></li>
                      </ul>
                </div>
          
          </div>
     </div>
</div>




<!--/*FOOTER2*/ -->

<div class="container-fluid f1-bg pt-3">
                     <div class="container"> 
                          <div class="row justify-content-md-end justify-content-center">   
                             <ul>
                                <li class="mx-1"><a href="https://www.facebook.com/DiveThru-2375273575879029/?ref=br_rs"><i class="fa fa-facebook"></i></a></li>
                                <li class="mx-1"><a href="https://twitter.com/divethru_?lang=en"><i class="fa fa-twitter"></i></a></li>
                                <li class="mx-1"><a href="https://www.instagram.com/divethru_/"><i class="fa fa-instagram"></i></a></li>
                                <li class="mx-1"><a href="#"><i class="fa fa-apple"></i></a></li>
                                <li class="mx-1"><a href="#"><i class="fa fa-android"></i></a></li>
                             </ul>
                          </div>   
                    </div>
                               <div class="clearfix"></div>
                </div>



<div class="modal fade" id="divecorporateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content my-modal">
      
      <div class="modal-body px-md-5">
		<?php
		
			foreach ($cms as $value) 
			 { 

			 if($value['page_slug']=="DiveThruforCorporate")
			  {
				  echo str_replace("<p>&nbsp;</p>","",$value['page_description']);
				  
					//echo str_replace('<div class="carousel-inner">','',$str);
			  } 
			 
			

			} 
		?>
      </div>
      
    </div>
  </div>
</div>
