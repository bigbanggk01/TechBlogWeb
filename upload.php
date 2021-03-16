<?php
    include_once 'connect.php';
    $conn= mysqli_connect($db_hostname, $db_user, $db_pass, $db_name);

    $title = $_POST['title'];
    $category = $_POST['category'];
    $content = $_POST['content'];
    session_start();
    if(isset($_SESSION['user'])){
        $user = $_SESSION['user'];
        if($conn->connect_error){
            die("Connection failed".$conn->connect_error);
        }
        else{
    
        }
    
        if($conn->connect_error){
            die("Connection failed".$conn->connect_error);
        }
        else{
            $sql = "SELECT acc_id FROM accounts WHERE user='$user'";
                $result = mysqli_query($conn,$sql);
                if (mysqli_num_rows($result)!=0){
                    $row = $result -> fetch_row();
                    $sql = "INSERT INTO posts(author_ID, title, category, content) VALUES ('$row[0]','$title','$category','$content')";
                    mysqli_query($conn,$sql);
                    echo('Uploaded');
                }
        }    
    }
    else{
        echo('login before!');
    }
    
    mysqli_close($conn);

?>