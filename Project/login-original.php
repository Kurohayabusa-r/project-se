<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <header>
        <div class="">
            <a href="/project/index"><h1>Toko Komputer A</h1></a>
        </div>
    </header>
    <h2>Login</h2>
    
    <div class="">
        <form action="./controller/doLogin.php" method="POST">
            <p>Username</p>
            <input type="text" name="username" value=<?php if( isset($_COOKIE["cookie_username"])) echo $_COOKIE["cookie_username"] ?> >
            <p>Password</p>
            <input type="password" name="password" value=<?php if( isset($_COOKIE["cookie_password"])) echo $_COOKIE["cookie_password"] ?> >
            <br><br>
            <input type="checkbox" name="remember"> Remember me
            <br><br>
            <input type="submit" value="Login" name="login">
        </form>
    </div>
    
    <a href="./register.php">Don't Have An Account? Sign Up Now!</a>

    <footer>
        <div class="copyright">
            <a href="/project/index">Toko Komputer A</a>
            © 2020 All rights reserved.
        </div>
    </footer>
</body>
</html>