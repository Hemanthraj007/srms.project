<?php

require 'config.php';

if(isset($_POST['button'])){
    $fname = $_POST["fname"];
    $regnumber = $_POST["regnumber"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $email = $_POST["email"]; 
    $campus = $_POST["campus"];
    $phonenumber = $_POST["phonenumber"];
    // $department = $_POST["department"];
    $address = $_POST["address"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];

    $password=password_hash($password, PASSWORD_DEFAULT);

         $duplicate = mysqli_query($con, "SELECT * FROM stu_reg WHERE fname = '$fname' OR email = '$email' ");
         if(mysqli_num_rows($duplicate ) > 0){
             echo
             "<script> alert('Username or Email Has Already Taken'); </script>";
         }
         else{
                $query = "INSERT INTO stu_reg (fname, regnumber, dob, gender, age, email, campus, phonenumber, address, password)
                 values('$fname',$regnumber,'$dob','$gender',$age,'$email','$campus',$phonenumber,'$address','$password')";
                 $result = mysqli_query($con, $query);

                 $result = mysqli_query($con, "SELECT * FROM stu_reg ");
                 $row = mysqli_fetch_assoc($result);
                 
                 $_SESSION["regnumber"] = $row["regnumber"]; 

         if( $result)
         { 
             echo
             "<script> alert('Registration Successful'); </script>";
         }
         else{
             echo 
             "<script> alert('Something went wrong !'); </script>";
         }
    }
}
    // $query = "INSERT INTO stu_result (fname, regnumber, dob, gender, age, email, campus, phonenumber, address, password)
    // values('$fname',$regnumber,'$dob','$gender',$age,'$email','$campus',$phonenumber,'$address','$password')";
    // $result = mysqli_query($con, $query);
    // if( $result)
    // { 
    //     echo
    //     "<script> alert('Registration Sucessful'); </script>";
    // }
    // else{
    //     echo 
    //     "<script> alert('Enter Correct Inputs !'); </script>";
    // }

// if(!$con){
//     die(mysqli_error());
// }
// echo
//  'success'
?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result page</title>
    <style>
    body{
        background-image: url("images/background-1.jpg");
    
    background: url(images/)no-repeat center center fixed;
    background-attachment: fixed;  
    background-size: cover;
    }   
        #header{
        text-align:right;
        margin-top: -90px;
        }
         .add{
        
        }
       .address{
        width: 350px;
        height: 75px;
       }
        img{
            height:10%px;
            width:10%;
/* margin-left:24px;
padding-bottom:20px; */
       }
       .first-heading{
        margin-left:160px;
        margin-top:-100px;
       }
       .second-heading{
        /* text-align:center; */
       }
       .inputs{
        display: flex;
        align-items:center;
        margin-left:%;
        flex-wrap : wrap;
        }
        input{
            height: 20px;px;
            width:100%
            
        }
        .container{
           height:800px;
            width:60%;
            background:;
            padding:25px 30px;
            border-radius:10px;
            margin-left:20%;
        }
        .container .title{
            font-size:25px;
            font-weight:500;
        }
        .container .title::before{
            content:'';
            position:absolute;
            height:3px;
            width:35px;
            background: #9b59b6;
            /* left:0;
            bottom:0;    */
        }
        .container form .user-details{
            display:flex;
            flex-wrap: wrap;
            justify-content:space-between;
           
        }
        form .user-details .inputs{
            margin:20px 0 0 0;
            width: calc(100% / 2 - 20px);
        }
            form .user-details .category{
            margin:20px 0 0 0;
            width: calc(100% / 2 - 20px);
            display:inline;
        }
        
        .user-details .inputs .details{
            display:block;
            font-weight:500;
            margin-bottom:5px;
            font-size:20px;
        }

        #flex{
            display:flex;
            justify-content:auto;
            align-item:center;
        }

        .user-details .inputs input{
            height:30px;
            width:100%;
            outline: none;
            border-radius:5px;
            border:1px solid #ccc;
            paddig-left:15px;
            font-size: px;
        }
        .gend, .camp{
            font-weight:500;
            font-size:20px;
        }
        .container .inputs button{
            width:60%;
            padding:5px;
        }
        .last, a{
            font-weight:500;
            font-size:20px;
        }
        a{
            margin-left:30px;
            margin-top:-20px;
        }
        .address{
            margin-right:20px;
            border-radius:5px;
            /* border: 2px 2px 2px 2px  black; */
        }
        .depart{
            width :100%;
            height : 30px;
            border-radius:5px;
            margin-top : -30px;
        
        }
        
    </style>

</head>
<body>
    <div id="photo">
    <img src="images/image-2.jpg">
    <h1 class ="first-heading"> HRIT College</h1>
    </div>
    <div id="header">
        <h1 class="head"> HR Institute Of Technology</h1> 
        <p class="add">
            K.R.Nagar,Nallatinputhur,Kovilpatti-628501,Thoothukudi(Dt)<br>  
            E-Mail:principal.hr.edu.in    Web Page:www.hr.edu.in    contact us:6379290081. 
        </p><hr>
    </div>
    <div class="container">
       <div class="title">
            Student Registration
    </div><br>
  <form class="register" action="" method="POST">
 <div class="user-details">
    <div class ="inputs">
        <label class="details">Full Name</label> 
        <input type="text" class="fname" name="fname" placeholder="" id="fname" required="">
        </div>

        <div class ="inputs">
        <label class="details">Register Number</label> 
        <input type="number" class="regnumber" name="regnumber" id="regnumber" placeholder="" required="">
    </div>

    <div class ="inputs">
        <label class="details">Date of Birth</label>
        <input type="date" class ="dob" name="dob" id="dob" placeholder="" required="">
        </div>

        <div class ="inputs">
        <label class="details">Age</label>
        <input type="number" class ="age" name="age" id="age" placeholder="" required="">
        </div>

        <div class ="inputs">
        <label class="details">Email ID</label>
        <input type="email" class="email" name="email" id="email" placeholder="" required="">
    </div>

    <div class ="inputs">
        <label class="details">Mobile No</label>
            <input type="number" class="phonenumber" name="phonenumber" id="phonenumber" placeholder="" required="">
    </div>

    <div id ="flex" class ="category">
        <label class="gend">Gender</label>
        <input type="radio" name="gender" value="Male" class="gender" id="gender">Male
        <input type="radio" name="gender" value="Female" class="gender" id="gender">Female
    </div>

    <div id="flex" class ="category">
        <label class="camp">Campus</label>
        <input type="radio" name="campus" value="MEC" id="mec">MEC
        <input type="radio" name="campus" value="MIET" id="miet">MIET
        <input type="radio" name="campus" value="MIT" id="mit">MIT
        <input type="radio" name="campus" value="MCE" id="mce">MCE
        </div>

    <div class="inputs">
        <label class="details">Department</label>
        <select class="depart" type="department" name="department" >
            <option value="" selected>select..</option>
            <option value="CSE">Computer Science and Engineering</option>
            <option value="ECE">Electronics and Communication Engineering</option>
            <option value="EEE">Electrical and Electronics Engineering</option>
            <option value="CIVIL">Civil Engineering</option>
            <option value="MECH">Mechanical Engineering</option>
            </select>
            </div>
            
        <div class ="inputs">
        <label class="details">Address</label>
        <textarea type="text" class="address" name="address" id="address" placeholder="" required=""></textarea>
    </div>

    <div class ="inputs">
        <label class="details" id="add">Passworrd</label>
        <input type="password" class="password" name="password" id="password" placeholder="" required=""></input>
        </div>

        <div class ="inputs">
        <label class="details">Confirm Password</label>
        <input type="password" class="confirmpassword" name="confirmpassword" placeholder="" required=""></input>
    </div>

    <div class ="inputs">   
    <button name="button" class="submit" value="submit">Register</button>
    </div>
    <div class ="inputs">
    <h5 class="last">Already Registered !</h5>
    <div class ="inputs">
    <a href="result_login.php">Get Result</a>
    </div>
    </div>
    </div>
  </form>
</body>
</html>