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