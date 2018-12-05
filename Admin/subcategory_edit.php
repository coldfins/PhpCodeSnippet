﻿
<?php

require '../credential.php';
require '../vendor/autoload.php';
use Firebase\Firebase;
use Firebase\Auth\TokenGenerator;
$id = $_POST["id"];
$cat = $_POST["cat"];
//echo $id;
$fb = Firebase::initialize(FIREBASE_URL, FIREBASE_SECRET);

$sub = getsingle("Category/".$cat."/SubCategory/".$id);
$category = get("Category");

function get($path){
        $fb = Firebase::initialize(FIREBASE_URL, FIREBASE_SECRET);

//or set your own implementation of the ClientInterface as second parameter of the regular constructor
$fb = new Firebase([ 'base_url' => FIREBASE_URL, 'token' => FIREBASE_SECRET ], new GuzzleHttp\Client());

$nodeGetContent = $fb->get($path);

return $nodeGetContent;
}

function getsingle($path){
    //echo $path;
    //die;
        $fb = Firebase::initialize(FIREBASE_URL, FIREBASE_SECRET);

//or set your own implementation of the ClientInterface as second parameter of the regular constructor
$fb = new Firebase([ 'base_url' => FIREBASE_URL, 'token' => FIREBASE_SECRET ], new GuzzleHttp\Client());

$nodeGetContent = $fb->get($path);

return $nodeGetContent;

}
/*
print_r($sub);
die;*/
/*$ele = '';
foreach($session['session_audio'] as $s){
//echo $s;
    
    
    $whatIWant = substr($s, strpos($s, "F") + 1);   
    $a[] = substr($whatIWant,0 , strpos($whatIWant,"?"));
}*/
//print_r($sub);
//die;
//$mp3 = implode($a,',');
//echo $mp3;
//die;
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Blank Page | Bootstrap Based Admin Template - Material Design</title>
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
    <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <!-- Sweetalert Css -->
    <link href="plugins/sweetalert/sweetalert.css" rel="stylesheet" />
    <!-- Bootstrap Tags Input Plugin Js -->
    <link href="plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
  <!-- JQuery DataTable Css -->
    <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
    

    <script src="https://www.gstatic.com/firebasejs/4.9.0/firebase.js"></script>
      <script type="text/javascript" src="../js/credential.js"></script>
       <script type="text/javascript" src="js/check_login.js"></script>
</head>
<style type="text/css">
    .flex-style{
 display: flex;
}

.input-file{
 opacity: 0;
 margin-left: -40px;
 width: 40px;
 height: 45px;
}

.icon{
 width: 48px;
 height: 45px;
 background:url(images/upload-black.png); 
}
</style>
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
                <h2>Edit</h2>
            </div>
            
 <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>SubCategory</h2>
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
                            <form id="form_validation_subcategory"  novalidate="novalidate">
                                <div class="form-group form-float">
                                    <div class="form-line error">
                                       <input type="hidden" id="cname" value="<?php echo $cat;?>">
                                       <input type="hidden" id="subid" value="<?php echo $sub['subcategory_id'];?>">
                                       <input type="hidden" id="olds" value="<?php echo $sub['subcategory_name'];?>">
                                        <input type="text" class="form-control" id="subcatname" name="name" value="<?php echo $sub['subcategory_name'];?>" required="" aria-required="true" aria-invalid="true">
                                        <label class="form-label">Name</label>
                                    </div>
                              <!--  <label id="name-error" class="error" for="name">This field is required.</label>-->
                               </div>
                                        
                                <div class="form-group form-float">
                                    <div class="form-line error">
                                        <label class="form-label">Description</label>
                                        </br>
                                        </br>
                                        <textarea name="description" id="ckeditor" cols="30" rows="5" class="form-control no-resize" required="" aria-required="true" placeholder="Desciption"><?php echo $sub['subcategory_description'];?></textarea>
                                    </div>
                                <!--<label id="description-error" class="error" for="description">This field is required.</label>-->
                                </div>
                                
                                <div class="form-group form-float">
                                    <div class="form-line error">
                                        <label class="form-label">category</label>
                                        <br>
                                        <select id="pcat" class="form-control show-tick">
                                        <?php
                                        if($category){
                                            
                                            foreach($category as $ky => $c){
                                                if($sub['parentcategory'] == $c['category_name']){
                                                    
                                                    echo '<option value="'.$ky.'" selected>'.$c["category_name"].'</option>';
                                                }else if(($c['session_subcription_type'] != "Free") || $c['Session'] == "" && $c["Bundle"] == ""){
                                                    
                                                echo '<option value="'.$ky.'">'.$c["category_name"].'</option>';
                                                }
                                            }
                                        }else{
                                            echo "<option value='0'>Nothing selcted</option>";
                                        }
                                        ?>
                                        </select>
                                        
                                    </div>
                                </div>
                                <!--<label id="description-error" class="error" for="description">This field is required.</label></div>-->
                                
                                
                                
                               <div class="form-group form-float">
                                    <div class="form-line error">
                                    <label class="form-label">Image (1920 X 1080)</label>
                                    </br>
                                    </br>
                                     <!--  <form id="my-awesome-dropzone" action="/upload" class="dropzone">  
                                            <div class="dropzone-previews"></div>
                                            <div class="fallback"> <!-- this is the fallback if JS isn't working -->
                                                <div class='flex-style'>
                                                <div class='icon'></div>
                                                <input name="file" class="check-image-size form-control input-file" id="subcatimage" type="file" data-min-width="1920" data-min-height="1080" data-max-width="1920" data-max-height="1080" onchange="uplaodsubimgfile()" accept="image/*" />
                                                </div>
                                                <br>
                                                <img src="<?php echo $sub['subcategory_img'];?>" id="oldsubimg" width=50 height=50>
                                                <input type="hidden" id="subimgurl">
                                        <!--    </div> -->

                                        
                                    </div>
                                </div>
                                

                             <!--  <label id="password-error" class="error" for="password">This field is required.</label></div>-->
                                <!-- <div class="form-group">
                                    <input type="checkbox" id="checkbox" name="checkbox" aria-required="true">
                                    <label for="checkbox">I have read and accept the terms</label>
                               <label id="checkbox-error" class="error" for="checkbox">This field is required.</label></div>-->
                                <button class="btn btn-primary waves-effect subcatedit" type="submit">SUBMIT</button>
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
            <!-- SweetAlert Plugin Js -->
    <script src="plugins/sweetalert/sweetalert.min.js"></script>
    <!-- Jquery DataTable Plugin Js -->
    <script src="plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
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
         <script src="plugins/jquery-validation/jquery.validate.js"></script>
         <script src="js/pages/forms/form-validation.js"></script>
            <script type="text/javascript" src="js/upload.js"></script>
             <!-- Bootstrap Tags Input Plugin Js -->
    <!-- Custom Js -->
    <script src="js/admin.js"></script>
 <script type="text/javascript" src="js/upload.js"></script>
    <!-- Demo Js -->

      <script src="js/jquery.checkImageSize.js"></script>
    <script>
$("input[type=file]").checkImageSize();
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    <script src="js/demo.js"></script>
    <script type="text/javascript">
        
            
        
        $(function () {
            
            $("form").submit(function(e){
        e.preventDefault();
    });
            
$('select').selectpicker('refresh');
            
//          var config = {};
    //      config.placeholder = 'Description'; 
//CKEDITOR.replace('ckeditor',config);
  //  CKEDITOR.config.height = 300;
    
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
    
    $(".subcatedit").click(function(){

        $('#form_validation_subcategory').validate({
        rules: {
            'name': {
                required: true,
                minlength: 2,
                maxlength: 50,
                regex:  /^[A-Za-z0-9 _]*[A-Za-z0-9][A-Za-z0-9 _]*$/
            }, 
            'description': {
                required: true
            }, 
            'subcatimage': {
                required: true,
                accept: "image/jpeg, image/png,image/gif"
            }, 
            'pcat':{
                required:true
            }
            
        },
        messages: {
          name: {
            required:"Please enter your SubCategory Name",
            minlength: "Enter name must be at least 6 characters long",
            maxlength: "Enter name maximum 50 characters allow"
            },
          subcatimage: {
            required:"Please Select Any image",
            accept: "Select only jpeg,png,gif file formate only!!"
            },
            description:"Please enter Description",
            pcat:"Please Select category"
          
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
       
            var subid = $("#subid").val();
                    var cname = $("#cname").val();
                    var pcat = $("#pcat option:selected").text();
            //alert(cname);
            if(cname != pcat){

                /* delete from old category */
                firebase.database().ref('Category').child(cname).child('SubCategory').child(subid).remove();
                var desc = $('#ckeditor').val();
                                    var subid = $("#subid").val();
                                     var subcatname = $("#subcatname").val();
                                     if($("#subimgurl").val()){
                                     var subimgurl = $("#subimgurl").val();
                                         
                                     }else{
                                     var subimgurl = $("#oldsubimg").attr('src');
                                         
                                     }
                                     var pcat = $("#pcat option:selected").text();
                                    var olds = $("#olds").val();
                var firebaseRef = firebase.database().ref("Category/"+pcat+"/SubCategory");
                var pushedCatRef = firebaseRef.push();
                    var subid = pushedCatRef.key;
        //alert("ID"+subid);
                firebaseRef.child(subid).set({
                    subcategory_name: subcatname,
                    subcategory_description: desc,
                    subcategory_img: subimgurl,
                    parentcategory: pcat,
                    subcategory_id: subid,
                    bundle:''
                });
                if(pushedCatRef){
                   
                     swal({
                        title: "Updated!",
                        text: "SubCategory has been Updated.",
                        html:true,
                        type: "success",
                        showCancelButton: false,
                        confirmButtonColor: "#86CCEB",
                        confirmButtonText: "OK",
                        closeOnConfirm: false
                    }, function () {
                        
                          window.location.href = "subcategory_list.php";
                    });
                     
                }
            }else{
                
                        var booksRef = firebase.database().ref('Category/'+cname+'/SubCategory/');
                         
                        booksRef.child(subid).once('value').then(function(snap) {
                                     var desc = $('#ckeditor').val();
                                    var subid = $("#subid").val();
                                     var subcatname = $("#subcatname").val();
                                     if($("#subimgurl").val()){
                                     var subimgurl = $("#subimgurl").val();
                                         
                                     }else{
                                     var subimgurl = $("#oldsubimg").attr('src');
                                         
                                     }
                                     var pcat = $("#pcat option:selected").text();
                                    var olds = $("#olds").val();
                         

                                  var data = snap.val();
                                        // console.log(data);
                                  data.subcategory_name = subcatname;
                                  data.subcategory_description = desc;
                                  data.parentcategory = pcat;
                                  data.subcategory_img = subimgurl;
                                  data.subcategory_id = subid;
                                  var update = {};
                                  update[subid] = null;
                                  update[subid] = data;
                        return booksRef.update(update).then(function(snap){
                            swal({
                                title: "Updated!",
                                text: "SubCategory has been Updated.",
                                html:true,
                                type: "success",
                                showCancelButton: false,
                                confirmButtonColor: "#86CCEB",
                                confirmButtonText: "OK",
                                closeOnConfirm: false
                            }, function () {
                                
                                  window.location.href = "subcategory_list.php";
                            });
                        });
                    });
                       
                           
                       
            }
       
            }
        });
    });
    
});
    </script>
</body>

</html>