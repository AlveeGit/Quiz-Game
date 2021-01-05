
<?php

session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $email = $_POST['email'];
    $crtpwd = $_POST['crtpwd'];


    if (!empty($email) && !empty($crtpwd) )
    {
        //read from database
        $query = "select * from user_table where email = '$email' limit 1";
        $result = mysqli_query($con,$query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
             {
             $user_data = mysqli_fetch_assoc($result);
             if($user_data['password']== $password)
             {
                 $_SESSION['email'] = $user_data['email'];
                header("Location: index.php");
                die;
             }
             }
        }
        else
      {
        echo"Wrong Email/Password!";
      }


    }
    else
    {
        echo"Wrong Email/Password!!";
    }


}

?>



<!DOCTYPE html>
<html>

<head>
  <title>Log In Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body style="background-color:powderblue;">



<h1 style="text-align:center;font-family:tahoma">Please Login to Continue</h1>

<form  method="POST" autocomplete="on" id="loginform">

  <p style="text-align:center";"font-family:tahoma">
    <label for="email">Email</label><br>
  <input type="text" id="email" name="email" value="">
  </p>
  <p style="text-align:center";"font-family:tahoma">
    <label for="crtpwd">Password</label><br>
  <input type="password" id="crtpwd" name="crtpwd" value="">
  </p>


    <p style="text-align:center";"font-family:tahoma">
  <input type="submit" value="Login">
  </p>
  <br>
<p style="text-align:center;font-family:tahoma">Don't Have An Account ?</p>
    <p style="text-align:center";"font-family:tahoma">
  <a href="signup.php">Singup</a>
  </p>
</form> 


</body>
</html>