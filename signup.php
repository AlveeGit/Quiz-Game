<?php

session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //soming was posted
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $crtpwd = $_POST['crtpwd'];
    $cnfpwd = $_POST['cnfpwd'];

    $query = "select * from user_table where email = '$email' limit 1";
        $result = mysqli_query($con,$query);

        if($result && mysqli_num_rows($result) < 1)
        {

        if ( !empty($fname) && !empty($lname) && !empty($email)  && !empty($phone) && !empty($gender) && !empty($crtpwd) && !empty($cnfpwd) && ($crtpwd)==($cnfpwd) )
        {
        //save to database
        $query = "INSERT Into user_table (fname, lname, email,  phone, gender, crtpwd,  cnfpwd) values('$fname', '$lname', '$email',  '$phone', '$gender', '$crtpwd',  '$cnfpwd')";

        mysqli_query($con, $query);
        header("Location: login.php");
        die;
         }
         else
        {
         echo"Password did not match!";
        }

        }
        else
        {
            echo"Email already in use!";
        }

}

?>

<!DOCTYPE html>
<html>

<head>
  <title>Register Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body style="background-color:powderblue;">

<h1 style="text-align:center;font-family:tahoma">Registration Form</h1>

<form method="POST" autocomplete="on" id="regform">

  <p style="text-align:center";"font-family:tahoma">
  <label for="fname">First name</label><br>
  <input type="text" id="fname" name="fname" placeholder="Johhny" required><br>
  </p>
  <p style="text-align:center";"font-family:tahoma">
  <label for="lname">Last name</label><br>
  <input type="text" id="lname" name="lname" placeholder="Depp" required><br>
  </p>
  <p style="text-align:center";"font-family:tahoma">
    <label for="email">Email</label><br>
  <input type="email" id="email" name="email" placeholder="example@gmail.com" required><br>
  </p>
  <p style="text-align:center";"font-family:tahoma">
    <label for="phone">Phone Number</label><br>
  <input type="tel" id="phone" name="phone" placeholder="01xxxxxxxxx" pattern="01[0-9]{9}" maxlength="11" required><br>
  </p>
  
  <p style="text-align:center";"font-family:tahoma">
    <label for="gender">Gender:</label>
  <select id="gender" name="gender" required>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
    <option value="Other">Other</option>
  </select>


  </p>
    <p style="text-align:center";"font-family:tahoma">
    <label for="crtpwd">Create Password</label><br>
  <input type="password" id="crtpwd" name="crtpwd" value="" required><br>
  </p>
    <p style="text-align:center";"font-family:tahoma">
    <label for="cnfpwd">Confirm Password</label><br>
  <input type="password" id="cnfpwd" name="cnfpwd" value="" required><br>
  </p>
  <p style="text-align:center";"font-family:tahoma">
  <input type="submit" value="Signup">
  </p>
  
</form> 


<p style="text-align:center;font-family:tahoma">Already Have An Account ?</p>
  <p style="text-align:center";"font-family:tahoma">
  <a href="login.php">Log in</a>
  </p>

</body>
</html>