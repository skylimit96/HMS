<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/register & login/style.css">
    <title>Hospital Management System - Register</title>
</head>
<body>
    <div class="box">

    <?php 
        include("php/config.php");
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $age = $_POST['age'];
            $password = $_POST['password'];

        //verifying the unique email

        $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");
        if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message'>
                <p>This email is used, Try another one please!</p>
                </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
        }else{
            mysqli_query($con,"INSERT INTO users(Username,Email,Age,Password) VALUES('$username','$email','$age','$password')") or die("Error Occured");
            echo "<div class='message'>
                <p>Registration successfully!</p>
                </div> <br>";
            echo "<a href='login.php'><button class='btn'>Login Now</button>";
            }
        }else{
    ?>
        <h1 class="login-form__title">Hospital Management System</h1>
        <form action="" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" class="login-form__input" autocomplete="off" required>
            <br>
            <label for="password" class="password" >Password:</label>
            <input type="password" id="password" name="password" class="login-form__input" autocomplete="off" required>
            <br>
            <label for="email" class="email" >Email:</label>
            <input type="text" id="email" name="email" class="login-form__mail" autocomplete="off">
            <br>
            <label for="age" class="age" >Age :</label>
            <input type="number" id="age" name="age" class="login-form__age" autocomplete="off" required>
            <br>
            <input type="submit" value="Login" name="submit" class="login-form_submit">
            <br>
            <p>Already a member ? <a href="login.php">Sign In</a></p>
        </form>
    </div>
    <footer>
        <p>Copyright &copy; 2024 <b>Hospital Management System</b>. All rights reserved.</p>
    </footer>
    <?php } ?>
</body>
</html>