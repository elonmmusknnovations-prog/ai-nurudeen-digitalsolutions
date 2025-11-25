<?php
// Define core business variables - you can update these directly
$companyName = "Ainurudeen Digital Solutions";
$tagline = "Empowering Education with Intelligent Digital Tools";
$contactEmail = "ainurudeen.digitalsolutions@gmail.com";
$phoneNumber = "+234 8163436376";
$address = "Behind Jolly Nyame Stadium, Jalingo, Taraba state";
$currentYear = date("Y");

// Specific Services offered (for the Services section)
$services = [
    ["title" => "School Portal Management", "icon" => "M12 2a10 10 0 0110 10c0 5.5-4.5 10-10 10A10 10 0 012 12 10 10 0 0112 2zm0 4.5l6.5 3.5-6.5 3.5L5.5 10z"],
    ["title" => "Result Checker System", "icon" => "M12 14v-4m0 0l-3 3m3-3l3 3m7-2h-3a9 9 0 00-9-9v3a6 6 0 016 6h3"],
    ["title" => "Fees Management & Billing", "icon" => "M17 9v6a2 2 0 01-2 2H9a2 2 0 01-2-2V9m6 0a3 3 0 100-6 3 3 0 000 6z"],
    ["title" => "Custom ERP Development", "icon" => "M21 12.79A9.16 9.16 0 0112 21a9.16 9.16 0 01-8.79-8.79M17 19.1l-1-1m-4 2l-1-1m-4 1l-1-1"]
];

// PHP is primarily used here for variable insertion and file structure.
// All HTML, CSS (via Tailwind), and JS are contained in this single file.
?>
<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $companyName; ?> - <?php echo $tagline; ?></title>
    <!-- Load Tailwind CSS CDN for modern styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f7f9fb; }
        /* Simple scroll-snapping for a modern feel (optional, but nice) */
        /* html { scroll-snap-type: y proximity; }
        section { scroll-snap-align: start; } */
        .nav-link {
            transition: color 0.3s, border-color 0.3s;
        }
        .nav-link:hover {
            color: #0d9488; /* Teal-600 */
        }
    </style>
</head>
<body class="text-gray-800">

    <!-- Sticky Navigation Bar -->
    <header class="sticky top-0 z-50 bg-white shadow-lg">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
            <!-- Logo Placeholder -->
            <a href="#home" class="text-2xl font-bold text-teal-600 flex items-center group">
                <!-- Replace this SVG with your actual logo (image or inline SVG) -->
                <svg class="w-8 h-8 mr-2 transition duration-300 group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                <?php echo $companyName; ?>
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex space-x-8">
                <a href="#home" class="nav-link font-medium text-gray-600 hover:text-teal-600">Home</a>
                <a href="#about" class="nav-link font-medium text-gray-600 hover:text-teal-600">About</a>
                <a href="#services" class="nav-link font-medium text-gray-600 hover:text-teal-600">Services</a>
                <a href="#portfolio" class="nav-link font-medium text-gray-600 hover:text-teal-600">Portfolio</a>
                <a href="#contact" class="nav-link font-medium text-gray-600 hover:text-teal-600">Contact Us</a>
            </div>

            <!-- Mobile Menu Button (Hamburger) -->
            <button id="mobile-menu-button" class="md:hidden p-2 rounded-md text-gray-600 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-teal-500">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
            </button>
        </nav>

        <!-- Mobile Menu (Hidden by Default) -->
        <div id="mobile-menu" class="hidden md:hidden bg-gray-50 border-t border-gray-200">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 flex flex-col">
                <a href="#home" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-teal-50 hover:text-teal-600">Home</a>
                <a href="#about" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-teal-50 hover:text-teal-600">About the Company</a>
                <a href="#services" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-teal-50 hover:text-teal-600">Services</a>
                <a href="#portfolio" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-teal-50 hover:text-teal-600">Portfolio</a>
                <a href="#contact" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-teal-50 hover:text-teal-600">Contact Us</a>
            </div>
        </div>
    </header>

    <main>
        <!-- 1. Home Section -->
        <section id="home" class="relative bg-gray-900 text-white min-h-screen flex items-center justify-center pt-20">
            <!-- Background Image Placeholder (REPLACE THIS) -->
            <div class="absolute inset-0">
                <!-- Replace 'https://placehold.co/1920x1080/0f172a/ffffff?text=HOME+SECTION+BANNER+IMAGE' with your actual image URL -->
                <img src="logo.png" alt="Hero Background" class="w-full h-full object-cover opacity-30">
            </div>

            <div class="relative z-10 max-w-4xl mx-auto text-center p-6">
                <h1 class="text-5xl md:text-7xl font-extrabold leading-tight mb-4">
                    <?php echo $companyName; ?>
                </h1>
                <p class="text-xl md:text-2xl font-light mb-8 text-teal-300">
                    <?php echo $tagline; ?>
                </p>
                <a href="#services" class="inline-block bg-teal-600 text-white font-bold py-3 px-8 rounded-lg shadow-lg hover:bg-teal-700 transition duration-300 transform hover:scale-105">
                    Explore Our Services
                </a>
            </div>
        </section>

        <!-- 2. About the Company Section -->
        <section id="about" class="py-16 md:py-24 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <span class="text-sm font-semibold uppercase text-teal-600">Who We Are</span>
                    <h2 class="text-4xl font-extrabold mt-2">About <?php echo $companyName; ?></h2>
                </div>

                <div class="md:grid md:grid-cols-2 md:gap-12 items-center">
                    <div class="mb-8 md:mb-0">
                        <!-- About Section Image Placeholder (REPLACE THIS) -->
                        <img src="https://placehold.co/600x400/10b981/ffffff?text=ABOUT+US+IMAGE" alt="Our Team" class="rounded-xl shadow-2xl object-cover w-full h-auto">
                    </div>
                    <div class="space-y-6 text-lg">
                        <p>
                            <?php echo $companyName; ?> was founded on the principle that modern education requires intelligent, scalable technology. We specialize in building robust and intuitive digital solutions tailored specifically for educational institutions. Our mission is to streamline administrative tasks, enhance communication, and provide valuable insights, allowing educators to focus on what matters most: teaching.
                        </p>
                        <p>
                            We combine deep industry knowledge with cutting-edge development practices to deliver platforms that are secure, reliable, and easy to use. Whether you need a simple tool or a comprehensive campus-wide system, we are your trusted technology partner.
                        </p>
                        <ul class="list-disc list-inside space-y-2 text-gray-600 font-medium">
                            <li>Focus on simplicity and user experience</li>
                            <li>Commitment to data security and privacy</li>
                            <li>Dedicated support team for seamless operations</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. Services Section -->
        <section id="services" class="py-16 md:py-24 bg-gray-50 border-t border-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <span class="text-sm font-semibold uppercase text-teal-600">What We Offer</span>
                    <h2 class="text-4xl font-extrabold mt-2">Our Core Services</h2>
                    <p class="text-xl text-gray-600 mt-4">Powerful, tailored technology solutions for the education sector.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <?php foreach ($services as $service): ?>
                        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition duration-300 border border-gray-100 transform hover:-translate-y-1">
                            <div class="p-3 bg-teal-100 text-teal-600 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                                <!-- Icon SVG -->
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo $service['icon']; ?>"></path></svg>
                            </div>
                            <h3 class="text-xl font-bold mb-3"><?php echo $service['title']; ?></h3>
                            <p class="text-gray-600 text-sm">
                                <?php
                                    // Provide a brief description based on the title
                                    switch ($service['title']) {
                                        case 'School Portal Management': echo 'A comprehensive platform for student, staff, and parent collaboration, announcements, and scheduling.'; break;
                                        case 'Result Checker System': echo 'Secure, fast, and scalable online system for students to access and verify their academic results instantly.'; break;
                                        case 'Fees Management & Billing': echo 'Automated invoice generation, payment tracking, and financial reporting integrated seamlessly.'; break;
                                        case 'Custom ERP Development': echo 'Building bespoke enterprise resource planning systems to meet your school\'s unique operational demands.'; break;
                                        default: echo 'Detailed description of this specific service will be placed here.'; break;
                                    }
                                ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- 4. Portfolio Section -->
        <section id="portfolio" class="py-16 md:py-24 bg-white border-t border-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <span class="text-sm font-semibold uppercase text-teal-600">Case Studies</span>
                    <h2 class="text-4xl font-extrabold mt-2">Our Recent Work</h2>
                    <p class="text-xl text-gray-600 mt-4">A look at some of the impactful solutions we've delivered.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Portfolio Item 1 Placeholder -->
                    <div class="bg-gray-50 rounded-xl shadow-xl overflow-hidden group">
                        <!-- Replace 'https://placehold.co/600x400/14b8a6/ffffff?text=PROJECT+1+SCREENSHOT' with a screenshot/image -->
                        <img src="https://placehold.co/600x400/14b8a6/ffffff?text=PROJECT+1+SCREENSHOT" alt="Project 1" class="w-full h-48 object-cover transition duration-500 group-hover:scale-105">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">University Management System</h3>
                            <p class="text-gray-600 text-sm">Full-scale implementation of a custom student information system for a major university, improving registration speed by 40%.</p>
                            <a href="#" class="mt-4 text-teal-600 hover:text-teal-800 font-medium inline-block">View Case Study &rarr;</a>
                        </div>
                    </div>

                    <!-- Portfolio Item 2 Placeholder -->
                    <div class="bg-gray-50 rounded-xl shadow-xl overflow-hidden group">
                         <!-- Replace 'https://placehold.co/600x400/06b6d4/ffffff?text=PROJECT+2+SCREENSHOT' with a screenshot/image -->
                        <img src="https://placehold.co/600x400/06b6d4/ffffff?text=PROJECT+2+SCREENSHOT" alt="Project 2" class="w-full h-48 object-cover transition duration-500 group-hover:scale-105">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">K-12 Result Checker App</h3>
                            <p class="text-gray-600 text-sm">Developed a secure, high-traffic mobile and web application for instant result access across 50+ secondary schools.</p>
                            <a href="#" class="mt-4 text-teal-600 hover:text-teal-800 font-medium inline-block">View Case Study &rarr;</a>
                        </div>
                    </div>

                    <!-- Portfolio Item 3 Placeholder -->
                    <div class="bg-gray-50 rounded-xl shadow-xl overflow-hidden group">
                        <!-- Replace 'https://placehold.co/600x400/0891b2/ffffff?text=PROJECT+3+SCREENSHOT' with a screenshot/image -->
                        <img src="https://placehold.co/600x400/0891b2/ffffff?text=PROJECT+3+SCREENSHOT" alt="Project 3" class="w-full h-48 object-cover transition duration-500 group-hover:scale-105">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">Automated Billing Platform</h3>
                            <p class="text-gray-600 text-sm">Integrated automated fee scheduling, payment reminders, and multi-currency support for an international boarding school.</p>
                            <a href="#" class="mt-4 text-teal-600 hover:text-teal-800 font-medium inline-block">View Case Study &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5. Contact Us Section -->
        <section id="contact" class="py-16 md:py-24 bg-teal-600 text-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <h2 class="text-4xl font-extrabold mt-2">Get in Touch</h2>
                    <p class="text-xl text-teal-200 mt-4">Ready to elevate your institution's digital capabilities? Contact us today.</p>
                </div>

                <div class="max-w-3xl mx-auto bg-white p-8 md:p-10 rounded-xl shadow-2xl text-gray-800">
                    <!-- Contact Form Placeholder (Requires a server-side script to process in a real environment) -->
                    <form action="#" method="POST" class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                            <input type="text" name="name" id="name" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                            <input type="email" name="email" id="email" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700">How can we help you?</label>
                            <textarea id="message" name="message" rows="4" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-teal-500 focus:border-teal-500"></textarea>
                        </div>
                        <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-lg font-medium text-white bg-teal-600 hover:bg-teal-700 transition duration-300 transform hover:scale-[1.01]">
                            Send Message
                        </button>
                        <p class="text-xs text-center text-gray-500 mt-4">Note: This form is a visual placeholder. In a live environment, you would need a PHP script to send the email.</p>
                    </form>

                    <!-- Contact Details -->
                    <div class="mt-8 pt-6 border-t border-gray-200 grid grid-cols-1 sm:grid-cols-3 gap-6 text-center">
                        <div>
                            <h4 class="font-bold text-teal-600">Email</h4>
                            <p class="text-sm"><?php echo $contactEmail; ?></p>
                        </div>
                        <div>
                            <h4 class="font-bold text-teal-600">Phone</h4>
                            <p class="text-sm"><?php echo $phoneNumber; ?></p>
                        </div>
                        <div>
                            <h4 class="font-bold text-teal-600">Address</h4>
                            <p class="text-sm"><?php echo $address; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p class="text-sm mb-2">&copy; <?php echo $currentYear; ?> <?php echo $companyName; ?>. All rights reserved.</p>
            <div class="flex justify-center space-x-4">
                <a href="#about" class="text-teal-400 hover:text-teal-200 text-sm">Privacy Policy</a>
                <span class="text-gray-600">|</span>
                <a href="#services" class="text-teal-400 hover:text-teal-200 text-sm">Terms of Service</a>
            </div>
        </div>
    </footer>

    <!-- JavaScript for Mobile Menu Toggle and Anchor Scrolling -->
    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // Close mobile menu and scroll on link click
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', function() {
                document.getElementById('mobile-menu').classList.add('hidden');
                // Optional: Smooth scroll behavior is handled by CSS, but you can force it here if needed
                // const targetId = this.getAttribute('href').substring(1);
                // document.getElementById(targetId).scrollIntoView({ behavior: 'smo
