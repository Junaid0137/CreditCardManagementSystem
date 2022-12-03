<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="css-table-18/fonts/icomoon/style.css">

        <link rel="stylesheet" href="css-table-18/css/owl.carousel.min.css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css-table-18/css/bootstrap.min.css">
    
        <!-- Style -->
        <link rel="stylesheet" href="css-table-18/css/style.css">
    </head>
    <body>
    <div class="content">
        <div class="container">
            <h2 class="mb-5">Card Details</h2>
            <div class="table-responsive custom-table-responsive">
        <table class="table custom-table">
            <thead>
            <tr scope="col">
                <th scope="col">Card Number</th>
                <th scope="col">Card Holder</th>
                <th scope="col">Exp Month</th>
                <th scope="col">Exp Year</th>
                <th scope="col">CVV</th>
            </tr>
            </thead>
            <?php
                include("connections.php");
                $query = "select * from credit_details where not card_number = 0 ";
                $data = mysqli_query($conn,$query);
                $total = mysqli_num_rows($data);
                if($total!=0)
                {
                    while($result = mysqli_fetch_assoc($data))
                    {
                        echo "
                        <tr>
                        <td>".$result['card_number']."</td>
                        <td>".$result['card_holder']."</td>
                        <td>".$result['exp_month']."</td>
                        <td>".$result['exp_year']."</td>
                        <td>".$result['cvv']."</td></tr>
                        ";
                    }
                }
            ?>
        </table></div></div></div>
        <script src="css-table-18/js/jquery-3.3.1.min.js"></script>
        <script src="css-table-18/js/popper.min.js"></script>
        <script src="css-table-18/js/bootstrap.min.js"></script>
        <script src="css-table-18/js/main.js"></script>
    </body>
</html>