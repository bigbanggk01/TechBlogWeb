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
    <script type="text/javascript" src="script/blog.js"></script>
    <title>Login with php</title>
</head>
<body>
    <div class="header">  
        <a class="Post">Post some blogs</a>
        <a class="Logout">Logout</a>
    </div>

    <div class="container">
        <div class="postBox">
            <a href="http://">....</a>
        </div>
        <div class="postContainer" style="display:none">
            <form id="post_form" method="post" action="">
                <div class="inputContainer">
                    <input class="input" type="text" name="title" id="input_title" placeholder="Title">
                    <input class="input" type="input" name="pass" id="input_category" placeholder="Category">
                    <div class="input" type="input" name="user" id="input_content">
                    </div>
                    <button class="input" type="button" id="post">Post</button>
                </div>
            </form>
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