<?php
session_start();
unset($_SESSION["error"]);

require "../database/db.php";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $email = $_POST["email"];
    $firstName = htmlspecialchars($_POST["firstName"]);
    $lastName = htmlspecialchars($_POST["lastName"]);
    $gender = $_POST["gender"];
    $city = $_POST["city"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    if($email == ""){
        $_SESSION["error"] = "Email address must be filled";
    }
    else if($firstName == ""){
        $_SESSION["error"] = "First name must be filled";
    }
    else if($lastName == ""){
        $_SESSION["error"] = "Last name must be filled";
    }
    else if($gender == ""){
        $_SESSION["error"] = "Choose a gender";
    }
    else if($city == ""){
        $_SESSION["error"] = "City must be filled";
    }
    else if($password == ""){
        $_SESSION["error"] = "Password must be filled";
    }
    else if($password != $confirmPassword)
    {
        $_SESSION["error"] = "Confirm password does not match";
    }

    $view = "SELECT * FROM users WHERE email = '?'";
    $stmt = $conn->prepare($view);
    $stmt->bind_param("s", $email);
    $result = $stmt->execute();
    $stmt->free_result();
    $stmt->close();
    
    if($result->num_rows == 0)
    {
        $hashPass = password_hash($password, PASSWORD_BCRYPT);

        $stmt = $conn->prepare("INSERT INTO users(email,password,firstName,lastName,gender,city) VALUES(?,?,?,?,?,?)");
        $stmt->bind_param("ssssss", $email, $hashPass, $firstName, $lastName, $gender, $city);
        
        $res = $stmt->execute();
        if( $res )
        {
            $_SESSION["success"] = "Sucessfully registered";
            header("Location: ../register.php");
        }
        else{
            if( $res && !isset($_SESSION["error"]) )
            {
                $_SESSION["error"] = "Failed to register";
            }  
            header("Location: ../register.php");
        }
        $stmt->free_result();
        $stmt->close();
    }
    else{
        if( $result && !isset($_SESSION["error"]) )
        {
            $_SESSION["error"] = "Email address already registered";
        }
        header("Location: ../register.php");
    }
        
}


?>