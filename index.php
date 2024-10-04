<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals Activity</title>

    <style>
        table, tr, th, td {
            border: 1px, solid, black;
        }

        th, td, label, select, input {
            font-size: 30px;
        }

        table {
            width: 510px;
        }

        th {
            justify-content: center;
            width: 250px;
        }
    </style>
</head>
<body>
    <form action="receipt.php" method="GET"> 
        <h1>Menu</h1>
        <table>
            <tr>
                <th>Order</th>
                <th>Amount</th>
            </tr>
            <tr>
                <td>Burger</td>
                <td>50</td>
            </tr>
            <tr>
                <td>Fries</td>
                <td>75</td>
            </tr>
            <tr>
                <td>Steak</td>
                <td>150</td>
            </tr>
        </table>
        <p><label for="foods">Select an Order</label>
        <select name="foods" id="foods">
            <option value="burger">Burger</option>
            <option value="fries">Fries</option>
            <option value="steak">Steak</option>
        </select></p>
        <p><label for="qty">Quantity</label>
        <input type="number" name="qty" style="width: 20%"></p>

        <p><label for="cash">Cash</label>
            <input type="number" name="cash" style="width: 20%"></p>
        <p><input type="submit" name="submitBtn" value="Submit"></p>
    </form>
</body>
</html>
