<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Modern Store</title>

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        /* Navbar Styles */
        .navbar {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: opacity 0.3s;
        }

        .nav-menu a:hover {
            opacity: 0.8;
        }

        /* Hero Section  */
        .hero {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 150px 2rem 100px;
            text-align: center;
            color: white;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            animation: fadeInUp 1s;
        }

        .hero p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            animation: fadeInUp 1s 0.2s both;
        }

        .cta-button {
            background: white;
            color: #667eea;
            padding: 1rem 2.5rem;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
            animation: fadeInUp 1s 0.4s both;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        /* Product Section */
        .products-section {
            padding: 80px 2rem;
            background: #f8f9fa;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #333;
        }

        .products-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .product-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            margin: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .product-card:hover {
            transform: translateY(-10px);
        }

        .product-image {
            width: 100%;
            height: 250px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
        }

        .product-info {
            padding: 1.5rem;
        }

        .product-name {
            font-size: 1.3rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            color: #333;
        }

        .product-description {
            color: #666;
            margin-bottom: 1rem;
        }

        .product-price {
            font-size: 1.5rem;
            font-weight: bold;
            color: #667eea;
            margin-bottom: 1rem;
        }

        .view-button {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 0.8rem 2rem;
            border-radius: 25px;
            cursor: pointer;
            font-weight: bold;
            width: 100%;
            transition: opacity 0.3s;
        }

        .view-button:hover {
            opacity: 0.9;
        }

        /* Owl Carousel Custom */
        .owl-theme .owl-nav {
            margin-top: 20px;
        }

        .owl-theme .owl-nav button {
            background: #667eea !important;
            color: white !important;
            padding: 10px 20px !important;
            border-radius: 50px !important;
            margin: 0 10px !important;
        }

        .owl-theme .owl-dots .owl-dot span {
            background: #0630e8 !important;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Hamburger Menu */
        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
            gap: 4px;
        }

        .hamburger span {
            width: 25px;
            height: 3px;
            background: white;
            border-radius: 2px;
            transition: all 0.3s;
        }

        @media (max-width: 768px) {
            .hero {
                padding: 120px 1rem 60px;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .cta-button {
                padding: 0.8rem 2rem;
                font-size: 1rem;
            }

            .nav-container {
                padding: 0 1rem;
            }

            .logo {
                font-size: 1.5rem;
            }

            .nav-menu {
                position: fixed;
                top: 70px;
                left: -100%;
                flex-direction: column;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                width: 100%;
                padding: 2rem;
                gap: 1.5rem;
                transition: left 0.3s;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            }

            .nav-menu.active {
                left: 0;
            }

            .hamburger {
                display: flex;
            }

            .products-section {
                padding: 60px 1rem;
            }

            .section-title {
                font-size: 1.8rem;
                margin-bottom: 2rem;
            }

            .product-card {
                margin: 10px;
            }

            .product-image {
                height: 200px;
                font-size: 3rem;
            }

            .product-info {
                padding: 1rem;
            }

            .product-name {
                font-size: 1.1rem;
            }

            .product-description {
                font-size: 0.9rem;
            }
        }

        @media (max-width: 480px) {
            .hero h1 {
                font-size: 1.5rem;
            }

            .hero p {
                font-size: 0.9rem;
            }

            .cta-button {
                padding: 0.7rem 1.5rem;
                font-size: 0.9rem;
            }

            .logo {
                font-size: 1.3rem;
            }

            .section-title {
                font-size: 1.5rem;
            }

            .product-image {
                height: 180px;
                font-size: 2.5rem;
            }
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="#" class="logo">WARUNG POJOK</a>
            <div class="hamburger" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="nav-menu" id="navMenu">
                <li><a href="#home">Home</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href="#footer">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <h1>WELCOME TO WARUNG POJOK</h1>
        <p>Temukan produk terbaik dengan kualitas premium dan harga terjangkau</p>
        <button class="cta-button">SCROLL</button>
    </section>

    <!-- Products Section -->
    <section id="products" class="products-section">
        <h2 class="section-title">Kenali Warung Pojok</h2>
        <div class="products-container">
            <div class="owl-carousel owl-theme">
                <div class="product-card">
                     <img src="{{ asset('images/koproll-logo.png') }}" alt="Koproll Coffee Logo" class="product-logo">
                    <div class="product-info">
                        <h3 class="product-name">Koproll Coffee</h3>
                        <p class="product-description">Yang jualan Standup Comedy</p>
                        <a href="{{route('homeKoproll')}}"  class="view-button">VIEW</a>
                    </div>
                </div>

                <div class="product-card">
                    <img src="{{ asset('images/mieayam-logo.jpg') }}" alt="Koproll Coffee Logo" class="product-logo">
                    <div class="product-info">
                        <h3 class="product-name">Mie Ayam</h3>
                        <p class="product-description">Yang jual Orang Gede</p>
                        <a href="{{route('home.mieayam')}}" class="view-button">VIEW</a>
                    </div>
                </div>

                <div class="product-card">
                    <img src="{{ asset('images/roti-logo.jpg') }}" alt="Koproll Coffee Logo" class="product-logo">
                    <div class="product-info">
                        <h3 class="product-name">Roti Bakar</h3>
                        <p class="product-description">Yang jual Remaja Masjid</p>
                        <a href="{{route('home.ropang')}}" class="view-button">VIEW</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer with Tailwind CSS -->
    <footer id="footer" class="bg-gradient-to-r from-indigo-500 via-purple-500 to-purple-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16">
            <!-- Footer Content Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 sm:gap-10 mb-8 sm:mb-12">
                <!-- Lokasi Kami (Dipindah ke Kiri) -->
                <div class="space-y-4">
                    <h4 class="text-lg sm:text-xl font-semibold mb-3 sm:mb-4">Lokasi Kami</h4>
                    <div class="bg-white/10 rounded-lg overflow-hidden cursor-pointer hover:bg-white/20 transition-all relative group" onclick="openMapModal()">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2876939857183!2d106.87493607499806!3d-6.194862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f51b6b6b6b6b%3A0x1234567890abcdef!2sJl.%20Beton%20No.18%2C%20Kayu%20Putih%2C%20Kec.%20Pulo%20Gadung%2C%20Jakarta%20Timur!5e0!3m2!1sen!2sid!4v1234567890"
                            width="100%" 
                            height="180" 
                            style="border:0; pointer-events: none;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            class="rounded-lg sm:h-[200px]">
                        </iframe>
                        <div class="absolute inset-0 flex items-center justify-center bg-black/0 group-hover:bg-black/20 transition-all rounded-lg">
                            <span class="text-white text-xs sm:text-sm font-semibold opacity-0 group-hover:opacity-100 bg-indigo-600 px-3 py-1.5 sm:px-4 sm:py-2 rounded-full transition-all">📍 Klik untuk memperbesar</span>
                        </div>
                    </div>
                </div>

                <!-- Company Info -->
                <div class="space-y-4">
                    <h3 class="text-xl sm:text-2xl font-bold">WARUNG POJOK</h3>
                    <p class="text-white/90 leading-relaxed text-sm sm:text-base">
                        Tempat terbaik untuk menemukan berbagai produk berkualitas dengan harga terjangkau. Kami melayani dengan sepenuh hati.
                    </p>
                </div>
                
                <!-- Products -->
                <div class="space-y-4">
                    <h4 class="text-lg sm:text-xl font-semibold mb-3 sm:mb-4">Produk Kami</h4>
                    <ul class="space-y-2 sm:space-y-3">
                        <li>
                            <a href="#" class="text-white/90 hover:text-white hover:translate-x-1 inline-block transition-all duration-300 text-sm sm:text-base">
                                Koproll Coffee
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-white/90 hover:text-white hover:translate-x-1 inline-block transition-all duration-300 text-sm sm:text-base">
                                Mie Ayam
                            </a>
                        </li>
                        <li>
                            <a href="#" class="text-white/90 hover:text-white hover:translate-x-1 inline-block transition-all duration-300 text-sm sm:text-base">
                                Roti Bakar
                            </a>
                        </li>
                    </ul>
                </div>
                
                <!-- Contact -->
                <div class="space-y-4">
                    <h4 class="text-lg sm:text-xl font-semibold mb-3 sm:mb-4">Kontak</h4>
                    <ul class="space-y-2 sm:space-y-3 text-white/90 text-sm sm:text-base">
                        <li class="flex items-start gap-2">
                            <span class="text-base sm:text-lg">📍</span>
                            <span>Jl. Beton No.18, RT.8/RW.5, Kayu Putih, Kec. Pulo Gadung, Jakarta Timur 13210</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-base sm:text-lg">📞</span>
                            <span>+62 812-3456-7890</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <span class="text-base sm:text-lg">✉️</span>
                            <span class="break-all">info@warungpojok.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Footer Bottom -->
            <div class="pt-6 sm:pt-8 border-t border-white/20 text-center text-white/80 text-sm sm:text-base">
                <p>&copy; 2025 Warung Pojok. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Map Modal -->
    <div id="mapModal" class="fixed inset-0 bg-black/80 z-[9999] hidden items-center justify-center p-2 sm:p-4" onclick="closeMapModal()">
        <div class="relative w-full max-w-6xl h-[70vh] sm:h-[80vh] bg-white rounded-lg overflow-hidden shadow-2xl" onclick="event.stopPropagation()">
            <button onclick="closeMapModal()" class="absolute top-2 right-2 sm:top-4 sm:right-4 z-10 bg-white text-gray-800 rounded-full w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center hover:bg-gray-100 transition-all shadow-lg text-lg sm:text-xl">
                ✕
            </button>
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2876939857183!2d106.87493607499806!3d-6.194862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f51b6b6b6b6b%3A0x1234567890abcdef!2sJl.%20Beton%20No.18%2C%20Kayu%20Putih%2C%20Kec.%20Pulo%20Gadung%2C%20Jakarta%20Timur!5e0!3m2!1sen!2sid!4v1234567890"
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: true,
                autoplay: true,
                autoplayTimeout: 7000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        });

        // Map Modal Functions
        function openMapModal() {
            document.getElementById('mapModal').classList.remove('hidden');
            document.getElementById('mapModal').classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        function closeMapModal() {
            document.getElementById('mapModal').classList.add('hidden');
            document.getElementById('mapModal').classList.remove('flex');
            document.body.style.overflow = 'auto';
        }

        // Toggle Mobile Menu
        function toggleMenu() {
            const navMenu = document.getElementById('navMenu');
            navMenu.classList.toggle('active');
        }

        // Close menu when clicking on a link
        document.querySelectorAll('.nav-menu a').forEach(link => {
            link.addEventListener('click', function() {
                document.getElementById('navMenu').classList.remove('active');
            });
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Close modal with ESC key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeMapModal();
            }
        });
    </script>
</body>

</html>