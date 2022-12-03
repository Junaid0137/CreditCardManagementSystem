<html>
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
</div>
</body>
<script src="Credit_Debit.js"></script>
</html>