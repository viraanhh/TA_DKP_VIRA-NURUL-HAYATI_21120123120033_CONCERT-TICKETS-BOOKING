<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taylor Swift: The Eras Tour - Concert Ticket Booking</title>
    <link rel="stylesheet" href="style-booktickets.css">
</head>
<body>
    <div class="header">
        <a href="index.php" class="button">Home Page</a>
        <a href="pricelist.php" class="button">Pricelist</a>
        <a href="booktickets.php" class="button">Book Tickets</a>
    </div>

    <div class="container">
        <h2>Taylor Swift: The Eras Tour - Concert Ticket Booking<br>July 29, 2024<br>Muladi Dome, Tembalang, Semarang</h2>
        <form method="post" action="book-details.php">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" required>
            
            <label for="ticket_type">Ticket Type:</label>
            <select id="ticket_type" name="ticket_type">
                <option value="" disabled selected>Select your ticket type</option>
                <option value="VIP 1 (It's Been A Long Time Coming Package):14740800">VIP 1 (It's Been A Long Time Coming Package) : Rp 14.740.800</option>
                <option value="VIP 2 (Karma is My Boyfriend Package):8302800">VIP 2 (Karma is My Boyfriend Package) : Rp 8.302.800</option>
                <option value="VIP 3 (I Remember It All Too Well Package):7192800">VIP 3 (I Remember It All Too Well Package) : Rp 7.192.800</option>
                <option value="VIP 4 (Ready For It Package):6082000">VIP 4 (Ready For It Package) : Rp 6.082.000</option>
                <option value="VIP 5 (It's A love Story Package):4861800">VIP 5 (It's A love Story Package) : Rp 4.861.800</option>
                <option value="VIP 6 (We Never Go Out of Style Package):3751800">VIP 6 (We Never Go Out of Style Package) : Rp 3.751.800</option>
                <option value="CAT 1:3973800">CAT 1: Rp 3.973.800</option>
                <option value="CAT 2:3751800">CAT 2: Rp 3.751.800</option>
                <option value="CAT 3:3263400">CAT 3: Rp 3.263.400</option>
                <option value="CAT 4:2819400">CAT 4: Rp 2.819.400</option>
                <option value="CAT 5:1751800">CAT 5: Rp 1.751.800</option>
                <option value="CAT 6:1973800">CAT 6: Rp 1.973.800</option>
            </select>
            
            <input type="submit" name="submit" value="Book Ticket">
        </form>

        <?php
        class TicketBooking {
            private $name;
            private $email;
            private $quantity;
            private $ticket_type;
            private $ticket_label;
            private $ticket_price;

            public function __construct($name, $email, $quantity, $ticket_type) {
                $this->setName($name);
                $this->setEmail($email);
                $this->setQuantity($quantity);
                $this->setTicketType($ticket_type);
            }

            public function setName($name) {
                $this->name = $name;
            }

            public function getName() {
                return $this->name;
            }

            public function setEmail($email) {
                $this->email = $email;
            }

            public function getEmail() {
                return $this->email;
            }

            public function setQuantity($quantity) {
                $this->quantity = $quantity;
            }

            public function getQuantity() {
                return $this->quantity;
            }

            public function setTicketType($ticket_type) {
                $this->ticket_type = $ticket_type;
                $this->parseTicketType();
            }

            public function getTicketType() {
                return $this->ticket_type;
            }

            private function parseTicketType() {
                list($this->ticket_label, $this->ticket_price) = explode(":", $this->ticket_type);
            }

            public function getTicketLabel() {
                return $this->ticket_label;
            }

            public function getTicketPrice() {
                return $this->ticket_price;
            }

            public function getTotalPrice() {
                return $this->ticket_price * $this->quantity;
            }
            
        }

        if(isset($_POST['submit'])){ 
            $name = $_POST['name']; 
            $email = $_POST['email']; 
            $quantity = $_POST['quantity']; 
            $ticket_type = $_POST['ticket_type'];

            if(empty($name) || empty($email) || empty($quantity)){ 
                echo "<p>Please fill all fields.</p>";
            } else {
                $booking = new TicketBooking($name, $email, $quantity, $ticket_type);
                $booking->displayBookingDetails();
            }
        }
        ?>

        <div class="footer">
            <hr>
            <i>Sponsored by Oti Fried Chicken</i>
        </div>

    </div>
</body>
</html>
