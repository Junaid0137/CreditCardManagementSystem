<?php
session_start();
if(isset($_SESSION['user_id']))
{
    unset($_SESSION['user_id']);
}
header("Location:http://localhost/Credit%20Card/Login/index1.php ");
die;