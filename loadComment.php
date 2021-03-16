<?php
    session_start();
    $title = $_SESSION['title'];
    

    include_once 'connect.php';
    $conn= mysqli_connect($db_hostname, $db_user, $db_pass, $db_name);
    
    if($conn->connect_error){
        die("Connection failed".$conn->connect_error);
    }

    else{

        $sql= "SELECT accounts.user , comments.comment 
        FROM comments
        INNER JOIN posts ON posts.title = '$title' AND comments.post_id = posts.post_ID
        INNER JOIN accounts ON comments.who_id = accounts.acc_id";
        
        $result = mysqli_query($conn,$sql);
        
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
                echo ($row['user'].':   ');
                echo ($row['comment']);
                echo ('<br>');
                echo ('<br>');
            }
        }
    }
    mysqli_close($conn);
?>