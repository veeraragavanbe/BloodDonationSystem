<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Forgot password</title>
  
  <head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
  <style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }

    body {
      background: #fff;
    }
    .input-field input[type=date]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
      color: #e91e63;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 2px solid #e91e63;
      box-shadow: none;
    }
    </style>
</head>
<body>
  <main>
    <center>
   <!--   <img class="responsive-img" style="width: 250px;" src="https://i.imgur.com/ax0NCsK.gif" />-->
<div  class="z-depth-3 y-depth-3 x-depth-3 grey green-text lighten-4 row" style="display: inline-block; padding: 32px 40px 0px 40px; border: 1px; margin-top: 30px; solid #EEE;">
      <div class = "card-panel teal lighten-2" style="    position: relative;
    bottom: 25px;"><h3><center><font color="red">Simple Application</font></center></h3></div>

<div class="col s12">
         <i class="material-icons prefix" style="    font-size: -webkit-xxx-large;
    color: crimson;">lock</i>
			      <h5 class="indigo-text">Forgot Your Password</h5>
</div>
      <div class="section"></div>
      <div class="container">
      
          <form class="col s12" method="post">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class="row">
<div class="input-field col s12">
			       <i class="material-icons prefix">email</i>
			   <input id="email" type="email" class="validate" name="email">
          <label for="email" data-error="wrong" data-success="right">Email</label>
</div>
<div class="input-field col s12">
 			       <i class="material-icons prefix">lock_outline</i>
    <input id="newpassword" type="password" class="validate" name="new_password">
          <label for="newpassword" data-error="wrong" data-success="right">New Password</label>
</div>

</div>
<br />
            <center>
              <div class='row'>
                <input  type='submit' name='forgot' class='col s12 btn btn-large waves-effect indigo waves-purple' value='Reset'>
              </div>
            </center>
			<div class="row">						<label style='float: left;'>
		<center>

				<a href="index.html" class='pink-text'><b><h6 style="    font-size: initial;">Login</h6></b></a>
    </center>
							</label>
    
			</div>
          </form>
		  </div>
        </div>
      </div>
    </center>

   </main>
   
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>

</html>
  
  
</body>
</html>

<?php

if(isset($_POST['forgot'])){
	
	include('conn.php');

include('conn.php');

$email=$_POST['email'];
$new_password=$_POST['new_password'];

$sql="select * from `register`";
 
$res=$conn->query($sql);
$row=mysqli_fetch_array($res);


if($email == $row['Email_id'])
{
	
	$new_password=$_POST['new_password'];

$upd="update  register set  password='".$new_password."' where `Email_id`='".$email."'";
$upd1="update  login set  password='".$new_password."' where `Email_id`='".$email."'";

$res=$conn->query($upd);
$res1=$conn->query($upd1);

if($res > 0 and 0 < $res1)
{
echo '
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<link rel="stylesheet" href="sweetalert-master/dist/sweetalert.css">
<script src="sweetalert-master/dist/sweetalert-dev.js"></script>
<script>
$( document ).ready(function() {
swal("success!","Update Successfully!","success");
});
</script>';	
echo '<script type="text/javascript">';
  echo 'setTimeout(function () { window.location.href="index.php";';
  echo '}, 2000);</script>';
  session_destroy();
}
else
{

}
}
else
{
echo '
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<link rel="stylesheet" href="sweetalert-master/dist/sweetalert.css">
<script src="sweetalert-master/dist/sweetalert-dev.js"></script>
<script>
$( document ).ready(function() {
swal("Faild!","Please Enter Register Email-id !","error");
});
</script>
';	
echo '<script type="text/javascript">';
echo 'setTimeout(function () { window.location.href="forgot.php";';
echo '}, 2000);</script>';	
}
}
?>


