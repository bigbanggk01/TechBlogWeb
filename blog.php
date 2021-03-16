<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta id="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="blog.css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login with php</title>
</head>
<body>
    <div class="header">  
        <div class="Post">Post some blogs</div>
        <div class="Logout">Logout</div>
    </div>

    <div class="container" >
        <div class="postBox">
            <h1 class="tTable">Posts of members</h1>
            <button class="refresh">Load posts</button>
        </div>
        <div class="postContainer" style="display:none">
            <form id="post_form" method="post" action="<?php echo htmlspecialchars('upload.php')?>">
                <div class="inputContainer">
                    <input class="inputContainer" id="input_title" type="text" name="title" placeholder="Title">
                    <input class="inputContainer" id="input_category" type="text" name="category"  placeholder="Category">
                    <textarea class="inputContainer" id="input_content" type="text" name="content" rows = "5" cols = "60" name = "description"></textarea>
                </div>
            </form>
            <button id="post" class="button123" type="button">Post</button>
        </div>
    </div>
    
    <div class="footer">
        <li>Tu,Pham Thach</li>
        <li>                      </li>
        <li>University of Information Technology</li>
        <li></li>
        <li>https://www.facebook.com/tuthach.pham</li>
        <li>                      </li>
        <li>0966286837</li>
    </div>
    
</body>
</html>
<script type="text/javascript" src="script/blog.js"></script>
<script type="text/javascript" src="script/blog2.js"></script>