<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Komputer A</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <header>
        <div class="">
            <a href="./index"><h1>Toko Komputer A</h1></a>
        </div>
        <nav>
            <ul>
                <li><a href="./build">Build a PC</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Contact Us</a></li>
            </ul>
        </nav>
        <nav>
            <ul>
            <?php if( isset($_SESSION["email"]) ): ?>
                <li><a href="./controller/doLogout">Log Out</a></li>
            <?php else: ?>
                <li><a href="./login">Login</a></li>
                <li><a href="./register">Sign Up</a></li>
            <?php endif; ?>
            </ul>
        </nav>
    </header>

    <footer>
    <article class="bg-secondary">
        <div class="card-body text-center">
            <p class="h5 text-white mt-4"><a class="text-white" href="/project/index">Toko Komputer A</a></p>
            <p class="text-white">© 2020 All rights reserved.</p>
        </div>
    </article>
    </footer>
</body>
</html>