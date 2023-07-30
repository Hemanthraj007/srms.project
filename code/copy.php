<?php
session_start();


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "srms";
if(isset($_POST["submit"])){
    $fname = $_POST["fname"];
    $registernumber = $_POST["registernumber"];
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


$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

    $duplicate = mysqli_query($conn, "SELECT * FROM stu_result WHERE fname = '$fname' OR email = '$email' ");
    if(mysqli_num_rows($duplicate) > 0){
        echo
        "<script> alert('Username or Email Has Already Taken'); </script>";
    }
    else{
        if($password == $confirmpassword ){
        $query = "INSERT INTO stu_result values('$fname','$registernumber','$dob','$gender','$age','$email','$campus','$phonenumber','$address','$password','$confirmpassword')";
    mysqli_query($conn, $query);
    echo
    "<script> alert('Registration Sucessful'); </script>";
}
else{
      echo
      "<script> alert('Password Does Not match!'); </script>";
}
    }
}



<?php

    $fname = $_POST["fname"];
    $registernumber = $_POST["registernumber"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $email = $_POST["email"]; 
    $campus = $_POST["campus"];
    $phonenumber = $_POST["phonenumber"];
    $department = $_POST["department"];
    $address = $_POST["address"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "srms";
     $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname) or die(mysql_error());
     echo
     "<center> Student Registration Completed </center>";
        $str = "INSERT INTO stu_result values('$fname','$registernumber','$dob','$gender','$age','$email','$campus','$phonenumber','$department','$address','$password','$confirmpassword')";
?>


<?php

$fname = $_POST["fname"];
$registernumber = $_POST["registernumber"];
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
$confirmpassword=password_hash($confirmpassword, PASSWORD_DEFAULT);

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "srms";



// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $SELECT = "SELECT email From stu_result Where email = ? Limit 1";
  $INSERT = "INSERT Into stu_result ('$fname','$registernumber','$dob','$gender','$age','$email','$campus','$phonenumber','$address','$password','$confirmpassword')";

//Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

     //checking username
      if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssssssssss",$fname,$registernumber,$dob,$gender,$age,$email,$campus,$phonenumber,$address,$password,$confirmpassword);
      $stmt->execute();
      echo "Login sucessfully";
     } else {
      echo "Invalid Email or Password";
     }
     $stmt->close();
     $conn->close();
    }

?>
