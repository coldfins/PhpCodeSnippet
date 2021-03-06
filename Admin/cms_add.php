﻿
<?php 
require_once ("../credential.php");
require '../vendor/autoload.php';
use Firebase\Firebase;
use Firebase\Auth\TokenGenerator;


$fb = Firebase::initialize(FIREBASE_URL, FIREBASE_SECRET);

$user = get("Users");

function get($path){
    	$fb = Firebase::initialize(FIREBASE_URL, FIREBASE_SECRET);

//or set your own implementation of the ClientInterface as second parameter of the regular constructor
$fb = new Firebase([ 'base_url' => FIREBASE_URL, 'token' => FIREBASE_SECRET ], new GuzzleHttp\Client());

$nodeGetContent = $fb->get($path);

return $nodeGetContent;
}

?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Add | CMS</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />
     <!-- Sweetalert Css -->
    <link href="plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

  <!-- JQuery DataTable Css -->
    <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
	<script src="https://www.gstatic.com/firebasejs/5.1.0/firebase.js"></script>	
	<script src="../js/credential.js"></script>


</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
		<?php include("navbar.php");?>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->

		<?php include("sidebar.php");?>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>CMS</h2>
            </div>
			
			 <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Create</h2>
                            <!--<ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>-->
                        </div>
                        <div class="body">
                            <form id="form_validation_cms"  novalidate="novalidate">
                                <div class="form-group form-float">
                                    <div class="form-line error">
                                        <input type="text" class="form-control" id="catnm" name="name" required="" style="text-transform: capitalize;" aria-required="true" aria-invalid="true">
                                        <label class="form-label">Name</label>
                                    </div>
                                </div>
                              <!--  <label id="name-error" class="error" for="name">This field is required.</label></div>-->
                                </br>
										
                                <div class="form-group form-float">
                                    <div class="form-line error">
                                        <label class="form-label">Description</label>
										</br>
										</br>
                                        <textarea name="description" id="tinymce" cols="30" rows="5" class="form-control no-resize" required="" aria-required="true" placeholder="Desciption"></textarea>
										 <input name="image" type="file" id="upload" class="hidden" onchange="">
                                    </div>

                                    <p id="desc" class="error" style="font-size: 12px;display: block;margin-top: 5px;font-weight: normal;color: #F44336;"></p>
                                </div>
                                <!--<label id="description-error" class="error" for="description">This field is required.</label></div>-->
								</br>
										
							 
                                <button class="btn btn-primary waves-effect catadd" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>
     <!-- SweetAlert Plugin Js -->
    <script src="plugins/sweetalert/sweetalert.min.js"></script>
		
	<!-- Jquery DataTable Plugin Js -->
    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>	
		 <script src="plugins/ckeditor/ckeditor.js"></script>
		 <script src="plugins/ckeditor/plugins/placeholder/plugin.js"></script>
		 
    <!-- TinyMCE -->
    <script src="plugins/tinymce/tinymce.js"></script>
		 <script src="plugins/jquery-validation/jquery.validate.js"></script>
		 <script src="js/pages/forms/form-validation.js"></script>
    <!-- Custom Js -->
    <script src="js/admin.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
	<script type="text/javascript">

        function tinymceadd() {
            
        var content = tinyMCE.get('tinymce').getContent();
            
            if(content=="")
            {
                 //alert();
                document.getElementById('desc').innerText = "Please enter Description";
                return false;
            }
            else{
               // alert(des);
                document.getElementById('desc').innerText = "";
                return true;
            }
        }
		
			function del(key){
				
			//var ref = firebase.database().ref('Users');
			var user_id = key;
			var ref = firebase.database().ref().child('/cms/' + user_id).remove();
			if(ref){
				
						alert('This Cms Deleted Sucessfully');
			}
			window.location.reload();
		}
		
		$(function () {
/*			var config = {};
			config.placeholder = 'Description'; 
CKEDITOR.replace('ckeditor',config);
    CKEDITOR.config.height = 300;*/
	
	
	//TinyMCE
    tinymce.init({
        selector: "textarea#tinymce",
        content_css : 'css/bootstrap.css',  // resolved to http://domain.mine/myLayout.css
        theme: "modern",
        height: 300,
		paste_data_images: true,
         content_css: [
        ' https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css',
        '../css/contact.css',
        '../css/gift.css',
        '../css/footercss.css',
        '../css/reg.css',
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'],
		content_js: [
		'https://www.gstatic.com/firebasejs/5.1.0/firebase.js',
		'../js/credential.js'],
        plugins: [
            'fullpage advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true,
	    file_picker_callback: function(callback, value, meta) {
			  if (meta.filetype == 'image') {
				$('#upload').trigger('click');
				$('#upload').on('change', function() {
				  var file = this.files[0];
				  var reader = new FileReader();
				  reader.onload = function(e) {
					callback(e.target.result, {
					  alt: ''
					});
				  };
				  reader.readAsDataURL(file);
				});
			  }
		},
        init_instance_callback: function (editor) {
            editor.on('keyup', function (e) {
              tinymceadd();
            });
          }
    });
    tinymce.suffix = ".min";
    tinyMCE.baseURL = 'plugins/tinymce';
	
	
	
    $('.js-basic-example').DataTable({
        responsive: true,
		//pagination: true,
    });

    //Exportable table
    $('.js-exportable').DataTable({
        dom: 'Bfrtip',
        responsive: true,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    $.validator.addMethod("regex", function(value, element, regexpr) {          
                 return regexpr.test(value);
               }, "Please enter Only characters"); 

	$('#form_validation_cms').validate({
                rules: {
                    'name': {
                        required: true,
                        minlength: 6,
                        maxlength: 50,
                        regex:  /^[a-zA-Z]+$/
                    }
                },
                messages: {
                  name: {
                    required:"Please enter your CMS Name",
                    minlength: "Enter name must be at least 6 characters long",
                    maxlength: "Enter name not more then 50 characters."
                    },
                  
                  description:"Please enter Description"
                    
                  
                },
                highlight: function (input) {
                    $(input).parents('.form-line').addClass('error');
                },
                unhighlight: function (input) {
                    $(input).parents('.form-line').removeClass('error');
                },
                errorPlacement: function (error, element) {
                    $(element).parents('.form-group').append(error);
                },
                submitHandler: function(form) {

            }
        });
	$(".catadd").click(function(){
        var temp=$('#form_validation_cms').valid();
          var chk=tinymceadd();
        if(temp==true){
      
       
                  
               
         
                
                if(chk==true){
        		tinyMCE.triggerSave();
        		 var description = $('#tinymce').val();
        		 var catnm = $("#catnm").val();
        		
        		var firebaseRef = firebase.database().ref();

        		var cmsRef = firebaseRef.child("cms");

        		var pushedCatRef = cmsRef.push();

        		// Get the unique key generated by push()
        		var cmsId = pushedCatRef.key;

        		pushedCatRef.set({
        		   page_name: catnm,
        			page_description: description,
        			page_slug:catnm,
        			page_id: cmsId,
        			//childcategory:'',
        			//bundle:'',
        			//session:'',
        		});
                    if(pushedCatRef){
               
                       swal({
                                title: "Inserted!",
                                text: "CMS has been Inserted.",
                                html:true,
                                type: "success",
                                showCancelButton: false,
                                confirmButtonColor: "#86CCEB",
                                confirmButtonText: "OK",
                                closeOnConfirm: false
                            }, function () {
                                window.setTimeout(function() {
                                
                                  window.location.href = "cms_list.php";
                                }, 1000);
                            });
                       
                    
                    }
        		//alert('hi');
        		//alert("CMS Add Sucess.!");
                }
              
        
		
            }

	});
	
	
});
	</script>
</body>

</html>