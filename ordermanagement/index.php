<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Order Management System</title>
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($username); ?>, to the canteen! Here are the prices:</h2>
    <a href="logout.php">Logout</a><br><br>
    <p>
        <ul>
            <li>Fishball - 30 PHP</li>
            <li>Kikiam - 40 PHP</li>
            <li>Corndog - 50 PHP</li>
        </ul>
    </p>
    <form method="post" action="submitorder.php">
        <label for="order">Choose your order:</label>
        <select id="order" name="order">
            <option value="fishball">Fishball</option>
            <option value="kikiam">Kikiam</option>
            <option value="corndog">Corndog</option>
        </select><br><br>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" min="1" required><br><br>
        <label for="cash">Cash:</label>
        <input type="number" id="cash" name="cash" min="0" required><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
