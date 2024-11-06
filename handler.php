<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <title>Welcome Page</title>
</head>

<body>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $size = $_POST['size'];
    $toppings = $_POST['toppings'];

    $base = ($size == 'L') ? 6.00 : 10.00;

    $topping_prices = [
      1 => 1.00,
      2 => 1.75,
      3 => 2.50,
      4 => 3.35
    ];

    $subtotal = $base + $topping_prices[$toppings];
    $tax = $subtotal * 0.13;
    $total = $subtotal + $tax;

    echo "<h3>Order Summary:</h3>";
    echo "Pizza Size: " . ($size == 'L' ? "Large" : "Extra Large") . "<br>";
    echo "Number of Toppings: " . $toppings . "<br>";
    echo "Subtotal: $" . number_format($subtotal, 2) . "<br>";
    echo "Tax (13%): $" . number_format($tax, 2) . "<br>";
    echo "Total: $" . number_format($total, 2);
  } else {
    echo "Please submit the form.";
  }
 ?>
</body>

</html>