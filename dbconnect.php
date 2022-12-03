<?php
$servername="127.0.0.1:3305";
$username="root";
$password="";
$dbname="creditcard";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    echo "connection ok";
}
else
{
    echo "not connected".mysqli_connect_error();
}
?>