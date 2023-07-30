<?php

require 'config.php';

if(isset($_POST['button'])){
    $fname = $_POST["fname"];
    $regnumber = $_POST["regnumber"];
    $dob = $_POST["dob"];
    $phonenumber = $_POST["phonenumber"];
    $subject1 = $_POST["subject1"];
    $subject2 = $_POST["subject2"];
    $subject3 = $_POST["subject3"];
    $subject4 = $_POST["subject4"];
    $subject5 = $_POST["subject5"];
    $subject6 = $_POST["subject6"];
    $subject7 = $_POST["subject7"];
    $subject8 = $_POST["subject8"];
    $subject9 = $_POST["subject9"];
    $subject10 = $_POST["subject10"];
    $gpa = $_POST["gpa"];
    $cgpa = $_POST["cgpa"];
    
            $duplicate = mysqli_query($con, "SELECT * FROM stu_marks WHERE regnumber = '$regnumber' ");
            if(mysqli_num_rows($duplicate ) > 0){
                echo
                "<script> alert('Already Marks Added'); </script>";
            }
            else{
                $query = "INSERT INTO stu_marks (fname, regnumber, dob, phonenumber, subject1, subject2, subject3, subject4, subject5, subject6, subject7, subject8, subject9, subject10, gpa, cgpa)
                 values('$fname', '$regnumber', '$dob', ' $phonenumber', '$subject1', '$subject2', '$subject3', '$subject4', '$subject5', '$subject6', '$subject7', '$subject8', '$subject9', '$subject10', '$gpa', '$cgpa')";
                 $result = mysqli_query($con, $query);

                 $marks_result = mysqli_query($con, "SELECT * FROM stu_marks ");
                 $row = mysqli_fetch_assoc($marks_result);

                //  $_SESSION["regnumber"] = $row['regnumber'];

         if( $result)
         { 
             echo
             "<script> alert('Marks Added Successfully'); </script>";
         }
         else{
             echo 
             "<script> alert('Enter Correct Inputs OR student not registered !'); </script>";
         }
    }
    }else{
        "<script> alert('Check Connection Or Something Went Wrong !!'); </script>";
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks Registration</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }
      
      .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
      }
      
      h1 {
        text-align: center;
      }
      
      form {
        display: flex;
        flex-direction: column;
      }
      
      label, input {
        margin-bottom: 10px;
      }
      
      table {
        border-collapse: collapse;
        width: 100%;
      }
      
      th, td {
        border: 1px solid #ccc;
        padding: 8px;
      }
      
      th {
        background-color: #f2f2f2;
      }
      
      button {
        background-color: #4CAF50;
        color: white;
        padding: 10px;
        border: none;
        cursor: pointer;
      }
      
      button:hover {
        background-color: #45a049;
      }
      
  </style>
</head>
<body>
  <div class="container">
    <h1>Marks Registration</h1>
    <form class="register" action="" method="POST">
      <label for="name">Student Name:</label>
      <input type="text" id="name" name ="fname" required>
      
      <label for="regNumber">Registration Number:</label>
      <input type="text" id="regNumber" name = "regnumber" required>
      
      <label for="dob">Date of Birth:</label>
      <input type="date" id="dob" name = "dob" required>
      
      <label for="phoneNumber">Phone Number:</label>
      <input type="tel" id="phoneNumber" name = "phonenumber" required>
      
      <h2>Subject Marks</h2>
      <table>
        <thead>
          <tr>
            <th>Subject</th>
            <th>Marks</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><label class="student]">INTERNET AND WEB TECHNOLOGY</label></td>
            <td><input type="text" class="marks" name="subject1" required></td>
          </tr>
          <tr>
            <td> <label class="student]">CONSTITUTION OF INDIA</label> </td>
            <td><input type="text" class="marks" name="subject2" required></td>
          </tr>
          <tr>
            <td><label class="student]">THEORY OF COMPUTATION</label></td>
            <td><input type="text" class="marks" name="subject3" required></td>
          </tr>
          <tr>
            <td><label class="student]">GRAPHICS AND VISUALIZATION</label> </td>
            <td><input type="text" class="marks" name="subject4" required></td>
          </tr>
          <tr>
            <td><label class="student]">OBJECT ORIENTED ANALYSIS AND DESIGN</label></td>
            <td><input type="text" class="marks" name="subject5" required></td>
          </tr>
          <tr>
            <td><label class="student]">JAVA PROGRAMMING</label></td>
            <td><input type="text" class="marks" name="subject6" required></td>
          </tr>
          <tr>
            <td><label class="student]">INTERPRETATION,ANALYSIS AND CRITICAL THINKING</label></td>
            <td><input type="text" class="marks" name="subject7" required></td>
          </tr>
          <tr>
            <td><label class="student]">GRAPHICS AND VISUALIZATION LABORATORY</label></td>
            <td><input type="text" class="marks" name="subject8" required></td>
          </tr>
          <tr>
            <td><label class="student]">OBJECT ORIENTED ANALYSIS AND DESIGN LABORATORY</label></td>
            <td><input type="text" class="marks" name="subject9" required></td>
          </tr>
          <tr>
            <td><label class="student]">INTERVIEW SKILLS AND SOFT SKILLS</label></td>
            <td><input type="text" class="marks" name="subject10" required></td>
          </tr>
        </tbody>
      </table>
      <br>
      <label for="gpa">GPA:</label>
      <input type="number" id="gpa" name = "gpa" required step ="0.01" max = "100.00" value = "0">
      
      <label for="cgpa">CGPA:</label>
      <input type="number" id="cgpa" name = "cgpa" required step ="0.01" max = "100.00" value = "0">
      
      <button type="submit" name = "button" >Submit</button>
    </form>
  </div>
  
  <script src="script.js">
    document.getElementById("registrationForm").addEventListener("submit", function (event) {
        event.preventDefault();
      
        // Gather form data
        const name = document.getElementById("name").value;
        const regNumber = document.getElementById("regNumber").value;
        const dob = document.getElementById("dob").value;
        const phoneNumber = document.getElementById("phoneNumber").value;
      
        // Gather subject marks data
        const subjectInputs = document.querySelectorAll(".subject");
        const marksInputs = document.querySelectorAll(".marks");
      
        const subjects = [];
        for (let i = 0; i < subjectInputs.length; i++) {
          const subject = subjectInputs[i].value;
          const marks = parseInt(marksInputs[i].value, 10);
          subjects.push({ subject, marks });
        }
      
        // Get GPA and CGPA
        const gpa = document.getElementById("gpa").value;
        const cgpa = document.getElementById("cgpa").value;
      
        // Do further processing or send the data to a server here
        // For this example, we'll just log the data to the console
      
        console.log("Student Name:", name);
        console.log("Registration Number:", regNumber);
        console.log("Date of Birth:", dob);
        console.log("Phone Number:", phoneNumber);
        console.log("Subject Marks:", subjects);
        console.log("GPA:", gpa);
        console.log("CGPA:", cgpa);
      });
      
  </script>
</body>
</html>