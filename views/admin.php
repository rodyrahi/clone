<?php
// File path to the JSON file
$currentDirectory = getcwd();
$jsonFileName = 'products.json';
$jsonFilePath = $currentDirectory . '/' . $jsonFileName;



// Read the JSON file
$jsonData = file_get_contents($jsonFilePath);

// Parse JSON data
$items = json_decode($jsonData, true);

// Handle form submission for adding new items
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add'])) {
        $newItem = [
            'id' => count($items['items']) + 1,
            'name' => $_POST['name'],
            'brand' => $_POST['brand'], // Added brand field
            'description' => $_POST['description'],
            'price' => floatval($_POST['price']),
            'discount' => floatval($_POST['discount']),
            'oldPrice' => floatval($_POST['oldPrice']),
            'imageUrls' => explode(',', $_POST['imageUrls'])
        ];

        // Add the new item to the items array
        $items['items'][] = $newItem;

        // Save the updated data back to the JSON file
        file_put_contents($jsonFilePath, json_encode($items, JSON_PRETTY_PRINT));

        // Redirect to avoid form resubmission on refresh
        header("Location: {$_SERVER['PHP_SELF']}");
        exit();
    }
}

// Handle item deletion
if (isset($_GET['delete'])) {
    $idToDelete = $_GET['delete'];

    // Find and remove the item with the specified ID
    foreach ($items['items'] as $key => $item) {
        if ($item['id'] == $idToDelete) {
            unset($items['items'][$key]);
            break;
        }
    }

    // Save the updated data back to the JSON file
    file_put_contents($jsonFilePath, json_encode($items, JSON_PRETTY_PRINT));

    // Redirect to avoid resubmission on refresh
    header("Location: {$_SERVER['PHP_SELF']}");
    exit();
}
?>

























<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
    <h2>Items CRUD Panel</h2>

    <form action="process_form.php" method="post">
        <div class="mb-3">
            <label for="payment" class="form-label">Payment:</label>
            <input type="text" name="payment" class="form-control" required>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>

    <!-- Form to add new items -->
        <form method="post" class="mt-3">
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="brand" class="form-label">Brand:</label>
                <input type="text" name="brand" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price:</label>
                <input type="number" name="price" step="0.01" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="discount" class="form-label">Discount:</label>
                <input type="number" name="discount" step="0.01" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="oldPrice" class="form-label">Old Price:</label>
                <input type="number" name="oldPrice" step="0.01" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="imageUrls" class="form-label">Image URLs (comma-separated):</label>
                <input type="text" name="imageUrls" class="form-control" required>
            </div>
            <!-- New input for payment -->

            <div class="mb-3">
                <input type="submit" name="add" value="Add Item" class="btn btn-primary">
            </div>
        </form>

    <hr>
   

    <!-- Display existing items with options to edit and delete -->
    <?php foreach ($items['items'] as $item) : ?>
        <div>
            <h3><?= $item['name']; ?></h3>
            <p>Brand: <?= $item['brand']; ?></p>
            <p><?= $item['description']; ?></p>
            <p>Price: $<?= $item['price']; ?></p>
            <p>Discount: <?= $item['discount'] * 100; ?>%</p>
            <p>Old Price: $<?= $item['oldPrice']; ?></p>
            <p>Image URLs:</p>
            <ul>
                <?php foreach ($item['imageUrls'] as $imageUrl) : ?>
                    <li><img src="<?= $imageUrl; ?>" alt="Product Image"></li>
                <?php endforeach; ?>
            </ul>
            <p>
                <a href="?delete=<?= $item['id']; ?>" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>
            </p>
        </div>
    <?php endforeach; ?>


    </div>
</body>

</html>
