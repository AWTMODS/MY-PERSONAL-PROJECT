<?php




include("connection.php");
if(isset($_post['submit'])){


      $email = $_post['email'];
      $password = $_post['password'];


      $sql = "SELECT * FROM details WHERE email = '$email' and password='$password";
      $result=mysqli_query($conn,$sql);
      $num = mysqli_num_rows($result);



      if($num > 0){

            header("location:welcome.php");

            echo'<script>alert("Email Already Existed")<\script>';
      }

      else{


           echo'<script>alert("Invaild email / password")<\script>';
      }

}


?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="main">
      <form action="" method="post">
      <h1>SIGNUP</h1>
      <input type="email" name="email" placeholder="Enter your Email"><br>
      <input type="password" name="password" placeholder="Enter your password"><br>
      <button type="submit" name="submit">LOGIN</button><br><br> dont Have an Account ?&nbsp;<a href="signup.php">signup here</a>
    </form>
    </div>
</body>
</html>