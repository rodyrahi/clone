<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the payment data from the form
    $payment = isset($_POST['payment']) ? $_POST['payment'] : '';

    // Read the existing JSON file content
    $jsonFile = 'payment.json';
    $jsonContent = file_get_contents($jsonFile);

    // Decode JSON content into an associative array
    $data = json_decode($jsonContent, true);

    // Update the payment value
    $data['url'] = $payment;

    // Encode the updated data back to JSON format
    $updatedJsonContent = json_encode($data, JSON_PRETTY_PRINT);

    // Write the updated content back to the JSON file
    file_put_contents($jsonFile, $updatedJsonContent);

    // Redirect back to the form or any other page
    header("Location: {$_SERVER['PHP_SELF']}");
    exit();
}
?>
