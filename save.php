<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form values
    $name     = htmlspecialchars($_POST['name']);
    $mobile   = htmlspecialchars($_POST['mobile']);
    $state    = htmlspecialchars($_POST['state']);
    $provider = htmlspecialchars($_POST['provider']);                  $simtype  = htmlspecialchars($_POST['simtype']);
    $package  = htmlspecialchars($_POST['rechargePackage']);
    $payment  = htmlspecialchars($_POST['payment']);

    // Format the data
    $data  = "Name: " . $name . "\n";
    $data .= "Mobile: " . $mobile . "\n";
    $data .= "State: " . $state . "\n";
    $data .= "Provider: " . $provider . "\n";
    $data .= "SIM Type: " . $simtype . "\n";
    $data .= "Package: " . $package . "\n";
    $data .= "Payment Option: " . $payment . "\n";
    $data .= "-----------------------------\n";

    // Save to data.txt
    $file = fopen("data.txt", "a");
    if ($file) {
        fwrite($file, $data);
        fclose($file);

        // Redirect to thank you page
        header("Location: thankyou.html");
        exit();
    } else {
        echo "❌ Error: Unable to open file. Check permissions.";
    }
} else {
    echo "❌ Invalid Request.";
}
?>

