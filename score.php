<?php

session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];

    $score=$q1+$q2;
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ScoreBoard</title>


    <style>
         body
         {
            text-align: center;
            background-image: url("quizBG.jpg");
            background-repeat: no-repeat;
            background-size: 100% 100%;
            background-attachment: fixed;
         }


         div
         {
             font-size : 30px;
             color : #ffb3b3;
            width: 100px;
  height: 100px;
  background-color: #0066ff;
  animation-name: example;
  animation-duration: 6s;
            
            border: 10px dashed white;
            border-radius: 25%;
            padding: 20px;
            margin: auto;

         }

         @keyframes example {
  0%   {background-color: #0066ff;}
  25%  {background-color: #99cc00;}
  50%  {background-color: #800000;}
  100% {background-color: #003366;}
}

         

         </style>
</head>
<body>
    <br/><br/><br/><br/><br/><br/>
    <br/><br/><br/><br/><br/><br/>
    


        <div>
           <?php echo"Your Score is $score!!"; ?>
        </div>
</body>
</html>