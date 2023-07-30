<?php

require 'config.php';

if(isset($_POST['button'])){
    $adminname = $_POST["adminname"];
    $email = $_POST["email"]; 
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $phonenumber = $_POST["phonenumber"];
    $address = $_POST["address"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];

    // $password=password_hash($password, PASSWORD_DEFAULT);

         $duplicate = mysqli_query($con, "SELECT * FROM admin_reg WHERE email = '$email' ");
         if(mysqli_num_rows($duplicate ) > 0){
             echo
             "<script> alert('Username or Email Has Already Taken'); </script>";
         }
         else{
            if($password == $confirmpassword){
                $query = "INSERT INTO admin_reg (adminname, email, age, gender, dob, phonenumber, address, password)
                VALUES('$adminname', '$email', '$age', '$gender', '$dob', '$phonenumber', '$address', '$password')";
                $result = mysqli_query($con, $query);

        if( $result){
             echo
             "<script> alert('Registration Successful'); </script>";
         }
         else{
             echo 
             "<script> alert('Something went wrong !'); </script>";
         }
        }else{
            echo 
             "<script> alert('Password mismatch !'); </script>";
        }
    }
}
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
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
      max-width: 600px;
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
    input[type="number"],
    input[type="date"],
    select,
    input[type="email"],
    input[type="password"],
    input[type="confirmpassword"]  {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
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
    <h1>Admin Registration Page</h1>
  </header>
  <main>
  <form class="register" action="" method="POST">
      <label for="username">Username</label>
      <input type="text" id="username" name="adminname" placeholder="Enter username" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Enter email" required>

      <label for="age">Age</label>
      <input type="number" id="age" name="age" placeholder="Enter age" required>

      <label for="dob">Date of Birth</label>
      <input type="date" id="dob" name="dob" required>

      <label for="gender">Gender</label>
      <select id="gender" name="gender" required>
        <option value="">Select gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
      </select>

      <label for="phone">Phone Number</label>
      <input type="text" id="phone" name="phonenumber" placeholder="Enter phone number" required>

      <label for="address">Address</label>
      <input type="text" id="address" name="address" placeholder="Enter address" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter password" required>

      <label for="confirmpassword">Confirm Password</label>
      <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Enter confirmpassword" required>

      <button class="submit-btn" type="submit" name="button">Register</button>
    </form>
  </main>
</body>
</html>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Admin Registration</h1>
    <form class="register" action="" method="POST">
        <div class="user-details">
           <div class ="inputs">
               <label class="details">Name</label> 
               <input type="text" class="adminname" name="adminname" placeholder="" id="adminname" required="">
               </div><br>
       
               <div class ="inputs">
               <label class="details">Email ID</label> 
               <input type="email" class="email" name="email" id="email" placeholder="" required="">
           </div><br>

           <div class ="inputs">
              <label class="details">Age</label>
              <input type="number" class ="age" name="age" id="age" placeholder="" required="">
           </div><br>
       
           <div id ="flex" class ="category">
               <label class="gend">Gender</label>
               <input type="radio" name="gender" value="Male" class="gender" id="gender">Male
               <input type="radio" name="gender" value="Female" class="gender" id="gender">Female
            </div>
            </div><br>

           <div class ="inputs">
               <label class="details">Date of Birth</label>
               <input type="date" class ="dob" name="dob" id="dob" placeholder="" required="">
               </div><br>

            <div class ="inputs">
               <label class="details">Phonr Number</label>
               <input type="number" class="phonenumber" name="phonenumber" id="phonenumber" placeholder="" required="">
           </div><br>
                   
            <div class ="inputs">
               <label class="details">Address</label>
               <textarea type="text" class="address" name="address" id="address" placeholder="" required=""></textarea>
           </div><br>
       
           <div class ="inputs">
               <label class="details" id="add">Passworrd</label>
               <input type="password" class="password" name="password" id="password" placeholder="" required=""></input>
               </div><br>
       
               <div class ="inputs">
               <label class="details">Confirm Password</label>
               <input type="password" class="confirmpassword" name="confirmpassword" placeholder="" required=""></input>
           </div><br>
       
           <div class ="inputs">   
           <button name="button" class="button" value="submit">Register</button>
           </div>
           </div>
         </form>
       </body>
       </html> -->