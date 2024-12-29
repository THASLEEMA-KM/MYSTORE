<?php include 'components/header.php'; ?>

<main class="p-6 bg-white">

    <!-- Contact Section -->
    <section class="container mx-auto py-16 text-center">
        <h2 class="text-4xl font-bold text-gray-800 mb-8">Contact Us</h2>
        <p class="text-lg text-gray-700 mb-8 mx-auto max-w-2xl leading-relaxed">
            If you have any questions or need assistance, feel free to reach out to us. We are here to help!
        </p>
        
        <!-- Contact Form -->
        <div class="max-w-lg mx-auto">
            <form id="contactForm" method="POST" class="space-y-6">
                <!-- Name Input -->
                <div>
                    <label for="name" class="block text-gray-700 font-medium">Full Name</label>
                    <input type="text" id="name" name="name" class="w-full p-4 border border-gray-300 rounded-md" required placeholder="Your Name">
                </div>
                
                <!-- Email Input -->
                <div>
                    <label for="email" class="block text-gray-700 font-medium">Email Address</label>
                    <input type="email" id="email" name="email" class="w-full p-4 border border-gray-300 rounded-md" required placeholder="Your Email">
                </div>

                <!-- Message Input -->
                <div>
                    <label for="message" class="block text-gray-700 font-medium">Message</label>
                    <textarea id="message" name="message" class="w-full p-4 border border-gray-300 rounded-md" rows="6" required placeholder="Your Message"></textarea>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full px-8 py-3 bg-blue-500 text-white rounded-full hover:bg-blue-600 transition duration-300">
                    Send Message
                </button>
            </form>
        </div>
    </section>

</main>

<?php include 'components/footer.php'; ?>

<script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form submission
        alert('Thank you for your message! We will get back to you shortly.');
        window.location.href = 'index.php'; // Navigate to the homepage
    });
</script>