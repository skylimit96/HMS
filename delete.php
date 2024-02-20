<?php
// Include your database connection file
include "php/config.php";

if(isset($_GET['delete_patient'])) {
    $id1 = $_GET['delete_patient'];
    
    // Delete the patient from the database
    $query = "DELETE FROM patients WHERE `patients`.`id1` = $id1";
    $result = mysqli_query($con, $query);

    if(!$result) {
        die("Failed to delete patient: " . mysqli_error($con));
    } else {
        header("Location: home.php");
    }
    }
?>