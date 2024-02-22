<?php 
  session_start();
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  include("php/config.php");
  if(!isset($_SESSION['valid'])){
    header("Location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/homepage/homestyle.css">
    <script src="script.js"></script>
    <title>Hospital Management System - Homepage</title>
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
        <div class="container-staff">
            <div class="card">
                <img src="ressources/images/doc.png" class="picture-staff">
                <br>
                <div class="info">
                        <ul>
                            <li>Dr. Amine Sehlaoui</li>
                            <li>General Surgery</li>
                            <li>YES</li>
                        </ul>
                    <button class="contact-Dr-btn">Contact</button>
                </div>
            </div>
            <div class="card">
                <img src="ressources/images/doc.png" class="picture-staff">
                <br>
                <div class="info">
                        <ul>
                            <li>Dr. Amine Sehlaoui</li>
                            <li>Cardiologist</li>
                            <li>NO</li>
                        </ul>
                    <button class="contact-Dr-btn">Contact</button>
                </div>
            </div>
            <div class="card">
                <img src="ressources/images/doc.png" class="picture-staff">
                <br>
                <div class="info">
                        <ul>
                            <li>Dr. Amine Sehlaoui</li>
                            <li>ORL</li>
                            <li>YES</li>
                        </ul>
                    <button class="contact-Dr-btn">Contact</button>
                </div>
            </div>
            <div class="card">
                <img src="ressources/images/doc.png" class="picture-staff">
                <br>
                <div class="info">
                        <ul>
                            <li>Dr. Amine Sehlaoui</li>
                            <li>Ophtalmologist</li>
                            <li>YES</li>
                        </ul>
                    <button class="contact-Dr-btn">Contact</button>
                </div>
            </div>
            <div class="card">
                <img src="ressources/images/doc.png" class="picture-staff">
                <br>
                <div class="info">
                        <ul>
                            <li>Dr. Amine Sehlaoui</li>
                            <li>Dentist</li>
                            <li>NO</li>
                        </ul>
                    <button class="contact-Dr-btn">Contact</button>
                </div>
            </div>
            <div class="card">
                <img src="ressources/images/doc.png" class="picture-staff">
                <br>
                <div class="info">
                        <ul>
                            <li>Dr. Amine Sehlaoui</li>
                            <li>Plastic Surgery</li>
                            <li>NO</li>
                        </ul>
                    <button class="contact-Dr-btn">Contact</button>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <p>
          Copyright &copy; 2024 <b>Hospital Management System</b>. All rights
          reserved.
        </p>
    </footer>
</body>
</html>
