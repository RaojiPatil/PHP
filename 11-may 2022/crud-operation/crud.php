<?php 

include 'connect.php';

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

  $sql = "insert into `crud` (name,email,mobile,password) values('$name','$email','$mobile','$password')";

  $result = mysqli_query($con,$sql);

  if($result) {
      echo "data inserated successfully";
  } else {
    die(mysqli_error($con));
  }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD-opration</title>
  </head>
  <body>
    
  <div class="container my-5">
  <form method="post">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" placeholder="Enter your name" name="name" class="form-control">
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="text" placeholder="Enter your Email" name="email" class="form-control" >
  </div>
  <div class="mb-3">
    <label class="form-label">Mobile</label>
    <input type="number" placeholder="Enter your Mobile No" name="mobile" class="form-control"  >
  </div>
  <div class="mb-3">
    <label class="form-label">password</label>
    <input type="password" placeholder="Enter your password" name="password" class="form-control" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>  

    
  </body>
</html>