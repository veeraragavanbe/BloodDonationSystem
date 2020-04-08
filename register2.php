<?php
session_start();
if(!isset($_POST['btn-register2']))
{
?>
<html>
 <head>
     <title>Blood Donate system</title>
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">      
      
	  <link rel = "stylesheet"
         href = "https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel = "stylesheet"
         href = "css/materialize.min.css">
    <link rel = "stylesheet"
         href = "css/materialize.css">
    		 
		<script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
      </script>   
	 
      	<link rel = "stylesheet"
         href = "css/animate.css">
		 
   <script src="dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="dist/sweetalert.css">
    	  </head>
<body>
<div class="row">
  <div class="col s3"></div>
        <div class="col s12 m7">
          <div class="card horizontal">
		  <div class="card-stacked">
	     <form class="col s12" method="post" >
        <div class="card-content">
    
	<div class = "card-panel teal lighten-2"><h3><center><font color="red">Blood Donate System</font></center></h3></div>
 
  <div class="row">
  <div class="input-field col s12">
          <i class="material-icons prefix">person_outline</i>
          <input id="icon_prefix" type="text" class="validate" name="user_name" required>
          <label for="icon_prefix">User Name</label>
        
		</div>
		</div>
		<div class="row">
		<div class="input-field col s12">
          <i class="material-icons prefix">lock_outline</i>
		 <input id="password" type="password" class="validate" name="password" required>
          <label for="password">Password</label>
        </div>
		</div>
		<div class="row">
		<div class="input-field col s12">
          <i class="material-icons prefix">lock</i>
		 <input id="password" type="password" class="validate" name="confirm_password" required>
          <label for="password">Confirm Password</label>
        </div>
</div>		
		

	</div>
           <div class="card-action">
      <center>
      <div class="row">
  
  <div class = "input-field col s12 ">     
<i class="btn  waves-effect waves-purple waves-input-wrapper animated rubberBand">
<input type="submit" class="waves-button-input animated rubberBand"  name="btn-register2"  value="Register Now" style="outline: none;    padding-top: 8px;"> 
<i class="material-icons right">person_outline</i>
</i>

</div>
</div>
</center>    
<div class='row'>
           <label style='float: left;     float: left;
margin-left: 120px;
font-size: inherit;
  padding-top: 20px;
color: red;'>
	<strong><b>Account Already Exists</b></strong>
						</label>
    
              <label style='float: right;    float: right;
       margin-right: 120px;
    margin-top: 20px;
    font-size: inherit;
	
	
	'>
	<a class='pink-text' href='index.html'><b>Login</b></a>
							</label>
            </div> 

			</div>
          </div>
		  </div>
<input type="hidden" name="first_name" value="<?php echo $_POST['first_name']; ?>">
<input type="hidden" name="telephone" value="<?php echo $_POST['telephone']; ?>">
<input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">
<input type="hidden" name="age" value="<?php echo $_POST['age']; ?>">
<input type="hidden" name="city" value="<?php echo $_POST['city']; ?>">
<input type="hidden" name="address" value="<?php echo $_POST['address']; ?>">
<input type="hidden" name="date" value="<?php echo $_POST['date']; ?>">
<input type="hidden" name="gender" value="<?php echo $_POST['gender']; ?>">
<input type="hidden" name="blood_group" value="<?php echo $_POST['blood_group']; ?>">

 		  </form>
		  </div>
        </div>
      </div>
            


      </body>
</html>
<?php
}
else
{
include('conn.php');	
$first_name=$_POST['first_name'];
$telephone=$_POST['telephone'];
$email=$_POST['email'];
$age=$_POST['age'];
$city=$_POST['city'];
$address=$_POST['address'];
$date=$_POST['date'];
$blood_group=$_POST['blood_group'];
$gender=$_POST['gender'];
$user_name=$_POST['user_name'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];


if($user_name == '' and $password == '' and $confirm_password == '')
{
	echo "<script>alert('Empty Field !');</script>";
	
}
if($password == $confirm_password)
{
	
$ins='INSERT INTO `register`(`First_name`, `Telephone`, `Email_id`, `Age`, `Address`, `Date`, `Blood_group`, `Gender`, `City`, `User_name`, `password`) VALUES("'.$first_name.'","'.$telephone.'","'.$email.'","'.$age.'","'.$address.'","'.$date.'","'.$blood_group.'","'.$gender.'","'.$city.'","'.$user_name.'","'.$password.'")';

$ins1='Insert into `login`(`User_name`,`password`,`Email_id`) VALUES("'.$user_name.'","'.$password.'","'.$email.'")';	


	$res=$conn->query($ins);
	$res1=$conn->query($ins1);
	
	if($res > 0  and  0 < $res1 ) 
	{
	echo '
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<link rel="stylesheet" href="sweetalert-master/dist/sweetalert.css">
<script src="sweetalert-master/dist/sweetalert-dev.js"></script>
<script>
$( document ).ready(function() {
swal("success","Registeration Successfully Completed!","success");
});
</script>';	
echo '<script type="text/javascript">';
  echo 'setTimeout(function () { window.location.href="index.php";';
  echo '}, 1000);</script>';

		session_destroy();
	}
	else
	{
	echo '
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<link rel="stylesheet" href="sweetalert-master/dist/sweetalert.css">
<script src="sweetalert-master/dist/sweetalert-dev.js"></script>
<script>
$( document ).ready(function() {
swal("Failed!","Registeration Fails!","error");
});
</script>';	
echo '<script type="text/javascript">';
  echo 'setTimeout(function () { window.location.href="register.php";';
  echo '}, 1000);</script>';
	
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
swal("Failed!","Password Incorrent!","error");
});
</script>';	


}

}

?>
