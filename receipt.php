<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <style>
        body {
            font-family: arial;
        }
        p {
            font-weight: bold;
            font-size: 30px;
        }

        h3 {
            font-size: 40px
        }
    </style>
</head>
<body>
    <?php
        if (isset($_GET["submitBtn"])) {
            $menu = [
                "burger" => 50,
                "fries" => 75,
                "steak" => 150
            ];

            $food = $_GET['foods'];
            $quantity = intval($_GET['qty']);
            $cashPaid = floatval($_GET['cash']);

            $pricePerItem = $menu[$food];
            $totalAmount = $pricePerItem * $quantity;

            $change = $cashPaid - $totalAmount;

            $dateTime = date("d/m/Y H:i:s A");

            if ($cashPaid >= $totalAmount) {
                echo '<div style="border: 2px dotted black; padding: 2%; margin: auto; width: 80vw;">';
                echo '<div style="margin: 0 0 0 45%;"><h3>Receipt</h3></div>';
                echo "<p>Total Price: " . $totalAmount . "</p>";
                echo "<p>You Paid: " . $cashPaid . "</p>";
                echo "<p>CHANGE: " . $change . "</p>";
                echo "<p><i>" . $dateTime . "</i></p>";
                echo '</div>';
            } else {
                echo '<div style="border: 2px dotted red; padding: 2%; margin: auto; width: 80vw;">';
                echo "<h3>Sorry, Balance not Enough!</h3>";
                echo '</div>';
            }
                }
    ?>
</body>
</html>