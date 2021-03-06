<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>DiveThru | Admin Login</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
	
    <!-- Firebase Start -->
<script src="https://www.gstatic.com/firebasejs/ui/live/0.4/firebase-ui-auth.js"></script>
<link type="text/css" rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/live/0.4/firebase-ui-auth.css" />
<script src="js/sign-in.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.10.1/firebase.js"></script>
      <script type="text/javascript" src="../js/credential.js"></script>
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
          <!--  <a href="javascript:void(0);">Admin<b>BSB</b></a>
            <small>Admin BootStrap Based - Material Design</small>  -->
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST">
                    <!-- <div class="msg">Sign in to start your session</div> -->
                    <div class="input-group"> 
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="test" class="form-control" name="email" id="email" onchange="inputemail();" placeholder="Email"  autofocus >
                            
                        </div>
                        <p id="p1" class="p1" style="font-size: 14px;color: red;"></p>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" onchange="inputpassword();" id="password" placeholder="Password" >
                            
                        </div>
                        <p id="p2" class="p1" style="font-size: 14px;color: red;"></p>
                    </div>
                    <div class="row">
                       <!-- <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>
                        </div> -->
                            <p id="error" style="color: red; padding: 0% 1% 0% 5%;"></p>
						
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" id="Button" onclick="btnclick();" type="button">SIGN IN</button>
                        </div>
                    </div>
                   <!-- <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="sign-up.html">Register Now!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="forgot-password.html">Forgot Password?</a>
                        </div>
                    </div>  -->
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/examples/sign-in.js"></script>

    <script type="text/javascript">
        $("form").keypress(function(e) {
            if(e.which == 13) {
            //  alert('You pressed enter!');
            //$("#go").click();
                signin_admin();
            }
        });
       function inputemail() {

            var email = document.getElementById('email').value;

            if(email !="")
            {


                var emailExp =  /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i;
               
               
               if (email.match(emailExp)) {
                    document.getElementById('p1').innerText = "";
                return true;
                } else {
                document.getElementById('p1').innerText = " Please enter a valid email address"; // This segment displays the validation rule for email.
                document.getElementById('email').focus();
                return false;
                }
            }
            else{
                document.getElementById('p1').innerText = "Please enter email id";
                return false;
            }
       }
       function inputpassword() {

            var password = document.getElementById('password').value;

            if(password !="")
            {
               
                document.getElementById('p2').innerText = "";
                return true;
               
            }
            else{
                document.getElementById('p2').innerText = "Please enter Password";
                return false;
            }
       }

       function btnclick() {
            var chk=inputemail();
            var chk1=inputpassword();
            if(chk==true && chk1==true){
                signin_admin();
            }
           
       }
    </script>
</body>

</html>