<!-- reset-password.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <!-- Add any necessary CSS styles for the reset password page -->
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Reset Password</h1>

    <form action="/reset-password.php" method="POST">
        <?php csrf_token(); ?> <!-- Function to generate and include the CSRF token -->

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div>
            <label for="new-password">New Password:</label>
            <input type="password" id="new-password" name="new-password" required>
        </div>

        <div>
            <label for="confirm-password">Confirm Password:</label>
            <input type="password" id="confirm-password" name="confirm-password" required>
        </div>

        <div>
            <button type="submit">Reset Password</button>
        </div>
    </form>
</body>
</html>