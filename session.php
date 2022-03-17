<?php
session_start();
// print_r($_SESSION);
if(!isset($_SESSION['first_name'])){
    header('location:index.php');
    print_r($_SESSION);
    echo 'back to login';
}