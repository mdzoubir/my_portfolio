<?php
session_start();
if (isset($_GET['logout'])) {
    session_destroy();
    header("location:/my_portfolio/login.php");
}else{
    echo 'erreur';
}