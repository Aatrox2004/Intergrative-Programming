<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Reservation Page</title>
  <link rel="stylesheet" href="./CSS/General.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <style>
    form {
      max-width: 500px;
      margin: auto;
      background: #f9f9f9;
      padding: 2rem;
      border-radius: 8px;
    }

    label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: bold;
    }

    input, select {
      width: 100%;
      padding: 0.5rem;
      margin-bottom: 1.5rem;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      background: #f9b233;
      padding: 0.75rem 1.5rem;
      border: none;
      font-weight: bold;
      cursor: pointer;
      border-radius: 5px;
    }
  </style>
</head>
<body>
  <div id="header"></div>

  <section class="section">
    <h2 class="section-title">Make a Reservation</h2>
    <form action="./DesignPatterns/Strategy.php" method="POST">
      <label for="name">Full Name</label>
      <input type="text" id="name" name="name" required>

      <label for="checkin">Check-in Date</label>
      <input type="date" id="checkin" name="checkin" required>

      <label for="checkout">Check-out Date</label>
      <input type="date" id="checkout" name="checkout" required>

      <label for="room">Room Type</label>
      <select id="room" name="room">
        <option value="Deluxe">Deluxe</option>
        <option value="Standard">Standard</option>
        <option value="Suite">Suite</option>
      </select>

      <label for="guests">Guests</label>
      <input type="number" id="guests" name="guests" min="1" max="5" required>

      <button type="submit">Proceed to Payment</button>
    </form>
  </section>

  <div id="footer"></div>
  <script src="./JS/Include.js"></script>
  <!-- <script>
    setTimeout(function () {
      alert("Timeout for reservation");
      window.location.href = "home.html";
    }, 300000); // 10000 ms = 10 seconds
  </script> -->
</body>
</html>
