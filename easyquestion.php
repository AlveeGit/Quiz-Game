<?php

session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>

    <head>
        <title>Question Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            
            background-color: #66ff66;
            width : 300px;
            
            border: 10px dotted black;
            border-radius: 10%;
            padding: 20px;
            margin: auto

         }

         pre
         {
            text-align: left;
         }
         input[type=submit] {
  width: 25%;
  background-color: blue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

         p
         {
            text-align:left;
            border:2px double blue;
            background-color: #e6b3b3;
         }



         </style>
    </head>
<body>

	<form action="score.php" method="POST" >
<div>
  <h3>1. What is the output of the below c code?</h3>
    <pre>
   #include&lt;stdio.h> 
   main(){
   int x = 5;
   if(x=5){ 
   if(x=5) printf("Fast");} 
   printf("learning");}
   </pre>

      <br/>
    <p>
    <input type="radio" id="op1.1" name="q1"  value="10"  required>
       <label for="op1.1" >1. Fastlearning</label><br/>

    <input type="radio" id="op1.2" name="q1"  value="0">
       <label for="op1.2" >2. learning</label><br/>

    <input type="radio" id="op1.3" name="q1"  value="0">
       <label for="op1.3" >3. learningFast</label> <br/>

    <input type="radio" id="op1.4" name="q1"  value="0">
     <label for="op1.4" >4. Fast</label> <br/>
   </p>
</div>

<br/><br/>
<div>
<h3>2. What is the output of the below c code?</h3>
    <pre>
#include&lt;stdio.h> 
main(){
int i;
for(i=10;i>0;i--)
{printf("%d ",i);}}
</pre>
<br/>
<p>
    <input type="radio" id="op2.1" name="q2"  value="0"  required>
       <label for="op2.1">1. 10 9 8 7 6 5 4 3 2 1 0 </label><br/>

    <input type="radio" id="op2.2" name="q2"  value="0">
       <label for="op2.2">2. 9 8 7 6 5 4 3 2 1</label><br/>

    <input type="radio" id="op2.3" name="q2"  value="10">
       <label for="op2.3">3. 10 9 8 7 6 5 4 3 2 1 </label> <br/>

    <input type="radio" id="op2.4" name="q2"  value="0">
     <label for="op2.4">4. 9 8 7 6 5 4 3 2 1 0 </label> <br/>
     </p>
   </div>
     <br/>


	<input type="submit" value="Submit">
</form>
	
 

</body>
</html>