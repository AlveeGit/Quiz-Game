<?php


function check_login($con)
{
    if(isset($_SESSION['email']))
    {
        $email = $_SESSION['email'];
        $query = "select * from user_table where email = '$email' limit 1";
        $result = mysqli_query($con,$query);

        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }


    }

    //redirect to login
    header("Location: login.php");
    die;

}

?>