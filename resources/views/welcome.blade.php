<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&amp;display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    {{-- NAVBAR --}}
    <nav class="bg-black fixed top-0 left-0 w-full z-50 shadow-md">
        <div class="max-w-7xl mx-auto flex items-center justify-between h-20 px-6">
            <!-- Logo -->
            <h1 class="text-white text-lg font-bold tracking-wider">Farhanayantoo</h1>

            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8">
                <a href="#"
                    class="nav-link relative text-white text-sm font-semibold transition-all duration-300
                                  before:content-[''] before:absolute before:-bottom-2 before:left-0 before:w-0
                                  before:h-[2px] before:bg-blue-500 before:transition-all before:duration-300
                                  hover:before:w-full hover:text-blue-400">
                    Home
                </a>
                <a href="#"
                    class="nav-link relative text-white text-sm font-semibold transition-all duration-300
                                  before:content-[''] before:absolute before:-bottom-2 before:left-0 before:w-0
                                  before:h-[2px] before:bg-blue-500 before:transition-all before:duration-300
                                  hover:before:w-full hover:text-blue-400">
                    Experience
                </a>
                <a href="#"
                    class="nav-link relative text-white text-sm font-semibold transition-all duration-300
                                  before:content-[''] before:absolute before:-bottom-2 before:left-0 before:w-0
                                  before:h-[2px] before:bg-blue-500 before:transition-all before:duration-300
                                  hover:before:w-full hover:text-blue-400">
                    Portfolio
                </a>
            </div>


            <!-- CTA Button -->
            <div class="hidden md:block">
                <a href="#" class="cta-button">Discuss For Project</a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="menu-btn" class="md:hidden text-white focus:outline-none relative z-50">
                <svg id="hamburger-icon" class="w-9 h-9 transition-all duration-300" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
                <svg id="close-icon" class="w-9 h-9 hidden transition-all duration-300"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu"
            class="fixed top-0 left-0 w-full h-screen bg-black bg-opacity-80 backdrop-blur-md flex flex-col items-center justify-center space-y-6 transform translate-y-full transition-transform duration-500 ease-in-out z-40">
            <a href="#" class="mobile-link">Home</a>
            <a href="#" class="mobile-link">Experience</a>
            <a href="#" class="mobile-link">Portfolio</a>
            <a href="#" class="cta-button">Discuss For Project</a>
        </div>
    </nav>

    {{-- HOME SECTION --}}
    <section class="relative bg-black min-h-screen flex items-center justify-center overflow-hidden">
        <!-- SVG Background -->
        <div class="absolute inset-0 flex justify-center items-center overflow-hidden">
            <svg width="880" height="293" viewBox="0 0 880 293" fill="none" xmlns="http://www.w3.org/2000/svg"
                class="absolute top-0 top-2/3 transform -translate-x-1/2 opacity-70">
                <path
                    d="M0.805929 2.78512C0.805929 2.78512 136.279 93.7469 247.217 118.296C381.692 148.055 439.576 76.4933 575.08 101.246C704.275 124.846 871.031 225.251 871.031 225.251M3.07121 24.6061C3.07121 24.6061 138.544 115.568 249.482 140.118C383.957 169.876 441.841 98.3144 577.346 123.067C706.54 146.667 873.297 247.072 873.297 247.072"
                    stroke="url(#paint0_linear_6_337)" stroke-opacity="0.12" stroke-width="5" />
                <defs>
                    <linearGradient id="paint0_linear_6_337" x1="3.94211" y1="103.949" x2="887.548" y2="191.726"
                        gradientUnits="userSpaceOnUse">
                        <stop offset="0.394097" stop-color="#0D6597" />
                        <stop offset="0.670139" stop-color="#196E81" />
                    </linearGradient>
                </defs>
            </svg>
        </div>

        <!-- Kotak Konten -->
        <div class="relative bg-gray-900 p-10 rounded-2xl shadow-2xl max-w-7xl w-full z-10 opacity-0 scale-90 home-box">
            <div class="flex flex-col md:flex-row items-center gap-10">
                <!-- Teks -->
                <div class="md:w-1/2 text-center md:text-left opacity-0 translate-y-10 home-text">
                    <h1 class="text-4xl md:text-5xl text-gray-300 font-extrabold mb-4">Fullstack Developer</h1>
                    <div class="border border-blue-600 bg-blue-600 h-1 w-32 rounded-full mb-6"></div>
                    <h4 class="text-2xl md:text-3xl font-bold text-gray-300">Hello, <span
                            class="text-blue-500">I'm</span></h4>
                    <h2
                        class="text-5xl md:text-6xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-teal-400 mb-6">
                        Farhan Ariyanto</h2>
                    <p class="text-gray-400 leading-relaxed">Saya adalah individu yang merancang, mengembangkan, dan
                        memelihara perangkat lunak untuk
                        memenuhi berbagai kebutuhan pengguna. Saya tidak hanya menulis kode, tetapi juga memecahkan
                        masalah, mengoptimalkan kinerja aplikasi,
                        serta berkolaborasi dengan tim untuk menciptakan solusi inovatif.</p>
                    <div class="flex space-x-4 mt-6">
                        <button
                            class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium shadow-lg transition duration-300 scale-btn">Discuss
                            for Projects</button>
                        <button
                            class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium shadow-lg transition duration-300 scale-btn">View
                            Portfolios</button>
                    </div>
                    <div class="flex space-x-4 mt-6">
                        <button
                            class="text-white px-6 py-3 rounded-lg border border-gray-600 hover:border-blue-600 hover:text-blue-400 transition duration-300 scale-btn"><i
                                class="ri-instagram-line"></i></button>
                        <button
                            class="text-white px-6 py-3 rounded-lg border border-gray-600 hover:border-blue-600 hover:text-blue-400 transition duration-300 scale-btn"><i
                                class="ri-github-fill"></i></button>
                        <button
                            class="text-white px-6 py-3 rounded-lg border border-gray-600 hover:border-blue-600 hover:text-blue-400 transition duration-300 scale-btn"><i
                                class="ri-linkedin-fill"></i></button>
                    </div>
                </div>

                <!-- Gambar -->
                <div class="md:w-1/2 flex justify-center opacity-0 translate-y-10 home-image">
                    <div class="relative">
                        <img alt="Portrait of a developer"
                            class="rounded-2xl shadow-lg transform transition duration-300 hover:scale-105"
                            height="300" width="300"
                            src="https://storage.googleapis.com/a1aa/image/auxEusAbPV0O9eEIXjMtDzOqaPaGCkRRZGDtC_Xs46s.jpg" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- EXPERIENCE SECTION --}}
    <section class="relative min-h-screen flex flex-col items-center justify-center bg-black px-6 py-16">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900 via-teal-900 to-gray-900 opacity-50 blur-3xl">
        </div>
        <!-- SVG Background -->
        <svg width="880" height="293" viewBox="0 0 880 293" fill="none" xmlns="http://www.w3.org/2000/svg"
            class="absolute top-2/3 transform -translate-x-1/2 opacity-70">
            <path
                d="M0.805929 2.78512C0.805929 2.78512 136.279 93.7469 247.217 118.296C381.692 148.055 439.576 76.4933 575.08 101.246C704.275 124.846 871.031 225.251 871.031 225.251M3.07121 24.6061C3.07121 24.6061 138.544 115.568 249.482 140.118C383.957 169.876 441.841 98.3144 577.346 123.067C706.54 146.667 873.297 247.072 873.297 247.072"
                stroke="url(#paint0_linear_6_337)" stroke-opacity="0.12" stroke-width="5" />
            <defs>
                <linearGradient id="paint0_linear_6_337" x1="3.94211" y1="103.949" x2="887.548"
                    y2="191.726" gradientUnits="userSpaceOnUse">
                    <stop offset="0.394097" stop-color="#0D6597" />
                    <stop offset="0.670139" stop-color="#196E81" />
                </linearGradient>
            </defs>
        </svg>
        <svg width="880" height="293" viewBox="0 0 880 293" fill="none" xmlns="http://www.w3.org/2000/svg"
            class="absolute right-2/6 top-2/3 transform -translate-x-1/2 opacity-70">
            <path
                d="M0.805929 2.78512C0.805929 2.78512 136.279 93.7469 247.217 118.296C381.692 148.055 439.576 76.4933 575.08 101.246C704.275 124.846 871.031 225.251 871.031 225.251M3.07121 24.6061C3.07121 24.6061 138.544 115.568 249.482 140.118C383.957 169.876 441.841 98.3144 577.346 123.067C706.54 146.667 873.297 247.072 873.297 247.072"
                stroke="url(#paint0_linear_6_337)" stroke-opacity="0.12" stroke-width="5" />
            <defs>
                <linearGradient id="paint0_linear_6_337" x1="3.94211" y1="103.949" x2="887.548"
                    y2="191.726" gradientUnits="userSpaceOnUse">
                    <stop offset="0.394097" stop-color="#0D6597" />
                    <stop offset="0.670139" stop-color="#196E81" />
                </linearGradient>
            </defs>
        </svg>
        </div>

        <div class="relative max-w-5xl mx-auto text-center z-10">
            <h1
                class="text-6xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-teal-300 animate-fade-in">
                Experience
            </h1>
        </div>

        <div class="relative max-w-4xl w-full mt-12">
            <div class="flex justify-center mb-6 space-x-4">
                <button
                    class="tab-button px-6 py-3 text-white bg-teal-600 rounded-lg transition duration-300 hover:bg-gray-600"
                    data-tab="experience">
                    Experience
                </button>
                <button
                    class="tab-button px-6 py-3 text-white bg-gray-700 rounded-lg transition duration-300 hover:bg-gray-600"
                    data-tab="techstack">
                    Tech Stack
                </button>
            </div>

            <!-- Tab Content Experience -->
            <div id="experience" class="tab-content p-8 text-white">
                <div class="relative max-w-4xl w-full px-6">
                    <div class="relative border-l-4 border-teal-500 pl-8 space-y-10">
                        <!-- Experience Item -->
                        <div class="relative group">
                            <div
                                class="absolute -left-11.5 w-6 h-6 bg-teal-500 rounded-full border-4 border-white group-hover:animate-ping">
                            </div>
                            <div
                                class="bg-gray-800 p-6 rounded-lg shadow-lg transition-all duration-300 transform group-hover:scale-105 group-hover:shadow-teal-500/50 group-hover:bg-gray-700">
                                <h3 class="text-xl font-semibold text-blue-400 group-hover:text-teal-400">Web Developer
                                </h3>
                                <p class="text-gray-400 group-hover:text-gray-200">JTI Inovation (2024 - Now)</p>
                                <p class="mt-2 text-gray-300 text-sm group-hover:text-gray-100">
                                    Membangun website E-Learning untuk sebuah kampus sebagai media pembelajaran
                                </p>
                            </div>
                        </div>

                        <div class="relative group">
                            <div
                                class="absolute -left-11.5 w-6 h-6 bg-teal-500 rounded-full border-4 border-white group-hover:animate-ping">
                            </div>
                            <div
                                class="bg-gray-800 p-6 rounded-lg shadow-lg transition-all duration-300 transform group-hover:scale-105 group-hover:shadow-teal-500/50 group-hover:bg-gray-700">
                                <h3 class="text-xl font-semibold text-blue-400 group-hover:text-teal-400">Fullstack
                                    Developer</h3>
                                <p class="text-gray-400 group-hover:text-gray-200">Upylon/Proform (2024 - Now)</p>
                                <p class="mt-2 text-gray-300 text-sm group-hover:text-gray-100">
                                    Mengembangkan website dengan beberapa klient dengan tim yang berpengalaman
                                </p>
                            </div>
                        </div>

                        <div class="relative group">
                            <div
                                class="absolute -left-11.5 w-6 h-6 bg-teal-500 rounded-full border-4 border-white group-hover:animate-ping">
                            </div>
                            <div
                                class="bg-gray-800 p-6 rounded-lg shadow-lg transition-all duration-300 transform group-hover:scale-105 group-hover:shadow-teal-500/50 group-hover:bg-gray-700">
                                <h3 class="text-xl font-semibold text-blue-400 group-hover:text-teal-400">Web Developer
                                    Intern</h3>
                                <p class="text-gray-400 group-hover:text-gray-200">CV. Hummasoft Technology (2021)</p>
                                <p class="mt-2 text-gray-300 text-sm group-hover:text-gray-100">
                                    Membangun website untuk sebuah sekolah yang menyediakan sistem Donasi Siswa(DOSIS)
                                    untuk sedang terkena bencana
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tab Content Tech Stack -->
            <div id="techstack" class="tab-content hidden p-8 text-white">
                <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 text-center mt-6">
                    <div class="tech-card">
                        <i class="devicon-html5-plain-wordmark colored text-6xl md:text-7xl lg:text-8xl"></i>
                        <p class="mt-2 text-sm md:text-base lg:text-lg">HTML5</p>
                    </div>
                    <div class="tech-card">
                        <i class="devicon-css3-plain-wordmark colored text-6xl md:text-7xl lg:text-8xl"></i>
                        <p class="mt-2 text-sm md:text-base lg:text-lg">CSS3</p>
                    </div>
                    <div class="tech-card">
                        <i class="devicon-javascript-plain colored text-6xl md:text-7xl lg:text-8xl"></i>
                        <p class="mt-2 text-sm md:text-base lg:text-lg">JavaScript</p>
                    </div>
                    <div class="tech-card">
                        <img class="w-20 md:w-24 lg:w-28 mx-auto"
                            src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/react/react-original.svg" />
                        <p class="mt-2 text-sm md:text-base lg:text-lg">React</p>
                    </div>
                    <div class="tech-card">
                        <i class="devicon-tailwindcss-original colored text-6xl md:text-7xl lg:text-8xl"></i>
                        <p class="mt-2 text-sm md:text-base lg:text-lg">Tailwind CSS</p>
                    </div>
                    <div class="tech-card">
                        <i class="devicon-laravel-original colored text-6xl md:text-7xl lg:text-8xl"></i>
                        <p class="mt-2 text-sm md:text-base lg:text-lg">Laravel</p>
                    </div>
                    <div class="tech-card">
                        <i class="devicon-nodejs-plain-wordmark colored text-6xl md:text-7xl lg:text-8xl"></i>
                        <p class="mt-2 text-sm md:text-base lg:text-lg">NodeJS</p>
                    </div>
                    <div class="tech-card">
                        <i class="devicon-express-original-wordmark text-6xl md:text-7xl lg:text-8xl"></i>
                        <p class="mt-2 text-sm md:text-base lg:text-lg">Express</p>
                    </div>
                    <div class="tech-card">
                        <img class="w-20 md:w-24 lg:w-28 mx-auto"
                            src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/python/python-original.svg" />
                        <p class="mt-2 text-sm md:text-base lg:text-lg">Python</p>
                    </div>
                    <div class="tech-card">
                        <img class="w-20 md:w-24 lg:w-28 mx-auto"
                            src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mysql/mysql-original-wordmark.svg" />
                        <p class="mt-2 text-sm md:text-base lg:text-lg">MySQL</p>
                    </div>
                    <div class="tech-card">
                        <img class="w-20 md:w-24 lg:w-28 mx-auto"
                            src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/postgresql/postgresql-original-wordmark.svg" />
                        <p class="mt-2 text-sm md:text-base lg:text-lg">PostgreSQL</p>
                    </div>
                    <div class="tech-card">
                        <i class="devicon-prisma-original text-6xl md:text-7xl lg:text-8xl"></i>
                        <p class="mt-2 text-sm md:text-base lg:text-lg">Prisma</p>
                    </div>
                    <div class="tech-card">
                        <img class="w-20 md:w-24 lg:w-28 mx-auto"
                            src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/github/github-original-wordmark.svg" />
                        <p class="mt-2 text-sm md:text-base lg:text-lg">Git</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- PENGHARGAAN SECTION --}}
    <section class="relative min-h-screen flex flex-col items-center justify-center bg-black px-6 py-16">
        <div class="relative max-w-6xl mx-auto text-center z-10">
            <h1
                class="mb-12 text-5xl md:text-6xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-teal-300 animate-fade-in">
                Penghargaan & Sertifikat
            </h1>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach ([['image' => 'Juara Hackathon UM.jpg', 'title' => '1st Winner Governance Category - UM SDGs Hackathon National Competition 2024'], ['image' => 'playIT.jpg', 'title' => '3rd Winner Hackthon Software Development Category - National Competition Play IT'], ['image' => 'kentir.png', 'title' => 'TIF EXHITION 2024/2025'], ['image' => 'simko.png', 'title' => '1st Application - TIF EXHITION 2022/2023'], ['image' => 'bnsp.png', 'title' => 'Junior Web Developer - BNSP 2024'], ['image' => 'Juniaor Web Developer.jpg', 'title' => 'Junior Web Developer - VSGA 2024'], ['image' => 'DASAR AI DICODING.jpg', 'title' => 'Dasar AI - DICODING 2024'], ['image' => 'DATA SCIEND DICODING.jpg', 'title' => 'Data Science - DICODING 2024'], ['image' => 'MAPRO DICODING.jpg', 'title' => 'Manajemen Proyek - DICODING 2024'], ['image' => 'SQL DICODING.jpg', 'title' => 'SQL - DICODING 2024']] as $sertifikat)
                    <div
                        class="group relative bg-gray-900/80 border border-gray-700 p-6 rounded-xl shadow-lg transition-all hover:scale-105 hover:shadow-2xl">
                        <div class="overflow-hidden rounded-lg">
                            <img src="{{ asset('image/' . $sertifikat['image']) }}" alt="{{ $sertifikat['title'] }}"
                                class="w-full h-60 object-cover rounded-lg transition-transform duration-300 group-hover:scale-110">
                        </div>
                        <h2
                            class="mt-4 text-lg font-semibold text-white text-center group-hover:text-teal-300 transition-colors duration-300">
                            {{ $sertifikat['title'] }}
                        </h2>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-black opacity-0 group-hover:opacity-90 transition-opacity duration-500">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- PROJECT SECTION --}}
    <section class="relative min-h-screen flex flex-col items-center bg-black justify-center px-6 py-16">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900 via-teal-900 to-gray-900 opacity-50 blur-3xl">
        </div>

        <div class="relative max-w-5xl mx-auto text-center z-10">
            <h1 id="title"
                class="text-7xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-teal-300">
                Portfolio
            </h1>
        </div>

        <div class="grid md:grid-cols-3 gap-12 mt-12">
            <div
                class="relative group bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-2xl shadow-lg overflow-hidden w-96 h-[30rem] transition duration-700 hover:shadow-2xl hover:shadow-cyan-500/50">
                <img src="project1.jpg" alt="Project 1"
                    class="w-full h-64 object-cover rounded-lg group-hover:opacity-30 transition duration-700">
                <div
                    class="absolute inset-0 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition duration-700 bg-gradient-to-b from-blue-700 via-cyan-600 to-teal-700 bg-opacity-90 p-8">
                    <h2 class="text-3xl font-bold text-white">Project 1</h2>
                    <p class="text-gray-300 text-lg text-center">Deskripsi tentang project pertama yang muncul saat
                        hover.</p>
                </div>
                <div class="mt-6 text-center">
                    <h2 class="text-2xl font-semibold text-white">Project 1</h2>
                    <p class="text-gray-400 text-lg">Tools: HTML, CSS, JavaScript</p>
                </div>
            </div>

            <div
                class="relative group bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-2xl shadow-lg overflow-hidden w-96 h-[30rem] transition duration-700 hover:shadow-2xl hover:shadow-cyan-500/50">
                <img src="project2.jpg" alt="Project 2"
                    class="w-full h-64 object-cover rounded-lg group-hover:opacity-30 transition duration-700">
                <div
                    class="absolute inset-0 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition duration-700 bg-gradient-to-b from-blue-700 via-cyan-600 to-teal-700 bg-opacity-90 p-8">
                    <h2 class="text-3xl font-bold text-white">Project 2</h2>
                    <p class="text-gray-300 text-lg text-center">Deskripsi tentang project kedua yang muncul saat
                        hover.</p>
                </div>
                <div class="mt-6 text-center">
                    <h2 class="text-2xl font-semibold text-white">Project 2</h2>
                    <p class="text-gray-400 text-lg">Tools: Laravel, Tailwind CSS</p>
                </div>
            </div>

            <div
                class="relative group bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-2xl shadow-lg overflow-hidden w-96 h-[30rem] transition duration-700 hover:shadow-2xl hover:shadow-cyan-500/50">
                <img src="project3.jpg" alt="Project 3"
                    class="w-full h-64 object-cover rounded-lg group-hover:opacity-30 transition duration-700">
                <div
                    class="absolute inset-0 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition duration-700 bg-gradient-to-b from-blue-700 via-cyan-600 to-teal-700 bg-opacity-90 p-8">
                    <h2 class="text-3xl font-bold text-white">Project 3</h2>
                    <p class="text-gray-300 text-lg text-center">Deskripsi tentang project ketiga yang muncul saat
                        hover.</p>
                </div>
                <div class="mt-6 text-center">
                    <h2 class="text-2xl font-semibold text-white">Project 3</h2>
                    <p class="text-gray-400 text-lg">Tools: Vue.js, Firebase</p>
                </div>
            </div>
        </div>
    </section>
    {{-- PROJECT SECTION --}}

    {{-- BLOG SECTION --}}
    <section class="relative min-h-screen flex flex-col items-center bg-black justify-center px-6 py-16">
        </div>
        <div class="relative max-w-5xl mx-auto text-center z-10">
            <h1 id="title"
                class="text-6xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-teal-300">
                Portofolio
            </h1>
        </div>

        <div class="grid md:grid-cols-3 gap-8 mt-8">
            <!-- Project 1 -->
            <div class="relative group bg-gray-800 p-8 rounded-xl shadow-2xl overflow-hidden w-96 h-96">
                <img src="project1.jpg" alt="Project 1"
                    class="w-full h-56 object-cover rounded-lg group-hover:opacity-30 transition duration-700">
                <div
                    class="absolute inset-0 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition duration-700 bg-gradient-to-b from-indigo-800 via-purple-700 to-indigo-900 bg-opacity-80 p-6">
                    <h2 class="text-2xl font-bold text-white">Project 1</h2>
                    <p class="text-gray-300 text-base">Deskripsi tentang project pertama yang muncul saat hover.</p>
                </div>
                <div class="mt-4 text-center">
                    <h2 class="text-2xl font-bold text-white">Project 1</h2>
                    <p class="text-gray-400">Tools: HTML, CSS, JavaScript</p>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="relative group bg-gray-800 p-8 rounded-xl shadow-2xl overflow-hidden w-96 h-96">
                <img src="project2.jpg" alt="Project 2"
                    class="w-full h-56 object-cover rounded-lg group-hover:opacity-30 transition duration-700">
                <div
                    class="absolute inset-0 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition duration-700 bg-gradient-to-b from-indigo-800 via-purple-700 to-indigo-900 bg-opacity-80 p-6">
                    <h2 class="text-2xl font-bold text-white">Project 2</h2>
                    <p class="text-gray-300 text-base">Deskripsi tentang project kedua yang muncul saat hover.</p>
                </div>
                <div class="mt-4 text-center">
                    <h2 class="text-2xl font-bold text-white">Project 2</h2>
                    <p class="text-gray-400">Tools: Laravel, Tailwind CSS</p>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="relative group bg-gray-800 p-8 rounded-xl shadow-2xl overflow-hidden w-96 h-96">
                <img src="project3.jpg" alt="Project 3"
                    class="w-full h-56 object-cover rounded-lg group-hover:opacity-30 transition duration-700">
                <div
                    class="absolute inset-0 flex flex-col justify-center items-center opacity-0 group-hover:opacity-100 transition duration-700 bg-gradient-to-b from-indigo-800 via-purple-700 to-indigo-900 bg-opacity-80 p-6">
                    <h2 class="text-2xl font-bold text-white">Project 3</h2>
                    <p class="text-gray-300 text-base">Deskripsi tentang project ketiga yang muncul saat hover.</p>
                </div>
                <div class="mt-4 text-center">
                    <h2 class="text-2xl font-bold text-white">Project 3</h2>
                    <p class="text-gray-400">Tools: Vue.js, Firebase</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
