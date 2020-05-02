<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <header>
        <div class="">
            <a href="/project/index"><h1>Toko Komputer A</h1></a>
        </div>
    </header>
    <h2>Sign Up</h2>

    <form action="./controller/doRegister.php" method="POST">
        <p>Username</p>
        <input type="text" name="username">

        <p>Password</p>
        <input type="password" name="password">
        
        <p>Confirm Password</p>
        <input type="password" name="confirm_password">
        <br><br>
        <input type="submit" value="Register" name="register">
    </form>

    <a href="./login.php">Already Have An Account? Log In!</a>

    <footer>
        <div class="copyright">
            <a href="/project/index">Toko Komputer A</a>
            © 2020 All rights reserved.
        </div>
    </footer>
</body>
</html>