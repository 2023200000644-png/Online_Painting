<?php
session_start();
require_once "db.php";

$message = "";
$message_type = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form data
    $full_name = trim($_POST["full_name"]);
    $student_id = trim($_POST["student_id"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Check password match
    if ($password !== $confirm_password) {

        $message = "Passwords do not match.";
        $message_type = "error";

    } else {

        // Check if email already exists
        $check_sql = "SELECT id FROM users WHERE email = ?";
        $check_stmt = $pdo->prepare($check_sql);
        $check_stmt->execute([$email]);

        if ($check_stmt->fetch()) {

            $message = "This email is already registered.";
            $message_type = "error";

        } else {

            // Hash password for security
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insert user into database
            $sql = "INSERT INTO users 
                    (full_name, student_id, email, password)
                    VALUES (?, ?, ?, ?)";

            $stmt = $pdo->prepare($sql);

            if ($stmt->execute([
                $full_name,
                $student_id,
                $email,
                $hashed_password
            ])) {

                $message = "Registration successful! You can now login.";
                $message_type = "success";

                // Clear form values
                $full_name = "";
                $student_id = "";
                $email = "";

            } else {

                $message = "Registration failed. Please try again.";
                $message_type = "error";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Register - Online Painting Management System</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<header class="site-header">

    <div class="container">

        <h1>Online Painting Management System</h1>

        <p>Explore, manage and organize beautiful paintings.</p>

        <nav class="nav">
            <a href="index.php">Home</a>
            <a href="register.php" class="active">Register</a>
            <a href="login.php">Login</a>
        </nav>

    </div>

</header>


<main>

    <div class="container">

        <div class="card form-card">

            <h2>Create an Account</h2>


            <?php if ($message != ""): ?>

                <div class="message <?php echo $message_type; ?>">
                    <?php echo htmlspecialchars($message); ?>
                </div>

            <?php endif; ?>


            <form action="register.php" method="POST">

                <label for="full_name">Full Name</label>

                <input
                    type="text"
                    id="full_name"
                    name="full_name"
                    value="<?php echo htmlspecialchars($full_name ?? ''); ?>"
                    required
                >


                <label for="student_id">Student ID</label>

                <input
                    type="text"
                    id="student_id"
                    name="student_id"
                    value="<?php echo htmlspecialchars($student_id ?? ''); ?>"
                    required
                >


                <label for="email">Email</label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="<?php echo htmlspecialchars($email ?? ''); ?>"
                    required
                >


                <label for="password">Password</label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    required
                >


                <label for="confirm_password">Confirm Password</label>

                <input
                    type="password"
                    id="confirm_password"
                    name="confirm_password"
                    required
                >


                <button type="submit" class="btn btn-block">
                    Register
                </button>

            </form>


            <p class="form-note">
                Already have an account?
                <a href="login.php">Login</a>
            </p>

        </div>

    </div>

</main>


<footer class="site-footer">
    Online Painting Management System
</footer>


</body>
</html>