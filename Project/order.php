<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <?php
    if( !isset($_SESSION["user"]) ){
        header("Location: ./login.php");
        exit;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $processor = $_POST["processor"];
        $cpu_cooler = $_POST["cpu_cooler"];
        $powersupply = $_POST["psu"];
        $motherboard = $_POST["motherboard"];
        $ram = $_POST["ram"];
        $gpu = $_POST["gpu"];
        $storage = $_POST["storage"];
        $case = $_POST["case"];
        $os = $_POST["os"];
        $accessories = $_POST["accessories"];
    }
    ?>
</body>
</html>