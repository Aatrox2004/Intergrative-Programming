<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>User Profile - Chris Hotel</title>
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
            max-width: 600px;
            margin: 2rem auto;
            padding: 1rem;
        }
        .profile-card {
            background: #fff;
            border-radius: 8px;
            padding: 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        .profile-card h2 {
            margin-top: 0;
            color: #f9b233;
        }
        .profile-details {
            margin-top: 1.5rem;
        }
        .profile-details p {
            margin: 0.5rem 0;
            font-size: 1.1rem;
        }
        .edit-btn {
            margin-top: 1.5rem;
            padding: 0.75rem 1.5rem;
            background: #f9b233;
            border: none;
            font-weight: bold;
            cursor: pointer;
            border-radius: 5px;
            color: #fff;
            font-size: 1rem;
            text-decoration: none;
        }
        .edit-btn:hover {
            background: #e0a322;
        }
    </style>
</head>
<body>
    <div id="header"></div>
    <div class="container">
        <div class="profile-card">
            <h2>User Profile</h2>
            <div class="profile-details">
                <p><strong>Name:</strong> <?= htmlspecialchars($userName) ?></p>
                <p><strong>Email:</strong> <?= htmlspecialchars(isset($booking['email']) ? $booking['email'] : 'Not provided') ?></p>
                <p><strong>Total Spent:</strong> $<?= htmlspecialchars(number_format($booking['total'], 2)) ?></p>
                <p><strong>Last Booking:</strong> <?= htmlspecialchars($booking['checkin'] . ' to ' . $booking['checkout']) ?></p>
            </div>
            <a href="edit_profile.php" class="edit-btn">Edit Profile</a>
        </div>
    </div>
    <div id="footer"></div>
    <script src="./JS/Include.js"></script>
</body>
</html>