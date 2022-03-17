<?php
    session_start(); // hadi khasha tbadal
   // echo 'session contents:';
    //print_r($_SESSION);
    session_unset();
    session_destroy();
    //echo 'session contents:';
    //print_r($_SESSION);
    header("location: index.php"); 
    ?>