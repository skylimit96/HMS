<?php 
  session_start();

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
    <div class="main-content-box">
      <div>
        <div class="main-content">
          <p class="welcome-text">Welcome <b><?php echo $res_Uname ?></b> :</p>
          <table>
            <thead>
              <tr>
                <th class="name-column">Name</th>
                <th class="gender-column">Gender</th>
                <th class="age-column">Age</th>
                <th>Entry Date</th>
                <th>Sortie Date</th>
                <th class="service-column">Service</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
                          <?php 
                            $patientquery = mysqli_query($con, "SELECT * FROM patients");
                            while ($result = mysqli_fetch_assoc($patientquery)) {
                              echo "<tr class='patient'>";
                              echo "<td>" . $result['patientname'] . "</td>";
                              echo "<td>" . $result['gender'] . "</td>";
                              echo "<td>" . $result['age'] . "</td>";
                              echo "<td>" . $result['entry_date'] . "</td>";
                              echo "<td>" . $result['sortie_date'] . "</td>";
                              echo "<td>" . $result['service'] . "</td>";
                              echo "<td class='delete-icon-container'><a href='delete.php?delete_patient=" . $result['id1'] . "'><img src='ressources/icons/delete.png' class='delete-icon'></a></td>";
                              echo "</tr>";
                            }
                          ?>
            </tbody>
          </table>
        </div>
        <div class="config-buttons">
          <br>
          <button class="btn">Add a patient</button>
        </div>
        <br>
        <div class="add-patient-form" id="addPatientForm" style="display: none">
          <h2>Add a New Patient</h2>
          <form action="add_patient.php" method="post">
            <label for="patientname">Patient Name:</label>
            <input type="text" id="patientname" name="patientname" required>
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>
            <label for="entry_date">Entry Date:</label>
            <input type="date" id="entry_date" name="entry_date" required>
            <label for="sortie_date">Sortie Date:</label>
            <input type="date" id="sortie_date" name="sortie_date" required>
            <label for="service">Service:</label>
            <input type="text" id="service" name="service" required>
            <button type="submit" name="submit">Add Patient</button>
          </form>
        </div>
        <script>

        </script>
      </div>
    </div>
  </main>
  <footer>
    <p>Copyright &copy; 2024 <b>Hospital Management System</b>. All rights reserved.</p>
  </footer>
</body>
</html>
