document.addEventListener("DOMContentLoaded", () => {
    const productContainer = document.getElementById("product-container");
    const categoryFilter = document.getElementById("category-filter");

    // Fetch product data from JSON
    fetch("data/products.json")
        .then(response => response.json())
        .then(data => {
            const categories = new Set(["All"]);
            data.forEach(product => categories.add(product.category));

            // Populate category filter
            categories.forEach(category => {
                const option = document.createElement("option");
                option.value = category;
                option.textContent = category;
                categoryFilter.appendChild(option);
            });

            // Display products
            const displayProducts = (category) => {
                productContainer.innerHTML = "";
                const filteredProducts = category === "all" ? data : data.filter(product => product.category === category);

                filteredProducts.forEach(product => {
                    // Inside displayProducts function
                    const productCard = `
                    <div class="bg-white shadow rounded p-4 ">
                        <img src="${product.image}" alt="${product.title}" class="w-full h-48  rounded p-4">
                        <h2 class="text-lg font-bold mt-2 text-center">${product.title.slice(0,20)}...</h2>
                        <div class="flex items-center h-8 my-8">
                        <p class="text-gray-600 text-justify">${product.description.slice(0,120)}..(See More)</p>
                        </div>
                        <p class="text-blue-500 font-bold mt-2 mb-4">Price : $${product.price}</p>
                        <div class="text-center">
                            <a class="bg-blue-500  text-white py-2 px-4 rounded hover:bg-blue-600 text-center" 
                            href="viewProduct.php?name=${encodeURIComponent(product.title)}">
                            View Product
                            </a>
                        </div>
                    </div>
                    `;
                    productContainer.innerHTML += productCard;
                });
            };

            displayProducts("all");

            // Filter products by category
            categoryFilter.addEventListener("change", (e) => {
                displayProducts(e.target.value);
            });
        })
        .catch(error => console.error("Error fetching product data:", error));
});
