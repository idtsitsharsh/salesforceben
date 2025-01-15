<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Login - SalesForceBEN</title>
</head>
<body>
    <div class="left-side">
        <img src="./Assets/retail-sales-analytics-banner.png" alt="Can't Load Image">
    </div>
    <div class="right-side"></div>
    <div class="main">
        <p class="title">SIGN IN</p>
        <form action="login.php" method="post">
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
        
        <div class="extra-query">
            <p class="f-pwd">Forgot Password?</p>
        </div>
        <button type="submit" class="submit-button" name="login">LOG IN</button>
        </form>
    </div>
<script src="app-login.js"></script>
</body>
</html>


<?php 
    try {
        $conn = mysqli_connect("localhost", "root", "Harsh2005@", "salesForce");
        
        if(isset($_POST["login"])){
            password_verify('{$_POST["password"]}',PASSWORD_DEFAULT);
            $result=mysqli_query($conn,"SELECT email,password FROM users");
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    if(($row['email']==$_POST["email"]) && (password_verify($_POST["password"],$row['password']))){
                        mysqli_close($conn);
                        header('Location: index.php');
                        exit;
                    }
                }
                echo "Password/Username is Incorrect";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
            mysqli_close($conn);
        } 
        
        
    } catch (mysqli_sql_exception $e) {
        echo "Connection failed: " . $e;
    }
?>