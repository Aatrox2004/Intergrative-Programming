<?php
date_default_timezone_set('Asia/Singapore');
session_start();

// Ensure booking exists
if (!isset($_SESSION['booking'])) {
    header('Location: reservation.php');  // Redirect if no booking
    exit;
}

$booking = $_SESSION['booking'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Payment Page</title>
  <link rel="stylesheet" href="./CSS/General.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      background-color: #f7f7f7;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 800px;
      margin: 2rem auto;
      padding: 1rem;
    }

    .card {
      background: #fff;
      border-radius: 8px;
      padding: 2rem;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    h3 {
      margin-top: 0;
      border-bottom: 2px solid #f9b233;
      padding-bottom: 0.5rem;
    }

    dl {
      margin: 0;
    }

    dt {
      font-weight: bold;
      width: 30%;
      float: left;
      clear: left;
      padding: 0.5rem 0;
    }

    dd {
      margin: 0;
      padding: 0.5rem 0;
      width: 70%;
      float: left;
    }

    form {
      clear: both;
      margin-top: 2rem;
    }

    label {
      display: block;
      margin-top: 1rem;
      font-weight: bold;
    }

    input[type="text"] {
      width: 100%;
      padding: 0.5rem;
      margin-top: 0.25rem;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      margin-top: 2rem;
      padding: 0.75rem 1.5rem;
      background: #f9b233;
      border: none;
      font-weight: bold;
      cursor: pointer;
      border-radius: 5px;
      color: #fff;
      font-size: 1rem;
      width: 100%;
    }

    button:hover {
      background: #e0a322;
    }

    .clearfix::after {
      content: "";
      display: table;
      clear: both;
    }
  </style>
</head>
<body>
  <div id="header"></div>
  <div class="container">
    <div class="card">
      <h3>Confirm Your Booking</h3>
      <dl class="clearfix">
        <dt>Name</dt><dd><?= htmlspecialchars($booking['name']) ?></dd>
        <dt>Check-in</dt><dd><?= htmlspecialchars($booking['checkin']) ?></dd>
        <dt>Check-out</dt><dd><?= htmlspecialchars($booking['checkout']) ?></dd>
        <dt>Room</dt><dd><?= htmlspecialchars($booking['room']) ?></dd>
        <dt>Guests</dt><dd><?= htmlspecialchars($booking['guests']) ?></dd>
        <dt>Nights</dt><dd><?= htmlspecialchars($booking['nights']) ?></dd>
        <dt>Total</dt><dd>$<?= htmlspecialchars(number_format($booking['total'], 2)) ?></dd>
      </dl>
      <form action="./Control/PaymentControl.php" method="POST">
        <input type="hidden" name="amount" value="<?= htmlspecialchars($booking['total']) ?>">
        <label>Card Number</label>
        <input type="text" name="card_number" required>
        <label>Expiry (MM/YY)</label>
        <input type="text" name="expiry" placeholder="MM/YY" required>
        <label>CVV</label>
        <input type="text" name="cvv" required>
        <button type="submit">Pay $<?= htmlspecialchars(number_format($booking['total'], 2)) ?></button>
      </form>
    </div>
  </div>
  <div id="footer"></div>
  <script src="./JS/Include.js"></script>
</body>
</html>