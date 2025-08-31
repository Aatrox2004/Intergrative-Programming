<?php
date_default_timezone_set('Asia/Singapore');
session_start();
error_log("Received POST at " . date('Y-m-d H:i:s') . ": " . print_r($_POST, true));
echo "Payment processing stub. Amount: " . ($_POST['amount'] ?? 'Not set');
// Add actual payment logic (e.g., Stripe, PayPal) here later