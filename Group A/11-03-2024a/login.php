<?php
  include 'connect.php';
  $success = 0;
  $unsuccess = 0;
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM accounts WHERE email='$email'";
    $result = mysqli_query($connect, $sql);
if ($result) {
  if (mysqli_num_rows($result)>0) {
      // check password
    //get password in db
    $row = mysqli_fetch_assoc($result);
    $password_hash = $row['password'];
    //compare password from user with the hash in the db
    if (password_verify($password, $password_hash)) {
      $success = 1;
    } else{
      $unsuccess = 1;
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
    <title>Login</title>
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
    <h1>Login</h1>
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
    if($success) {
    echo "<div class='error'>Login Successfull</div>";
  }
  if($unsuccess) {
    echo "<div class='error'>Invalid login</div>";
  }
  ?>
  <button type="submit" class="btn btn-primary">Login</button>
  
  <div>Don't have an account?
    <a href="signup.php">Signup</a>
  </div>
</form>

    </div>
  </body>
</html>