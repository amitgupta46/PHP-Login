<?php
  session_start();
  if (isset($_SESSION['username'])) {
      session_start();
      session_destroy();
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Signup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="../css/main.css" rel="stylesheet" media="screen">
  </head>

  <body>
    <div class="container">

      <form class="form-signup" id="usersignup" name="usersignup" method="post" action="createuser.php">
        <h2 class="form-signup-heading">Register</h2>
        <input name="newname" id="newname" type="text" class="form-control" placeholder="FirstName LastName" autofocus>
<br>
        <input name="newuser" id="newuser" type="text" class="form-control" placeholder="Username"> <input name="email" id="email" type="text" class="form-control" placeholder="Email">
<br>
        <input name="password1" id="password1" type="password" class="form-control" placeholder="Password">
        <input name="password2" id="password2" type="password" class="form-control" placeholder="Repeat Password">

        <!-- <div class="form-control btn-group" name="" id="" role="group" aria-label="Entity">
          <button type="button" class="btn btn-default" name="entity" value="patient">Patient</button>
          <button type="button" class="btn btn-default" name="entity" value="doctor">Doctor</button>
          <button type="button" class="btn btn-default" name="entity" value="employer">Employer</button>
          <button type="button" class="btn btn-default" name="entity" value="hospital">Hospital</button>
          <button type="button" class="btn btn-default" name="entity" value="insurance">Insurance</button>
          <button type="button" class="btn btn-default" name="entity" value="club">Club</button>
        </div> -->
          <input type="radio" name='entity' id="entity" value="Patient">Patient
          <input type="radio" name='entity' id ="entity" value="Doctor">Doctor
          <input type="radio" name='entity' id ="entity" value="Employer">Employer
          <input type="radio" name='entity' id ="entity" value="Hospital">Hospital
          <input type="radio" name='entity' id ="entity" value="Insurance">Insurance
          <input type="radio" name='entity' id ="entity" value="Healthclub">Healthclub

        <button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>

        <div id="message"></div>
      </form>

    </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <script src="js/signup.js"></script>


    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
<script>

$( "#usersignup" ).validate({
  rules: {
	email: {
		email: true,
		required: true
	},
    password1: {
      required: true,
      minlength: 4
	},
    password2: {
      equalTo: "#password1"
    }
  }
});
</script>

  </body>
</html>
