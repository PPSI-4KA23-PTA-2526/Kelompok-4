<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mie Ayamlah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Inter:wght@300;400;500;600;700&display=swap');

        * {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3 {
            font-family: 'Playfair Display', serif;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes pulse-glow {

            0%,
            100% {
                box-shadow: 0 0 20px rgba(255, 0, 0, 0.3);
            }

            50% {
                box-shadow: 0 0 40px rgba(255, 0, 0, 0.6);
            }
        }

        @keyframes slide-in-right {
            from {
                opacity: 0;
                transform: translateX(100px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slide-in-left {
            from {
                opacity: 0;
                transform: translateX(-100px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes shimmer {
            0% {
                background-position: -1000px 0;
            }

            100% {
                background-position: 1000px 0;
            }
        }

        @keyframes bounce-smooth {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .float {
            animation: float 3s ease-in-out infinite;
        }

        .pulse-glow {
            animation: pulse-glow 2s ease-in-out infinite;
        }

        .slide-right {
            animation: slide-in-right 0.8s ease-out;
        }

        .slide-left {
            animation: slide-in-left 0.8s ease-out;
        }

        .shimmer-bg {
            animation: shimmer 2s infinite;
            background-size: 1000px 100%;
        }

        .bounce {
            animation: bounce-smooth 2s ease-in-out infinite;
        }

        .gradient-text {
            background: linear-gradient(135deg, #ff0000, #ff6b00);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .menu-card {
            transition: all 0.3s ease;
        }

        .menu-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px rgba(255, 0, 0, 0.2);
        }

        .hero-shape {
            position: absolute;
            border-radius: 50%;
            opacity: 0.1;
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
            max-height: 1200px;
            overflow: hidden;
            transition: max-height 0.5s ease;
        }

        .menu-grid.expanded {
            max-height: 3000px;
        }

        .btn-show-more {
            transition: all 0.3s ease;
        }

        .btn-show-more:hover {
            transform: scale(1.05);
        }

        /* Section Divider untuk memberikan jarak dan pemisah antar section */
        .section-divider {
            height: 4px;
            background: linear-gradient(90deg, #ff0000, #ff6b00, #ff0000);
            margin: 4rem 0;
            border-radius: 2px;
            box-shadow: 0 2px 10px rgba(255, 0, 0, 0.3);
        }

        /* Zoom and Pan animation for banner to simulate serving motion */
        .animate-zoom-pan {
            animation: zoomPan 8s ease-in-out infinite;
        }

        @keyframes zoomPan {
            0% {
                transform: scale(1) translateX(0);
            }

            25% {
                transform: scale(1.05) translateX(5px);
            }

            50% {
                transform: scale(1.1) translateX(0);
            }

            75% {
                transform: scale(1.05) translateX(-5px);
            }

            100% {
                transform: scale(1) translateX(0);
            }
        }

        /* Steam animation rising from the banner */
        .steam {
            position: absolute;
            width: 4px;
            height: 20px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 50%;
            bottom: 10%;
            animation: rise 4s ease-in-out infinite;
            opacity: 0.7;
        }

        .steam-1 {
            left: 20%;
            animation-delay: 0s;
        }

        .steam-2 {
            left: 50%;
            animation-delay: 1s;
        }

        .steam-3 {
            left: 80%;
            animation-delay: 2s;
        }

        @keyframes rise {
            0% {
                transform: translateY(0) scale(1);
                opacity: 0.8;
            }

            50% {
                transform: translateY(-30px) scale(1.2);
                opacity: 0.5;
            }

            100% {
                transform: translateY(-60px) scale(0.8);
                opacity: 0;
            }
        }

        /* Floating food particles: noodles and chicken pieces */
        .food-particle {
            position: absolute;
            animation: floatFood 6s ease-in-out infinite;
            opacity: 0.6;
        }

        .noodle-1 {
            top: 30%;
            left: 15%;
            width: 40px;
            height: 4px;
            background: #d4af37;
            /* Yellow noodle color */
            border-radius: 2px;
            animation-delay: 0s;
        }

        .noodle-2 {
            top: 50%;
            left: 70%;
            width: 50px;
            height: 4px;
            background: #d4af37;
            border-radius: 2px;
            animation-delay: 1.5s;
        }

        .chicken-1 {
            top: 40%;
            left: 40%;
            width: 12px;
            height: 12px;
            background: #d4a574;
            /* Brown chicken color */
            border-radius: 50%;
            animation-delay: 2s;
        }

        .chicken-2 {
            top: 60%;
            left: 25%;
            width: 10px;
            height: 10px;
            background: #d4a574;
            border-radius: 50%;
            animation-delay: 3s;
        }

        @keyframes floatFood {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            25% {
                transform: translateY(-15px) rotate(5deg);
            }

            50% {
                transform: translateY(-30px) rotate(-5deg);
            }

            75% {
                transform: translateY(-15px) rotate(5deg);
            }
        }

        /* Warm glow animation for cozy food atmosphere */
        .animate-warm-glow {
            background-size: 200% 200%;
            animation: warmGlow 5s ease-in-out infinite;
        }

        @keyframes warmGlow {
            0% {
                background-position: 0% 50%;
                opacity: 0.3;
            }

            50% {
                background-position: 100% 50%;
                opacity: 0.5;
            }

            100% {
                background-position: 0% 50%;
                opacity: 0.3;
            }
        }

        /* Pulse glow (retained) */
        .pulse-glow {
            animation: pulseGlow 2s ease-in-out infinite alternate;
        }

        @keyframes pulseGlow {
            from {
                box-shadow: 0 0 20px rgba(239, 68, 68, 0.5);
            }

            to {
                box-shadow: 0 0 40px rgba(239, 68, 68, 0.8);
            }
        }

        /* Slide animations (retained) */
        .slide-left {
            animation: slideLeft 1s ease-out;
        }

        @keyframes slideLeft {
            from {
                transform: translateX(-50px);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .slide-right {
            animation: slideRight 1s ease-out;
        }

        @keyframes slideRight {
            from {
                transform: translateX(50px);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
    </style>
</head>

<body class="bg-gradient-to-br from-red-50 via-orange-50 to-red-50">

    <!-- Animated Background Shapes -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="hero-shape w-96 h-96 bg-red-400 float"></div>
        <div class="hero-shape w-72 h-72 bg-orange-400 float" style="animation-delay: 1s;"></div>
        <div class="hero-shape w-80 h-80 bg-red-300 float" style="animation-delay: 2s;"></div>
    </div>

    <!-- Navbar -->
    <nav
        class="fixed top-0 w-full z-50 backdrop-blur-md bg-gradient-to-r from-red-600/90 via-orange-500/90 to-red-500/90 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <div class="text-white text-2xl font-bold slide-right">🍜 Mie Ayamlah</div>
            <div class="hidden md:flex gap-8 text-white">
                <a href="#menu" class="hover:text-orange-200 transition">Menu</a>
                <a href="#tentang" class="hover:text-orange-200 transition">Tentang</a>
                <a href="#sejarah" class="hover:text-orange-200 transition">Cerita</a>
                <a href="#kontak" class="hover:text-orange-200 transition">Kontak</a>
            </div>
            <button class="md:hidden text-white text-2xl">☰</button>
        </div>
    </nav>

    <!-- Headline -->
    <div
        class="bg-gradient-to-r from-red-600 via-orange-500 to-red-500 text-white py-3 px-4 text-center text-sm font-semibold mt-16 shimmer-bg">
        ⏰ Buka Setiap Hari 15:00 - 22:00 WIB | Warung Pojok Mie Ayamlah Siap Menyambut Anda!
    </div>

    <!-- Hero Section -->
    <section class="relative py-32 px-4 overflow-hidden">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-center relative z-10">
            <div class="slide-left">
                <div class="mb-6">
                    <span class="text-red-600 font-bold text-lg">🏪 Warung Legendaris</span>
                </div>
                <h1 class="text-6xl md:text-7xl font-bold text-gray-900 mb-6 leading-tight">
                    <span class="gradient-text">Mie Ayamlah</span>
                </h1>
                <p class="text-xl text-gray-700 mb-8 leading-relaxed">
                    Semangkuk cerita, seporsi kenyang. Hampir 30 tahun melayani dengan sepenuh hati dan cinta untuk
                    Anda.
                </p>
                <div class="flex gap-4 flex-wrap">
                    <a href="#menu"
                        class="bg-gradient-to-r from-red-600 via-orange-500 to-red-500 text-white px-8 py-4 rounded-full font-bold hover:shadow-lg hover:scale-105 transition transform">
                        🍜 Lihat Menu
                    </a>
                    <a href="#tentang"
                        class="border-2 border-red-600 text-red-600 px-8 py-4 rounded-full font-bold hover:bg-orange-50 transition">
                        📖 Tentang Kami
                    </a>
                </div>
            </div>
            <div class="slide-right relative">
                <div class="relative h-96 md:h-full min-h-80 overflow-hidden rounded-lg shadow-2xl">
                    <!-- Banner Image with Animated Overlay -->
                    <img src="{{ asset('images/banner/bannerMie.jpg') }}" alt="Mie Ayam Banner"
                        class="w-full h-full object-cover animate-zoom-pan">

                    <!-- Animated Steam Effect (like hot noodle steam) -->
                    <div class="steam steam-1"></div>
                    <div class="steam steam-2"></div>
                    <div class="steam steam-3"></div>

                    <!-- Floating Food Particles (noodle strands and chicken pieces) -->
                    <div class="food-particle noodle-1"></div>
                    <div class="food-particle noodle-2"></div>
                    <div class="food-particle chicken-1"></div>
                    <div class="food-particle chicken-2"></div>

                    <!-- Warm Glow Overlay for Cozy Food Vibe -->
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-orange-400/30 via-yellow-400/20 to-red-500/30 animate-warm-glow">
                    </div>

                    <!-- Pulse Glow Effect -->
                    <div class="absolute inset-0 pulse-glow rounded-lg"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Divider -->
    <div class="section-divider"></div>

    <!-- Tentang Section -->
    <section id="tentang" class="py-20 px-4 relative z-10">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <span class="text-red-600 font-bold text-lg">🏪 TENTANG KAMI</span>
                <h2 class="text-5xl font-bold text-gray-900 mt-4 mb-4">Kisah di Balik Setiap Mangkuk</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-red-600 via-orange-500 to-red-500 mx-auto"></div>
            </div>

            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <div class="bg-white/80 backdrop-blur p-8 rounded-2xl border-2 border-red-300">
                    <div class="text-5xl mb-4">❤️</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Dibuat Dengan Cinta</h3>
                    <p class="text-gray-700">Setiap mangkuk mie dibuat dengan resep turun-temurun dan sentuhan cinta
                        dari Bu Lastri</p>
                </div>

                <div class="bg-white/80 backdrop-blur p-8 rounded-2xl border-2 border-orange-300">
                    <div class="text-5xl mb-4">🌟</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Kualitas Terjamin</h3>
                    <p class="text-gray-700">Menggunakan bahan pilihan terbaik dan bumbu rempah yang telah
                        disempurnakan selama puluhan tahun</p>
                </div>

                <div class="bg-white/80 backdrop-blur p-8 rounded-2xl border-2 border-red-300">
                    <div class="text-5xl mb-4">👨‍👩‍👧‍👦</div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Seperti Keluarga</h3>
                    <p class="text-gray-700">Di sini Anda bukan hanya pelanggan, tapi bagian dari keluarga besar kami
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Divider -->
    <div class="section-divider"></div>

    <!-- Menu Section -->
    <section id="menu" class="py-20 px-4 relative z-10">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <span class="text-red-600 font-bold text-lg">🍜 MENU FAVORIT</span>
                <h2 class="text-5xl font-bold text-gray-900 mt-4 mb-4">Pilihan Lezat Kami</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-red-600 via-orange-500 to-red-500 mx-auto"></div>
                <p class="text-gray-700 text-lg mt-4">Setiap menu dirancang untuk memuaskan lidah Anda</p>
            </div>

            <div class="menu-grid" id="menuGrid">
                <!-- Menu 1 -->
                <div class="menu-card bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl">
                    <div
                        class="h-56 bg-gradient-to-br from-red-300 via-orange-300 to-red-400 flex items-center justify-center relative overflow-hidden">
                        <img src="{{ asset('Mieayam/MieAyam-original.jpeg') }}" alt="Mie Ayam Original"
                            class="w-full h-full object-cover hover:scale-110 transition duration-300">
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition"></div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Mie Ayam Original</h3>
                        <p class="text-gray-700 mb-6">Mie kenyal dengan topping ayam cincang bumbu rahasia, dilengkapi
                            pangsit goreng yang renyah</p>
                        <div class="flex justify-between items-center">
                            <span class="text-3xl font-bold gradient-text">Rp 18K</span>
                            <button
                                class="bg-gradient-to-r from-red-600 via-orange-500 to-red-500 text-white px-4 py-2                            <button
                                class="bg-gradient-to-r
                                from-red-600 via-orange-500 to-red-500 text-white px-4 py-2 rounded-full hover:scale-110
                                transition">+</button>
                        </div>
                    </div>
                </div>

                <!-- Menu 2 -->
                <div class="menu-card bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl">
                    <div
                        class="h-56 bg-gradient-to-br from-red-400 via-orange-400 to-orange-400 flex items-center justify-center relative overflow-hidden">
                        <img src="{{ asset('mieayam/Mieayam-Bakso.jpeg') }}" alt="Mie Ayam Bakso"
                            class="w-full h-full object-cover hover:scale-110 transition duration-300">
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition"></div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Mie Ayam Bakso</h3>
                        <p class="text-gray-700 mb-6">Kombinasi sempurna mie ayam dengan bakso sapi pilihan dalam kuah
                            hangat yang gurih</p>
                        <div class="flex justify-between items-center">
                            <span class="text-3xl font-bold gradient-text">Rp 22K</span>
                            <button
                                class="bg-gradient-to-r from-red-600 via-orange-500 to-red-500 text-white px-4 py-2 rounded-full hover:scale-110 transition">+</button>
                        </div>
                    </div>
                </div>

                <!-- Menu 3 -->
                <div class="menu-card bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl">
                    <div
                        class="h-56 bg-gradient-to-br from-yellow-300 via-orange-400 to-red-400 flex items-center justify-center relative overflow-hidden">
                        <img src="{{ asset('Mieayam/pangsit-goreng.jpeg') }}" alt="Pangsit Goreng"
                            class="w-full h-full object-cover hover:scale-110 transition duration-300">
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition"></div>
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">Pangsit Goreng</h3>
                        <p class="text-gray-700 mb-6">Pangsit goreng renyah dengan isian ayam dan udang, cocok untuk
                            teman makan utama</p>
                        <div class="flex justify-between items-center">
                            <span class="text-3xl font-bold gradient-text">Rp 15K</span>
                            <button
                                class="bg-gradient-to-r from-red-600 via-orange-500 to-red-500 text-white px-4 py-2 rounded-full hover:scale-110 transition">+</button>
                        </div>
                    </div>
                </div>

                <!-- Show More Button -->
                <div class="text-center mt-12">
                    <button id="showMoreBtn"
                        class="btn-show-more bg-gradient-to-r from-red-600 via-orange-500 to-red-500 text-white px-10 py-4 rounded-full font-bold text-lg shadow-lg hover:shadow-xl">
                        ✨ Lihat Menu Lengkap
                    </button>
                </div>
            </div>
    </section>

    <!-- Section Divider -->
    <div class="section-divider"></div>

    <!-- Sejarah Section -->
    <section id="sejarah" class="py-20 px-4 relative z-10">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <span class="text-red-600 font-bold text-lg">📖 PERJALANAN KAMI</span>
                <h2 class="text-5xl font-bold text-gray-900 mt-4 mb-4">30 Tahun Melayani Dengan Cinta</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-red-600 via-orange-500 to-red-500 mx-auto"></div>
            </div>

            <div class="space-y-8">
                <!-- Timeline 1 -->
                <div class="flex gap-8 items-stretch">
                    <div class="flex flex-col items-center">
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-red-600 via-orange-500 to-red-500 rounded-full flex items-center justify-center text-white font-bold text-2xl shadow-lg bounce">
                            1995</div>
                        <div class="w-1 h-24 bg-gradient-to-b from-red-600 via-orange-500 to-red-500 mt-4"></div>
                    </div>
                    <div class="bg-white rounded-2xl p-8 shadow-lg flex-1 border-l-4 border-red-600">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Awal Yang Sederhana</h3>
                        <p class="text-gray-700">Bu Lastri memulai usaha dengan gerobak kecil di pinggir jalan. Hanya
                            dengan satu panci besar dan resep warisan keluarga, beliau melayani pelanggan pertama dengan
                            sepenuh hati.</p>
                    </div>
                </div>

                <!-- Timeline 2 -->
                <div class="flex gap-8 items-stretch">
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-red-600 via-orange-500 to-red-500 rounded-full flex items-center justify-center text-white font-bold text-2xl shadow-lg bounce"
                            style="animation-delay: 0.3s;">2005</div>
                        <div class="w-1 h-24 bg-gradient-to-b from-red-600 via-orange-500 to-red-500 mt-4"></div>
                    </div>
                    <div class="bg-white rounded-2xl p-8 shadow-lg flex-1 border-l-4 border-orange-500">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Warung Permanen</h3>
                        <p class="text-gray-700">Setelah 10 tahun berjualan, kepercayaan pelanggan membuat kami mampu
                            membuka warung permanen yang lebih luas dan nyaman untuk melayani keluarga besar kami yang
                            terus berkembang.</p>
                    </div>
                </div>

                <!-- Timeline 3 -->
                <div class="flex gap-8 items-stretch">
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-red-600 via-orange-500 to-red-500 rounded-full flex items-center justify-center text-white font-bold text-2xl shadow-lg bounce"
                            style="animation-delay: 0.6s;">2015</div>
                        <div class="w-1 h-24 bg-gradient-to-b from-red-600 via-orange-500 to-red-500 mt-4"></div>
                    </div>
                    <div class="bg-white rounded-2xl p-8 shadow-lg flex-1 border-l-4 border-red-600">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">Pengakuan & Penghargaan</h3>
                        <p class="text-gray-700">Warung kami mulai dikenal luas dan mendapat berbagai penghargaan dari
                            komunitas kuliner lokal. Tetap dengan prinsip: kualitas dan kehangatan keluarga adalah
                            prioritas utama.</p>
                    </div>
                </div>

                <!-- Timeline 4 -->
                <div class="flex gap-8 items-stretch">
                    <div class="flex flex-col items-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-red-600 via-orange-500 to-red-500 rounded-full flex items-center justify-center text-white font-bold text-2xl shadow-lg pulse-glow bounce"
                            style="animation-delay: 0.9s;">2025</div>
                    </div>
                    <div
                        class="bg-gradient-to-r from-red-600 via-orange-500 to-red-500 rounded-2xl p-8 shadow-lg flex-1 text-white border-l-4 border-orange-300">
                        <h3 class="text-2xl font-bold mb-2">✨ 30 Tahun Melayani</h3>
                        <p>Hampir tiga dekade kami bersama Anda. Generasi penerus kini ikut menjaga warisan Bu Lastri,
                            melanjutkan dedikasi untuk memberikan yang terbaik bagi setiap pelanggan setia kami.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Divider -->
    <div class="section-divider"></div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-12 px-4 relative z-10">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-3 gap-8 mb-8">
                <!-- Kolom 1 -->
                <div>
                    <h3 class="text-white text-xl font-bold mb-4">🍜 Mie Ayamlah</h3>
                    <p class="text-sm leading-relaxed">
                        Melayani dengan sepenuh hati sejak 1995. Cita rasa autentik yang menemani perjalanan hidup Anda.
                    </p>
                </div>

                <!-- Kolom 2 -->
                <div id="kontak">
                    <h4 class="text-white font-semibold mb-4">Kontak Kami</h4>
                    <ul class="space-y-2 text-sm">
                        <li>📍 Jl. Sudirman No. 123, Jakarta</li>
                        <li>📞 (021) 1234-5678</li>
                        <li>📧 info@mieayamlah.com</li>
                        <li>🕐 Senin - Minggu: 08.00 - 21.00 WIB</li>
                    </ul>
                </div>

                <!-- Kolom 3 -->
                <div>
                    <h4 class="text-white font-semibold mb-4">Ikuti Kami</h4>
                    <div class="flex gap-4">
                        <a href="#"
                            class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center hover:bg-orange-500 transition">
                            <span>📘</span>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center hover:bg-orange-500 transition">
                            <span>📷</span>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center hover:bg-orange-500 transition">
                            <span>🐦</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8 text-center text-sm">
                <p>&copy; 2025 Mie Ayamlah. Dibuat dengan ❤️ untuk Anda</p>
            </div>
        </div>
    </footer>

    <script>
        const showMoreBtn = document.getElementById('showMoreBtn');
        const menuGrid = document.getElementById('menuGrid');
        let isExpanded = false;

        showMoreBtn.addEventListener('click', function() {
            isExpanded = !isExpanded;

            if (isExpanded) {
                menuGrid.classList.add('expanded');
                showMoreBtn.textContent = '⬆️ Sembunyikan Menu';
                showMoreBtn.style.background = 'linear-gradient(to right, rgb(139, 0, 0), rgb(220, 38, 38))';
            } else {
                menuGrid.classList.remove('expanded');
                showMoreBtn.textContent = '✨ Lihat Menu Lengkap';
                showMoreBtn.style.background = 'linear-gradient(to right, rgb(220, 38, 38), rgb(239, 68, 68))';
            }
        });

        // Smooth scroll untuk anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
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

        // Animasi counter untuk menu cards saat scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = 'slide-in-right 0.6s ease-out forwards';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.menu-card').forEach(card => {
            observer.observe(card);
        });

        // Add button functionality untuk order
        document.querySelectorAll('.menu-card button').forEach(btn => {
            btn.addEventListener('click', function() {
                const menuName = this.closest('.menu-card').querySelector('h3').textContent;
                const menuPrice = this.closest('.menu-card').querySelector('.gradient-text').textContent;

                // Bisa dikembangkan dengan alert atau modal
                alert(`📦 Ditambahkan ke keranjang!\n${menuName}\n${menuPrice}`);

                // Animasi button
                this.style.transform = 'scale(0.9)';
                setTimeout(() => {
                    this.style.transform = 'scale(1)';
                }, 200);
            });
        });
    </script>
</body>

</html>
