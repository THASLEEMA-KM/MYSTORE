<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gray-100">
    <?php include 'components/header.php'; ?>

    <main class="p-6 bg-white">
       <!-- About Us Hero Section -->
<section class="text-center text-black py-12">
    <h1 class="text-5xl font-bold mb-6 animate__animated animate__backInDown">About Us</h1>
    <p class="text-lg max-w-3xl mx-auto leading-relaxed">
        Learn more about our journey, our values, and how we strive to bring the best to our customers every day. 
        Discover the story behind our commitment to quality, innovation, and customer satisfaction.
    </p>
    <div class="mt-6">
        <img src="images/team.jpg" alt="Our Team" class="w-full sm:w-3/4 md:w-1/2 mx-auto rounded-lg shadow-lg animate__animated animate__fadeIn">
    </div>
</section>

<!-- Our Mission Section -->
<section class="container mx-auto py-12 px-6">
    <div class="text-center mb-12">
        <h2 class="text-4xl font-bold text-gray-800 mb-6 ">Our Mission</h2>
        <p class="text-lg text-gray-600 leading-relaxed max-w-4xl mx-auto">
            Our mission is to provide the highest quality products that exceed customer expectations. 
            We aim to deliver unparalleled service and contribute to a more convenient, connected, and joyful life.
        </p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Card 1 -->
        <div class="bg-white shadow-lg rounded-lg p-6 text-center">
            <div class="mb-4">
                <img src="images/innovation.png" alt="Innovation" class="w-25 h-20 mx-auto">
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-3">Innovation</h3>
            <p class="text-gray-600">
                We constantly explore new ways to improve and bring the latest products and trends to our customers.
            </p>
        </div>
        <!-- Card 2 -->
        <div class="bg-white shadow-lg rounded-lg p-6 text-center">
            <div class="mb-4">
                <img src="images/quality.jpg" alt="Quality" class="w-25 h-20 mx-auto">
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-3">Quality</h3>
            <p class="text-gray-600">
                Every product is handpicked and thoroughly tested to ensure it meets our high standards of excellence.
            </p>
        </div>
        <!-- Card 3 -->
        <div class="bg-white shadow-lg rounded-lg p-6 text-center">
            <div class="mb-4">
                <img src="images/service.png" alt="Service" class="w-25 h-20 mx-auto">
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-3">Customer Service</h3>
            <p class="text-gray-600">
                Our team is dedicated to providing exceptional service and support, making your experience seamless and enjoyable.
            </p>
        </div>
    </div>
</section>

<!-- Our Story Section -->
<section class="container mx-auto py-12 px-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
        <!-- Text Content -->
        <div>
            <h2 class="text-4xl font-bold text-gray-800 mb-6">Our Story</h2>
            <p class="text-lg text-gray-600 leading-relaxed mb-4">
                What began as a small family-run business has grown into a trusted name in the industry. 
                Our journey has been fueled by a passion for delivering value and a desire to make a positive impact in the lives of our customers.
            </p>
            <p class="text-lg text-gray-600 leading-relaxed">
                With every product we offer, we strive to bring happiness, convenience, and a sense of trust. 
                Our story is one of growth, innovation, and an unyielding commitment to our customers.
            </p>
        </div>
        <!-- Image -->
        <div class="flex justify-center" data-aos="fade-left">
            <img src="images/our-story.jpg" alt="Our Story" class="w-full max-w-lg rounded-lg shadow-lg">
        </div>
    </div>
</section>


        <!-- Team Section -->
        <section class="py-12">
            <div class="container mx-auto">
                <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Meet Our Team</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Team Member -->
                    <div class="bg-white shadow-lg rounded-lg p-6 text-center transform transition duration-300 hover:bg-blue-50 hover:shadow-2xl">
                        <img src="images/member1.jpg" alt="team member" class="rounded-full w-32 h-32 mx-auto mb-4">
                        <h3 class="text-xl font-semibold text-gray-700">Alex Carter</h3>
                        <p class="text-sm text-gray-500">Founder & CEO</p>
                    </div>
                    <!-- Team Member -->
                    <div class="bg-white shadow-lg rounded-lg p-6 text-center transform transition duration-300 hover:bg-blue-50 hover:shadow-2xl">
                        <img src="images/member2.jpg" alt="team member" class="rounded-full w-32 h-32 mx-auto mb-4">
                        <h3 class="text-xl font-semibold text-gray-700">Sophia Martinez</h3>
                        <p class="text-sm text-gray-500">Head of Marketing</p>
                    </div>
                    <!-- Team Member -->
                    <div class="bg-white shadow-lg rounded-lg p-6 text-center transform transition duration-300 hover:bg-blue-50 hover:shadow-2xl">
                        <img src="images/member3.jpg" alt="team member" class="rounded-full w-32 h-32 mx-auto mb-4">
                        <h3 class="text-xl font-semibold text-gray-700">Emily Johnson</h3>
                        <p class="text-sm text-gray-500">Lead Designer</p>
                    </div>
                    <!-- Team Member -->
                    <div class="bg-white shadow-lg rounded-lg p-6 text-center transform transition duration-300 hover:bg-blue-50 hover:shadow-2xl">
                        <img src="images/member4.jpg" alt="team member" class="rounded-full w-32 h-32 mx-auto mb-4">
                        <h3 class="text-xl font-semibold text-gray-700">Robert Brown</h3>
                        <p class="text-sm text-gray-500">Technical Lead</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="text-center py-12 text-black">
            <h2 class="text-4xl font-bold mb-4">Join Us on Our Journey</h2>
            <p class="text-lg mb-6">Discover how we can work together to make a difference.</p>
            <a href="contact.php" class="px-8 py-4 bg-yellow-500 text-white rounded-lg shadow-lg transform transition duration-300 hover:scale-105 hover:bg-yellow-600">
                Contact Us
            </a>
        </section>
    </main>

    <?php include 'components/footer.php'; ?>
</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</html>
