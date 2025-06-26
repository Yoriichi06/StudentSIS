<?php
// Include the database connection file
require_once("assets/dbConnection.php");

// Get id parameter value from URL
$id = $_GET['id']; //44

$stmt = $mysqli->prepare("DELETE FROM students WHERE student_id = ?");
$stmt->bind_param("s", $id); 
$stmt->execute();

// Delete row from the database table
$result = mysqli_query($mysqli, "DELETE FROM students WHERE student_id = '$id'");


echo "<script>Data deleted successfully!</script>";
header("Location:index.php ");
?>