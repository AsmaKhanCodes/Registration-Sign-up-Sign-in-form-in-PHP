<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">
    <title>Sign Up| Form</title>
  </head>
  <body>
    <h1>Register Now!</h1>
    <div class="container">
      <div class="myform">
      <form class="" id="" name="" method="post" action="">
        <div class="row">
      <div class="form-group col-6">
    <label for="fname"> First Name</label>
    <input type="text" class="form-control" name="fname"  placeholder="Enter Name">
  </div>
  <div class="form-group col-6">
    <label for="lname"> Last Name</label>
    <input type="text" class="form-control" name="lname" placeholder="Enter Name">
  </div>
  </div>
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>
  <div class="btnn">
  <a href="display.php"><input type="submit"  class="btn btn-dark center" name="butn" value="Register Me!"></input></a></div>
</form>
      </div>
    </div>











    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php
$con = mysqli_connect('localhost','root','','registeration');
if($con){
  echo('connected successfully');
}
else{
  echo('Error connecting database');
}
if(isset($_POST['butn'])){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "insert into mytable(id,fname,lname,email,password) values('','$fname','$lname','$email','$password')" or die();


  if($con->query($sql)===TRUE){
    echo('record added!');
  }
  else{
    echo "Error:" .$sql. "<br>" .$con->error;
  }
}

$con->close();
?>