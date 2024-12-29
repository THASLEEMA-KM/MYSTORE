<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Store</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-gray-100">
<header class="bg-blue-500 text-white p-4">
    <nav class="container mx-auto flex flex-col md:flex-row md:justify-between items-center">
        <!-- Brand and Toggle Button -->
        <div class="flex justify-between items-center w-full md:w-auto">
            <!-- Logo -->
            <a href="index.php" class="text-xl font-bold">
                <i class="fa-solid fa-store"></i> MyStore
            </a>
            <!-- Hamburger Button -->
            <button id="menu-toggle" class="md:hidden focus:outline-none">
                <i id="hamburger-icon" class="fas fa-bars"></i>
                <i id="close-icon" class="fas fa-times hidden"></i>
            </button>
        </div>

        <!-- Navigation Menu -->
        <ul id="menu" class="hidden flex-col space-y-4 mt-4 md:mt-0 md:space-y-0 md:flex md:flex-row md:space-x-6 md:ml-auto">
            <li><a href="index.php" class="block hover:text-gray-300">Home</a></li>
            <li><a href="products.php" class="block hover:text-gray-300">Products</a></li>
            <li><a href="about.php" class="block hover:text-gray-300">About</a></li>
            <li><a href="contact.php" class="block hover:text-gray-300">Contact</a></li>
        </ul>
    </nav>
</header>

<script>
    const menuToggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');
    const hamburgerIcon = document.getElementById('hamburger-icon');
    const closeIcon = document.getElementById('close-icon');

    menuToggle.addEventListener('click', () => {
        // Toggle menu visibility
        menu.classList.toggle('hidden');
        // Toggle icons
        hamburgerIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768) {
            menu.classList.add('hidden');
            hamburgerIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
        }
    });
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>

</html>
