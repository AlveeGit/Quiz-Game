<?php

session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
    <title>
        Quiz Game
    </title>
    <link rel="stylesheet" type="text/css"href="mainpage.css"
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    
    </head>
    <style type="text/css"></style>
    <body>
    <a href="logout.php">Logout</a>
<?php echo $user_data['fname']; ?>
         <!-- Navigation -->
      <div class="navbar">
      <a href="#home">Home</a>
      <a href="#news">Member</a>
      <a href="#news">How it Works</a>
      <div class="dropdown">
        <button class="dropbtn">Create a Quize
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="easyquestion.php">Easy</a>
          <a href="easyquestion.php">Medium</a>
          <a href="easyquestion.php">Hard</a>
        </div>
      </div>
    </div>
        
        <div class="header">
            <h1> Questionnaires that return personalized advice </h1>
            <P>Quiz maker helps you create surveys, quizzes, and assessments that return personalized advice in the final screen, through email, or in a branded PDF report. </P>
        </div>
        <!--------------------------------------------
        <div class="row">
            <div class="side">
                <h2>About Me</h2>
                <h2>HTML Image</h2>
                <img src=".jpg" alt="Trulli" width="500" height="333">
                <div class="fakeimg"style="height: 200px;">Image</div>
                <p></p>
                <h3>About More..</h3>
                <p>Join our community and get access to:</p>
                <p> 
                <div class="fakeimg" style="height:60px;">Image</div><br>
                <div class="fakeimg" style="height:60px;">Image</div><br>
                <div class="fakeimg" style="height:60px;">Image</div>
            </div>
            ----------------------------------------->
            <div class="main">
                <h2>Why should you make a Quiz?</h2>
                <img class="main" src="Quizzez.jpg"
                style="width:30%"></div>
                
                
                
                 <br><br><br><p>    
                One word: growth. And there’s two kinds of it.</p>
                 <p>   
                1) Business growth—entrepreneurs growing by   
                     acquiring and retaining customers, and</p><br>
                     <p>2) personal or professional growth—teachers or corporate trainers helping people with new knowledge and skills.</p><br>
                <p>
                    An online quiz maker is a useful tool for facilitating both kinds of growth. How? Marketers can use quizzes as part of a social media marketing strategy to generate brand awareness or to drive engagement. Organizations also use quizzes to strengthen lessons from onboarding or training. Project management software platforms, like Wrike, create quizzes for customers after product tutorials. As a result they reduced product training time by 70%.</p>
                <p>
                    Teachers and trainers can create a quiz to make lessons more interactive and engaging. It’s been researched and proven that regular quizzes—not to be graded or evaluated (this is key)—boost memory retention, drive engagement, and make learning fun. More on this in a bit.</p>
                <!-------------------------------------
                <header class="bc-list-item-title-header">
                    <h2 class="bc-list-item-title-header">
                       </h2>
                    <p>Explore our collection to discover the various ways you can read, borrow and learn with the Library.</p>
                </header>
            
                <header class="bc-list-item-title-header">
                    <h2 class="bc-list-item-title-header">
                        The Library in your pocket</h2>
                    <p>Read anywhere, anytime. Have a library that moves with you in your pocket; starts at BDT 1500.</p>
                </header>
                
                <h5>Title description, Sep 2, 2017</h5>
                <div class="fakeimg" style="height:200px;">Image</div>
                <p>Some text..</p>
                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            </div>
        ----------------------------------------------------->
            <div class="footer">
            <h1> Don't stop now. Integrations are the cherry on top </h1>
            <P>Whether you’re using quizzes to stimulate learning and engagement in your classroom or to generate leads for your business, integrations help you do even more with the data you collect. Here are just a few ideas about what you could do once people have hit Submit on your quiz. </P>
        </div>
            
    </body>
</html>