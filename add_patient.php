<?php
session_start();

include("php/config.php");

if(isset($_POST['submit'])) {
    $patientname = $_POST['patientname'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $entry_date = $_POST['entry_date'];
    $sortie_date = $_POST['sortie_date'];
    $service = $_POST['service'];

    $query = "INSERT INTO patients (patientname, gender, age, entry_date, sortie_date, service) 
              VALUES ('$patientname', '$gender', '$age', '$entry_date', '$sortie_date', '$service')";

    $result = mysqli_query($con, $query);

    if($result) {
        header("Location: home.php"); // Redirect back to home page after successful insertion
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>
