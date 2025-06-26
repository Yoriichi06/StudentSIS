<?php
// Include the database connection file
require_once("assets/dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM students WHERE student_id = '$id'");
$resultData = mysqli_fetch_assoc($result);

$sid = $resultData['student_id'];
$name = $resultData['full_name'];
$age = $resultData['age'];
$email = $resultData['email'];
$gender = $resultData['gender'];
$course = $resultData['course'];
?>
<!DOCTYPE html>
<html>
<head>    
    <title>Edit Data</title>
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

    .login-icon {
		width: 80px;
		height: 80px;
		object-fit: cover;
		margin: 0 auto 1rem;
		border-radius: 50%;
		}
  </style>
<body class="bg-light">
<div class="container mt-5">
    <img src="assets/pup.png" alt="Logo" class="login-icon d-block mx-auto">
    <div class="card shadow">
        <div class="card-header bg-warning text-dark">
            <h3>Edit Student Information</h3>
        </div>
        <div class="card-body">
            <a href="index.php" class="btn btn-secondary mb-3">Back to Dashboard</a>

            <form name="edit" method="post" action="editAction.php">
                <div class="mb-3">
                    <label for="sid" class="form-label">Student ID</label>
                    <input type="text" class="form-control" id="sid" name="sid" value="<?php echo $sid; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Age</label>
                    <input type="number" class="form-control" id="age" name="age" value="<?php echo $age; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label d-block">Gender</label>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="gender" value="Male" id="male" <?php if($gender == 'Male') echo 'checked'; ?>>
                        <label for="male" class="form-check-label">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="gender" value="Female" id="female" <?php if($gender == 'Female') echo 'checked'; ?>>
                        <label for="female" class="form-check-label">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="gender" value="Other" id="other" <?php if($gender == 'Other') echo 'checked'; ?>>
                        <label for="other" class="form-check-label">Other</label>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="course" class="form-label">Course</label>
                    <input type="text" class="form-control" id="course" name="course" value="<?php echo $course; ?>" required>
                </div>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <button type="submit" name="update" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
