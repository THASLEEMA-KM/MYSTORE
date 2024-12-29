<?php
include 'components/header.php';

// Get the product name from the URL query parameter
$productName = isset($_GET['name']) ? urldecode($_GET['name']) : null;

// Read the products.json file
$jsonData = file_get_contents('data/products.json');
$products = json_decode($jsonData, true);

// Find the product with the matching name
$product = null;
foreach ($products as $item) {
    if ($item['title'] === $productName) {
        $product = $item;
        break;
    }
}
?>

<div class="min-h-screen flex items-center bg-white">
    <main class="p-6">
        <?php if ($product): ?>
            <h1 class="text-center text-3xl font-bold text-gray-800"><?= htmlspecialchars($product['title']) ?></h1>
            <div class=" rounded p-6 md:flex md:space-x-6">
                <!-- Image Section -->
                <div class="md:w-1/2">
                    <img src="<?= htmlspecialchars($product['image']) ?>" 
                         alt="<?= htmlspecialchars($product['title']) ?>" 
                         class=" rounded viewProductimage md:w-50 sm:w-full lg:w-50">
                </div>
    
                <!-- Details Section -->
                <div class="md:w-1/2 mt-8 text-justify">
                    <p class="text-black text-2xl mt-4"><?= htmlspecialchars($product['description']) ?></p>
                    <p class="text-blue-500 font-bold text-xl mt-4">Price : $<?= htmlspecialchars($product['price']) ?></p>
                    <p class="text-gray-600 mt-2 text-lg"><strong>Category:</strong> <?= htmlspecialchars($product['category']) ?></p>
                </div>
            </div>
        <?php else: ?>
            <p class="text-red-500">Product not found.</p>
            <a href="index.php" class="text-blue-500 mt-4 inline-block">Back to Catalog</a>
        <?php endif; ?>
    </main>
</div>

<?php include 'components/footer.php'; ?>
