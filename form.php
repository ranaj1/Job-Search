<?php
    require('config.php');
    include('layout/header.php');
    session_start();
    if(isset($_GET['fname']) && isset($_GET['lname']) ){
        $_SESSION['is_logged_in'] = true;
        $_SESSION['u_name'] = $_GET['fname'].$_GET['lname'];
        $loginSuccessUrl = $base_url .'loginSuccessPage.php';
        header('Location: loginSuccessPage.php');
        exit();
    }
    // else
    // {
    //     echo "Wrong username or password";
    // } 
    ////////// or ////////////
    // if($_SERVER['REQUEST_METHOD'] == 'GET')
    // {
    //     echo "Name is ".$_GET['fname']." ".$_GET['lname'];
    //     exit(); 
    // }
    ?>
<html>
    <body>
        <form action=""method="GET">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" required><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" required><br><br>
        <input type="submit" value="Submit">
        </form>   
    </body>
</html>

<?php include('layout/footer.php'); ?> 
