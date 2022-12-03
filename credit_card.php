<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Credit_Debit.css">

</head>
<body>

<div class="container">

    <div class="card-container">

        <div class="front">
            <div class="image">
                <img src="chip.png" alt="">
                <img src="visa.png" alt="">
            </div>
            <div class="card-number-box">#### #### #### ####</div>
            <div class="flexbox">
                <div class="box">
                    <span>card holder</span>
                    <div class="card-holder-name">full name</div>
                </div>
                <div class="box">
                    <span>expires</span>
                    <div class="expiration">
                        <span class="exp-month">mm</span>
                        <span class="exp-year">yy</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="back">
            <div class="stripe"></div>
            <div class="box">
                <span>cvv</span>
                <div class="cvv-box"></div>
                <img src="visa.png" alt="">
            </div>
        </div>

    </div>

    <form action="" method="GET">
        <div class="inputBox">
            <span>card number</span>
            <input type="text" maxlength="19" class="card-number-input" id="cardno" name = "card_number">
            <p><em>Enter the number with Spacing or Hyphens</em></p>
        </div>
        <div class="inputBox">
            <span>card holder</span>
            <input type="text" maxlength="30" class="card-holder-input" id="cardhol" name = "card_holder">
        </div>
        <div class="flexbox">
            <div class="inputBox">
                <span>expiration mm</span>
                <select name="exp_month" id="exm" class="month-input">
                    <option value="month" selected disabled>month</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
            <div class="inputBox">
                <span>expiration yy</span>
                <select name="exp_year" id="exy" class="year-input">
                    <option value="year" selected disabled>year</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                </select>
            </div>
            <div class="inputBox">
                <span>cvv</span>
                <input type="text" maxlength="3" class="cvv-input" id ="cvvno" name = "cvv">
            </div>
        </div>
        <input type="submit" value="submit" id = "entry" class="submit-btn" name = "submit" >
    </form>
</div>
<script src="Credit_Debit.js"></script>
<script : src = "app.js"></script>
</html>
<?php
    include("connections.php");
    include("Login/functions.php");
    // $user_data = check_login($conn);
    // error_reporting(0);
    // $user = $_SESSION["firstname"];
    // echo $user;
    //$query1 = mysql_query("select * from singupinfo");

    $cn=$_GET['card_number'];
    $ch=$_GET['card_holder'];
    $em=$_GET['exp_month'];
    $ey=$_GET['exp_year'];
    $cvv=$_GET['cvv'];

     $user_id = random_num(10);
    
     $query="INSERT INTO CREDIT_DETAILS VALUES ('$user_id','$cn','$ch','$em','$ey','$cvv')";
     $data=mysqli_query($conn,$query);

    if($data)
    {
        echo "Data inserted into Database";
        header("Location: http://localhost/Credit%20Card/display.php");
    }
     else
    {
        echo "Data failed to insert into Database";
     }
    
?> 