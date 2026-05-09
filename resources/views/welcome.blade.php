<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jamrizz_ | Fullstack Web Developer Portfolio</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/1.small.png') }}">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts: Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind Configuration -->
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    },
                    colors: {
                        dark: {
                            900: '#0B0F19',
                            800: '#111827',
                            700: '#1F2937',
                        },
                        brand: {
                            primary: '#3B82F6',
                            secondary: '#8B5CF6',
                            accent: '#10B981',
                        }
                    },
                    animation: {
                        'blob': 'blob 10s infinite',
                        'float': 'float 6s ease-in-out infinite',
                    },
                    keyframes: {
                        blob: {
                            '0%': {
                                transform: 'translate(0px, 0px) scale(1)'
                            },
                            '33%': {
                                transform: 'translate(30px, -50px) scale(1.1)'
                            },
                            '66%': {
                                transform: 'translate(-20px, 20px) scale(0.9)'
                            },
                            '100%': {
                                transform: 'translate(0px, 0px) scale(1)'
                            },
                        },
                        float: {
                            '0%, 100%': {
                                transform: 'translateY(0)'
                            },
                            '50%': {
                                transform: 'translateY(-20px)'
                            },
                        }
                    }
                }
            }
        }
    </script>

    <!-- Custom CSS -->
    <style>
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #0B0F19;
        }

        ::-webkit-scrollbar-thumb {
            background: #1F2937;
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #3B82F6;
        }

        .glass {
            background: rgba(11, 15, 25, 0.7);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .reveal,
        .reveal-left,
        .reveal-right {
            opacity: 0;
            transition: all 0.8s cubic-bezier(0.5, 0, 0, 1);
        }

        .reveal {
            transform: translateY(50px);
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        .reveal-left {
            transform: translateX(-50px);
        }

        .reveal-left.active {
            opacity: 1;
            transform: translateX(0);
        }

        .reveal-right {
            transform: translateX(50px);
        }

        .reveal-right.active {
            opacity: 1;
            transform: translateX(0);
        }

        .text-gradient {
            background: linear-gradient(135deg, #3B82F6 0%, #8B5CF6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .cursor::after {
            content: '|';
            animation: blink 1s step-end infinite;
        }

        @keyframes blink {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }
        }

        .accordion-content {
            transition: max-height 0.3s ease-out, padding 0.3s ease;
            max-height: 0;
            overflow: hidden;
        }
    </style>

</head>

<body class="bg-dark-900 text-gray-300 font-sans antialiased overflow-x-hidden selection:bg-brand-primary selection:text-white">

    <!-- NAVBAR SUPER PREMIUM (FLOATING CAPSULE) -->
    <nav class="fixed z-50 top-4 sm:top-6 left-1/2 -translate-x-1/2 w-[95%] max-w-6xl transition-all duration-500">
        <!-- Kotak Kapsul Melayang -->
        <div class="bg-dark-800/70 backdrop-blur-2xl border border-gray-600/30 rounded-full px-4 sm:px-6 lg:px-8 shadow-[0_20px_40px_-15px_rgba(0,0,0,0.7)]">
            <div class="flex justify-between items-center h-16 sm:h-20">

                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-3 cursor-pointer group" onclick="window.scrollTo(0,0)">
                    <div class="w-10 h-10 rounded-full bg-dark-900 border border-gray-700 flex items-center justify-center group-hover:border-brand-primary transition-colors duration-300">
                        <img src="{{ asset('images/1.big.png') }}" alt="">
                    </div>
                    <span class="font-bold text-xl text-white tracking-wide group-hover:text-brand-primary transition-colors duration-300">Jamrizz<span class="text-brand-primary">_</span></span>
                </div>

                <!-- Menu Desktop (Dibungkus dalam kotak kapsul kecil) -->
                <div class="hidden md:flex items-center space-x-1 bg-dark-900/60 rounded-full p-1 border border-gray-700/50">
                    <a href="#home" class="px-5 py-2 rounded-full text-gray-300 hover:text-white hover:bg-white/10 text-sm font-medium transition-all duration-300">Beranda</a>
                    <a href="#about" class="px-5 py-2 rounded-full text-gray-300 hover:text-white hover:bg-white/10 text-sm font-medium transition-all duration-300">Keahlian</a>
                    <a href="#services" class="px-5 py-2 rounded-full text-gray-300 hover:text-white hover:bg-white/10 text-sm font-medium transition-all duration-300">Layanan</a>
                    <a href="#projects" class="px-5 py-2 rounded-full text-gray-300 hover:text-white hover:bg-white/10 text-sm font-medium transition-all duration-300">Portofolio</a>
                </div>

                <!-- Tombol Call-to-Action -->
                <div class="hidden md:block">
                    <a href="#contact" class="px-6 py-2.5 rounded-full bg-gradient-to-r from-brand-primary to-cyan-500 text-white text-sm font-bold hover:shadow-[0_0_25px_rgba(59,130,246,0.5)] hover:-translate-y-0.5 transition-all duration-300 inline-block">
                        Konsultasi
                    </a>
                </div>

                <!-- Tombol Menu Mobile (Hamburger) -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-gray-300 hover:text-white focus:outline-none p-2 bg-dark-900/50 rounded-full border border-gray-700">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>
    </nav>

    <!-- 2. HERO SECTION (ULTRA MODERN) -->
    <section id="home" class="relative pt-28 pb-20 lg:pt-40 lg:pb-32 overflow-hidden min-h-screen flex items-center">
        <!-- Background Ornaments -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden -z-10">
            <div class="absolute top-[10%] left-[5%] w-[40rem] h-[40rem] bg-brand-primary/10 rounded-full mix-blend-screen filter blur-[120px] animate-blob"></div>
            <div class="absolute bottom-[10%] right-[5%] w-[35rem] h-[35rem] bg-cyan-400/10 rounded-full mix-blend-screen filter blur-[100px] animate-blob" style="animation-delay: 2s;"></div>
            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMSIgY3k9IjEiIHI9IjEiIGZpbGw9InJnYmEoMjU1LDI1NSwyNTUsMC4wNSkiLz48L3N2Zz4=')] [mask-image:linear-gradient(to_bottom,white,transparent)]"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-8 items-center">

                <!-- Kiri: Teks & Call to Action -->
                <div class="text-center lg:text-left reveal">
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-blue-500/10 border border-blue-500/20 mb-6 backdrop-blur-sm">
                        <span class="flex h-2 w-2 relative"><span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span><span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span></span>
                        <span class="text-sm font-semibold text-blue-400">Tersedia untuk Proyek Baru</span>
                    </div>

                    <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-white tracking-tight mb-6 leading-[1.15]">
                        Solusi <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-primary to-cyan-400">Website Premium</span> <br>
                        Untuk Bisnis Anda.
                    </h1>

                    <div class="text-xl sm:text-2xl font-bold mb-4 h-8 sm:h-10 text-gray-300">
                        Spesialis <span id="typewriter" class="cursor text-brand-primary"></span>
                    </div>

                    <p class="text-base sm:text-lg text-gray-400 mb-10 max-w-xl mx-auto lg:mx-0 font-light leading-relaxed">
                        Tingkatkan kredibilitas dan penjualan bisnis Anda dengan website yang cepat, modern, dan profesional. Dirancang khusus oleh Jamrizz_ untuk hasil yang memukau.
                    </p>

                    <div class="flex flex-col sm:flex-row items-center gap-4 justify-center lg:justify-start">
                        <a href="#services" class="w-full sm:w-auto px-8 py-4 rounded-xl bg-gradient-to-r from-brand-primary to-cyan-500 text-white font-bold tracking-wide hover:shadow-[0_0_30px_rgba(59,130,246,0.4)] hover:-translate-y-1 transition-all duration-300 text-center">Lihat Paket Harga</a>
                        <a href="#projects" class="w-full sm:w-auto px-8 py-4 rounded-xl bg-dark-800 border border-gray-600 text-white font-bold tracking-wide hover:bg-white hover:text-dark-900 transition-colors duration-300 text-center">Portofolio Karya</a>
                    </div>
                </div>

                <!-- Kanan: Gambar & Badges Mengambang -->
                <div class="relative reveal-right delay-200 hidden md:block">
                    <!-- Bingkai Utama -->
                    <div class="relative w-full max-w-md mx-auto aspect-[4/5] rounded-[2.5rem] overflow-hidden border border-gray-700/50 shadow-2xl">
                        <div class="absolute inset-0 bg-gradient-to-tr from-brand-primary/20 to-transparent mix-blend-overlay z-10"></div>
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Coding Setup" class="w-full h-full object-cover">
                    </div>

                    <!-- Floating Badge 1 (Kiri Atas) -->
                    <div class="absolute -top-6 -left-6 bg-dark-800/80 backdrop-blur-md border border-gray-700 p-4 rounded-2xl shadow-xl animate-float" style="animation-delay: 0s;">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-green-500/20 flex items-center justify-center text-green-400">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-white font-bold">100%</p>
                                <p class="text-xs text-gray-400">Kode Bersih</p>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Badge 2 (Kanan Bawah) -->
                    <div class="absolute -bottom-8 -right-6 bg-dark-800/80 backdrop-blur-md border border-gray-700 p-4 rounded-2xl shadow-xl animate-float" style="animation-delay: 1.5s;">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-brand-primary/20 flex items-center justify-center text-brand-primary">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-white font-bold">Super Cepat</p>
                                <p class="text-xs text-gray-400">Loading < 2 Detik</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 3. ABOUT & EDUCATION SECTION -->
    <section id="about" class="py-24 relative bg-dark-900 border-t border-gray-800/50 overflow-hidden">
        <!-- Dekorasi Background -->
        <div class="absolute top-20 right-0 w-96 h-96 bg-brand-primary/5 rounded-full blur-[100px] -z-10"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">

                <!-- BAGIAN KIRI: Foto 9:16 & Rating (Rating DI DALAM Foto) -->
                <div class="lg:col-span-5 reveal-left relative flex justify-center lg:justify-start">

                    <!-- Frame Foto (Rasio 9:16) -->
                    <div class="relative w-full max-w-[320px] aspect-[9/16] rounded-[2.5rem] overflow-hidden border border-gray-700/50 shadow-[0_20px_50px_-15px_rgba(0,0,0,0.5)] group">

                        <!-- GANTI LINK SRC DI BAWAH INI DENGAN FOTO KAMU -->
                        <img src="{{ asset('images/saya.jpeg') }}" alt="Jamrizz_ Profile" class="w-full h-full object-cover object-center transform group-hover:scale-105 transition-transform duration-700">

                        <!-- Efek Gradien Gelap di bagian bawah foto agar teks rating terbaca jelas -->
                        <div class="absolute inset-0 bg-gradient-to-t from-dark-900 via-dark-900/40 to-transparent opacity-90"></div>

                        <!-- BADGE RATING (Glassmorphism di dalam foto) -->
                        <div class="absolute bottom-6 left-1/2 -translate-x-1/2 w-[85%] bg-white/10 backdrop-blur-md border border-white/20 p-4 rounded-2xl shadow-xl flex flex-col items-center text-center transition-transform duration-500 group-hover:-translate-y-2">
                            <div class="flex items-center gap-1.5 mb-1">
                                <span class="text-yellow-400 flex gap-0.5">
                                    <!-- Bintang 5 -->
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                    </svg>
                                </span>
                                <span class="text-white font-extrabold text-base ml-1">5.0</span>
                            </div>
                            <p class="text-[11px] text-gray-200 font-medium uppercase tracking-wider">Kepuasan Klien</p>
                        </div>
                    </div>
                </div>

                <!-- BAGIAN KANAN: Teks & Latar Belakang Pendidikan -->
                <div class="lg:col-span-7 reveal-right flex flex-col justify-center">

                    <h2 class="text-brand-primary font-bold tracking-widest uppercase mb-2 text-sm">Siapa Saya?</h2>
                    <h3 class="text-3xl sm:text-4xl font-extrabold text-white mb-6">Mitra Terpercaya untuk <br class="hidden sm:block">Pertumbuhan Bisnis Anda.</h3>

                    <div class="mb-10 space-y-4">
                        <p class="text-gray-400 leading-relaxed">Berawal dari minat mendalam pada teknologi web, saya mendedikasikan diri untuk merancang website yang bukan hanya sekadar "berfungsi", tapi mampu **meningkatkan penjualan dan kredibilitas** klien saya. Desain yang cantik harus diimbangi dengan performa yang cepat.</p>
                        <p class="text-gray-400 leading-relaxed">Saya siap menjadi pendengar yang baik untuk setiap masalah bisnis Anda, lalu mengubahnya menjadi solusi digital (seperti Landing Page, Profil Perusahaan, hingga Sistem Kustom) yang bekerja 24 jam untuk Anda.</p>
                    </div>

                    <!-- Kotak Keahlian & Spesialisasi (Pengganti Edukasi) -->
                    <div class="bg-dark-800/80 backdrop-blur-xl border border-gray-700/50 rounded-3xl p-8 sm:p-10 relative overflow-hidden shadow-2xl">
                        <!-- Efek Cahaya Sudut -->
                        <div class="absolute top-0 right-0 w-40 h-40 bg-brand-primary/10 rounded-bl-full blur-3xl"></div>

                        <!-- Judul Baru & Ikon Bisnis -->
                        <h4 class="text-2xl font-bold text-white mb-10 flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-brand-primary/20 flex items-center justify-center text-brand-primary border border-brand-primary/30">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            Keahlian & Spesialisasi
                        </h4>

                        <div class="space-y-10 relative before:absolute before:left-[11px] before:top-2 before:h-[calc(100%-2rem)] before:w-[2px] before:bg-gradient-to-b before:from-brand-primary before:via-gray-600 before:to-transparent">

                            <!-- Spesialisasi 1: Backend/Laravel -->
                            <div class="relative pl-12 group">
                                <div class="absolute left-0 top-1 w-6 h-6 rounded-full bg-dark-900 border-4 border-brand-primary flex items-center justify-center shadow-[0_0_15px_rgba(59,130,246,0.5)] transition-transform duration-300 group-hover:scale-125 z-10"></div>
                                <h5 class="text-xl font-bold text-white group-hover:text-brand-primary transition-colors">Fullstack Web Developer</h5>
                                <p class="text-brand-primary text-sm font-semibold mb-3">Laravel Framework & MySQL Database</p>
                                <p class="text-sm text-gray-400 leading-relaxed">Merancang arsitektur sistem yang tangguh, aman, dan efisien untuk berbagai kebutuhan bisnis. Mulai dari Company Profile hingga sistem manajemen data yang kompleks.</p>
                            </div>

                            <!-- Spesialisasi 2: Frontend/UI-UX -->
                            <div class="relative pl-12 group">
                                <div class="absolute left-0 top-1 w-6 h-6 rounded-full bg-dark-900 border-4 border-gray-600 flex items-center justify-center transition-all duration-300 group-hover:border-cyan-400 group-hover:scale-125 z-10"></div>
                                <h5 class="text-xl font-bold text-white group-hover:text-cyan-400 transition-colors">Modern UI/UX Frontend</h5>
                                <p class="text-gray-500 text-sm font-semibold mb-3">Tailwind CSS & Interaktif Desain</p>
                                <p class="text-sm text-gray-400 leading-relaxed">Menciptakan antarmuka pengguna yang memukau secara visual, dilengkapi animasi halus, dan dijamin 100% responsif (tampil sempurna di HP maupun Komputer).</p>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- 4. TECH STACK & SKILLS -->
    <section id="skills" class="py-24 relative bg-dark-800/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="reveal mb-16">
                <h2 class="text-brand-secondary font-bold tracking-widest uppercase mb-2 text-sm">Tech Stack</h2>
                <h3 class="text-3xl sm:text-4xl font-extrabold text-white">Alat & Teknologi.</h3>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-6 sm:gap-8 reveal delay-100">
                <div class="group flex flex-col items-center p-6 rounded-2xl bg-dark-800 border border-gray-700 hover:border-orange-500 hover:-translate-y-2 transition-all duration-300">
                    <svg class="w-12 h-12 mb-4 text-gray-500 group-hover:text-orange-500 transition-colors" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622L5.412 4.41l.698 8.01h9.126l-.326 3.426-2.91.804-2.955-.81-.188-2.11H6.248l.33 4.171L12 19.351l5.379-1.443.744-8.157H8.531z" />
                    </svg>
                    <span class="font-bold text-white">HTML5</span>
                </div>
                <div class="group flex flex-col items-center p-6 rounded-2xl bg-dark-800 border border-gray-700 hover:border-blue-500 hover:-translate-y-2 transition-all duration-300">
                    <svg class="w-12 h-12 mb-4 text-gray-500 group-hover:text-blue-500 transition-colors" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.565-2.438L1.5 0zm17.09 4.412H5.41l.233 2.625h10.056l-.233 2.719H6.341l.33 4.171h8.556l-.326 3.426-2.91.804-2.955-.81-.188-2.11H6.248l.33 4.171L12 19.351l5.379-1.443.744-8.157h-9.126l-.698-8.01z" />
                    </svg>
                    <span class="font-bold text-white">CSS3</span>
                </div>
                <div class="group flex flex-col items-center p-6 rounded-2xl bg-dark-800 border border-gray-700 hover:border-cyan-400 hover:-translate-y-2 transition-all duration-300">
                    <svg class="w-12 h-12 mb-4 text-gray-500 group-hover:text-cyan-400 transition-colors" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12.001,4.8c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 C13.666,10.618,15.027,12,18.001,12c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C16.337,6.182,14.976,4.8,12.001,4.8z M6.001,12c-3.2,0-5.2,1.6-6,4.8c1.2-1.6,2.6-2.2,4.2-1.8c0.913,0.228,1.565,0.89,2.288,1.624 c1.177,1.194,2.538,2.576,5.512,2.576c3.2,0,5.2-1.6,6-4.8c-1.2,1.6-2.6,2.2-4.2,1.8c-0.913-0.228-1.565-0.89-2.288-1.624 C10.337,13.382,8.976,12,6.001,12z" />
                    </svg>
                    <span class="font-bold text-white">Tailwind</span>
                </div>
                <div class="group flex flex-col items-center p-6 rounded-2xl bg-dark-800 border border-gray-700 hover:border-yellow-400 hover:-translate-y-2 transition-all duration-300">
                    <svg class="w-12 h-12 mb-4 text-gray-500 group-hover:text-yellow-400 transition-colors" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.705-1.469-1.065-2.834-1.034l-.705.089c-.676.165-1.32.525-1.71 1.005-1.14 1.291-.811 3.541.569 4.471 1.365 1.02 3.361 1.244 3.616 2.205.24 1.17-.87 1.545-1.966 1.41-.811-.18-1.26-.586-1.755-1.336l-1.83 1.051c.21.48.45.689.81 1.109 1.74 1.756 6.09 1.666 6.871-1.004.029-.09.24-.705.074-1.65l.046.067zm-8.983-7.245h-2.248c0 1.938-.009 3.864-.009 5.805 0 1.232.063 2.363-.138 2.711-.33.689-1.18.601-1.566.48-.396-.196-.597-.466-.83-.855-.063-.105-.11-.196-.127-.196l-1.825 1.125c.305.63.75 1.172 1.324 1.517 1.051.644 2.92.837 4.145.03l.42-.315c.63-.585.83-1.26.83-2.61l-.01-7.697h.035z" />
                    </svg>
                    <span class="font-bold text-white">JavaScript</span>
                </div>
                <div class="group flex flex-col items-center p-6 rounded-2xl bg-dark-800 border border-gray-700 hover:border-red-500 hover:-translate-y-2 transition-all duration-300">
                    <svg class="w-12 h-12 mb-4 text-gray-500 group-hover:text-red-500 transition-colors" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M23.161 12.39c-1.488-.707-1.488-.707-3.992-1.931-1.636-.8-2.639-1.274-2.684-1.274-.038 0-1.006 1.168-2.155 2.597L12.242 14.38l-2.074-2.553c-1.139-1.401-2.091-2.558-2.115-2.571-.026-.013-1.057.472-2.292 1.077L1.8 12.327l.024.161c.075.467.575 1.966.862 2.577 1.542 3.308 4.417 5.766 7.915 6.772 1.517.435 3.535.536 5.121.258 2.65-.466 5.093-1.782 6.844-3.687 1.189-1.293 2.152-2.923 2.62-4.436.196-.632.148-.485-.025-.582zM4.604 11.233c.121-.059 1.144-.551 2.274-1.092l2.056-.983-.984-1.234C7.41 7.26 6.963 6.697 6.963 6.671c-.004-.022-1.008.434-2.233 1.015L2.497 8.747l-.022.253c-.092 1.092.115 2.607.452 3.298l.056.115 1.621-.78v-.4zM10.155 8.647c.541-.676 1.004-1.236 1.028-1.246.024-.01.564.246 1.199.569 1.341.681 1.184.595 1.536.837l.156.108-1.051 1.253-1.05 1.255-1.014-1.248c-.557-.687-1.017-1.256-1.02-1.265-.004-.009.1-1.036.216-2.263zM15.421 9.948c.01-.005 1.25-.595 2.756-1.311l2.738-1.302-.093-.306c-.198-.654-.766-1.764-1.077-2.102-.096-.104-.117-.116-.279-.168-2.615-.845-5.698-.946-8.384-.275-1.999.499-4.108 1.528-5.719 2.791l-.195.153 1.637-.791 1.635-.791.954 1.183c.525.65 1.006 1.205 1.069 1.233.064.027 1.109-.481 2.324-1.129l2.209-1.178.694.757c.381.417.696.76.699.764.004.004-1.097 1.272-2.447 2.818l-2.454 2.811 1.944 2.389 1.944 2.388 2.046-2.392c1.126-1.315 2.05-2.399 2.053-2.409.004-.01-1.815-.886-4.052-1.949z" />
                    </svg>
                    <span class="font-bold text-white">Laravel</span>
                </div>
                <div class="group flex flex-col items-center p-6 rounded-2xl bg-dark-800 border border-gray-700 hover:border-blue-400 hover:-translate-y-2 transition-all duration-300">
                    <svg class="w-12 h-12 mb-4 text-gray-500 group-hover:text-blue-400 transition-colors" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M14.25.18l.9.2.73.26.59.3.45.32.34.34.25.34.16.33.1.3.04.26.02.2-.01.13V8.5l-.05.63-.13.55-.21.46-.26.38-.3.31-.33.25-.35.19-.35.14-.33.1-.3.07-.26.04-.21.02H8.77l-.69.05-.59.14-.5.22-.41.27-.33.32-.27.35-.2.36-.15.37-.1.35-.07.32-.04.27-.02.21v3.06H3.17l-.21-.03-.28-.07-.32-.12-.35-.18-.36-.26-.36-.36-.35-.46-.32-.59-.28-.73-.21-.88-.14-1.05-.05-1.23v-2.46l.05-1.23.14-1.05.21-.88.28-.73.32-.59.35-.46.36-.36.36-.26.35-.18.32-.12.28-.07.21-.03h3.06V3.17l.03-.21.07-.28.12-.32.18-.35.26-.36.36-.36.46-.35.59-.32.73-.28.88-.21 1.05-.14 1.23-.05h2.46l1.23.05 1.05.14.88.21zM12 5.36c.46 0 .86.16 1.18.48.32.32.48.72.48 1.18 0 .46-.16.86-.48 1.18-.32.32-.72.48-1.18.48-.46 0-.86-.16-1.18-.48-.32-.32-.48-.72-.48-1.18 0-.46.16-.86.48-1.18.32-.32.72-.48 1.18-.48zm-2.25 18.46l-.9-.2-.73-.26-.59-.3-.45-.32-.34-.34-.25-.34-.16-.33-.1-.3-.04-.26-.02-.2.01-.13V15.5l.05-.63.13-.55.21-.46.26-.38.3-.31.33-.25.35-.19.35-.14.33-.1.3-.07.26-.04.21-.02h4.48l.69-.05.59-.14.5-.22.41-.27.33-.32.27-.35.2-.36.15-.37.1-.35.07-.32.04-.27.02-.21v-3.06h3.17l.21.03.28.07.32.12.35.18.36.26.36.36.35.46.32.59.28.73.21.88.14 1.05.05 1.23v2.46l-.05 1.23-.14 1.05-.21.88-.28.73-.32.59-.35.46-.36.36-.36.26-.35.18-.32.12-.28.07-.21.03h-3.06v3.17l-.03.21-.07.28-.12.32-.18.35-.26.36-.36.36-.46.35-.59.32-.73.28-.88.21-1.05.14-1.23.05H9.75l-1.23-.05-1.05-.14-.88-.21zM12 18.64c-.46 0-.86-.16-1.18-.48-.32-.32-.48-.72-.48-1.18 0-.46.16-.86.48-1.18.32-.32.72-.48 1.18-.48.46 0 .86.16 1.18.48.32.32.48.72.48 1.18 0 .46-.16.86-.48 1.18-.32.32-.72.48-1.18.48z" />
                    </svg>
                    <span class="font-bold text-white">Python</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. SERVICES / PRICING SECTION (PREMIUM DESIGN) -->
    <section id="services" class="py-24 relative bg-dark-900 overflow-hidden">
        <!-- Efek Cahaya Latar Belakang -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-3xl h-[600px] bg-brand-primary/10 rounded-full blur-[120px] -z-10 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-20 reveal">
                <span class="px-4 py-1.5 rounded-full bg-brand-primary/10 border border-brand-primary/30 text-brand-primary text-sm font-bold tracking-wide uppercase inline-block mb-4">
                    Pilih Layanan Anda
                </span>
                <h2 class="text-4xl sm:text-5xl font-extrabold text-white mb-6 tracking-tight">
                    Website Impian, <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-primary to-cyan-400">Harga Teman.</span>
                </h2>
                <p class="text-gray-400 text-lg leading-relaxed">
                    Bukan sekadar ngoding, saya merancang mesin penarik pelanggan untuk bisnis Anda dengan teknologi terbaru yang cepat dan anti-lelet.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center reveal-up delay-100">

                <!-- PAKET 1: LANDING PAGE -->
                <div class="group relative bg-dark-800/60 backdrop-blur-xl border border-gray-700/50 rounded-[2rem] p-8 hover:bg-dark-800 transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_10px_40px_-15px_rgba(59,130,246,0.3)]">
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-blue-500/20 to-purple-500/20 flex items-center justify-center mb-6 border border-blue-500/30 group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-2">Landing Page</h3>
                    <div class="flex items-baseline gap-1 mb-4">
                        <span class="text-gray-500 text-sm">Mulai</span>
                        <span class="text-3xl font-extrabold text-white">Rp 500k</span>
                    </div>
                    <p class="text-gray-400 text-sm mb-8 h-16">Senjata utama untuk jualan 1 produk, promosi event, atau undangan digital masa kini.</p>

                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start gap-3 text-sm text-gray-300"><svg class="w-5 h-5 text-green-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg> 1 Halaman Berkonversi Tinggi</li>
                        <li class="flex items-start gap-3 text-sm text-gray-300"><svg class="w-5 h-5 text-green-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg> Animasi Halus & Menarik</li>
                        <li class="flex items-start gap-3 text-sm text-gray-300"><svg class="w-5 h-5 text-green-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg> Tombol Order Otomatis ke WA</li>
                    </ul>

                    <a href="#contact" onclick="document.getElementById('subject').value='Pesan Landing Page'" class="block w-full py-3.5 rounded-xl border border-gray-600 text-white font-bold text-center hover:bg-white hover:text-dark-900 transition-all duration-300">Pilih Landing Page</a>
                </div>

                <!-- PAKET 2: BISNIS PRO (DI-HIGHLIGHT) -->
                <div class="group relative bg-gradient-to-b from-dark-800 to-dark-900 border border-brand-primary rounded-[2rem] p-8 md:scale-105 z-10 shadow-[0_0_50px_-12px_rgba(59,130,246,0.4)]">
                    <div class="absolute -top-5 left-1/2 -translate-x-1/2">
                        <div class="relative">
                            <div class="absolute inset-0 bg-brand-primary blur-md opacity-50 animate-pulse"></div>
                            <span class="relative bg-gradient-to-r from-brand-primary to-cyan-500 text-white text-xs font-bold px-5 py-2 rounded-full uppercase tracking-widest shadow-lg">🔥 Paling Laris</span>
                        </div>
                    </div>

                    <div class="w-14 h-14 rounded-2xl bg-brand-primary/20 flex items-center justify-center mb-6 border border-brand-primary/50 group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7 text-brand-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-2">Web Bisnis Pro</h3>
                    <div class="flex items-baseline gap-1 mb-4">
                        <span class="text-gray-500 text-sm">Mulai</span>
                        <span class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-white to-gray-400">Rp 1.5JT</span>
                    </div>
                    <p class="text-gray-400 text-sm mb-8 h-16">Tampil meyakinkan di Google. Cocok untuk Company Profile, UMKM, atau Portofolio Pribadi.</p>

                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start gap-3 text-sm text-gray-200"><svg class="w-5 h-5 text-brand-primary shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg> 5-7 Halaman (Home, About, dll)</li>
                        <li class="flex items-start gap-3 text-sm text-gray-200"><svg class="w-5 h-5 text-brand-primary shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg> Desain Premium & Mobile Friendly</li>
                        <li class="flex items-start gap-3 text-sm text-gray-200"><svg class="w-5 h-5 text-brand-primary shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg> Optimasi SEO Basic (Mudah dicari)</li>
                        <li class="flex items-start gap-3 text-sm text-gray-200"><svg class="w-5 h-5 text-brand-primary shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg> Gratis Bantuan Setup Hosting</li>
                    </ul>

                    <a href="#contact" onclick="document.getElementById('subject').value='Pesan Web Bisnis Pro'" class="block w-full py-4 rounded-xl bg-gradient-to-r from-brand-primary to-cyan-500 text-white font-bold text-center hover:shadow-[0_0_20px_rgba(59,130,246,0.6)] hover:-translate-y-1 transition-all duration-300">Ambil Promo Ini</a>
                </div>

                <!-- PAKET 3: WEB APP / LARAVEL -->
                <div class="group relative bg-dark-800/60 backdrop-blur-xl border border-gray-700/50 rounded-[2rem] p-8 hover:bg-dark-800 transition-all duration-500 hover:-translate-y-2 hover:shadow-[0_10px_40px_-15px_rgba(244,63,94,0.2)]">
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-red-500/20 to-orange-500/20 flex items-center justify-center mb-6 border border-red-500/30 group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-2">Web App Custom</h3>
                    <div class="flex items-baseline gap-1 mb-4">
                        <span class="text-3xl font-extrabold text-white">Diskusi</span>
                        <span class="text-gray-500 text-sm">/ Harga</span>
                    </div>
                    <p class="text-gray-400 text-sm mb-8 h-16">Punya ide sistem khusus? Sistem Kasir, Inventaris, atau Toko Online dengan database yang kompleks.</p>

                    <ul class="space-y-4 mb-8">
                        <li class="flex items-start gap-3 text-sm text-gray-300"><svg class="w-5 h-5 text-red-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg> Fullstack Laravel Framework</li>
                        <li class="flex items-start gap-3 text-sm text-gray-300"><svg class="w-5 h-5 text-red-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg> Fitur Login & Level User</li>
                        <li class="flex items-start gap-3 text-sm text-gray-300"><svg class="w-5 h-5 text-red-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg> Dashboard Panel Admin (CRUD)</li>
                    </ul>

                    <a href="#contact" onclick="document.getElementById('subject').value='Konsultasi Sistem Custom Laravel'" class="block w-full py-3.5 rounded-xl border border-gray-600 text-white font-bold text-center hover:border-red-500 hover:text-red-400 transition-all duration-300">Konsultasi Gratis</a>
                </div>

            </div>

            <div class="mt-16 text-center">
                <p class="text-gray-500 text-sm">Tidak menemukan paket yang sesuai? <a href="#contact" class="text-brand-primary font-bold hover:underline">Mari diskusikan kebutuhan Anda</a>.</p>
            </div>
        </div>
    </section>

    <!-- 6. PORTFOLIO / PROJECTS SECTION (INTERNATIONAL AGENCY LEVEL) -->
    <section id="projects" class="py-24 relative bg-dark-900 border-t border-gray-800/50">
        <!-- Dekorasi Latar -->
        <div class="absolute right-0 bottom-0 w-1/3 h-1/2 bg-gradient-to-tl from-brand-primary/5 to-transparent blur-3xl -z-10"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Header & Filter Kategori -->
            <div class="flex flex-col md:flex-row md:justify-between md:items-end gap-8 mb-16 reveal">
                <div class="max-w-xl">
                    <h2 class="text-brand-primary font-bold tracking-widest uppercase mb-2 text-sm">Portofolio Karya</h2>
                    <h3 class="text-3xl sm:text-4xl font-extrabold text-white mb-4">Bukti Kualitas Pekerjaan.</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Setiap baris kode dan elemen desain dirancang dengan tujuan yang jelas: mengubah pengunjung menjadi pelanggan untuk bisnis klien saya.</p>
                </div>

                <!-- Menu Filter (UI-only untuk kesan profesional) -->
                <div class="flex flex-wrap gap-2">
                    <button class="px-5 py-2 rounded-full bg-brand-primary text-white text-sm font-bold shadow-[0_0_15px_rgba(59,130,246,0.4)] transition-all">Semua</button>
                    <button class="px-5 py-2 rounded-full bg-dark-800 border border-gray-700 text-gray-400 text-sm font-medium hover:border-gray-500 hover:text-white transition-all">Web App</button>
                    <button class="px-5 py-2 rounded-full bg-dark-800 border border-gray-700 text-gray-400 text-sm font-medium hover:border-gray-500 hover:text-white transition-all">Landing Page</button>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 lg:gap-12 reveal-up delay-200">

                <!-- PROYEK 1: E-Commerce -->
                <div class="group relative flex flex-col bg-dark-800/40 border border-gray-800 rounded-[2.5rem] p-4 hover:bg-dark-800 hover:border-gray-700 transition-all duration-500">
                    <!-- Bingkai Gambar -->
                    <div class="relative w-full aspect-video rounded-[2rem] overflow-hidden bg-gray-900 shadow-lg mb-6">
                        <div class="absolute inset-0 bg-gradient-to-t from-dark-900/80 via-transparent to-transparent z-10"></div>
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="E-Commerce Dashboard" class="object-cover w-full h-full transform group-hover:scale-105 transition-transform duration-700">

                        <!-- Floating Tech Stack -->
                        <div class="absolute top-4 right-4 flex gap-2 z-20">
                            <span class="w-8 h-8 rounded-full bg-dark-900/80 backdrop-blur-md flex items-center justify-center border border-gray-700 text-red-400 text-xs font-bold" title="Laravel">L</span>
                            <span class="w-8 h-8 rounded-full bg-dark-900/80 backdrop-blur-md flex items-center justify-center border border-gray-700 text-cyan-400 text-xs font-bold" title="Tailwind">T</span>
                        </div>
                    </div>

                    <!-- Deskripsi & Tombol Bawah -->
                    <div class="px-4 pb-4 flex flex-col flex-grow">
                        <h4 class="text-2xl font-bold text-white mb-2 group-hover:text-brand-primary transition-colors">Sistem E-Commerce B2B</h4>
                        <p class="text-gray-400 text-sm leading-relaxed mb-6 flex-grow">Membangun platform grosir online dengan manajemen stok otomatis, keranjang belanja dinamis, dan panel dashboard analitik.</p>

                        <!-- Angka Keberhasilan (Impact) -->
                        <div class="grid grid-cols-2 gap-4 mb-6 border-y border-gray-800 py-4">
                            <div>
                                <p class="text-white font-extrabold text-lg">0.8s</p>
                                <p class="text-gray-500 text-xs">Load Speed</p>
                            </div>
                            <div>
                                <p class="text-white font-extrabold text-lg">100%</p>
                                <p class="text-gray-500 text-xs">Responsive</p>
                            </div>
                        </div>

                        <!-- Tombol Aksi -->
                        <div class="flex items-center gap-4">
                            <a href="#" class="flex-1 py-3 rounded-xl bg-brand-primary/10 text-brand-primary text-sm font-bold text-center border border-brand-primary/30 hover:bg-brand-primary hover:text-white transition-all duration-300">Live Preview</a>
                            <a href="#" class="w-12 h-12 rounded-xl bg-dark-900 border border-gray-700 flex items-center justify-center text-gray-400 hover:text-white transition-colors" title="Lihat Source Code">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- PROYEK 2: Company Profile -->
                <div class="group relative flex flex-col bg-dark-800/40 border border-gray-800 rounded-[2.5rem] p-4 hover:bg-dark-800 hover:border-gray-700 transition-all duration-500 md:translate-y-8">
                    <!-- Bingkai Gambar -->
                    <div class="relative w-full aspect-video rounded-[2rem] overflow-hidden bg-gray-900 shadow-lg mb-6">
                        <div class="absolute inset-0 bg-gradient-to-t from-dark-900/80 via-transparent to-transparent z-10"></div>
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Company Profile" class="object-cover w-full h-full transform group-hover:scale-105 transition-transform duration-700 object-top">

                        <div class="absolute top-4 right-4 flex gap-2 z-20">
                            <span class="px-3 py-1.5 rounded-full bg-dark-900/80 backdrop-blur-md flex items-center justify-center border border-gray-700 text-yellow-400 text-xs font-bold">JavaScript</span>
                        </div>
                    </div>

                    <!-- Deskripsi & Tombol Bawah -->
                    <div class="px-4 pb-4 flex flex-col flex-grow">
                        <h4 class="text-2xl font-bold text-white mb-2 group-hover:text-brand-primary transition-colors">Profil Agensi Kreatif</h4>
                        <p class="text-gray-400 text-sm leading-relaxed mb-6 flex-grow">Landing page premium dengan animasi scroll (parallax) yang super halus untuk meningkatkan *engagement* pengunjung website.</p>

                        <div class="grid grid-cols-2 gap-4 mb-6 border-y border-gray-800 py-4">
                            <div>
                                <p class="text-white font-extrabold text-lg">SEO</p>
                                <p class="text-gray-500 text-xs">Optimized</p>
                            </div>
                            <div>
                                <p class="text-white font-extrabold text-lg">#1</p>
                                <p class="text-gray-500 text-xs">Google PageRank</p>
                            </div>
                        </div>

                        <!-- Tombol Aksi -->
                        <div class="flex items-center gap-4">
                            <a href="#" class="flex-1 py-3 rounded-xl bg-brand-primary/10 text-brand-primary text-sm font-bold text-center border border-brand-primary/30 hover:bg-brand-primary hover:text-white transition-all duration-300">Live Preview</a>
                            <a href="#" class="w-12 h-12 rounded-xl bg-dark-900 border border-gray-700 flex items-center justify-center text-gray-400 hover:text-white transition-colors" title="Lihat Source Code">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 7. FAQ SECTION -->
    <section class="py-24 relative bg-dark-900">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <h2 class="text-brand-primary font-bold tracking-widest uppercase mb-2 text-sm">FAQ</h2>
                <h3 class="text-3xl sm:text-4xl font-extrabold text-white">Pertanyaan Umum.</h3>
            </div>

            <div class="space-y-4 reveal-right delay-100">
                <div class="border border-gray-800 rounded-2xl overflow-hidden bg-dark-800/50">
                    <button class="w-full px-6 py-5 text-left flex justify-between items-center focus:outline-none faq-btn">
                        <span class="font-bold text-white">Berapa lama proses pembuatan website?</span>
                        <svg class="w-5 h-5 text-brand-primary transform transition-transform duration-300 icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="accordion-content bg-dark-800">
                        <p class="px-6 pb-5 text-gray-400 text-sm">Tergantung pada kompleksitas proyek. Landing page statis bisa memakan waktu 3-5 hari, sementara aplikasi web berbasis Laravel bisa 2-4 minggu. Kita akan menyepakati timeline sebelum proyek dimulai.</p>
                    </div>
                </div>

                <div class="border border-gray-800 rounded-2xl overflow-hidden bg-dark-800/50">
                    <button class="w-full px-6 py-5 text-left flex justify-between items-center focus:outline-none faq-btn">
                        <span class="font-bold text-white">Apakah desainnya akan responsif di HP?</span>
                        <svg class="w-5 h-5 text-brand-primary transform transition-transform duration-300 icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="accordion-content bg-dark-800">
                        <p class="px-6 pb-5 text-gray-400 text-sm">Tentu saja! 100% responsif. Saya menggunakan pendekatan *Mobile-First*, yang artinya website Anda akan terlihat sempurna dan berfungsi dengan sangat baik di semua ukuran layar (HP, Tablet, Desktop).</p>
                    </div>
                </div>

                <div class="border border-gray-800 rounded-2xl overflow-hidden bg-dark-800/50">
                    <button class="w-full px-6 py-5 text-left flex justify-between items-center focus:outline-none faq-btn">
                        <span class="font-bold text-white">Apakah Anda menyediakan layanan hosting?</span>
                        <svg class="w-5 h-5 text-brand-primary transform transition-transform duration-300 icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="accordion-content bg-dark-800">
                        <p class="px-6 pb-5 text-gray-400 text-sm">Layanan utama saya adalah pembuatan (coding) website. Namun, saya dapat membantu Anda dalam proses setup *hosting* dan pengaturan nama domain (deploy) jika diperlukan, dengan biaya terpisah.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. CONTACT & FORM SECTION (LARAVEL INTEGRATED) -->
    <section id="contact" class="py-24 relative bg-dark-800/80 border-t border-gray-800/50 overflow-hidden">
        <div class="absolute top-0 right-0 w-full h-full max-w-lg bg-brand-primary/5 rounded-full blur-[120px] -z-10"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">

                <div class="reveal-left">
                    <h2 class="text-brand-primary font-bold tracking-widest uppercase mb-2 text-sm">Get In Touch</h2>
                    <h3 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-white mb-6 tracking-tight">Mari Mulai <br>Proyek Anda.</h3>
                    <p class="text-lg text-gray-400 mb-10 leading-relaxed">Punya ide proyek, pekerjaan *freelance*, atau tugas sekolah yang butuh bantuan? Kirimkan pesan, saya akan merespon secepat mungkin.</p>

                    <div class="space-y-6">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-dark-700 flex items-center justify-center text-brand-primary border border-gray-700">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500 font-medium">Email Terus Terang</p>
                                <a href="mailto:jamrizzbisnis@gmail.com" class="text-white font-bold hover:text-brand-primary transition-colors">jamrizzbisnis@gmail.com</a>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-dark-700 flex items-center justify-center text-brand-secondary border border-gray-700">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500 font-medium">Lokasi</p>
                                <p class="text-white font-bold">Malang, Jawa Timur</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FORM LARAVEL DENGAN VALIDASI -->
                <form action="/kirim-pesan" method="POST" class="space-y-6">
                    @csrf

                    @if(session('success'))
                    <div class="p-4 mb-4 text-sm text-green-400 bg-green-900/30 rounded-xl border border-green-800">
                        {{ session('success') }}
                    </div>
                    @endif

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label for="name" class="text-sm font-medium text-gray-400">Nama Lengkap</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="John Doe" class="w-full bg-dark-800 border @error('name') border-red-500 @else border-gray-700 @enderror rounded-xl px-4 py-3 text-white placeholder-gray-600 focus:outline-none focus:border-brand-primary focus:ring-1 focus:ring-brand-primary transition-colors">
                            @error('name')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="space-y-2">
                            <label for="email" class="text-sm font-medium text-gray-400">Email Address</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="john@example.com" class="w-full bg-dark-800 border @error('email') border-red-500 @else border-gray-700 @enderror rounded-xl px-4 py-3 text-white placeholder-gray-600 focus:outline-none focus:border-brand-primary focus:ring-1 focus:ring-brand-primary transition-colors">
                            @error('email')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="space-y-2">
                        <label for="subject" class="text-sm font-medium text-gray-400">Subjek</label>
                        <input type="text" name="subject" id="subject" value="{{ old('subject') }}" placeholder="Pesan Jasa Website / Tanya-tanya" class="w-full bg-dark-800 border @error('subject') border-red-500 @else border-gray-700 @enderror rounded-xl px-4 py-3 text-white placeholder-gray-600 focus:outline-none focus:border-brand-primary focus:ring-1 focus:ring-brand-primary transition-colors">
                        @error('subject')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="space-y-2">
                        <label for="message" class="text-sm font-medium text-gray-400">Pesan Anda</label>
                        <textarea name="message" id="message" rows="4" placeholder="Ceritakan detail proyek Anda..." class="w-full bg-dark-800 border @error('message') border-red-500 @else border-gray-700 @enderror rounded-xl px-4 py-3 text-white placeholder-gray-600 focus:outline-none focus:border-brand-primary focus:ring-1 focus:ring-brand-primary transition-colors resize-none">{{ old('message') }}</textarea>
                        @error('message')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="w-full py-4 rounded-xl bg-gradient-to-r from-brand-primary to-brand-secondary text-white font-bold text-lg hover:shadow-[0_0_20px_rgba(59,130,246,0.5)] transition-all duration-300 transform hover:-translate-y-1">
                        Kirim Pesan
                    </button>
                </form>

            </div>
        </div>
    </section>

    <!-- 9. FOOTER -->
    <!-- FOOTER AGENSI PROFESIONAL -->
    <footer class="bg-dark-900 border-t border-gray-800 pt-16 pb-8 relative overflow-hidden">
        <!-- Efek Glow di Footer -->
        <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-3/4 h-32 bg-brand-primary/5 rounded-t-full blur-[80px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 md:gap-8 mb-12">

                <!-- Kolom 1: Brand Info -->
                <div class="md:col-span-2">
                    <div class="flex items-center gap-2 mb-6">
                        <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-brand-primary to-cyan-500 flex items-center justify-center text-white font-bold text-lg">J</div>
                        <span class="font-bold text-xl text-white">Jamrizz<span class="text-brand-primary"> </span> Ganteng</span>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed max-w-sm mb-6">
                        Mitra teknologi terpercaya untuk mentransformasi ide bisnis Anda menjadi produk digital (Website & Web App) yang elegan, responsif, dan berkonversi tinggi.
                    </p>
                    <div class="flex space-x-4">
                        <!-- Icon Sosmed (Bisa diganti link aslimu) -->
                        <a href="https://www.instagram.com/zamrizzz_" class="w-10 h-10 rounded-full bg-dark-800 border border-gray-700 flex items-center justify-center text-gray-400 hover:text-white hover:border-pink-500 hover:bg-pink-500/10 transition-all">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Kolom 2: Tautan Cepat -->
                <div>
                    <h5 class="text-white font-bold mb-6">Layanan Kami</h5>
                    <ul class="space-y-3">
                        <li><a href="#services" class="text-gray-400 hover:text-brand-primary text-sm transition-colors flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-gray-600"></span> Landing Page</a></li>
                        <li><a href="#services" class="text-gray-400 hover:text-brand-primary text-sm transition-colors flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-gray-600"></span> Company Profile</a></li>
                        <li><a href="#services" class="text-gray-400 hover:text-brand-primary text-sm transition-colors flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-gray-600"></span> E-Commerce</a></li>
                        <li><a href="#services" class="text-gray-400 hover:text-brand-primary text-sm transition-colors flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-gray-600"></span> Custom Web App</a></li>
                    </ul>
                </div>

                <!-- Kolom 3: Kontak -->
                <div>
                    <h5 class="text-white font-bold mb-6">Hubungi Saya</h5>
                    <ul class="space-y-4 text-sm text-gray-400">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            jamrizzbisnis@gmail.com
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-brand-primary shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Malang, Jawa Timur, Indonesia
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Garis Bawah & Copyright -->
            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-gray-500 text-sm">
                    &copy; <span id="year">2026</span> Jamrizz_ Agency. Hak Cipta Dilindungi.
                </p>
                <div class="flex gap-4 text-sm">
                    <a href="#" class="text-gray-500 hover:text-white transition-colors">Kebijakan Privasi</a>
                    <a href="#" class="text-gray-500 hover:text-white transition-colors">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Script untuk auto-update tahun di footer -->
    <script>
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>


    <!-- 10. JAVASCRIPT: Interaktivitas Tingkat Tinggi -->
    <script>
        // --- MOBILE MENU LOGIC ---
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const bar1 = document.getElementById('bar1');
        const bar2 = document.getElementById('bar2');
        const bar3 = document.getElementById('bar3');
        const mobileLinks = document.querySelectorAll('.mobile-link');
        let isMenuOpen = false;

        function toggleMenu() {
            isMenuOpen = !isMenuOpen;
            if (isMenuOpen) {
                menu.classList.remove('translate-x-full');
                bar1.classList.add('rotate-45', 'translate-y-2.5');
                bar2.classList.add('opacity-0');
                bar3.classList.add('-rotate-45', '-translate-y-2.5');
                document.body.classList.add('overflow-hidden');
            } else {
                menu.classList.add('translate-x-full');
                bar1.classList.remove('rotate-45', 'translate-y-2.5');
                bar2.classList.remove('opacity-0');
                bar3.classList.remove('-rotate-45', '-translate-y-2.5');
                document.body.classList.remove('overflow-hidden');
            }
        }

        btn.addEventListener('click', toggleMenu);
        mobileLinks.forEach(link => link.addEventListener('click', toggleMenu));

        // --- NAVBAR SCROLL EFFECT ---
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                navbar.classList.add('bg-dark-900/90', 'shadow-2xl');
                navbar.classList.remove('glass');
            } else {
                navbar.classList.add('glass');
                navbar.classList.remove('bg-dark-900/90', 'shadow-2xl');
            }
        });

        // --- TYPEWRITER EFFECT ---
        // TYPEWRITER EFFECT
        const textArray = ["Jasa Pembuatan Landing Page.", "Sistem E-Commerce & Toko Online.", "Website Company Profile.", "Solusi Web Kustom (Laravel)."];
        const typingDelay = 100;
        const erasingDelay = 50;
        const newTextDelay = 2000;
        let textArrayIndex = 0;
        let charIndex = 0;
        const typedTextSpan = document.getElementById("typewriter");

        function type() {
            if (charIndex < textArray[textArrayIndex].length) {
                typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
                charIndex++;
                setTimeout(type, typingDelay);
            } else {
                setTimeout(erase, newTextDelay);
            }
        }

        function erase() {
            if (charIndex > 0) {
                typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex - 1);
                charIndex--;
                setTimeout(erase, erasingDelay);
            } else {
                textArrayIndex++;
                if (textArrayIndex >= textArray.length) textArrayIndex = 0;
                setTimeout(type, typingDelay + 1100);
            }
        }

        document.addEventListener("DOMContentLoaded", function() {
            if (textArray.length) setTimeout(type, newTextDelay + 250);
        });

        // --- INTERSECTION OBSERVER FOR SCROLL ANIMATIONS ---
        const revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');
        const revealOptions = {
            threshold: 0.15,
            rootMargin: "0px 0px -50px 0px"
        };

        const revealOnScroll = new IntersectionObserver(function(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    observer.unobserve(entry.target);
                }
            });
        }, revealOptions);

        revealElements.forEach(el => revealOnScroll.observe(el));

        // --- FAQ ACCORDION LOGIC ---
        const faqBtns = document.querySelectorAll('.faq-btn');
        faqBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const icon = this.querySelector('.icon');
                const content = this.nextElementSibling;
                const isOpen = content.style.maxHeight;

                document.querySelectorAll('.accordion-content').forEach(c => c.style.maxHeight = null);
                document.querySelectorAll('.faq-btn .icon').forEach(i => i.classList.remove('rotate-180'));

                if (!isOpen) {
                    content.style.maxHeight = content.scrollHeight + "px";
                    icon.classList.add('rotate-180');
                }
            });
        });
    </script>
</body>

</html>