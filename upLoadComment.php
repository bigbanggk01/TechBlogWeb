<?php
    include_once 'connect.php';
    $conn= mysqli_connect($db_hostname, $db_user, $db_pass, $db_name);
    

    $comment = $_POST['comment'];

    session_start();

    $title = $_SESSION['title'];

    if(isset($_SESSION['user'])){
        $user = $_SESSION['user'];
        if($conn->connect_error){
            die("Connection failed".$conn->connect_error);
        }
        else{
            $sql = "SELECT acc_id 
                    FROM accounts 
                    WHERE user='$user'";
            $result = mysqli_query($conn,$sql);
            $acc_id = mysqli_fetch_assoc($result);
            $acc_id = $acc_id['acc_id'];

            $sql = "SELECT post_ID 
                    FROM posts 
                    WHERE title='$title'";

            $result = mysqli_query($conn,$sql);
            $post_id = mysqli_fetch_assoc($result);
            $post_id = $post_id['post_ID'];

            $sql = "INSERT INTO comments(who_id, post_id, comment) VALUES ('$acc_id','$post_id','$comment')";

            mysqli_query($conn,$sql);
        }    
    }
    else{
        if($conn->connect_error){
            die("Connection failed".$conn->connect_error);
        }
        else{
            $sql = "SELECT post_ID 
                    FROM posts 
                    WHERE title='$title'";

            $result = mysqli_query($conn,$sql);
            $post_id = mysqli_fetch_assoc($result);
            $post_id = $post_id['post_ID'];

            $sql = "INSERT INTO comments(who_id, post_id, comment) VALUES ('1','$post_id','$comment')";

            mysqli_query($conn,$sql);
        }
    }
    
    mysqli_close($conn);
?>