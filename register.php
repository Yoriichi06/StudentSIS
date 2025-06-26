<?php
session_start();
require 'assets/db.php';

$username =  $email = $password = $confirm_password = "";
$errors = [];
$success = "";

// Form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get and trim input
    $username = trim($_POST['username']);
    $email = trim($_POST['email_address']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm_password']);

    // Validation
    if (empty($username)) {
        $errors[] = "Username is required";
    }

    if (empty($email)) {
    $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format";
    }

    if (empty($password)) {
        $errors[] = "Password is required";
    }

    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match";
    }

    if (empty($errors)) {
        // Sanitize input
        $username = mysqli_real_escape_string($conn, $username);
        $email = mysqli_real_escape_string($conn, $email);
        $password = mysqli_real_escape_string($conn, $password);
        

        // Check if user exists
        $check_query = "SELECT * FROM users WHERE username = '$username'";
        $check_result = mysqli_query($conn, $check_query);

        if (mysqli_num_rows($check_result) > 0) {
            $errors[] = "Username is already taken";
        } else {
            $hashed_password = hash('sha256', $password);
            $insert_query = "INSERT INTO users (username, password, email_address) VALUES ('$username', '$hashed_password', '$email')";
            if (mysqli_query($conn, $insert_query)) {
                $success = "Registration successful. You may now <a href='login.php'>log in</a>.";
                $username = $email = $password = $confirm_password = "";
            } else {
                $errors[] = "Error while registering: " . mysqli_error($conn);

            }
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-sm">
                <div class="card-header text-center">
                    <h4>Create Account</h4>
                    <img src="assets/pup.png" alt="Logo" class="login-icon d-block mx-auto">
                </div>
                <div class="card-body">
                    <?php if (!empty($errors)): ?>
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                <?php foreach ($errors as $e): ?>
                                    <li><?php echo htmlspecialchars($e); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php elseif ($success): ?>
                        <div class="alert alert-success"><?php echo $success; ?></div>
                    <?php endif; ?>
                    
                    <form method="POST" action="">
                        <div class="mb-3">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value="<?php echo htmlspecialchars($username); ?>">
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="text" name="email_address" class="form-control" value="<?php echo htmlspecialchars($email); ?>">
                        </div>
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success w-100">Register</button>
                        <div class="text-center mt-3">
                            <a href="login.php">Already have an account?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
