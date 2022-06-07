<?php

include_once 'admin/dbconn.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));

   $select = mysqli_query($conn, "SELECT * FROM `user_info` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist!';
   }else{
      mysqli_query($conn, "INSERT INTO `user_info`(name, email, password) VALUES('$name', '$email', '$pass')") or die('query failed');
      $message[] = 'registered successfully!';
      header('location:login.php');
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">


</head>
<body>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>
   

<div class="container pt-5">
      <div class="card m-auto" style="width: 50rem;">
         <form action="" method="post" class="bg-light py-5">
            <h3 class="heading text-center text-primary py-2">Register Now</h3>
            <div class="form-group px-5">
               <label for="exampleInputEmail1">Name</label>
               <input type="text" name="name" class="form-control py-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
            </div>
            <div class="form-group px-5 py-3">
               <label for="exampleInputEmail1">Email address</label>
               <input type="email" name="email" class="form-control py-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
            </div>
            <div class="form-group px-5 py-3">
               <label for="exampleInputPassword1">Password</label>
               <input type="password" name="password" class="form-control py-3" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group px-5 py-3">
               <label for="exampleInputPassword2">Confirm Password</label>
               <input type="password" name="cpassword" class="form-control py-3" id="exampleInputPassword1" placeholder="Conform Password">
            </div>
            <div class="text-center py-3">
               <button type="submit" name="submit" class="btn btn-success">Register Now</button>
            </div>
            <p class="text-center">Don't have an account? <a href="login.php">Login Now</a></p>
         </form>
      </div>
   </div>

</body>
</html>