<?php
    $title =  $_POST["title"];
    include_once 'connect.php';
    $conn= mysqli_connect($db_hostname, $db_user, $db_pass, $db_name);
    
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }

    else{
        $sql = "SELECT * FROM posts WHERE title='$title'";
        $result = mysqli_query($conn,$sql);
        $row;
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
                echo ($row['content']);
            }
        }
    }
    mysqli_close($conn);
?>