<?php include 'components/header.php'; ?>

<main class="p-6 bg-white">

<!-- Hero Section -->
<section class="container w-full flex flex-col lg:flex-row justify-between items-center mx-auto text-black py-8 px-6 lg:px-20">
    <!-- Text Content -->
    <div class="lg:w-1/2 mb-8 lg:mb-0">
        <h2 class="text-5xl sm:text-2xl md:text-5xl font-bold tracking-wide mb-6 animate__animated animate__backInDown text-blue-600">
            Welcome to My Store
        </h2>
        <p class="text-xl sm:text-lg md:text-xl mb-8 text-gray-700 leading-relaxed">
            Explore our wide range of high-quality products curated for your needs. Find exactly what you're looking for! 
            From tech gadgets to home essentials, our collection is designed to simplify and enhance your lifestyle.
        </p>
        <a href="products.php" class="inline-block px-10 py-4 bg-yellow-500 text-white rounded-full shadow-lg hover:shadow-2xl transform transition duration-300 hover:scale-105 hover:bg-yellow-600">
            Browse Products
        </a>
    </div>
    <!-- Image Content -->
    <div class="lg:w-1/2 w-8/12 sm:w-10/12 w-full flex justify-center" data-aos="fade-left">
        <img src="images/bgimage4.jpg" alt="Store Background" class="sm:w-full max-w-full h-auto ">
    </div>
</section>



    <!-- About Us Section -->
    <section class="container mx-auto py-8 text-center">
        <h3 class="text-4xl font-bold text-gray-800 mb-8">About Us</h3>
        <p class="text-lg text-gray-700 mb-6 mx-auto max-w-4xl leading-relaxed ">
            We are dedicated to bringing you the best products for all your needs. Whether you're looking for high-tech gadgets, 
            fashion items, or home essentials, we've got it all. 
            Our mission is to provide top-quality products at competitive prices, with exceptional customer service. 
            Every product in our store is handpicked to meet the highest standards of quality and reliability.
        </p>
        <p class="text-lg text-gray-700 mb-6 mx-auto max-w-4xl leading-relaxed">
            Customer satisfaction is at the heart of everything we do. We believe in creating a seamless shopping experience
            where you can find exactly what you need with ease and confidence.
        </p>
        <a href="about.php" class="inline-block px-8 py-3 bg-blue-500 text-white rounded-full hover:bg-blue-600 transition duration-300 ease-in-out">
            Learn More
        </a>
    </section>

    <!-- Call to Action Section -->
    <section class="container mx-auto py-8 text-center">
        <h3 class="text-4xl font-bold text-gray-800 mb-8">Have Any Questions?</h3>
        <p class="text-lg text-gray-700 mb-6 mx-auto max-w-4xl leading-relaxed">
            We're here to assist you! If you need help or have any inquiries, feel free to reach out to us. 
            Our support team is available 24/7 to ensure you get the answers you need promptly and effectively.
        </p>
        <p class="text-lg text-gray-700 mb-6 mx-auto max-w-4xl leading-relaxed">
            Whether it's about a product, your order status, or anything else, we're just a click away. We prioritize your satisfaction and strive to offer a seamless support experience.
        </p>
        <a href="contact.php" class="inline-block px-8 py-3 bg-blue-500 text-white rounded-full hover:bg-blue-600 transition duration-300 ease-in-out">
            Contact Us
        </a>
    </section>


    <!-- Testimonials Section -->
    <section class="container mx-auto py-8 text-center">
        <h3 class="text-4xl font-bold text-gray-800 mb-8">What Our Customers Say</h3>
        <div class="flex flex-wrap justify-center gap-8">
            <div class="max-w-xs bg-white p-6 rounded-lg shadow-lg flex-1 transform transition duration-300 hover:bg-blue-50 hover:shadow-2xl">
                <div class="flex justify-center text-center">
                    <img src="images/customer1.jpg" alt="customer" class="rounded-full w-32 h-32">
                </div>
                <div class="my-3">
                    <p class="text-lg text-gray-700 mb-4">"Amazing products and great service! I found everything I needed and more. 
                    The website is user-friendly and the delivery was super fast!"</p>
                    <h4 class="font-bold text-blue-500">John Doe</h4>
                    <p class="text-sm text-gray-500">Customer</p>
                </div>
            </div>
            
            <div class="max-w-xs bg-white p-6 rounded-lg shadow-lg flex-1 transform transition duration-300 hover:bg-blue-50 hover:shadow-2xl">
                <div class="flex justify-center">
                    <img src="images/customer2.jpg" alt="customer" class="rounded-full w-32 h-32">
                </div>
                <div class="my-3">
                    <p class="text-lg text-gray-700 mb-4">"High-quality products at affordable prices. I highly recommend this site! 
                    The customer support was very helpful and responsive."</p>
                    <h4 class="font-bold text-blue-500">Jane Smith</h4>
                    <p class="text-sm text-gray-500">Customer</p>
                </div>
            </div>

            <div class="max-w-xs bg-white p-6 rounded-lg shadow-lg flex-1 transform transition duration-300 hover:bg-blue-50 hover:shadow-2xl">
                <div class="flex justify-center">
                    <img src="images/customer3.jpg" alt="customer" class="rounded-full w-32 h-32">
                </div>
                <div class="my-3">
                    <p class="text-lg text-gray-700 mb-4">"Amazing delivery speed, and everything was exactly as described. 
                    I appreciate the attention to detail and the excellent customer care."</p>
                    <h4 class="font-bold text-blue-500">Juliet Wilson</h4>
                    <p class="text-sm text-gray-500">Customer</p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include 'components/footer.php'; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"></script>
