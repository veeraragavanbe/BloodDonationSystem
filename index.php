<?php

session_start();
if(!isset($_POST['btn_login']))
{
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form </title>
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

<body >
  <main>
      <center>
    <!--   <img class="responsive-img" style="width: 250px;" src="https://i.imgur.com/ax0NCsK.gif" /><br>-->

<div  class="z-depth-3 y-depth-3 x-depth-3 grey green-text lighten-4 row" style="display: inline-block; padding: 30px 50px 10px 50px; border: 1px; margin-top: 17px; solid #EEE;">
	<div class = "card-panel teal lighten-2" style="    position: relative;
    bottom: 25px;"><h3><center><font color="red">Blood Donation System</font></center></h3></div>
  
      <h5 class="indigo-text">Please, login into your account</h5>
      <div class="section"></div>
      <div class="container">
      
          <form class="col s12" method="post">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
			       <i class="material-icons prefix">account_circle</i>
                     <input class='validate' type='email' name='user_name' id='user_name' required />
                <label for='user_name'>Enter Email Id</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
			    <i class="material-icons prefix">lock</i>
		
                <input class='validate' type='password' name='password' id='password'  required />
                <label for='password'>Enter your password</label>
              </div>
				<label style='float: left;'>
		
				<a href="register.php" class='pink-text'><b><h6>Create account</h6></b></a>
    
							</label>
    
              <label style='float: right;'>
								<a class='pink-text' href='forgot.php'><b><h6>Forgot Password?</h6></b></a>
							</label>
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo waves-purple'>Login</button>
              </div>
            </center>
          </form>
        </div>
      </div>
    </center>

   </main>
  

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>

</html>
  
<?php
}
else
{
include('conn.php');

$user_name=$_POST['user_name'];
$password=$_POST['password'];

$sel=("select * from login where User_name='".$user_name."'");
$sel1=("select * from register where User_name='".$user_name."'");


$res=$conn->query($sel);
$res1=$conn->query($sel1);

while($row=mysqli_fetch_assoc($res) and $row1=mysqli_fetch_assoc($res1))
{
if($row['Email_id'] == $row1['Email_id'])
{
	
if($user_name == $row['User_name'] and $password == $row1['password'])
{
	
?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
<center>
	<div class="preloader-wrapper big active" style="margin-top: 250px;">
      <div class="spinner-layer spinner-blue">
        <div class="circle-clipper right">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper left">
          <div class="circle"></div>
        </div>
      </div>

      <div class="spinner-layer spinner-red">
        <div class="circle-clipper right">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper left">
          <div class="circle"></div>
        </div>
      </div>

      <div class="spinner-layer spinner-yellow">
        <div class="circle-clipper right">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper left">
          <div class="circle"></div>
        </div>
      </div>

      <div class="spinner-layer spinner-green">
        <div class="circle-clipper right">
          <div class="circle"></div>
        </div><div class="gap-patch">
          <div class="circle"></div>
        </div><div class="circle-clipper left">
          <div class="circle"></div>
        </div>
      </div>
    </div>
	  </center>
	  <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
	<?php
echo "<script>setTimeout(function () {
   window.location.href= 'homepage'; // the redirect goes here
},5000);</script>";

	
	}
else
{
	echo '
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<link rel="stylesheet" href="sweetalert-master/dist/sweetalert.css">
<script src="sweetalert-master/dist/sweetalert-dev.js"></script>
<script>
$( document ).ready(function() {
swal("Faild!","Login Failed !","error");
});
</script>';	
echo '<script type="text/javascript">';
  echo 'setTimeout(function () { window.location.href="index.php";';
  echo '}, 2000);</script>';
	
}

}
else
{
	echo"<script>alert('Enter Corrent User Name!');</script>";
	
}
}

}
?>


 


