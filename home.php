<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>DataCode</title>
    
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  </head>
  <body class="container">
      <!-- As a link -->
<nav style="background:purple;" class="navbar ">
    <a class="navbar-brand" href="home.html" style="color:orange;">Data-Code</a>
  </nav>
  <!-- Registration Form -->

<form>
<div class="container-fluid">
    <section class=" jumbotron col-lg-12 container">
		<div class="container-page">				
			<div class="col-md-6">
				<h3 class="dark-grey">Registration</h3>
				
				<div class="form-group col-lg-12">
					<label>Full Name</label>
					<input type="text" name="name" class="form-control" id="name" value="" required="">
        </div>
        
        <div class="form-group col-lg-6">
            <label>ID Number</label>
            <input type="text" name="id" class="form-control" id="id" value="" required="">
          </div>
          
          <div class="form-group col-lg-6">
            <label>Email Address</label>
            <input type="email" name="email" class="form-control" id="email" value="">
          </div>

				<div class="form-group col-lg-6">
					<label>Password</label>
					<input type="password" name="psswd" class="form-control" id="psswd" value="">
				</div>
				
				<div class="form-group col-lg-6">
					<label>Repeat Password</label>
					<input type="password" name="pswd" class="form-control" id="pswd" value="">
				</div>			

        <div class="form-group col-lg-6">
           <label for="file">Upload Photo</label>
           <input type="file" class="form-control-file" id="file">
        </div>
          
							
			
			</div>
		
			<div class="col-md-6">
				<h3 class="dark-grey">Terms and Conditions</h3>
				<p>
					By clicking on "Register" you agree to Data-Code's Terms and Conditions
				</p>
				<p>
					While rare, prices are subject to change based on exchange rate fluctuations - 
					should such a fluctuation happen, we may request an additional payment. You have the option to request a full refund or to pay the new price.
				</p>
				<p>
					Should there be an error in the usage of this software, we will provide you with a full refund. 
				</p>
				<p>
					Acceptance of a user by us dependent on your frequent usage of our software. 
				</p>
				
				<button type="submit" class="btn btn-warning">Register</button>
			</div>
		</div>
  </section>
</div>
</form>
<?php
   require("../connect.php");
   error_reporting(0);
 

   if(isset($_POST['add']))
   {
       $username=$_POST['username'];
       $password=$_POST['password'];



        mysql_query("INSERT INTO user VALUES('','$username','$password')") or die(mysql_error());
  }
?>
<footer class="navbar container " style="background-color: purple;">
    <div style="color:orange"> &copy; 2018 </div>
</footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>