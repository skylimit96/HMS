<?php
session_start();
include("php/config.php");
  if(!isset($_SESSION['valid'])){
    header("Location: login.php");
}

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Set recipient email address
    $to = 'a.sehlaoui96@gmail.com';

    // Set email headers
    $headers = "From: Hospital Management System <noreply@example.com>\r\n"; // You can change the sender name and email
    $headers .= "Reply-To: a.sehlaoui96@gmail.com\r\n"; // Change the reply-to email address
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Compose the email message
    $email_message = "Subject: $subject\n\n";
    $email_message .= "Message:\n$message";

    // Send the email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Your message has been sent successfully!";
    } else {
        echo "Failed to send the message. Please try again later.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/support-form/style.css">
    <title>Hospital Management System - Support</title>
</head>
<body>
<header class="nav">
    <h1 class="logo">HMS</h1>
    <div class="nav-links">
      <a href="home.php">Home</a>
      <a href="staff.php">Staff</a>
      <a href="support.php">Support</a>
                          <?php 
                            $id = $_SESSION['id'];
                            $con = mysqli_connect("localhost","root","","HMS-Project");
                            $query = mysqli_query($con, "SELECT*FROM users WHERE Id=$id");

                            while($result = mysqli_fetch_assoc($query)){
                              $res_Id = $result['Id'];
                              $res_Uname = $result['Username'];
                              $res_Email = $result['Email'];
                              $res_Age = $result['Age'];
                            }
                            echo "<a href='update.php?Id=$res_Id'>Change Profile</a>";
                          ?>
        <a href="php/logout.php"><img src="ressources/icons/logout.png" alt="logout" class="logout-icon"></a>
    </div>
</header>
<main>
    <br>
    <div class="container">
        <div class="box">
            <h1 class="login-form__title">Contact Support</h1>
            <form action="" method="post">
                <input type="text" name="subject" class="login-form__input" placeholder="Subject" required>
                <textarea name="message" class="login-form__textarea" placeholder="Message" required></textarea>
                <input type="submit" value="Send" class="login-form_submit">
            </form>
        </div>
    </div>
</main>  
<footer>
    <p>Copyright &copy; 2024 <b>Hospital Management System</b>. All rights reserved.</p>
</footer>
</body>
</html>
