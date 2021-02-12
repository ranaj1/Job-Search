<?php
    require('config.php');
    session_start();
    if(!isset($_SESSION['is_logged_in'])){
        header('Location: login.php');
   }
   else if(isset($_SESSION['is_logged_in'])){
    unset($_SESSION['is_logged_in']);
    echo "Logged out successfully";
    header('Location: login.php');
    session_destroy();
}
   if(!isset($_SESSION['is_logged_in_emp'])){
    header('Location: login_emp.php');
    }
    else if(isset($_SESSION['is_logged_in_emp'])){
        unset($_SESSION['is_logged_in_emp']);
        echo "Logged out successfully";
        header('Location: login_emp.php');
        session_destroy();
    }
  