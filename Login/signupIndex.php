<?php 
session_start();

  include("connections.php");
  include("functions.php");
  

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //something was posted
        
        $email = $_POST['email'];
        $password = $_POST['pwd'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];

        echo $email;
        echo $firstname;
       
    
       
    if(!empty($email) && !empty($password) &&  !is_numeric($email) )
    {

      echo "in if block";

      //save to database
            $user_id = random_num(10);
          
      $query = "insert into signup ( user_id ,firstname , lastname ,   email , password) values ( '$user_id' ,'$firstname','$lastname', '$email' , '$password')" ;
            $user_id = random_num(12);
           

      mysqli_query($conn , $query); 


      header("Location: http://localhost/Credit%20Card/Login/index1.php");
           
      die;

    }
    else
    {
            echo "in else block";
            //function_alert("Enter Valid Information !!");
            header("Location: http://localhost/Credit%20Card/Login/signupIndex.php");
    }
  }
?>
<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<title> Registration or Sign Up form in HTML CSS | CodingLab </title>-->
    <link rel="stylesheet" href="SignupCSS.css">
   </head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <form action="#" method = "POST">
      <div class="input-box">
        <input type="text" placeholder="Enter your first name" name="firstname" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your last " name="lastname" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your email" name="email" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Create password" name="pwd" required>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="http://localhost/Credit%20Card/Login/index1.php">Login now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>



