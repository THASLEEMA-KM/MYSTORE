
<?php include 'components/header.php'; ?>

<main class="p-6">
<div class="mb-4">
    <h1 class="text-center text-5xl font-bold animate__animated animate__backInDown"> Our Products</h1>
        <div >
            <label for="category-filter" class="block text-gray-700">Filter by Category:</label>
            <select id="category-filter" class="border p-3 rounded">
                <!-- <option value="all">All</option> -->
            </select>
        </div>
</div>
<div id="product-container" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4" ></div>
</main>

<?php include 'components/footer.php'; ?>
