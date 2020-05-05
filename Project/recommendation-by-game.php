<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recommendation by Game</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <header>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md4 mb-3 bg-white border-bottom box-shadow">
        <a class="text-dark" href="/project/index.php"><h5 class="my-0 mr-md-auto font-weight-normal">Compumeum</h5></a>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="index.php">Home</a>
            <?php if( isset($_SESSION["user"]) ): ?>
            <a class="btn btn-outline-danger" href="./controller/doLogout.php">Logout</a>
            <?php else: ?>
                <a class="p-2 text-dark" href="./login.php">Login</a>
                <a class="p-2 text-dark" href="./register.php">Sign Up</a>
            <?php endif; ?>
        </nav>
    </div>
    </header>
    
    <h2>Recommendation by Game</h2>

    <div class="search-box">
        <input type="text" id="search" placeholder="Search game.." autofocus autocomplete="off">
    </div>

    <footer>
    <article class="bg-secondary">  
        <div class="card-body text-center">
            <p class="h5 text-white mt-4"><a class="text-white" href="/project/index.php">Toko Komputer A</a></p>
            <p class="text-white">© 2020 All rights reserved.</p>
        </div>
    </article>
    </footer>
</body>
</html>