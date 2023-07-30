<?php

require 'config.php';

error_reporting(E_ERROR | E_PARSE);

$regnumber = $_SESSION["regnumber"];   
$regnumber = $_SESSION["regnumber"];

    $result = mysqli_query($con, "SELECT * FROM stu_reg WHERE regnumber = '$regnumber'");
    $stu_row = mysqli_fetch_assoc($result);


    $result = mysqli_query($con, "SELECT * FROM stu_marks WHERE regnumber = '$regnumber'");
    $marks_row = mysqli_fetch_assoc($result);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>201031044-Result</title>
</head>
<style>
    .header{
        text-align:center;
    }
    .auto{
        margin-top: -20px;
    }
    .add{
        margin-top: -10px;
    }
    table{
        margin-left: auto;
        margin-right: auto;
        width: 95%;
        font-size: px;
    }
    table,th,td{
        border: 1px solid black;
    }
    .grade{
        text-align: center;
    }
    #container{
        margin-left: auto;
        margin-right: auto;
        width: 95%;
        height: 150px;
        border: 1px solid black;
        text-decoration:dotted;
    }
    #para1{
        margin-left: 20px;
    }
    .disclaimer{
        font-weight: bold;
        margin-left: 10px;
    }
    #para2{
        margin-left: 20px;
    }
    .home{
        margin-left: 750px;
        font-size: large;
    }
</style>
<body>
    <div class="header">
        <h1 class="head"> HR Institute Of Technology</h1> 
        <p class ="auto">(Autonomous)</p>
        <p class="add">
            K.R.Nagar,Nallatinputhur,Kovilpatti-628501,Thoothukudi(Dt)<br>  
            E-Mail:principal.hr.edu.in    Web Page:www.hr.edu.in    contact us:6369251706. 
        </p>
        </div>
        <table>
            <tr>
                <td>
                    Name : <?php if(!empty($marks_row["fname"])){
                        echo $stu_row["fname"];
                        }else{
                            echo "NULL";
                        } ?>
                </td>
                <td>
                    Semester : VI
                </td>
            </tr>

            <tr>
                <td class="reg">
                    Register No : <?php if(!empty($marks_row["regnumber"])){
                        echo $stu_row["regnumber"];
                        }else{
                            echo "0";
                        } ?>
                </td>
                <td>
                    Phone No : <?php if(!empty($marks_row["phonenumber"])){
                        echo $stu_row["phonenumber"];
                        }else{
                            echo "xxxxxxxxxx";
                        } ?>
                </td>
            </tr>
        </table>
        <br>
        <table>
            <tr>
                <th>
                    Subject Code
                </th>
                <th>
                    Subject
                </th>
                <th>
                    Grade
                </th>
            </tr>
            
            <tr>
                <td class="subcode">19CS12501</td>
                <td class="sub">INTERNET AND WEB TECHNOLOGY</td>
                <td class ="grade"> <?php if(!empty($marks_row["subject1"]))
                    {echo $marks_row["subject1"];
                    }else{ 
                        echo "<script> alert('Neither Result not added nor Withheld.') </script>";
                        echo "Null";
                    } ?>
                 </td>
            </tr>

            <tr>
                <td class="subcode">19MC60001</td>
                <td class="sub">CONSTITUTION OF INDIA</td>
                <td class ="grade"> <?php if(!empty($marks_row["subject2"]))
                    {echo $marks_row["subject2"];
                    }else{
                        echo "Null";
                    } ?> 
                </td>
            </tr>

            <tr>
                <td class="subcode">19CS14501</td>
                <td class="sub">THEORY OF COMPUTATION</td>
                <td class ="grade"> <?php if(!empty($marks_row["subject3"]))
                    {echo $marks_row["subject3"];
                    }else{
                        echo "Null";
                    } ?>
                </td>
            </tr>

            <tr>
                <td class="subcode">19CS1502</td>
                <td class="sub">GRAPHICS AND VISUALIZATION</td>
                <td class ="grade"> <?php if(!empty($marks_row["subject4"]))
                    {echo $marks_row["subject4"];
                    }else{
                        echo "Null";
                    } ?>
                </td>
            </tr>

            <tr>
                <td class="subcode">19CS14503</td>
                <td class="sub">OBJECT ORIENTED ANALYSIS AND DESIGN</td>
                <td class ="grade"> <?php if(!empty($marks_row["subject5"]))
                    {echo $marks_row["subject5"];
                    }else{
                        echo "Null";
                    } ?>
                </td>
            </tr>

            <tr>
                <td class="subcode">19CS11001</td>
                <td class="sub">JAVA PROGRAMMING</td>
                <td class ="grade"> <?php if(!empty($marks_row["subject6"]))
                    {echo $marks_row["subject6"];
                    }else{
                        echo "Null";
                    } ?>
                 </td>
            </tr>

            <tr>
                <td class="subcode">19MA12501</td>
                <td class="sub">INTERPRETATION, ANALYSIS AND CRITICAL THINKING</td>
                <td class ="grade"> <?php if(!empty($marks_row["subject7"]))
                    {echo $marks_row["subject7"];
                    }else{
                        echo "Null";
                    } ?>
                 </td>
            </tr>

            <tr>
                <td class="subcode">19CS24501</td>
                <td class="sub">GRAPHICS AND VISUALIZATION LABORATORY</td>
                <td class ="grade"> <?php if(!empty($marks_row["subject8"]))
                    {echo $marks_row["subject8"];
                    }else{
                        echo "Null";
                    } ?>
                 </td>
            </tr>

            <tr>
                <td class="subcode">19CS24502</td>
                <td class="sub">OBJECT ORIENTED ANALYSIS AND DESIGN LABORATORY</td>
                <td class ="grade"> <?php if(!empty($marks_row["subject9"]))
                    {echo $marks_row["subject9"];
                    }else{
                        echo "Null";
                    } ?>
                 </td>
            </tr>

            <tr>
                <td class="subcode">19SH60002</td>
                <td class="sub">INTERVIEW SKILLS AND SOFT SKILLS</td>
                <td class ="grade"> <?php if(!empty($marks_row["subject10"]))
                    {echo $marks_row["subject10"];
                    }else{
                        echo "Null";
                    } ?>
                </td>
            </tr>
        </table>
        <br>
        <table>
            <tr>
                <td>
                    Current Semester GPA : <?php if(!empty($marks_row["gpa"]))
                    {echo $marks_row["gpa"];
                    }else{
                        echo "0.00";
                    } ?>
                </td>
                <td>
                    Over All CGPA : <?php if(!empty($marks_row["cgpa"]))
                    {echo $marks_row["cgpa"];
                    }else{
                        echo "0.00";
                    } ?>
                </td>
            </tr>
        </table>
        <br>
        <div id ="container">
            <p id ="para1">WD : Withdrawal, AB : Absent, SA : Shortage of Attendance, RA : Re-appearance, BRK : Break, UA : Absent, NR : Not Registered, WH : Withheld.</p><hr>
               <p class="disclaimer"> Disclaimer:</p><p id ="para2">The result published at www.mahendra.info is provisional only. We are not responsible for any inadvertent error that may
                have crept in the data / results being published on the Net. This is being published on the Net just for immediate information to the
                examinees. The Final Mark Sheets issued by the Authorities should only be treated authentic and final in this regard.
                </p>
        </div>
        <br>
        <a href="result_logout.php" class="home"> Logout </a>
</body>
</html>