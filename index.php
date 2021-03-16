<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta id="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="main.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="script/script.js"></script>
    <title>Login with php</title>
</head>
<body>
    <div class="header">
        <h1 class="header0">UIT Techical-Blog Professional Web</h1>
        <div class="header1"><i class="fa fa-user"></i></div>
        <div class="header2"><i class="fa fa-phone"></i></div>
        <div class="header3"><i class="fa fa-play"></i></div>
    </div>

    <div class="container">
        <div class="modal" style="display:none">
            <div class="overlay"></div>
            <div class="form">
                <form id="log_form" method="post" action="<?php echo htmlspecialchars('login.php')?>">
                    <div class="input">
                        <input class="input" type="text" name="user" id="log_user" placeholder="Username"><br>
                        <input class="input" type="text" name="pass" id="log_pass"placeholder="Password"><br>
                        <button class="input" type="button" id="Login">Login</button>
                    </div>
                </form>
                
                <form id="reg_form" method="post" action="<?php echo htmlspecialchars('reg.php')?>" style="display:none">
                    <div class="input">
                        <input class="input" type="text" name="user" id="reg_user" placeholder="Username"><br>
                        <input class="input" type="text" name="pass" id="reg_pass" placeholder="Password"><br>
                        <input class="input" type="text" name="user" id="reg_confirm" placeholder="Confirm"><br>
                        <button class="input" type="button" id="Reg">Register</button>
                    </div>
                </form>
            </div>
            <button class="switch" >Don't have any account?</button>
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