<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/fd323b0f11.js" crossorigin="anonymous"></script>

   
    <link rel="stylesheet" type="text/css" href="../assets/A00.css?v=<?php echo time(); ?>">

    <title>Admin Login</title>
</head>
<body>
    <!-- -----------------Login area------------------- -->
    <section name="A00-Loginarea" class="A00-loginarea">
        <div class="A00-title">
            <h1>Admin Login</h1>
        </div>

        <div class="A00-loginareatext">
            <div class="A00-loginarea_title">
                <h3>Username and Password</h3>
            </div>

            <form action="#" method="POST" name="A00-Login" class="A00-Login">
                <div class="A00-inputfield">
                    <label class="A00-username">Username</label><br>
                    <input type="text" class="A00-txtusername" placeholder="username" autocomplete="off"><br><br>
                    <label class="A00-password">Password</label><br>
                    <input type="password" class="A00-txtpassword" placeholder="password" autocomplete="off">
                </div>

                <div class="A00-submit">
                    <input type="submit" class="A00-signin_btn" value="Sign in">
                </div>
            </form>
        </div>
    </section>
</body>
</html>