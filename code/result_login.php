<?php

require 'config.php';

if(isset($_POST['button'])){
    $regnumber = $_POST["regnumber"];
    $dob = $_POST["dob"];

         $result = mysqli_query($con, "SELECT * FROM stu_reg WHERE regnumber = '$regnumber' ");
         $row = mysqli_fetch_assoc($result);
         if($row){
         if(mysqli_num_rows($result) > 0){
          
         $result = mysqli_query($con, "SELECT * FROM stu_reg WHERE dob = '$dob' ");
         $row = mysqli_fetch_assoc($result);
         if($row){

            $_SESSION["regnumber"] = $regnumber;  // or $_SESSION["regnumber"] = $row["regnumber"]; 

            header("Location: result.php");

            // $result = mysqli_query($con, "SELECT * FROM stu_reg WHERE dob = '$dob' ");
            // $row = mysqli_fetch_assoc($result);
   
            // if(mysqli_num_rows($result) > 0){
            //         header("Location: hemanth.html");
            //  }    
    }else{
        echo "<script> alert('Enter Correct Register Number Or Date of birth') </script>";
    }
}
}
//         elseif($result = mysqli_query($con, "SELECT * FROM stu_reg WHERE regnumber LIKE '201031023' ")){   //else if started...
//             $row = mysqli_fetch_assoc($result);
//             if( $row['regnumber'] == $regnumber){
//             if(mysqli_num_rows($result) > 0){
        
//         $result = mysqli_query($con, "SELECT * FROM stu_reg WHERE dob LIKE '2002-06-08'  ");
//         $row = mysqli_fetch_assoc($result);
//          if( $row['dob'] == $dob){

//             header("Location: dhanushkannan.html");

//     }else{
//         echo "<script> alert('Enter Correct Register Number Or Date of birth') </script>";
//     }     
//         }
//     }
   
//         elseif($result = mysqli_query($con, "SELECT * FROM stu_reg WHERE regnumber LIKE '201031049' ")){
//             $row = mysqli_fetch_assoc($result);
//             if( $row['regnumber'] == $regnumber){
//             if(mysqli_num_rows($result) > 0){
        
//         $result = mysqli_query($con, "SELECT * FROM stu_reg WHERE dob LIKE '2002-12-09'  ");
//         $row = mysqli_fetch_assoc($result);
//          if( $row['dob'] == $dob){

//             header("Location: jayabalan.html");

//     }else{
//         echo "<script> alert('Enter Correct Register Number Or Date of birth') </script>";
//     }     
//         }
//     }
//     elseif($result = mysqli_query($con, "SELECT * FROM stu_reg WHERE regnumber LIKE '201031040' ")){
//             $row = mysqli_fetch_assoc($result);
//             if( $row['regnumber'] == $regnumber){
//             if(mysqli_num_rows($result) > 0){
        
//         $result = mysqli_query($con, "SELECT * FROM stu_reg WHERE dob LIKE '2003-04-09'  ");
//         $row = mysqli_fetch_assoc($result);
//          if( $row['dob'] == $dob){

//             header("Location: haribalan.html");

//     }else{
//         echo "<script> alert('Enter Correct Register Number Or Date of birth') </script>";
//     }     
//         }
//     }

//     elseif($result = mysqli_query($con, "SELECT * FROM stu_reg WHERE regnumber LIKE '201031134' ")){
//         $row = mysqli_fetch_assoc($result);
//         if( $row['regnumber'] == $regnumber){
//         if(mysqli_num_rows($result) > 0){
    
//     $result = mysqli_query($con, "SELECT * FROM stu_reg WHERE dob LIKE '2002-07-30'  ");
//     $row = mysqli_fetch_assoc($result);
//      if( $row['dob'] == $dob){

//         header("Location: rajesh.html");

// }else{
//     echo "<script> alert('Enter Correct Register Number Or Date of birth') </script>";
// }     
//     }
// }
// else{
//     echo "<script> alert('Student not registered') </script>";
// }    
//     }     
//         } 
//     } 
// }     //else if ending...

    else{
        echo "<script> alert('Student not registered') </script>";
     }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Login</title>
    <style>
        body
    {
        background-image: url("images/background-1.jpg");
    
    background: url(images/background-1.jpg)no-repeat center center fixed;
    background-attachment: fixed;  
    background-size: cover;
    }
    .header{
        text-align:center;
    }
    .auto{
        margin-top: -20px;
    }
    .add{
        margin-top: -10px;
    }
    .result{
            margin-left: 260px;
            margin-top: 80px;
            font-size: 30px;
            font-family: sans-serif;
        }
        .container{
            width: 400px;
            height: 290px;
            background-color: white;
            border-radius: 5%;
            margin-left: 200px;
        }
        form{
            width:25rem;
            height: 28rem;
            display: flex;
            flex-direction: column;
        }
        label{
            margin-top: 20px;
            font-size: 20px;
            margin-left: 10%;
        }
        input{
            width:80%;
            margin:5% auto;
            margin-bottom: 8%;
            border:none;
            outline: none;
            background: transparent;
            border-bottom: 1px solid black;
            opacity: .8;
        }
        button{
            width:50%;
            margin:3% auto;
            padding:2px;
        }
        .anger{
            text-align:center;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1 class="head"> HR Institute Of Technology</h1> 
        <p class ="auto">(Autonomous)</p>
        <p class="add">
            K.R.Nagar,Nallatinputhur,Kovilpatti-628501,Thoothukudi(Dt)<br>  
            E-Mail:principal.hr.edu.in    Web Page:www.hr.edu.in    contact us:6369251706. 
        </p>
    </div>
    <h2 class="result"> Results 2022 & 2023</h2>
    <div class="container">
        <form class="login" action="" method="POST">
            <label>Register Number</label>
            <input type="text" class = regnumber name="regnumber" id="regnumber" placeholder="" required="">
            <label>Date of Birth</label>
            <input type="date" class="dob" name="dob" id="dob" placeholder="" required="">
        <button class="butt" name="button">Submit</button>
        <!-- <a href="index.php" class ="anger">Student Registration</a> -->
    </div>
</body>
</html>