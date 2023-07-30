<?php

require 'config.php';

error_reporting(E_ERROR | E_PARSE);

if(isset($_POST['button'])){
    $email = $_POST["email"];
    $password = $_POST["password"];

         $result = mysqli_query($con, "SELECT * FROM admin_reg WHERE email = '$email' ");
         $row = mysqli_fetch_assoc($result);
         if( $row['email'] == $email){
         if(mysqli_num_rows($result) > 0){
          
         $result = mysqli_query($con, "SELECT * FROM admin_reg WHERE password = '$password' ");
         $row = mysqli_fetch_assoc($result);
         if($password == $row['password']){
            $_SESSION["adminname"] = $row["adminname"]; 
            header("Location: marks_entering.php");
   
        }else{
            echo "<script> alert('Wrong Password') </script>";
        }
    }
}
    else{
        echo "<script> alert('Id not Registered') </script>";
    }
}
// else{
//     echo "<script> alert('Something went wrong') </script>";
//  }

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 10px;
      text-align: center;
    }

    main {
      max-width: 400px;
      margin: 20px auto;
      background-color: #fff;
      border-radius: 5px;
      padding: 20px;
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    }

    h1 {
      text-align: center;
      margin-top: 0;
    }

    form {
      margin-top: 20px;
    }

    label {
      display: block;
      margin-bottom: 10px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 94%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .submit-btn {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: #fff;
      font-size: 16px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s;
      margin-top: 20px;
    }

    .submit-btn:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>
  <header>
    <h1>Admin Login</h1>
  </header>
  <main>
  <form class="register" action="" method="POST">
          <!-- <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Enter username" required> -->

      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Enter email" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter password" required>

      <button class="submit-btn" type="submit" name="button">Login</button>
    </form>
  </main>
</body>
</html>