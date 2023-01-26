<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/fd323b0f11.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../assets/U00.css?v=<?php echo time(); ?>">

    <title>Login</title>
</head>
<body>
    <!-- -----------------Login area------------------- -->
    <section name="U00-Loginarea" class="U00-loginarea">
        <div class="U00-title">
            <h1>Login Here</h1>
        </div>

        <div class="U00-loginareatext">
            <div class="U00-loginarea_title">
                <h3>Username and Password</h3>
            </div>

            <form action="#" method="POST" name="U00-Login" class="U00-Login">
                <div class="U00-inputfield">
                    <label class="U00-username">Username</label><br>
                    <input type="text" class="U00-txtusername" placeholder="username" autocomplete="off"><br><br>
                    <label class="U00-password">Password</label><br>
                    <input type="password" class="U00-txtpassword" placeholder="password" autocomplete="off">
                </div>

                <div class="U00-SignUp_ForgotPass">
                    <a href="#"><h3 class="U00-SignUp">New Here? Create an Account</h3></a>
                    <a href="#"><h3 class="U00-ForgotPass">Forgot Password?</h3></a>
                </div>
        
                <div class="U00-submit">
                    <input type="submit" class="U00-signin_btn" value="Sign in">
                </div>
            </form>
        </div>
    </section>
</body>
</html>