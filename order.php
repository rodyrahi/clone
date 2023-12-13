<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve and sanitize POST data
    $fullName = isset($_POST["name"]) ? htmlspecialchars($_POST["name"]) : "";
    $mobileNumber = isset($_POST["number"]) ? htmlspecialchars($_POST["number"]) : "";
    $pincode = isset($_POST["pin"]) ? htmlspecialchars($_POST["pin"]) : "";
    $city = isset($_POST["city"]) ? htmlspecialchars($_POST["city"]) : "";
    $state = isset($_POST["state"]) ? htmlspecialchars($_POST["state"]) : "";
    $flat = isset($_POST["flat"]) ? htmlspecialchars($_POST["flat"]) : "";
    $area = isset($_POST["area"]) ? htmlspecialchars($_POST["area"]) : "";
    $item = isset($_POST["item"]) ? htmlspecialchars($_POST["item"]) : "";
    $color = isset($_POST["color"]) ? htmlspecialchars($_POST["color"]) : "";

    // You can perform any necessary validation or processing here

    // Redirect to the next page with query parameters
    $redirectUrl = "views/order-summary.php?name=$fullName&number=$mobileNumber&pin=$pincode&city=$city&state=$state&flat=$flat&area=$area&item=$item&color=$color";
    header("Location: $redirectUrl");
    exit;
} else {
    // Handle cases where the form wasn't submitted
    // (You may want to redirect or show an error message)
    header("Location: error_page.php");
    exit;
}
?>
