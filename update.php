<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/homepage/homestyle.css" />
    <title>Hospital Management System - Change Profile</title>
  </head>
  <body>
    <div class="nav">
      <h1 class="logo">HMS</h1>
      <div class="nav-links">
        <a href="home.php">Home</a>
        <a href="staff.php">Staff</a>
        <a href="support.php">Support</a>
        <a href="update.php">Change Profile</a>
        <a href="php/logout.php"><img src="ressources/icons/logout.png" alt="logout" class="logout-icon"/></a>
      </div>
    </div>
    <div class="container">
      <div class="box">
                          <?php 
                          session_start();
                          if(isset($_SESSION['id'])) {
                            // Proceed with using $_SESSION['id']
                            $id = $_SESSION['id'];
                          } else {
                            // Handle the case where $_SESSION['id'] is not set
                            echo "Session ID is not set.";
                          }
                          
                          /* 
                          ini_set('display_errors', 1);
                          ini_set('display_startup_errors', 1);
                          error_reporting(E_ALL); //to check errors in case of debugging
                          */

                            include("php/config.php");
                            if(isset($_POST['submit'])){
                              $username = $_POST['username'];
                              $email = $_POST['email'];
                              $age = $_POST['age'];
                              $password = $_POST['password'];

                                // Update the user's information in the database
                                $id = $_SESSION['id'];
                                $query = "UPDATE users SET Username='$username', Email='$email', Age='$age', Password='$password' WHERE Id='$id'";
                        
                                // Execute the query
                                if(mysqli_query($con, $query)){
                                  echo "Profile updated successfully!";
                                } else {
                                  echo "Error updating profile: " . mysqli_error($con);
                                }
                          } ?>
        <h1 class="login-form__title">Update your profile</h1>
        <form action="" method="post">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" class="login-form__input" autocomplete="off" required/>
          <br>
          <label for="password" class="password">Password:</label>
          <input type="password" id="password" name="password" class="login-form__input" autocomplete="off" required/>
          <br>
          <label for="mail" class="mail">Email:</label>
          <input type="text" id="mail" name="email" class="login-form__mail" autocomplete="off"/>
          <br>
          <label for="age" class="age">Age :</label>
          <input type="number" id="age" name="age" class="login-form__age" autocomplete="off" required/>
          <br>
          <input type="submit" value="Update" name="submit" class="login-form_submit"/>
        </form>
      </div>
    </div>
      <footer>
        <p>
          Copyright &copy; 2024 <b>Hospital Management System</b>. All rights
          reserved.
        </p>
      </footer>
  </body>
</html>
