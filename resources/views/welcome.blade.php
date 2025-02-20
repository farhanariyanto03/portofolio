<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&amp;display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body>
    {{-- NAVBAR --}}
    <nav class="bg-black fixed top-0 left-0 w-full z-50 shadow-md">
        <div class="max-w-7xl mx-auto flex items-center justify-between h-16 px-6">
            <h1 class="text-white">Farhanayantoo</h1>
            <div class="space-x-5">
                <a href="#" class="text-white">Home</a>
                <a href="#" class="text-gray-400">Experience</a>
                <a href="#" class="text-gray-400">Contact</a>
            </div>
            <div>
                <a href="#"
                    class="text-white bg-gradient-to-r from-blue-600 to-purple-700 px-4 py-2 rounded-full">
                    Discuss For Project
                </a>
            </div>
        </div>
    </nav>

    {{-- HOME SECTION --}}
    <section class="relative bg-black min-h-screen flex items-center justify-center">
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
        <div class="relative bg-gray-900 p-10 rounded-2xl shadow-2xl max-w-7xl w-full z-10">
            <div class="flex flex-col md:flex-row items-center gap-10">
                <!-- Teks -->
                <div class="md:w-1/2 text-center md:text-left">
                    <h1 class="text-4xl md:text-5xl text-gray-300 font-extrabold mb-4">Fullstack Developer</h1>
                    <div class="border border-blue-600 bg-blue-600 h-1 w-32 rounded-full mb-6"></div>
                    <h4 class="text-2xl md:text-3xl font-bold text-gray-300">Hello,
                        <span class="text-blue-500">I'm</span>
                    </h4>
                    <h2
                        class="text-5xl md:text-6xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-teal-400 mb-6">
                        Farhan Ariyanto
                    </h2>
                    <p class="text-gray-400 leading-relaxed">
                        Saya adalah individu yang merancang, mengembangkan, dan memelihara perangkat lunak untuk
                        memenuhi berbagai kebutuhan pengguna. Saya tidak hanya menulis kode, tetapi juga memecahkan
                        masalah, mengoptimalkan kinerja aplikasi, serta berkolaborasi dengan tim untuk menciptakan
                        solusi inovatif.
                    </p>
                    <div class="flex space-x-4 mt-6">
                        <button
                            class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium shadow-lg transition duration-300">
                            Discuss for Projects
                        </button>
                        <button
                            class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-medium shadow-lg transition duration-300">
                            View Portfolios
                        </button>
                    </div>
                    <div class="flex space-x-4 mt-6">
                        <button
                            class="text-white px-6 py-3 rounded-lg border border-gray-600 hover:border-blue-600 hover:text-blue-400 transition duration-300">
                            <i class="ri-instagram-line"></i>
                        </button>
                        <button
                            class="text-white px-6 py-3 rounded-lg border border-gray-600 hover:border-blue-600 hover:text-blue-400 transition duration-300">
                            <i class="ri-github-fill"></i>
                        </button>
                        <button
                            class="text-white px-6 py-3 rounded-lg border border-gray-600 hover:border-blue-600 hover:text-blue-400 transition duration-300">
                            <i class="ri-linkedin-fill"></i>
                        </button>
                    </div>
                </div>

                <!-- Gambar -->
                <div class="md:w-1/2 flex justify-center">
                    <div class="relative">
                        <img alt="Portrait of a developer"
                            class="rounded-2xl shadow-lg transform hover:scale-105 transition duration-300"
                            height="300" width="300"
                            src="https://storage.googleapis.com/a1aa/image/auxEusAbPV0O9eEIXjMtDzOqaPaGCkRRZGDtC_Xs46s.jpg" />
                    </div>
                </div>
            </div>
        </div>


    </section>

    {{-- SECTION EXPERIENCE --}}
    <section class="relative min-h-screen flex flex-col items-center justify-center bg-black px-6 py-16">
        <!-- Efek Blur & Gradient Background -->
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900 via-teal-900 to-gray-900 opacity-30 blur-3xl"></div>

        <!-- Judul Section -->
        <div class="relative max-w-5xl mx-auto text-center z-10">
            <h1
                class="text-6xl md:text-6xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-teal-300">
                Experience
            </h1>
        </div>

        <!-- Timeline Pengalaman Kerja -->
        <div class="relative max-w-4xl w-full mt-16 px-6">
            <div class="relative border-l-4 border-teal-500 pl-8 space-y-10">
                <!-- Timeline 1 -->
                <div class="relative group">
                    <div class="absolute -left-11.5 w-6 h-6 bg-teal-500 rounded-full border-4 border-black"></div>
                    <div
                        class="bg-gray-800 p-6 rounded-lg shadow-md transform transition-all duration-300 group-hover:scale-105">
                        <h3 class="text-xl font-semibold text-blue-400">Frontend Developer</h3>
                        <p class="text-gray-400">PT. Tech Solution (2022 - Sekarang)</p>
                        <p class="mt-2 text-gray-300 text-sm">
                            Membangun **UI/UX modern** menggunakan <span class="text-teal-400 font-semibold">Tailwind
                                CSS & Vue.js</span> untuk aplikasi web berbasis SaaS.
                        </p>
                    </div>
                </div>

                <!-- Timeline 2 -->
                <div class="relative group">
                    <div class="absolute -left-11.5 w-6 h-6 bg-teal-500 rounded-full border-4 border-black"></div>
                    <div
                        class="bg-gray-800 p-6 rounded-lg shadow-md transform transition-all duration-300 group-hover:scale-105">
                        <h3 class="text-xl font-semibold text-blue-400">Backend Developer</h3>
                        <p class="text-gray-400">Freelance (2020 - 2022)</p>
                        <p class="mt-2 text-gray-300 text-sm">
                            Mengembangkan **REST API** menggunakan <span class="text-teal-400 font-semibold">Laravel &
                                MySQL</span> untuk startup teknologi dan e-commerce.
                        </p>
                    </div>
                </div>

                <!-- Timeline 3 -->
                <div class="relative group">
                    <div class="absolute -left-11.5 w-6 h-6 bg-teal-500 rounded-full border-4 border-black"></div>
                    <div
                        class="bg-gray-800 p-6 rounded-lg shadow-md transform transition-all duration-300 group-hover:scale-105">
                        <h3 class="text-xl font-semibold text-blue-400">Web Developer Intern</h3>
                        <p class="text-gray-400">XYZ Company (2019 - 2020)</p>
                        <p class="mt-2 text-gray-300 text-sm">
                            Berpartisipasi dalam pengembangan website perusahaan menggunakan <span
                                class="text-teal-400 font-semibold">HTML, CSS, JavaScript</span>.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tech Stack Section -->
        <div class="relative max-w-4xl w-full mt-24 px-6">
            <h2 class="text-3xl font-bold text-white text-center mb-8">Tech Stack</h2>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <!-- Tech Item 1 -->
                <div class="p-6 bg-gray-800 rounded-lg shadow-md transform transition-all duration-300 hover:scale-110">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg"
                        alt="HTML5" class="w-16 h-16 mx-auto">
                    <p class="mt-2 text-white font-semibold">HTML5</p>
                </div>

                <!-- Tech Item 2 -->
                <div
                    class="p-6 bg-gray-800 rounded-lg shadow-md transform transition-all duration-300 hover:scale-110">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg"
                        alt="CSS3" class="w-16 h-16 mx-auto">
                    <p class="mt-2 text-white font-semibold">CSS3</p>
                </div>

                <!-- Tech Item 3 -->
                <div
                    class="p-6 bg-gray-800 rounded-lg shadow-md transform transition-all duration-300 hover:scale-110">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg"
                        alt="JavaScript" class="w-16 h-16 mx-auto">
                    <p class="mt-2 text-white font-semibold">JavaScript</p>
                </div>

                <!-- Tech Item 4 -->
                <div
                    class="p-6 bg-gray-800 rounded-lg shadow-md transform transition-all duration-300 hover:scale-110">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-plain.svg"
                        alt="Tailwind CSS" class="w-16 h-16 mx-auto">
                    <p class="mt-2 text-white font-semibold">Tailwind CSS</p>
                </div>

                <!-- Tech Item 5 -->
                <div
                    class="p-6 bg-gray-800 rounded-lg shadow-md transform transition-all duration-300 hover:scale-110">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg"
                        alt="Vue.js" class="w-16 h-16 mx-auto">
                    <p class="mt-2 text-white font-semibold">Vue.js</p>
                </div>

                <!-- Tech Item 6 -->
                <div
                    class="p-6 bg-gray-800 rounded-lg shadow-md transform transition-all duration-300 hover:scale-110">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg"
                        alt="Laravel" class="w-16 h-16 mx-auto">
                    <p class="mt-2 text-white font-semibold">Laravel</p>
                </div>

                <!-- Tech Item 7 -->
                <div
                    class="p-6 bg-gray-800 rounded-lg shadow-md transform transition-all duration-300 hover:scale-110">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg"
                        alt="MySQL" class="w-16 h-16 mx-auto">
                    <p class="mt-2 text-white font-semibold">MySQL</p>
                </div>

                <!-- Tech Item 8 -->
                <div
                    class="p-6 bg-gray-800 rounded-lg shadow-md transform transition-all duration-300 hover:scale-110">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg" alt="Git"
                        class="w-16 h-16 mx-auto">
                    <p class="mt-2 text-white font-semibold">Git</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
