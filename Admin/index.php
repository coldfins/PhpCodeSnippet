
<?php 
define('API_ACCESS_KEY','');
define('FIREBASE_URL','');
define('FIREBASE_SECRET','');
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
foreach($user as $k => $v){
	if(isset($v['payment'])){
		
		foreach($v['payment'] as $p => $pv){
			if($pv['subscription'] == "active"){
		//		echo $v["email"].$pv['subscription_type']."</br>";
			}
		}
	}
	if(isset($v['IndividualSubscription']))
	{
		/*if(isset($v['IndividualSubscription'])){
			foreach($v['IndividualSubscription'] as $ik => $iv){
				if($ik == "session"){
					
					echo $v["first_name"].$ik."</br>";
				echo "</br></br>";
					
				}
				if($ik == "bundle"){
					echo $v["first_name"].$ik."</br>";
				echo "</br></br>";
					
				}
			}
		}*/
	}
}
//die;
?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>User | DiveThur Admin</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

  <!-- JQuery DataTable Css -->
    <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
	<script src="https://www.gstatic.com/firebasejs/4.9.0/firebase.js"></script>
           <script type="text/javascript" src="../js/credential.js"></script>
        <script src="js/check_login.js "></script>
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
                <h2>DASHBOARD</h2>
            </div>
			
			 <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                User List
                            </h2>
                            <!--<ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>-->
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Gender</th>
                                            <th>From</th>
                                            <th>Login Via</th>
                                            <th>Account Status</th>
                                            <th>Tags</th>
                                            <th>Registered On</th>
                                            <!-- <th>Action</th> -->
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <?php
										foreach($user as $k => $u){
											if($k != "icFZa4cPESMT2SClg9Gr5um2ezh1"){
												
											echo "<tr>";
												if(isset($u['first_name'])){
													
													echo "<td>".$u['first_name']."</td>";
												}else{
													echo "<td>---</td>";		
												}
												if(isset($u['last_name'])){
													
													echo "<td>".$u['last_name']."</td>";
												}else{
													echo "<td>---</td>";		
												}
												if(isset($u['email'])){
													
													echo "<td>".$u['email']."</td>";
												}else{
													echo "<td>---</td>";		
												}
												
												if(isset($u['gender'])){
													
												echo "<td>".$u['gender']."</td>";
												}else{
												echo "<td>--</td>";
													
												}
												
												if(isset($u['device_type'])){
													
													echo "<td>".$u['device_type']."</td>";
												}else{
												echo "<td>--</td>";
													
												}
												
												
												if(isset($u['login_via'])){
												echo "<td>".$u['login_via']."</td>";
													
												}else{
												echo "<td>--</td>";
													
												}
												
												if(isset($u['membership_type'])){
												echo "<td>".$u['membership_type']."</td>";
													
												}else{
												echo "<td>--</td>";
													
												}
												if(isset($u['tags'])){
												echo "<td>".$u['tags']."</td>";
													
												}else{
												echo "<td>--</td>";
													
												}
												if(isset($u['registered_on'])){
												echo "<td>".date('Y-m-d',strtotime($u['registered_on']))."</td>";
													
												}else{
												echo "<td>--</td>";
													
												}
												
												
												if(isset($u['user_id'])){?>
                                                
												<td><a href='#' onclick='del("<?php echo $u['user_id'];?>");'><i class="material-icons" style="color:#dc5753;">delete</i></a></td> 
												<?php	
												}else if(!isset($u['user_id'])){?>
                                                
												<!-- <td><a href='#' onclick='del("<?php //echo $u['user_Id'];?>");'><i class="material-icons" style="color:#dc5753;">delete</i></a></td> -->
												<?php
													
											}
												}
											echo "</tr>";
										}
										
										?>
                                        
                                    </tbody>
                                </table>
                            </div>
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
		 <script src="plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
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
		
    <!-- Custom Js -->
    <script src="js/admin.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
	<script type="text/javascript">
		
			function del(key){
				
			//var ref = firebase.database().ref('Users');
			var user_id = key;
			var ref = firebase.database().ref().child('/Users/' + user_id).remove();
			if(ref){
				
						alert('This User Deleted Sucessfully');
			}
			window.location.reload();
		}
		
		$(function () {

	
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
});
	</script>
</body>

</html>
