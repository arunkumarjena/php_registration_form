<?php
    $submit = false;
if(isset($_POST['first_name'])){
    $server = "localhost:8111";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);
    if(!$con){
        die("can not connnect to the database" . mysqli_connect_error());
    }
    // echo "Connection successfully to the db";
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $sql = "INSERT INTO `registration_form`.`user_registration` (`first_name`, `last_name`, `email`, `phone`) VALUES ('$first_name', '$last_name', '$email', '$phone');";

    // echo $sql;

    if($con->query($sql) == true){
        $submit = true;
        echo "inserted into db";
    }else{
        echo "ERROR : $sql <br> $con->error";
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/bootstrap-grid.min.css" />
    <link rel="stylesheet" href="css/bootstrap-grid.css" />
    <script src="js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="container my-3">
      <div class="row">
        <div class="col"  id="header">
          <h1 class="text-center">Registration Form</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12" id="content">
         <p class="text-center text-info">Enter your details and submit this form to confirm your particiaption in the trip</p>
         <?php
            if($submit == true){
                echo "<p class='submitMsg'>Thanks for submitting..We will get back to you</p>";
            }
         ?>
         <form class="form-horizontal" role="form" method="post" action="index.php">
          <h3 class="text-center">Registration</h3>
          <div class="form-group">
              <label for="firstName" class="col-sm-3 control-label">First Name</label>
              <div class="col-sm-9">
                  <input type="text" id="first_name" name="first_name" placeholder="First Name" class="form-control" autofocus>
              </div>
          </div>
          <div class="form-group">
              <label for="lastName" class="col-sm-3 control-label">Last Name</label>
              <div class="col-sm-9">
                  <input type="text" id="last_name" name="last_name" placeholder="Last Name" class="form-control" autofocus>
              </div>
          </div>
          <div class="form-group">
              <label for="email" class="col-sm-3 control-label">Email </label>
              <div class="col-sm-9">
                  <input type="email" id="email" name="email" placeholder="Email" class="form-control" name= "email">
              </div>
          </div>
          <div class="form-group">
              <label for="phoneNumber" class="col-sm-3 control-label">Phone number </label>
              <div class="col-sm-9">
                  <input type="phoneNumber" id="phone" name="phone" placeholder="Phone number" class="form-control">
              </div>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-danger">Reset</button>
          </div> <!-- /.form-group -->
      </form> <!-- /form -->
      <div class="row" id="footer">
        <div class="col text-center">
          <footer>
            <p>All rights reserved &copy; by Arun</p>
          </footer>
        </div>
      </div>
    </div>
  </body>
</html>


