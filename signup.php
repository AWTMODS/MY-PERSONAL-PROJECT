<?php


include("connection.php");
if(isset($_post['submit'])){


      $email = $_post['email'];
      $password = $_post['password'];


      $sql = "SELECT * FROM details WHERE email = '$email'";
      $result=mysqli_query($conn,$sql);
      $num = mysqli_num_rows($result);



      if($num > 0 ){

            echo'<script>alert("Email Already Existed")<\script>';
      }

      else{


            $insert= "INSERT INTO details(email,password)VALUES('$email,$password')";
            mysqli_query($conn,$insert);
            echo'<script>alert("Signuped Sucessfully")<\script>';
            header("location:index.php");
      }

}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
      <form action="" method="post">
      <h1>SIGNUP</h1>
      <input type="email" name="email" placeholder="Enter your Email"><br>
      <input type="password" name="password" placeholder="Enter your password"><br>
      <button type="submit" name="submit">SIGNUP</button><br><br>Have an Account ?&nbsp;<a href="index.php">login here</a>
    </form>
    </div>
</body>
</html>