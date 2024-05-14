<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_SESSION['username'];
    $order = $_POST['order'];
    $quantity = $_POST['quantity'];
    $cash = $_POST['cash'];

    $prices = array(
        "fishball" => 30,
        "kikiam" => 40,
        "corndog" => 50
    );

    $total_cost = $prices[$order] * $quantity;
    $change = $cash - $total_cost;

    echo "<h2>Total Cost: $total_cost PHP</h2>";
    echo "<h2>Change: $change PHP</h2>";
    echo "<h2>Thank you for your order, $username!</h2>";
} else {
    echo "<h2>Error: Form data not received.</h2>";
}
?>
