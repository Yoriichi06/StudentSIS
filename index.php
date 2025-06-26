<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, rgb(128, 0, 0), rgb(255, 215, 0));
        }
        .table thead {
            background-color: #dddddd;
        }

		.login-icon {
		width: 80px;
		height: 80px;
		object-fit: cover;
		margin: 0 auto 1rem;
		border-radius: 50%;
		}
    </style>
</head>
<body>

<?php
require_once("assets/dbConnection.php");
$records_per_page = 15;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $records_per_page;

$result = mysqli_query($mysqli, "SELECT * FROM students ORDER BY id ASC LIMIT $offset, $records_per_page");
$total_result = mysqli_query($mysqli, "SELECT COUNT(*) AS total FROM students");
$total_row = mysqli_fetch_assoc($total_result);
$total_records = $total_row['total'];
$total_pages = ceil($total_records / $records_per_page);
?>

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body text-center">
            <h2 class="mb-4">Student Records</h2>
			<img src="assets/pup.png" alt="Logo" class="login-icon d-block mx-auto">
            <h4 class="text-success mb-3">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h4>
            <a href="add.php" class="btn btn-primary mb-3">Add New Data</a>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Course</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?= $row['student_id'] ?></td>
                            <td><?= $row['full_name'] ?></td>
                            <td><?= $row['age'] ?></td>
                            <td><?= $row['email'] ?></td>
                            <td><?= $row['gender'] ?></td>
                            <td><?= $row['course'] ?></td>
                            <td>
                                <a href="edit.php?id=<?= $row['student_id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="delete.php?id=<?= $row['student_id'] ?>" 
                                   class="btn btn-sm btn-danger" 
                                   onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="mt-4">
                <?php if ($page > 1): ?>
                    <a class="btn btn-secondary btn-sm" href="?page=<?= $page - 1 ?>">Previous</a>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                    <a class="btn btn-sm <?= ($i == $page) ? 'btn-primary' : 'btn-outline-primary' ?>" href="?page=<?= $i ?>">
                        <?= $i ?>
                    </a>
                <?php endfor; ?>

                <?php if ($page < $total_pages): ?>
                    <a class="btn btn-secondary btn-sm" href="?page=<?= $page + 1 ?>">Next</a>
                <?php endif; ?>
            </div>

            <a href="logout.php" class="btn btn-danger mt-4">Logout</a>
        </div>
    </div>
</div>

</body>
</html>
