<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero Video Section</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes slideInRight {
            from {
                width: 0;
            }

            to {
                width: 100%;
            }
        }

        .line-animation {
            animation: slideInRight 2s ease-in-out forwards;
        }

        .video-bg-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }

        .video-bg-container video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: blur(8px) brightness(1);
        }

        .video-container {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
        }

        .video-container video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .video-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .video-container:hover .video-overlay {
            opacity: 1;
        }

        .divider-line {
            height: 2px;
            background: linear-gradient(90deg, transparent, #667eea, transparent);
            width: 100%;
            display: none;
        }

        @media (min-width: 768px) {
            .divider-line {
                display: block;
            }
        }

        .hero-content {
            position: relative;
            z-index: 10;
        }
    </style>
</head>

<body>
    <!-- Background Video -->
    <div class="video-bg-container">
        <video autoplay muted loop playsinline>
            <source src="{{ asset('vidio/hero/vidio1.mp4') }}" type="video/mp4">
        </video>
    </div>

    <!-- Hero Section -->
    <section id="home" class="pt-20 pb-8 md:pb-12 px-4 md:px-8 relative z-10 min-h-fit flex flex-col justify-center">
        <div class="max-w-7xl mx-auto w-full hero-content">
            {{-- headear --}}
            <div class="text-center mb-12 md:mb-16">
                <h1
                    class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-4 drop-shadow-lg animate-fade-in-up">
                    WELCOME TO WARUNG POJOK
                </h1>
                <!-- Video Row -->
                <div class="flex flex-col md:flex-row gap-6 md:gap-0 items-stretch justify-center">

                    <!-- Video 1 -->
                    <div class="flex-1 flex flex-col items-center">
                        <div class="video-container w-full h-80 md:h-96 mb-4"
                            style="aspect-ratio: 9/16; max-width: 250px;">
                            <video autoplay muted loop playsinline>
                                <source src="{{ asset('vidio/hero/vidio1.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div class="video-overlay">
                                <button onclick="openModal('video1')"
                                    class="bg-white text-purple-600 px-6 py-2 rounded-full font-bold hover:bg-gray-100 transition">
                                    VIEW
                                </button>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-white drop-shadow-lg">Koproll Coffee</h3>
                        <p class="text-gray-200 text-center text-sm mt-2 drop-shadow-lg">Yang jualan Orang Gabut</p>
                    </div>

                    <!-- Divider Line 1 -->
                    <div class="hidden md:flex md:flex-col md:justify-center md:px-6">
                        <div class="divider-line line-animation"
                            style="animation-delay: 0.3s; width: 2px; height: 100%;">
                        </div>
                    </div>

                    <!-- Video 2 -->
                    <div class="flex-1 flex flex-col items-center">
                        <div class="video-container w-full h-80 md:h-96 mb-4"
                            style="aspect-ratio: 9/16; max-width: 250px;">
                            <video autoplay muted loop playsinline>
                                <source src="{{ asset('vidio/hero/vidio1.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div class="video-overlay">
                                <button onclick="openModal('video2')"
                                    class="bg-white text-purple-600 px-6 py-2 rounded-full font-bold hover:bg-gray-100 transition">
                                    VIEW
                                </button>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-white drop-shadow-lg">Mie Ayam</h3>
                        <p class="text-gray-200 text-center text-sm mt-2 drop-shadow-lg">Yang jual temen nya orang nya
                            gabut
                        </p>
                    </div>

                    <!-- Divider Line 2 -->
                    <div class="hidden md:flex md:flex-col md:justify-center md:px-6">
                        <div class="divider-line line-animation"
                            style="animation-delay: 0.5s; width: 2px; height: 100%;">
                        </div>
                    </div>

                    <!-- Video 3 -->
                    <div class="flex-1 flex flex-col items-center">
                        <div class="video-container w-full h-80 md:h-96 mb-4"
                            style="aspect-ratio: 9/16; max-width: 250px;">
                            <video autoplay muted loop playsinline>
                                <source src="{{ asset('vidio/hero/vidio1.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div class="video-overlay">
                                <button onclick="openModal('video3')"
                                    class="bg-white text-purple-600 px-6 py-2 rounded-full font-bold hover:bg-gray-100 transition">
                                    VIEW
                                </button>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-white drop-shadow-lg">Roti Bakar</h3>
                        <p class="text-gray-200 text-center text-sm mt-2 drop-shadow-lg">Yang jual temen nya orang nya
                            gabut
                        </p>
                    </div>

                </div>
            </div>
    </section>

    <!-- Modal Video 1 -->
    <div id="video1Modal" class="modal" onclick="closeModal('video1')">
        <div class="modal-content" onclick="event.stopPropagation()">
            <button class="close-btn" onclick="closeModal('video1')">&times;</button>
            <video controls autoplay style="max-width: 500px; max-height: 600px;">
                <source src="{{ asset('vidio/hero/vidio1.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <!-- Modal Video 2 -->
    <div id="video2Modal" class="modal" onclick="closeModal('video2')">
        <div class="modal-content" onclick="event.stopPropagation()">
            <button class="close-btn" onclick="closeModal('video2')">&times;</button>
            <video controls autoplay style="max-width: 500px; max-height: 600px;">
                <source src="{{ asset('vidio/hero/vidio1.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <!-- Modal Video 3 -->
    <div id="video3Modal" class="modal" onclick="closeModal('video3')">
        <div class="modal-content" onclick="event.stopPropagation()">
            <button class="close-btn" onclick="closeModal('video3')">&times;</button>
            <video controls autoplay style="max-width: 500px; max-height: 600px;">
                <source src="{{ asset('vidio/hero/vidio1.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <script>
        function openModal(videoId) {
            const modalId = videoId + 'Modal';
            document.getElementById(modalId).classList.add('show');
            document.body.style.overflow = 'hidden';
        }

        function closeModal(videoId) {
            const modalId = videoId + 'Modal';
            document.getElementById(modalId).classList.remove('show');
            document.body.style.overflow = 'auto';
        }

        // Close modal when ESC key is pressed
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                document.querySelectorAll('.modal.show').forEach(modal => {
                    modal.classList.remove('show');
                    document.body.style.overflow = 'auto';
                });
            }
        });
    </script>

    <style>
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

        .animate-fade-in-up {
            animation: fadeInUp 1s ease-out forwards;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 50;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            animation: fadeIn 0.3s ease;
        }

        .modal.show {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes zoomIn {
            from {
                transform: scale(0.9);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        .modal-content {
            background-color: #000;
            padding: 20px;
            border-radius: 15px;
            max-width: 90vw;
            max-height: 90vh;
            position: relative;
            animation: zoomIn 0.3s ease;
        }

        .modal-content video {
            width: 100%;
            height: 100%;
            border-radius: 10px;
        }

        .close-btn {
            position: absolute;
            right: 20px;
            top: 20px;
            font-size: 28px;
            font-weight: bold;
            color: white;
            cursor: pointer;
            background: rgba(0, 0, 0, 0.5);
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s ease;
            z-index: 100;
        }

        .close-btn:hover {
            background: rgba(0, 0, 0, 0.8);
        }
    </style>
</body>

</html>
