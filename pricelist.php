<?php 
$ticket_prices = [
    ["VIP 1 (It's Been A Long Time Coming Package)", "Rp 14.740.800"],
    ["VIP 2 (Karma is My Boyfriend Package)", "Rp 8.302.800"],
    ["VIP 3 (I Remember It All Too Well Package)", "Rp 7.192.800"],
    ["VIP 4 (Ready For It Package)", "Rp 6.082.000"],
    ["VIP 5 (It's A Love Story Package)", "Rp 4.861.800"],
    ["VIP 6 (We Never Go Out of Style Package)", "Rp 3.751.800"],
    ["CAT 1", "Rp 3.973.800"],
    ["CAT 2", "Rp 3.751.800"],
    ["CAT 3", "Rp 3.263.400"],
    ["CAT 4", "Rp 2.819.400"],
    ["CAT 5", "Rp 1.751.800"],
    ["CAT 6", "Rp 1.973.800"]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taylor Swift: The Eras Tour - Pricelist</title>
    <link rel="stylesheet" href="style-pricelist.css">
</head>
<body>
    <div class="main-content">
        <div class="header">
            <a href="index.php" class="button">Home Page</a>
            <a href="pricelist.php" class="button">Pricelist</a>
            <a href="booktickets.php" class="button">Book Tickets</a>
        </div>

        <div class="container">
            <table>
                <tr>
                    <th>Category</th> 
                    <th>Price</th>
                </tr>
                <?php
                for ($i = 0; $i < count($ticket_prices); $i++) {
                    echo "<tr>";
                    echo "<td>{$ticket_prices[$i][0]}</td>";
                    echo "<td>{$ticket_prices[$i][1]}</td>"; 
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </div>

        <div class="footer">
            <hr>
            <i>Sponsored by Oti Fried Chicken</i>
        </div>
    </div>
    
    <img src="assets/seating-plan.png" alt="Taylor Swift Concert Pricelist" class="pricelist-image">

</body>
</html>