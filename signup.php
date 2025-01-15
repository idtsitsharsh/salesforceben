<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>SignUp - SalesForceBEN</title>
</head>
<body>
    <div class="left-side">
        <img src="./Assets/retail-sales-analytics-banner.png" alt="Can't Load Image">
    </div>
    <div class="right-side"></div>
    <div class="main">
        <p class="title">SIGN UP</p>
        <form action="signup.php" method="post">
            <div class="inputs">
                <i class="fa-regular fa-user"></i>
                <input type="text" placeholder="Your Name" name="name" class="name">
            </div>
            <div class="inputs">
            <i class="fa-solid fa-envelope"></i>
                <input type="text" placeholder="Email Address" name="email" class="email">
            </div>
            <div class="inputs">
                <i class="fa-solid fa-lock-open"></i>
                <input type="password" placeholder="Password" name="password" class="password">
                <i class="fa-solid fa-eye pwd-eye"></i>
                <!-- <i class="fa-solid fa-eye-slash"></i> -->
            </div>
        <button type="submit" class="submit-button" name="login">SIGN UP</button>
        </form>
        <p class="redirect-msg">Already have an account? <a href="login.php" class="redirect">Click here to Log In</a></p>
    </div>
<script src="app-signup.js"></script>
</body>
</html>


<?php 
    try {
        $conn = mysqli_connect("localhost", "root", "Harsh2005@", "salesForce");
        if(isset($_POST["login"])){
            $hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
            $name = $conn->real_escape_string($_POST["name"]);
            $email = $conn->real_escape_string($_POST["email"]);
            mysqli_query($conn,"INSERT INTO users (name,email,password) VALUES ('$name', '$email', '$hash')");
            mysqli_close($conn);
            header('Location: login.php');
            exit;
        }   
    } catch (mysqli_sql_exception $e) {
        echo "Connection failed: " . $e;
    }
?>