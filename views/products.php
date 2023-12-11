<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
</head>
<body>
    <?php
    $productId = explode('/', $_GET['url'])[1] ?? null;

    if ($productId) {
        echo "<h1>Welcome to Product $productId Page!</h1>";
        // Fetch product details from a database or an array
        // Display product details, image, description, etc.
    } else {
        echo "<h1>Invalid Product ID</h1>";
    }
    ?>
</body>
</html>
