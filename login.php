<?php
// Handle form submission
$loginError = false; // Initialize the error flag

if (isset($_POST['signin-btn'])) {
    // Create database connection
    $con = mysqli_connect('localhost', 'root', "", 'eventorium');

    // Check if the connection is successful
    if (!$con) {
        die('Error: ' . mysqli_connect_error());
    }

    // Get form data
    $username = $_POST['uname'];
    $password = $_POST['pass'];

    // Validate username using the validateString function
    function validateString($str) {
        return preg_match('/^[a-zA-Z0-9_]+$/', $str); // Only allows alphabets, numbers, and underscores
    }

    if (!validateString($username)) {
        $loginError = true;
    }else {
        // Prepare and execute the query using prepared statements to avoid SQL injection
        $stmt = $con->prepare('SELECT * FROM RegisteredUser WHERE Username = ? AND Password = ?');
        $stmt->bind_param('ss', $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Successful login, redirect to the dashboard
            header("Location: main.php");  // Change 'dashboard.php' to your actual dashboard page
            exit();
        } else {
            // Login failed, set error flag to true
            $loginError = true;
        }

        // Close the prepared statement and connection
        $stmt->close();
        mysqli_close($con);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVENTORIUM Login Page</title>
    <link rel="stylesheet" href="login.css">
</head>
<style>
    .error-message {
        /* background-color: yellow; */
        color: antiquewhite;
        padding-top: 20px;
        padding-bottom: 20px;
        text-align: center;
    }
</style>
<body>
    <nav>
        <a href="#"><img src="Images/login-logo.png" alt="EVENTORIUM"></a>
    </nav>
    <div class="form-wrapper">
        <h2>Sign In</h2>

        <!-- Display error message if login failed -->
        <?php if ($loginError): ?>
            <div class="error-message">
                <strong>Username/Password is incorrect. <br>Please try again!</strong>
            </div>
        <?php endif; ?>

        <!-- Login Form -->
        <form action="#" method="post">
            <div class="form-control">
                <input type="text" name="uname" value="<?php echo isset($_POST['uname']) ? htmlspecialchars($_POST['uname']) : ''; ?>" required>
                <label>Username</label>
            </div>
            <div class="form-control">
                <input type="password" name="pass" required>
                <label>Password</label>
            </div>
            <button type="submit" name="signin-btn">Sign In</button>
        </form>

        <small>
            This page is protected by Google reCAPTCHA to ensure you're not a bot.
            <a href="#">Learn more.</a>
        </small>
    </div>
</body>
</html>
