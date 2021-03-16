<?php
    include_once 'connect.php';
    session_start();
    $conn= mysqli_connect($db_hostname, $db_user, $db_pass, $db_name);
    
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }

    else{
        $sql = "SELECT * FROM accounts WHERE user='$user' AND pass='$pass'";
        //$sql = "SELECT * FROM accounts";
        $result = mysqli_query($conn,$sql);
        //$json_array = array();
        $row = mysqli_fetch_assoc($result);
        if ($row['user']!=''){
            $sql = "UPDATE accounts SET online = 1 WHERE user='$user'";
        }
        if(mysqli_query($conn,$sql)){
            echo($user);
        }
    }
    $_SESSION['user'] = $user;
    mysqli_close($conn);
?>
