<?php 
    session_start();
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/register & login/style.css">
    <title>Hospital Management System - Login</title>
</head>
<body>
    <div class="box">
        <?php 

            include("php/config.php");
            if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($con,$_POST['email']);
                $password = mysqli_real_escape_string($con,$_POST['password']);
            
                $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password='$password' ") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    $_SESSION['valid'] = $row['Email'];
                    $_SESSION['username'] = $row['Username'];
                    $_SESSION['age'] = $row['Age'];
                    $_SESSION['id'] = $row['Id'];
                }else{
                    echo "<div class='message'>
                    <p>Wrong username or password, Please try again!</p>
                    </div> <br>";
                echo "<a href='login.php'><button class='btn'>Go Back</button>";
                }
                if(isset($_SESSION['valid'])){
                    header("Location: home.php");
                }
            }else{
        ?>
        <h1 class="login-form__title">Hospital Management System</h1>
        <form action="" method="post">
            <label for="email">Email :</label>
            <input type="text" id="email" name="email" class="login-form__input" autocomplete="off" required>
            <br>
            <label for="password" class="password" >Password:</label>
            <input type="password" id="password" name="password" class="login-form__input" autocomplete="off" required>
            <br>
            <input type="submit" value="Login" name="submit" class="login-form_submit">
            <br>
            <p>Don't have account ? <a href="register.php">Sign Up Now</a></p>
        </form>
    </div>
    <footer>
        <p>Copyright &copy; 2024 <b>Hospital Management System</b>. All rights reserved.</p>
    </footer>
    <?php } ?>
</body>
</html>