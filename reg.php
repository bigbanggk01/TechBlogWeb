<?php
    include_once 'connect.php';

    $conn= mysqli_connect($db_hostname, $db_user, $db_pass, $db_name);
    $user = $_POST['user'];
    $pass = $_POST['pass'];


    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }
    else{
        $sql = "SELECT * FROM accounts WHERE user='$user'";
        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)!=0){
            echo('Username available, choose another one !');  
        }
        else{
          $sql = "INSERT INTO accounts(user, pass) VALUES ('$user','$pass')";
          if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
          }
        }
    }    
    mysqli_close($conn);
?>