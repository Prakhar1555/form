<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    
    $email=$_POST['email'];
    $password=$_POST['password'];
   
$server="localhost";
$user="root";
$password="";
$database="contacts";
$conn=mysqli_connect($server,$user,$password,$database);
if(!$conn)
{
    die("Error".mysqli_connect_error());
}
else{
    echo "Successfully Connected";
    $sql="INSERT INTO `contactus` (`email`, `password`, `dt`) VALUES ( '$email', '$password', 'current_timestamp(6).000000');";
    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        die("Error");
    }
    else
    {
        echo '<div class="alert alert-success" role="alert">
        A simple success alert—check it out!
      </div>';
    }
}

    
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Fill the Form</h1>
        <form action="/form/form.php" method="post">
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>