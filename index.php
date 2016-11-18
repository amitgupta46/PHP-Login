<?php require "login/loginheader.php"; ?>
<?php require "login/scripts/dbconfig.php"; ?>

<?php $loggeduser = $_SESSION['username'];
function getusertype($loggeduser){
    $sqlquery = 'SELECT entity FROM members where username="'.$loggeduser.'"';
    return mysql_fetch_row(mysql_query($sqlquery))[0];
  }?>
<script type="text/javascript">var loggeduser=("<?php echo getusertype($loggeduser) ?>");</script>
<script type="text/javascript">
    function filterdivs(){
      if(loggeduser!="Patient"){
      document.getElementById('forpatient').style.display = 'none';
      }
      if(loggeduser!="Doctor"){
        document.getElementById('fordoctor').style.display = 'none';
      }
      if(loggeduser!="Insurance"){
        document.getElementById('forinsurance').style.display = 'none';
      }
    };
</script>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/main.css" rel="stylesheet" media="screen">
  </head>
  <body onload="filterdivs()">
  <center><h2><img width="70px" src="images/logo.png">Patient Health Record Management System</h2></center>

    <div class="container">
      <div class="form-signin">
        <div class="alert alert-success" id="success-alert"><center>Logged in as a <strong><script type="text/javascript">document.write(loggeduser)</script></strong>.</center></div>

        <!-- <div class="alert alert-success" id="success-alert">You have been <strong>successfully logged in</strong>.</div> -->
        <a href="login/logout.php" class="btn btn-default btn-lg btn-block">Logout</a>
      </div>

      <!-- form elements-->
      <div id="forpatient" style="display:true;">
      <form action="login/scripts/upload.php" method="post" enctype="multipart/form-data">
      <h2>Upload your health record</h2></br>
        
        <div class="form-group">
          <label for="exampleInputFile">File input</label>
          <input type="file" class="form-control-file" name= "fileToUpload" id="fileToUpload" aria-describedby="fileHelp">
          <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
        </div>

<!--         <div class="form-group">
        <table><tr><td width="90%">
          <label for="exampleSelect1">My Doctor: </label>
          <select class="form-control" id="exampleSelect1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
          </td><td> 
            <label class="custom-control custom-radio-doctor">
            <input id="radio1" name="radio" type="radio" class="custom-control-input-doctor" checked>
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Yes</span>
            </label>
            <label class="custom-control custom-radio-doctor">
            <input id="radio2" name="radio" type="radio" class="custom-control-input-doctor">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">No</span>
            </label>
          </td>
        </tr></table>
        </div>
        
        <div class="form-group">
        <table><tr><td width="90%">
          <label for="exampleSelect1">Health Club: </label>
          <select class="form-control" id="exampleSelect1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
          </td><td> 
                    <label class="custom-control custom-radio-healthclub">
                    <input id="radio1" name="radio" type="radio" class="custom-control-input-healthclub" checked>
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Yes</span>
                    </label>
                    <label class="custom-control custom-radio-healthclub">
                    <input id="radio2" name="radio" type="radio" class="custom-control-input-healthclub">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">No</span>
                    </label>
          </td>
        </tr></table>
        </div>
        <div class="form-group">
        <table><tr><td width="90%">
          <label for="exampleSelect1">Employer: </label>
          <select class="form-control" id="exampleSelect1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
          </td><td> 
                    <label class="custom-control custom-radio-employer">
                    <input id="radio1employer" name="radio" type="radio" class="custom-control-input-employer" checked>
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Yes</span>
                    </label>
                    <label class="custom-control custom-radio-employer">
                    <input id="radio2employer" name="radio" type="radio" class="custom-control-input-employer">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">No</span>
                    </label>
          </td>
        </tr></table>
        </div>

        <div class="form-group">
        <table><tr><td width="90%">
          <label for="exampleSelect1">Insurance Company: </label>
          <select class="form-control" id="exampleSelect1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
          </td><td> 
                    <label class="custom-control custom-radio">
                    <input id="radio1insurance" name="radio" type="radio" class="custom-control-input-insurance" checked>
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">Yes</span>
                    </label>
                    <label class="custom-control custom-radio">
                    <input id="radio2insurance" name="radio" type="radio" class="custom-control-input-insurance">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">No</span>
                    </label>
          </td>
        </tr></table>
        </div>
        <div class="form-group">
          <label for="exampleTextarea">Notes and Comments</label>
          <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
          <small id="emailHelp" class="form-text text-muted">We'll never share your PHR notes with anyone else.</small>
        </div>
         -->
        
        <input type="submit" name=submit" class="btn btn-primary">
      </form>
</div>
<div id="fordoctor" style="display:true;">
  <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Patient Records</div>

  <!-- Table -->
  <table class="table table-striped table-bordered table-hover">
    <thead class="thead-inverse"><strong><tr><td>Patien ID</td><td>Notes</td><td>PHR File</td></tr></strong></thead>
      <?php 
      $results = mysql_query("SELECT * FROM records LIMIT 10");
      while($row = mysql_fetch_array($results)) {
      ?>
          <tr>
              <td><?php echo $row['patientid']?></td>
              <td><?php echo $row['notes']?></td>
              <td><?php echo $row['filepath']?></td>
          </tr>

      <?php
      }
      ?>

  </table>
</div>
</div>

<div id="forinsurance" style="display:true;">
    <h2>Insurance is a myth! Go Home!</h2>
</div>




    </div> <!-- /container -->
  </body>
</html>