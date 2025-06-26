<!DOCTYPE html>
<html>
<head>
    <title>Update Result</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<style>
    body {
      background: linear-gradient(to right, rgb(128, 0, 0), rgb(255, 215, 0));
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
  </style>

<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">

<?php
// Include the database connection file
require_once("assets/dbConnection.php");

if (isset($_POST['update'])) {
    $sid = mysqli_real_escape_string($mysqli, $_POST['sid']);
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $age = mysqli_real_escape_string($mysqli, $_POST['age']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $gender = mysqli_real_escape_string($mysqli, $_POST['gender']);
    $course = mysqli_real_escape_string($mysqli, $_POST['course']);

    $errors = [];

    // Validate inputs
    if (empty($sid))    $errors[] = "Student ID field is empty.";
    if (empty($name))   $errors[] = "Name field is empty.";
    if (empty($age))    $errors[] = "Age field is empty.";
    if (empty($email))  $errors[] = "Email field is empty.";
    if (empty($gender)) $errors[] = "Gender field is empty.";
    if (empty($course)) $errors[] = "Course field is empty.";

    if (!empty($errors)) {
        echo '<div class="alert alert-danger"><ul>';
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo '</ul></div>';
        echo "<a href='javascript:self.history.back();' class='btn btn-secondary'>Go Back</a>";
    } else {
        // Update student record
        $result = mysqli_query($mysqli, "UPDATE students SET 
            `student_id` = '$sid',
            `full_name` = '$name',
            `age` = '$age',
            `email` = '$email',
            `gender` = '$gender',
            `course` = '$course'
            WHERE student_id = '$sid'");

        // Show success message
        echo '<div class="alert alert-success">Data updated successfully!</div>';
        echo '<a href="index.php" class="btn btn-primary">View Updated Record</a>';
    }
}
?>

        </div>
    </div>
</div>

</body>
</html>
