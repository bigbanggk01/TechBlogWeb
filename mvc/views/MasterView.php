<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <style>
    <?php include './public/assets/css/main.css'; ?>
    <?php include './public/assets/css/base.css'; ?>
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
    
</head>
<body>

    <div class="app">
        <header class="header">
            <div class="grid">
                <nav class="navbar">
                    <ul class="header__list">
                        <li class="header__list--item"><i class="fas fa-home"style="font-size: 25px;"></i>W2AS</li>
                        <li class="header__list--item"onclick="showForm()"><i class="fas fa-user"style="font-size: 25px;"></i>Login/Register</li>
                    </ul>
                </nav>
            </div>
            
        </header>
        <div class="container">
            <?php
                require_once "./mvc/views/HomePage.php"
            ?>
        </div>
        
        <footer class="footer">
            <h2>
                <i class="fas fa-school" style="font-size: 25px;"></i> University of Information Technology
            </h2>
        </footer>
        <div class="modal">
            <div class="modal_overlay"></div>
            <div class="modal_body"> 
                <div class="closeBtn" onclick="closeForm()"> 
                    <i class="fas fa-times-circle"></i>
                </div>
                
                <div class="account-form__1">
                    <div class="account-form__header">
                        <h3 class="account-form__heading">Sign in</h3>
                        <h4 class="account-form__switch-btn" onclick="signInSwitch()">Sign up</h4>
                    </div>

                    <div class="account-form__form">
                        <div class="account-form__group">
                            <input type="text" class="account-form__input" placeholder="Username">
                        </div>

                        <div class="account-form__group">
                            <input type="text" class="account-form__input" placeholder="Password">
                        </div>
                    </div>

                    <div class="account-form__controls">
                        <button class="btn">Login</button>
                        <a href="" class="forget-account__button">Forgot password?</a>
                    </div>
                </div>

                <div class="account-form__2">
                    <div class="account-form__header">
                        <h3 class="account-form__heading">Sign up</h3>
                        <h4 class="account-form__switch-btn" onclick="signUpSwitch()">Sign in</h4>
                    </div>

                    <div class="account-form__form">
                        <div class="account-form__group">
                            <input type="text" class="account-form__input" placeholder="Username">
                        </div>

                        <div class="account-form__group">
                            <input type="text" class="account-form__input" placeholder="Password">
                        </div>

                        <div class="account-form__group">
                            <input type="text" class="account-form__input" placeholder="Confirmed password">
                        </div>
                    </div>

                    <div class="account-form__controls">
                        <button class="btn">Create</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./public/script.js" type="text/javascript"></script>
</body>
</html>