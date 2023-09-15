<?php


include("connection.php");
if(isset($_post['submit'])){


      $email = $_post['email'];
      $password = $_post['password'];


      $sql = "SELECT * FROM details WHERE email = '$email' and password='$password";
      $result=mysqli_query($conn,$sql);
      $num = mysqli_num_rows($result);



      if($num > 0 ){

            header("location:welcome.php");

            echo'<script>alert("Email Already Existed")<\script>';
      }

      else{


           echo'<sript>alert("Invaild email / password")<\sript>';
      }

}


?>