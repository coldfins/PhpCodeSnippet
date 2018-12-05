<?php define("version",1);?>
<!-- <script src="js/jquery-1.10.2.js"></script> -->
<!-- <link rel="stylesheet" href="css/dashheader.css"> -->
<style>
.class {position: absolute;
		        top:38%;
		        left: -108%;}
	
</style>
<nav class="navbar navbar-expand-lg  fixed-top  navbar-light bg-white header">
        <button class="navbar-toggler togle-pad" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03">
          <span class="navbar-toggler-icon"></span>
        </button> 
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="dashboard.php"><img class="navbar-brand logo img-margin" src="img/logo.png"></a>

        <div class="collapse navbar-collapse header-item" id="navbarTogglerDemo03">
          <ul class="navbar-nav ml-auto ul-bg ipadnav" style="margin-right: 7%;">
            
              <li class="nav-item li-border">
                  <a class="nav-link" href="dashboard.php">HOME</a>
              </li>
              
			  <li class="nav-item li-border">
                  <a class="nav-link" href="quickdive.php">QUICK DIVE</a>
              </li>
               
			  <li class="nav-item dropdown li-border ">
                  <a class="nav-link dropdown-toggle dropdown-toggle1" href="#" data-toggle="dropdown">DEEP DIVE</a>
						<ul class="dropdown-menu dropdown1">
							<li><a class="dropdown-item" href="DeepMain.php">MAIN</a></li>
                            <div class="dropdown-divider"></div>
							<li><a class="dropdown-item" href="individual.php">INDIVIDUAL</a></li>
						</ul>
              </li>
              
			  <li class="nav-item li-border ">
                  <a class="nav-link " href="session.php">OPEN DIVE</a>
              </li>
              
              <li class="nav-item dropdown li-border1">
                  <a class="nav-link py-0 dropdown-toggle dropdown-toggle1" href="#" data-toggle="dropdown" >
                     <img src="img/profile.png"  class="img-fluid rounded-circle profile" style="max-width: 40px; max-height: 40px; padding-top: 0 !important;
                      padding-bottom: 0;"/></a>
                <!-- <div class="dropdown-menu dropdown2" > -->
                  <!--  <a class="dropdown-item " href="#" style="font-size: 18px;">MY STATS</a>
                    <a class="dropdown-item pb-2" href="#" style="font-size: 18px;">MY PROFILE</a>
                    <a class="dropdown-item pb-2" href="#" style="font-size: 18px;">DIV WITH FRIENDS</a> -->
                    <div class="dropdown-menu dropdown1">
                        <a class="dropdown-item" href="mystreak.php">MY JOURNEY</a>
                          <div class="dropdown-divider" style=""></div>
                        <!-- http://34.215.40.163/editprofile.php -->
                        
						<a class="dropdown-item" href="#">MY PROFILE</a>
                          <div class="dropdown-divider"></div>
                        
						<a class="dropdown-item dropdown-toggle" data-toggle="dropdown" href="#">CUSTOM LIABRARY</a>
                          
						                   <div class="dropdown-menu class">
                                                <a class="dropdown-item" href="#">UPDATE CUSTOM FEED</a>
											        <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">SHOW DEFAULT</a>
										   </div>
						
					                       <div class="dropdown-divider"></div>
                      
						<a class="dropdown-item" href="#">DIVE WITH FRIENDS</a>
                          <div class="dropdown-divider"></div>
                        
						<a class="dropdown-item pb-2" style="color:red !important; font-size: 18px;" href="javascript:void(0)" onclick="sign_out();">LOG OUT<span><i class="fa fa-power-off pl-5" aria-hidden="true" ></i></span></a>
                    
                          <!--   </div> -->
                
               </li>  

          </ul>
          
        </div>
</nav>
<!--
<nav class="navbar navbar-expand-lg  fixed-top  navbar-light bg-white header">
        <button class="navbar-toggler togle-pad" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03">
          <span class="navbar-toggler-icon"></span>
        </button> 
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="dashboard.php"><img class="navbar-brand logo img-margin" src="img/logo.png"></a>

        <div class="collapse navbar-collapse header-item" id="navbarTogglerDemo03">
          <ul class="navbar-nav ml-auto ul-bg ipadnav" style="margin-right: 7%;">
            
              <li class="nav-item li-border">
                  <a class="nav-link" href="dashboard.php">HOME</a>
              </li>
              <li class="nav-item li-border">
                  <a class="nav-link" href="quickdive.php">QUICK DIVE</a>
              </li>
                <li class="nav-item dropdown li-border ">
                  <a class="nav-link dropdown-toggle dropdown-toggle1" href="#" data-toggle="dropdown">DEEP DIVE</a>
                <div class="dropdown-menu dropdown1">
                    <a class="dropdown-item" href="DeepMain.php">MAIN</a>
                    
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="individual.php">INDIVIDUAL</a>
                  </div>
                  </li>
              <li class="nav-item li-border ">
                  <a class="nav-link " href="session.php">OPEN DIVE</a>
                  </li>
              
              <li class="nav-item dropdown li-border1">
                  <a class="nav-link py-0 dropdown-toggle dropdown-toggle1" href="#" data-toggle="dropdown" >
                <img src="img/profile.png"  class="img-fluid rounded-circle profile" style="max-width: 40px; max-height: 40px; padding-top: 0 !important;
                padding-bottom: 0;"/></a>
                <!-- <div class="dropdown-menu dropdown2" > -->
                  <!--  <a class="dropdown-item " href="#" style="font-size: 18px;">MY STATS</a>
                    <a class="dropdown-item pb-2" href="#" style="font-size: 18px;">MY PROFILE</a>
                    <a class="dropdown-item pb-2" href="#" style="font-size: 18px;">DIV WITH FRIENDS</a> -->
                    <!--<div class="dropdown-menu dropdown1">
                        <a class="dropdown-item" href="mystreak.php">MY JOURNEY</a>
                          <div class="dropdown-divider" style=""></div>
                        <!-- http://34.215.40.163/editprofile.php -->
                <!--      <a class="dropdown-item" href="#">MY PROFILE</a>
                            <div class="dropdown-divider"></div>
                        <div class="dropdown">
                            <a class="nav-link py-0 dropdown-toggle dropdown-toggle1" href="#" data-toggle="dropdown" >CUSTOM FEED<a/>
                            <div class="dropdown-menu dropdown1">
                              <a class="dropdown-item" href="javascript:void(0);" id="updatefeed">UPDATE CUSTOM FEED</a>
                                  <div class="dropdown-divider"></div> 
                                  <a class="dropdown-item" href="javascript:void(0);" id="showdefault">SHOW DEFAULT</a>
                                  <div class="dropdown-divider"></div>
                              </div>
                        </div>

                      <a class="dropdown-item" href="#">DIVE WITH FRIENDS</a>
                          <div class="dropdown-divider"></div>
                        <a class="dropdown-item pb-2" style="color:red !important; font-size: 18px;" href="javascript:void(0)" onclick="sign_out();">LOG OUT<span><i class="fa fa-power-off pl-5" aria-hidden="true" ></i></span></a>
                    </div>
                          <!--   </div> 
                
                </li>  
          </ul>
          
        </div>
</nav>-----!>

<!---------------------------------------------------------------------------------->

    <div class="modal fade " tabindex="-1" id="tagselection"  role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="text-align:center;">
          <h5 class="modal-title" id="tagModalLabel">Select from option below to</h5>
        </div>
        <div class="modal-body">
        
        <div class="stepwizard" style="display:none;">
          <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step col-xs-3"> 
              <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
              <p><small>Shipper</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
              <a href="#step-2" type="button" class="btn btn-default btn-circle disabled" disabled="disabled">2</a>
              <p><small>Destination</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
              <a href="#step-3" type="button" class="btn btn-default btn-circle disabled" disabled="disabled">3</a>
              <p><small>Schedule</small></p>
            </div>
            <div class="stepwizard-step col-xs-3"> 
              <a href="#step-4" type="button" class="btn btn-default btn-circle disabled" disabled="disabled">4</a>
              <p><small>Cargo</small></p>
            </div>
          </div>
        </div>
        
        <form role="form">
          <div class="panel panel-primary setup-content" id="step-1">
            <div class="panel-heading">
               <h3 class="panel-title"></h3>
            </div>
            <div class="panel-body">
            <div class="content">
              
              </div>
              <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
            </div>
          </div>
          
          <div class="panel panel-primary setup-content" id="step-2">
            <div class="panel-heading">
               <h3 class="panel-title"></h3>
            </div>
            <div class="panel-body">
            <div class="content">

             </div>
              <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
            </div>
          </div>
          
          <div class="panel panel-primary setup-content" id="step-3">
            <div class="panel-heading">
               <h3 class="panel-title"></h3>
            </div>
            <div class="panel-body">
            <div class="content">
              
             </div>
              <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
            </div>
          </div>
          
          <div class="panel panel-primary setup-content" id="step-4">
            <div class="panel-heading">
               <h3 class="panel-title"></h3>
            </div>
            <div class="panel-body">
            <div class="content">
              
             </div>
              <button class="btn btn-success pull-right finish" type="button">Finish!</button>
            </div>
          </div>
        </form>

        </div>
          
      </div>
      </div>
    </div>

<!---------------------- / Modal open after tag filter when click on cat box ------------------------>



    <script src="js/signout.js"></script>
    <script>
      $(document).ready(function(){
   /*********************** new header code for custom library ****************/
		
	

   /*********************** new header code for custom library ****************/ 
	  
	  
        $("#updatefeed").click(function(){

            $("#tagselection").modal("show");

        });

        var user = JSON.parse(window.localStorage.getItem('user'));
        if(user !=null){
          
         // console.log(user.profile_image);
          if(user.profile_image !=''){
            $(".profile").attr("src",user.profile_image);
          }
        }
        

               var navListItems = $('div.setup-panel div a');
               var allWells = $('.setup-content');
               var allNextBtn = $('.nextBtn');
               var allFinishBtn = $('.finish');
                allWells.hide();

                navListItems.click(function (e) {
                //alert(566);
                    e.preventDefault();
                    var $target = $($(this).attr('href')),
                        $item = $(this);

                    if (!$item.hasClass('disabled')) {
                        navListItems.removeClass('btn-success').addClass('btn-default');
                        $item.addClass('btn-success');
                        allWells.hide();
                        $target.show();
                        $target.find('input:eq(0)').focus();
                    }
                });




                allNextBtn.click(function () {
                    var curStep = $(this).closest(".setup-content"),
                        curStepBtn = curStep.attr("id"),
                        nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                        curInputs = curStep.find(".form-check").find("input[type='text'],input[type='checkbox']"),
                        curInputs2 = curStep.find(".form-check").find("input:checkbox:checked"),
                        isValid = true;
                    $(".form-group").removeClass("has-error");
                  //  for (var i = 0; i < curInputs.length; i++) {
                      // if (!curInputs[i].prop("checked")) {
                    if(curInputs2.length <= 0){
                      $(this).prev("span").remove();
                      $(this).before("<span style='color:red;'>Please select at least one tag.!!</span>");
            //alert(curInputs2.length);
                            isValid = false;
                            $(curInputs[i]).closest(".form-group").addClass("has-error");
                    }

                        //}
                  // }

                    if (isValid) nextStepWizard.removeClass('disabled');
                    if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');

                });

                allFinishBtn.click(function () {
                        allWells.hide();
                      $("div.setup-panel div").each(function( index ){
                         
                            if(index == 0){
                              var $target = $($(this).find("a").attr('href'));
                              $target.show();
                              console.log($(this).find("a").attr('href'));
                              $target.find('input:eq(0)').focus();
                            }
                            if(index != 0){

                              $(this).find("a").parent().next().children("a").addClass('disabled');
                              $(this).find("a").parent().next().children("a").attr('disabled','disabled');
                            }


                      });
                      
                });

                $('div.setup-panel div a.btn-success').trigger('click');





        

      });
    </script>