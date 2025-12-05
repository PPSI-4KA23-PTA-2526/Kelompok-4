<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kopi Koproll - Premium Coffee Experience</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter:wght@300;400;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }

        .font-display {
            font-family: 'Playfair Display', serif;
        }

        .hero-gradient {
            background: linear-gradient(135deg, rgba(120, 80, 50, 0.95) 0%, rgba(60, 40, 30, 0.98) 100%);
        }

        .coffee-pattern {
            background-image: url('data:image/svg+xml,<svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"><circle cx="30" cy="30" r="1.5" fill="%23ffffff" opacity="0.1"/></svg>');
        }
    </style>
</head>

<body class="bg-stone-50">

    <!-- Hero Section -->
    <section class="relative h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center"
            style="background-image: url('https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?w=1600');">
            <div class="hero-gradient coffee-pattern absolute inset-0"></div>
        </div>

        <div class="relative z-10 text-center text-white px-4 max-w-4xl mx-auto">
            <h1 class="font-display text-6xl md:text-8xl font-bold mb-6 animate-fade-in">
                Kopi Koproll
            </h1>
            <p class="text-xl md:text-2xl mb-8 text-stone-200 font-light">
                Nikmati Perjalanan Rasa dari Setiap Biji Kopi Terpilih
            </p>
            <div class="flex gap-4 justify-center flex-wrap">
                <a href="#menu"
                    class="bg-amber-600 hover:bg-amber-700 text-white px-8 py-4 rounded-full font-semibold transition-all transform hover:scale-105">
                    Lihat Menu
                </a>
                <a href="#sejarah"
                    class="bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white px-8 py-4 rounded-full font-semibold border-2 border-white/30 transition-all">
                    Tentang Kami
                </a>
            </div>
        </div>

        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3">
                </path>
            </svg>
        </div>
    </section>

    <!-- Owner Profile Section -->
    <section class="py-20 px-4 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1">
                    <h2 class="font-display text-4xl md:text-5xl font-bold text-stone-800 mb-6">
                        Tentang Koproll
                    </h2>
                    <div class="w-20 h-1 bg-amber-600 mb-8"></div>
                    <h3 class="text-2xl font-semibold text-amber-700 mb-4">Ario Sakti Laurung</h3>
                    {{-- <p class="text-stone-600 text-lg leading-relaxed mb-4">
                        Ariosakti Laurung (lahir 1 Oktober 1993) adalah seorang pelawak tunggal (stand-up comedian)
                        berkebangsaan Indonesia. Pria berdarah Bugis ini lahir dan dibesarkan di Jakarta, kemudian
                        merantau ke Malang untuk melanjutkan studi di Fakultas Ilmu Sosial dan Ilmu Politik, Universitas
                        Brawijaya. Di Malang, Ario mulai mengenal stand up comedy pada tahun 2013 dan bergabung dengan
                        komunitas Stand Up Indo Malang serta Stand Up UB. Ia aktif tampil di berbagai acara kampus dan
                        menjadi salah satu komika andalan di komunitasnya. </p> --}}
                    {{-- <p class="text-stone-600 text-lg leading-relaxed mb-4">
                        Selain sebagai komika, Ario juga memiliki hobi berenang. Ia tergabung dalam UKM Renang
                        Universitas Brawijaya dan beberapa kali menjuarai kejuaraan renang antar universitas. Pada tahun
                        2016, Ario berhasil lolos sebagai satu dari 42 finalis Stand Up Comedy Academy musim kedua (SUCA
                        2) yang diadakan oleh Indosiar melalui audisi di Yogyakarta.
                    </p> --}}
                </div>
                <div class="order-1 md:order-2">
                    <div class="relative">
                        <div class="absolute bg-amber-100 rounded-2xl transform rotate-3"></div>
                        <img src="{{ asset('images/koproll-logo.png') }}" alt="Owner"
                            class="relative rounded-2xl shadow-2xl w-full object-cover h-[35rem]">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="py-20 px-4 bg-stone-50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="font-display text-4xl md:text-5xl font-bold text-stone-800 mb-4">
                    Menu Spesial Kami
                </h2>
                <div class="w-20 h-1 bg-amber-600 mx-auto mb-6"></div>
                <p class="text-stone-600 text-lg max-w-2xl mx-auto">
                    Setiap menu dirancang dengan hati-hati untuk memberikan pengalaman rasa yang tak terlupakan
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="menuGrid">
                <!-- Menu Item 1 -->
                <div class="menu-item bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all transform hover:-translate-y-2">
                    <div class="h-56 bg-cover bg-center"
                        style="background-image: url('https://images.unsplash.com/photo-1461023058943-07fcbe16d735?w=600');">
                    </div>
                    <div class="p-6">
                        <h3 class="font-display text-2xl font-bold text-stone-800 mb-2">Hazzelnut Coffee</h3>
                        <p class="text-stone-600 mb-4">Perpaduan antara single shot espresso ditambahkan dengan susu UHT
                            dan syrup Hazzelnut</p>
                        <div class="flex justify-between items-center">
                            <span class="text-amber-700 font-bold text-xl">Rp 17.000</span>
                            <span class="text-sm text-stone-500">★★★★★</span>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 2 -->
                <div class="menu-item bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all transform hover:-translate-y-2">
                    <div class="h-56 bg-cover bg-center"
                        style="background-image: url('https://images.unsplash.com/photo-1517487881594-2787fef5ebf7?w=600');">
                    </div>
                    <div class="p-6">
                        <h3 class="font-display text-2xl font-bold text-stone-800 mb-2">Cappuccino</h3>
                        <p class="text-stone-600 mb-4">Perpaduan sempurna espresso Sumatera dengan steamed milk lembut
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-amber-700 font-bold text-xl">Rp 18.000</span>
                            <span class="text-sm text-stone-500">★★★★★</span>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 3 -->
                <div class="menu-item bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all transform hover:-translate-y-2">
                    <div class="h-56 bg-cover bg-center"
                        style="background-image: url('https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?w=600');">
                    </div>
                    <div class="p-6">
                        <h3 class="font-display text-2xl font-bold text-stone-800 mb-2">Kopi Susu Pisang</h3>
                        <p class="text-stone-600 mb-4">Perpaduan antara single shot espresso ditambahkan dengan susu UHT
                            dan syrup Pisang</p>
                        <div class="flex justify-between items-center">
                            <span class="text-amber-700 font-bold text-xl">Rp 18.000</span>
                            <span class="text-sm text-stone-500">★★★★★</span>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 4 - Hidden -->
                <div class="menu-item hidden bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all transform hover:-translate-y-2">
                    <div class="h-56 bg-cover bg-center"
                        style="background-image: url('https://images.unsplash.com/photo-1545665225-b23b99e4d45e?w=600');">
                    </div>
                    <div class="p-6">
                        <h3 class="font-display text-2xl font-bold text-stone-800 mb-2">V60 Pour Over</h3>
                        <p class="text-stone-600 mb-4">Manual brew dengan biji kopi Toraja pilihan roaster</p>
                        <div class="flex justify-between items-center">
                            <span class="text-amber-700 font-bold text-xl">Rp 25.000</span>
                            <span class="text-sm text-stone-500">★★★★★</span>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 5 - Hidden -->
                <div class="menu-item hidden bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all transform hover:-translate-y-2">
                    <div class="h-56 bg-cover bg-center"
                        style="background-image: url('https://images.unsplash.com/photo-1570968915860-54d5c301fa9f?w=600');">
                    </div>
                    <div class="p-6">
                        <h3 class="font-display text-2xl font-bold text-stone-800 mb-2">Kopi Susu Koproll</h3>
                        <p class="text-stone-600 mb-4">Perpaduan antara single shot espresso ditambahkan dengan susu UHT
                        </p>
                        <div class="flex justify-between items-center">
                            <span class="text-amber-700 font-bold text-xl">Rp 17.000</span>
                            <span class="text-sm text-stone-500">★★★★★</span>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 6 - Hidden -->
                <div class="menu-item hidden bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all transform hover:-translate-y-2">
                    <div class="h-56 bg-cover bg-center"
                        style="background-image: url('https://images.unsplash.com/photo-1511920170033-f8396924c348?w=600');">
                    </div>
                    <div class="p-6">
                        <h3 class="font-display text-2xl font-bold text-stone-800 mb-2">Cold Brew Java</h3>
                        <p class="text-stone-600 mb-4">12 jam cold extraction untuk rasa smooth dan less acidic</p>
                        <div class="flex justify-between items-center">
                            <span class="text-amber-700 font-bold text-xl">Rp 30.000</span>
                            <span class="text-sm text-stone-500">★★★★★</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- View All Button -->
            <div class="text-center mt-12">
                <button id="viewAllBtn" 
                    class="bg-amber-600 hover:bg-amber-700 text-white font-semibold px-8 py-3 rounded-full transition-all transform hover:scale-105 shadow-lg">
                    Lihat Semua Menu
                </button>
            </div>
        </div>

        <script>
            document.getElementById('viewAllBtn').addEventListener('click', function() {
                const hiddenItems = document.querySelectorAll('.menu-item.hidden');
                const btn = this;
                
                if (hiddenItems.length > 0) {
                    // Show all hidden items
                    hiddenItems.forEach(item => {
                        item.classList.remove('hidden');
                    });
                    btn.textContent = 'Tampilkan Lebih Sedikit';
                } else {
                    // Hide items 4, 5, 6
                    const allItems = document.querySelectorAll('.menu-item');
                    for (let i = 3; i < allItems.length; i++) {
                        allItems[i].classList.add('hidden');
                    }
                    btn.textContent = 'Lihat Semua Menu';
                    
                    // Smooth scroll to menu section
                    document.getElementById('menu').scrollIntoView({ behavior: 'smooth' });
                }
            });
        </script>
    </section>

    <!-- History Section -->
    <section id="sejarah" class="py-20 px-4 bg-stone-800 text-white relative overflow-hidden">
        <div class="coffee-pattern absolute inset-0 opacity-50"></div>
        <div class="max-w-6xl mx-auto relative z-10">
            <div class="text-center mb-16">
                <h2 class="font-display text-4xl md:text-5xl font-bold mb-4">
                    Perjalanan Kami
                </h2>
                <div class="w-20 h-1 bg-amber-600 mx-auto mb-6"></div>
            </div>

            <div class="space-y-12">
                <div class="flex flex-col md:flex-row gap-8 items-center">
                    <div class="md:w-1/3">
                        <div class="bg-amber-600 rounded-full w-32 h-32 flex items-center justify-center mx-auto">
                            <span class="font-display text-4xl font-bold">2015</span>
                        </div>
                    </div>
                    <div class="md:w-2/3 bg-white/10 backdrop-blur-sm p-8 rounded-xl">
                        <h3 class="font-display text-2xl font-bold mb-3 text-amber-400">Awal Mula</h3>
                        <p class="text-stone-200 leading-relaxed">
                            Dimulai dari sebuah kios kecil di sudut kota dengan satu mesin espresso dan passion yang
                            besar. Kami hanya melayani 20 pelanggan per hari, tetapi setiap cangkir dibuat dengan cinta
                            dan dedikasi penuh.
                        </p>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row-reverse gap-8 items-center">
                    <div class="md:w-1/3">
                        <div class="bg-amber-600 rounded-full w-32 h-32 flex items-center justify-center mx-auto">
                            <span class="font-display text-4xl font-bold">2018</span>
                        </div>
                    </div>
                    <div class="md:w-2/3 bg-white/10 backdrop-blur-sm p-8 rounded-xl">
                        <h3 class="font-display text-2xl font-bold mb-3 text-amber-400">Ekspansi & Inovasi</h3>
                        <p class="text-stone-200 leading-relaxed">
                            Membuka cabang kedua dan mulai bermitra langsung dengan petani kopi lokal. Kami
                            mengimplementasikan program fair trade untuk memastikan kesejahteraan petani dan kualitas
                            biji kopi terbaik.
                        </p>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row gap-8 items-center">
                    <div class="md:w-1/3">
                        <div class="bg-amber-600 rounded-full w-32 h-32 flex items-center justify-center mx-auto">
                            <span class="font-display text-4xl font-bold">2021</span>
                        </div>
                    </div>
                    <div class="md:w-2/3 bg-white/10 backdrop-blur-sm p-8 rounded-xl">
                        <h3 class="font-display text-2xl font-bold mb-3 text-amber-400">Penghargaan Nasional</h3>
                        <p class="text-stone-200 leading-relaxed">
                            Meraih penghargaan "Best Coffee Shop" tingkat nasional dan menjadi destinasi wajib bagi
                            pecinta kopi. Komunitas kami berkembang menjadi lebih dari 10,000 pelanggan setia.
                        </p>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row-reverse gap-8 items-center">
                    <div class="md:w-1/3">
                        <div class="bg-amber-600 rounded-full w-32 h-32 flex items-center justify-center mx-auto">
                            <span class="font-display text-4xl font-bold">2025</span>
                        </div>
                    </div>
                    <div class="md:w-2/3 bg-white/10 backdrop-blur-sm p-8 rounded-xl">
                        <h3 class="font-display text-2xl font-bold mb-3 text-amber-400">Masa Kini</h3>
                        <p class="text-stone-200 leading-relaxed">
                            Kini kami memiliki 8 cabang di seluruh Indonesia dengan lebih dari 50 barista terlatih.
                            Komitmen kami tetap sama: menghadirkan secangkir kopi terbaik untuk setiap pelanggan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section class="py-20 px-4 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="font-display text-4xl md:text-5xl font-bold text-stone-800 mb-4">
                    Kata Mereka
                </h2>
                <div class="w-20 h-1 bg-amber-600 mx-auto mb-6"></div>
                <p class="text-stone-600 text-lg max-w-2xl mx-auto">
                    Testimoni dari pelanggan setia yang telah merasakan pengalaman kopi kami
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Review 1 -->
                <div class="bg-stone-50 rounded-xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center mb-4">
                        <img src="https://i.pravatar.cc/100?img=1" alt="Reviewer"
                            class="w-16 h-16 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold text-stone-800">Sarah Wijaya</h4>
                            <p class="text-sm text-stone-500">Coffee Enthusiast</p>
                        </div>
                    </div>
                    <div class="text-amber-500 mb-3">★★★★★</div>
                    <p class="text-stone-600 italic">
                        "Kopi terbaik yang pernah saya coba! Setiap kunjungan selalu konsisten dalam kualitas. Espresso
                        Nusantara-nya benar-benar masterpiece."
                    </p>
                </div>

                <!-- Review 2 -->
                <div class="bg-stone-50 rounded-xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center mb-4">
                        <img src="https://i.pravatar.cc/100?img=33" alt="Reviewer"
                            class="w-16 h-16 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold text-stone-800">Andi Pratama</h4>
                            <p class="text-sm text-stone-500">Barista Profesional</p>
                        </div>
                    </div>
                    <div class="text-amber-500 mb-3">★★★★★</div>
                    <p class="text-stone-600 italic">
                        "Sebagai sesama barista, saya sangat menghargai dedikasi mereka terhadap craft. Teknik
                        brewing-nya sempurna dan pemilihan biji kopinya top notch!"
                    </p>
                </div>

                <!-- Review 3 -->
                <div class="bg-stone-50 rounded-xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center mb-4">
                        <img src="https://i.pravatar.cc/100?img=5" alt="Reviewer"
                            class="w-16 h-16 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold text-stone-800">Dina Maharani</h4>
                            <p class="text-sm text-stone-500">Food Blogger</p>
                        </div>
                    </div>
                    <div class="text-amber-500 mb-3">★★★★★</div>
                    <p class="text-stone-600 italic">
                        "Ambience yang cozy dan kopi yang luar biasa. Tempat favorit untuk meeting atau sekedar
                        bersantai. Highly recommended untuk semua pecinta kopi!"
                    </p>
                </div>

                <!-- Review 4 -->
                <div class="bg-stone-50 rounded-xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center mb-4">
                        <img src="https://i.pravatar.cc/100?img=12" alt="Reviewer"
                            class="w-16 h-16 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold text-stone-800">Reza Firmansyah</h4>
                            <p class="text-sm text-stone-500">Entrepreneur</p>
                        </div>
                    </div>
                    <div class="text-amber-500 mb-3">★★★★★</div>
                    <p class="text-stone-600 italic">
                        "Kantor kedua saya! Staff yang ramah, WiFi cepat, dan yang paling penting: kopinya selalu
                        konsisten enak. Cappuccino Sumatera-nya juara!"
                    </p>
                </div>

                <!-- Review 5 -->
                <div class="bg-stone-50 rounded-xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center mb-4">
                        <img src="https://i.pravatar.cc/100?img=45" alt="Reviewer"
                            class="w-16 h-16 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold text-stone-800">Lisa Putri</h4>
                            <p class="text-sm text-stone-500">Designer</p>
                        </div>
                    </div>
                    <div class="text-amber-500 mb-3">★★★★★</div>
                    <p class="text-stone-600 italic">
                        "Interior designnya aesthetic banget, instagrammable! Tapi yang lebih penting, kopinya memang
                        berkualitas. Worth every penny!"
                    </p>
                </div>

                <!-- Review 6 -->
                <div class="bg-stone-50 rounded-xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex items-center mb-4">
                        <img src="https://i.pravatar.cc/100?img=68" alt="Reviewer"
                            class="w-16 h-16 rounded-full mr-4">
                        <div>
                            <h4 class="font-bold text-stone-800">Michael Tan</h4>
                            <p class="text-sm text-stone-500">Coffee Lover</p>
                        </div>
                    </div>
                    <div class="text-amber-500 mb-3">★★★★★</div>
                    <p class="text-stone-600 italic">
                        "Sudah mencoba berbagai coffee shop, tapi Kopi Nusantara tetap jadi favorit. Komitmen mereka
                        terhadap petani lokal juga patut diapresiasi!"
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-stone-900 text-white py-16 px-4">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-4 gap-12 mb-12">
                <!-- Brand -->
                <div class="md:col-span-2">
                    <h3 class="font-display text-3xl font-bold mb-4">Kopi Nusantara</h3>
                    <p class="text-stone-400 mb-6 leading-relaxed">
                        Menghadirkan pengalaman kopi terbaik dari biji pilihan Nusantara. Setiap cangkir adalah hasil
                        dari dedikasi dan passion kami terhadap kopi berkualitas.
                    </p>
                    <div class="flex gap-4">
                        <a href="#"
                            class="w-10 h-10 bg-amber-600 hover:bg-amber-700 rounded-full flex items-center justify-center transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-amber-600 hover:bg-amber-700 rounded-full flex items-center justify-center transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-10 h-10 bg-amber-600 hover:bg-amber-700 rounded-full flex items-center justify-center transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="font-display text-lg font-semibold mb-4">Tautan Cepat</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-stone-400 hover:text-amber-500 transition-colors">Tentang
                                Kami</a></li>
                        <li><a href="#" class="text-stone-400 hover:text-amber-500 transition-colors">Menu</a>
                        </li>
                        <li><a href="#" class="text-stone-400 hover:text-amber-500 transition-colors">Lokasi</a>
                        </li>
                        <li><a href="#" class="text-stone-400 hover:text-amber-500 transition-colors">Karir</a>
                        </li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="font-display text-lg font-semibold mb-4">Hubungi Kami</h4>
                    <ul class="space-y-3 text-stone-400">
                        <li>Jl. Kopi Kenangan No. 123</li>
                        <li>Jakarta Selatan, 12345</li>
                        <li class="pt-2">
                            <a href="tel:+6281234567890" class="hover:text-amber-500 transition-colors">+62
                                812-3456-7890</a>
                        </li>
                        <li>
                            <a href="mailto:info@kopinusantara.com"
                                class="hover:text-amber-500 transition-colors">info@kopinusantara.com</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="border-t border-stone-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-stone-400 text-sm">
                    &copy; 2024 Kopi Nusantara. All rights reserved.
                </p>
                <div class="flex gap-6 text-sm">
                    <a href="#" class="text-stone-400 hover:text-amber-500 transition-colors">Privacy Policy</a>
                    <a href="#" class="text-stone-400 hover:text-amber-500 transition-colors">Terms of
                        Service</a>
                    <a href="#" class="text-stone-400 hover:text-amber-500 transition-colors">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>
