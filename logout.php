<?php
    include_once 'connect.php';
    session_start();
    $user = $_SESSION['user'];
    $conn= mysqli_connect($db_hostname, $db_user, $db_pass, $db_name);
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    else{
        $sql = "SELECT * FROM accounts WHERE user='$user'";
        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)!=0){
            $sql = "UPDATE accounts SET online = 0 WHERE user='$user'";
        }
        if(mysqli_query($conn,$sql)){
            echo('OK_Logout_good');
        }
    }    
    mysqli_close($conn);
?>
