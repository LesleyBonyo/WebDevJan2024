<?php
  include 'connect.php';
  $success=0;
  $unsuccess=0;
  if ($_SERVER['REQUEST_METHOD']=='POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    //creates the hash for user password
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    //chech if email exists
    $mysql = "SELECT * FROM accounts WHERE email='$email'";
    $myresult = mysqli_query($connect, $mysql);
    if ($myresult) {
      if(mysqli_num_rows($myresult)>0){
        $unsuccess = 1; // email already exists
      } else{
        $sql = "INSERT INTO accounts(email, password) VALUES('$email', '$password_hash')";
        $result = mysqli_query($connect, $sql);
      if ($result) {
        // echo "Signup Successfull";
        $success = 1;
      } else{
        die(mysqli_error($connect));
    }
      }
    }


    
  }


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style type="text/css">
      .error{
        text-align: center;
        color: red;
      }
    </style>
  </head>
  <body>
    <div class="container">
    <h1>Sign Up</h1>
    <form method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <?php
  if ($success) {
    echo "<div class='error'>Signup Successfull</div>";
  }
  if ($unsuccess) {
    echo "<div class='error'>Email already exists</div>";
  }

  ?>
  <button type="submit" class="btn btn-primary">SignUp</button>
  
  <div>Already have an account?
    <a href="login.php">Login</a>
  </div>
</form>

    </div>
  </body>
</html>