<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h2>Register here:</h2>
    <form method="post" action="register_process.php">
        <label for="new_username">Username:</label>
        <input type="text" id="new_username" name="new_username" required><br><br>
        <label for="new_password">Password:</label>
        <input type="password" id="new_password" name="new_password" required><br><br>
        <input type="submit" name="register" value="Register">
    </form>
    <p><a href="login.php">Back to Login</a></p>
</body>
</html>
