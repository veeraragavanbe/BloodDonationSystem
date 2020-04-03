<?php
session_start();
if(!isset($_POST['btn_register']))
{
?>
<!DOCTYPE html>
<html>
   <head>
      <title>Blood Donate System</title>
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">      
       <link rel = "stylesheet"
         href = "https://fonts.googleapis.com/icon?family=Material+Icons">
	 
		 <link rel = "stylesheet"
         href = "css/materialize.min.css">
  
	<link rel = "stylesheet"
         href = "css/materialize.css">
    		 
	     <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
 
      	<link rel = "stylesheet"
         href = "css/animate.css">
    	  </head>
   
   <body>
 
     <div class="row"> 
<div class="col s3"></div>	 
	 <div class="col s12 m7">
	 
    <div class="card horizontal">
      <div class="card-stacked">
	   <form class="col s12" method="post" action="register2.php">
 
        <div class="card-content">
      <div class = "card-panel teal lighten-2"><h3><center><font color="red">Blood Donate System</font></center></h3></div>
    <div class="row">
   
		
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="name" type="text" class="validate" length="50" name="first_name" required>
          <label for="name">First Name	 </label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="telephone" type="tel" class="validate" length="10" name="telephone" required>
          <label for="icon_telephone">Telephone</label>
        </div>
		<div class="row">
        <div class="input-field col s12">
		 <i class="material-icons prefix">email</i>
          <input id="email" type="email" class="validate"  name="email" required>
          <label for="email">Email</label>
        </div>
		</div>
		<div class="row">
		<div class="input-field col s12">
		<i class="material-icons prefix">verified_user</i>
                 
		<input id="age" type="text" class="validate" name="age" required>
            <label for="age">Age</label>
        </div>

		</div>
		<div class="row">
		<div class="input-field col s12">
		<i class="material-icons prefix"></i>
                 
		<input id="city" type="text" class="validate" name="city" required>
            <label for="city">City</label>
        </div>

		</div>
		 
  			
               <div class = "input-field col s12">
                  <i class = "material-icons prefix" >mode_edit</i>
                  <textarea id = "address" class = "materialize-textarea"  length="120" name="address" required></textarea>
                  <label for = "address">Address</label>
               </div>
			    <div class="row">
		<div class = "input-field col s12">
                  <i class = "material-icons prefix">date_range</i>
					<input type="text" class="datepicker"  name="date" required>
	               <label for = "address">Select Date Of Birth</label>
               </div>
			   </div>
			   
			   		   
<div class="input-field col s12" >
<i class = "material-icons prefix" >invert_colors</i>
	<select  name="blood_group">    
	<option value=""  selected>Select Blood group</option>
      <option value="A+">A+</option>
      <option value="B+">B+</option>
      <option value="AB-">AB-</option>
    </select>
	</div>
	

	  <div class="row">
		     <div class = "col s12">
          
		<p>
      <input class="with-gap" name="gender" type="radio" id="male"  value="male" required/>
      <label for="male">Male</label>
    </p>
	<p>
      <input class="with-gap" name="gender" type="radio" id="female"  value="Female" required/>
      <label for="female">Female</label>
    </p>
	     </div>
		 </div>
          
           <!--    <div class = "col s12">
                  <p>
                     <input id = "married" type = "checkbox"/>
                     <label for = "married">Married</label>
                  </p>
                    <p>
                     <input id = "single" type = "checkbox"  />
                     <label for = "single">Single</label>
                  </p>
                  
               </div>-->
      
	
	
  
    
	
  </div>
  
  
 	</div>
        <div class="card-action">
   <center>
   
  <div class="row">
  
        <div class = "input-field col s12 ">     
  <i class="btn  waves-effect waves-purple waves-input-wrapper animated rubberBand">
  <input type="submit" class="waves-button-input animated rubberBand"  name="btn_register"  value="Next" style="outline: none;    padding: 10px 40px 10px 40px;">
  <i class="material-icons right">send</i>
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



</form>
      </div>
    </div>
	</div>
	</div>
 
            <script>
	 $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });
  
   $(document).ready(function() {
    $('select').material_select();
  });
         
       
	</script>
 </body>
</html>



<?php
}
else
{
	echo "<script>window.location.href='register2.php';</script>";
	session_destroy();
	
}

?>