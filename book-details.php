<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taylor Swift: The Eras Tour - Booking Details</title>
    <link rel="stylesheet" href="style-bookdetails.css">
</head>
<body>
    <div class="header">
        <a href="index.php" class="button">Home Page</a>
        <a href="pricelist.php" class="button">Pricelist</a>
        <a href="booktickets.php" class="button">Book Tickets</a>
    </div>

    <div class="container">
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $quantity = $_POST['quantity'];
    $ticket_type = $_POST['ticket_type'];

    if (empty($name) || empty($email) || empty($quantity) || empty($ticket_type)) {
        echo "<p>Please fill all fields.</p>";
    } else {
        list($ticket_label, $ticket_price) = explode(":", $ticket_type);
        $total_price = $ticket_price * $quantity;

        $virtual_account_number = rand(1000000000, 9999999999);

        echo "<div class='ticket'>";
        echo "<div class='ticket-details'>";
        echo "<h3>TAYLOR SWIFT</h3>";
        echo "<h3>THE ERAS TOUR</h3>";
        echo "<p><strong>Name:</strong> {$name}</p>";
        echo "<p><strong>Email:</strong> {$email}</p>";
        echo "<p><strong>Quantity:</strong> {$quantity}</p>";
        echo "<p><strong>Ticket Type:</strong> {$ticket_label}</p>";
        echo "<p><strong>Total Price:</strong> Rp " . number_format($total_price, 0, ',', '.') . "</p>";
        echo "<p><strong>Virtual Account Number:</strong> {$virtual_account_number}</p>";
        echo "<p>Please make the payment to complete your booking.</p>";
        echo "<p>After that, we will send your ticket through your email.</p>";
        echo "</div>";
        echo "</div>";
    }
}
?>
    </div>

    <div class="footer">
        <hr>
        <i>Sponsored by Oti Fried Chicken</i>
    </div>
</body>
</html>