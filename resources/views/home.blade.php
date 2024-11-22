<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/tailwind.css')
</head>
<link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
<body>
<div class="bg-blue-400">
  <header class="sticky top-0 z-50">
  <nav class="flex items-center justify-between p-6 lg:px-8 bg-blue-400 bg-opacity-50 rounded-lg" aria-label="Global">
  <div class="flex lg:flex-1">
    <a href="#" class="-m-1.5 p-1.5">
      <span class="sr-only">Your Company</span>
      <img class="h-8 w-auto" src="" alt="">
    </a>
  </div>
  <div class="flex lg:hidden">
    <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
      <span class="sr-only">Open main menu</span>
      <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
      </svg>
    </button>
  </div>
  <div class="hidden lg:flex lg:gap-x-12">
    <a href="{{ $home }}" class="text-base text-[#1e3a8a] font-bold">Home</a>
    <a href="{{ $about }}" class="text-base text-[#1e3a8a] font-bold">About Me</a>
    <a href="{{ $skill }}" class="text-base text-[#1e3a8a] font-bold">Skills</a>
    <a href="{{ $project }}" class="text-base text-[#1e3a8a] font-bold">My Project</a>
    <a href="{{ $contact }}" class="text-base text-[#1e3a8a] font-bold">Contact Me</a>
  </div>
  <div class="hidden lg:flex lg:flex-1 lg:justify-end">
  </div>
</nav>
  </header>

  <section id="home" class="relative isolate mx-auto flex items-center justify-center min-h-screen mt-[-100px]">
    <div class="container mx-auto">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <!-- Bagian Teks -->
            <div class="w-full md:w-1/2 self-center text-center md:text-left ml-20">
                <h1 class="text-[#1e3a8a] font-semibold text-2xl">Heyyow Everyone 👋🏻, I'm</h1>
                <h2 class="text-6xl font-semibold text-white">Franklin Jaya</h2>
                <h3 class="text-3xl text-white">Anime Lover & Gabuter</h3>
                <p class="mt-4 text-blue-700 text-xl">I am a 2nd Generation Student of IMT-AD UC Makassar</p>
                <div class="rounded-full">
                  <a href="{{ $contact }}">
                    <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 mt-4 rounded-full">
                      Contact Me
                    </button>
                  </a>
                </div>
            </div>
            <!-- Bagian Gambar -->
            <div class="w-full md:w-1/2 flex justify-center md:justify-end mt-8 md:mt-0 mr-20 rounded-full">
                <img src="{{ asset('images/ganyuu-2-removebg-preview-removebg-preview.png') }}" alt="Ganyu Image" class="max-w-full h-auto bg-blue-400">
            </div>
        </div>
    </div>
</section>

<!-- Bagian About Me -->
<section id="about" class="bg-blue-400 py-16 flex justify-center">
  <div class="container mx-auto px-4 flex gap-16 items-center">
    <!-- Teks About Me di luar kotak -->
    <h2 class="text-4xl font-semibold text-[#1e3a8a] mb-6 ml-20 whitespace-nowrap">
      About Me
    </h2>
    <!-- Bagian Teks dan Konten About Me -->
    <div class="flex justify-end mr-20">
      <div class="text-center bg-white rounded-lg p-12 w-full md:w-3/4 lg:w-2/3">
        <p class="text-lg text-gray-800 leading-relaxed">
          Hello! My name is Franklin Jaya, a passionate programmer and technology enthusiast currently studying at IMT UC Makassar. 
          I specialize in software development, problem-solving, and building innovative solutions to real-world challenges. I'd love watching anime & playing games.
        </p>
      </div>
    </div>
  </div>
</section>

<section id="skills" class="flex justify-center bg-[#ECF3F4] py-10">
  <div class="container mx-auto px-4 min-h-[50vh]">
    <h2 class="text-center text-4xl font-semibold text-[#1e3a8a] mb-16 mt-10">
      Skills
    </h2>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
      <!-- Coding Skill -->
      <div class="flex flex-col items-center p-6 bg-white rounded-xl shadow-lg transform hover:scale-105 transition-all duration-300">
        <div class="relative w-32 h-32">
          <svg class="w-32 h-32 transform -rotate-90">
            <circle
              cx="64"
              cy="64"
              r="56"
              class="stroke-current text-gray-200"
              stroke-width="8"
              fill="none"
            />
            <circle
              cx="64"
              cy="64"
              r="56"
              class="stroke-current text-blue-500"
              stroke-width="8"
              fill="none"
              stroke-linecap="round"
              style="stroke-dasharray: 351.8583; stroke-dashoffset: 175.92915"
              class="transition-all duration-1000 ease-out"
            />
          </svg>
          <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">
            <span class="text-2xl font-bold text-gray-800">50%</span>
          </div>
        </div>
        <p class="mt-4 text-lg font-semibold text-gray-800">PHP</p>
      </div>

      <div class="flex flex-col items-center p-6 bg-white rounded-xl shadow-lg transform hover:scale-105 transition-all duration-300">
        <div class="relative w-32 h-32">
          <svg class="w-32 h-32 transform -rotate-90">
            <circle
              cx="64"
              cy="64"
              r="56"
              class="stroke-current text-gray-200"
              stroke-width="8"
              fill="none"
            />
            <circle
              cx="64"
              cy="64"
              r="56"
              class="stroke-current text-pink-500"
              stroke-width="8"
              fill="none"
              stroke-linecap="round"
              style="stroke-dasharray: 351.8583; stroke-dashoffset: 175.92915"
              class="transition-all duration-1000 ease-out"
            />
          </svg>
          <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">
            <span class="text-2xl font-bold text-gray-800">50%</span>
          </div>
        </div>
        <p class="mt-4 text-lg font-semibold text-gray-800">Python</p>
      </div>

      <!-- Ngide Skill -->
      <div class="flex flex-col items-center p-6 bg-white rounded-xl shadow-lg transform hover:scale-105 transition-all duration-300">
        <div class="relative w-32 h-32">
          <svg class="w-32 h-32 transform -rotate-90">
            <circle
              cx="64"
              cy="64"
              r="56"
              class="stroke-current text-gray-200"
              stroke-width="8"
              fill="none"
            />
            <circle
              cx="64"
              cy="64"
              r="56"
              class="stroke-current text-yellow-500"
              stroke-width="8"
              fill="none"
              stroke-linecap="round"
              style="stroke-dasharray: 351.8583; stroke-dashoffset: 281.48664"
              class="transition-all duration-1000 ease-out"
            />
          </svg>
          <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">
            <span class="text-2xl font-bold text-gray-800">20%</span>
          </div>
        </div>
        <p class="mt-4 text-lg font-semibold text-gray-800">Design Blender</p>
      </div>

      <!-- Turu Skill -->
      <div class="flex flex-col items-center p-6 bg-white rounded-xl shadow-lg transform hover:scale-105 transition-all duration-300">
        <div class="relative w-32 h-32">
          <svg class="w-32 h-32 transform -rotate-90">
            <circle
              cx="64"
              cy="64"
              r="56"
              class="stroke-current text-gray-200"
              stroke-width="8"
              fill="none"
            />
            <circle
              cx="64"
              cy="64"
              r="56"
              class="stroke-current text-red-500"
              stroke-width="8"
              fill="none"
              stroke-linecap="round"
              style="stroke-dasharray: 351.8583; stroke-dashoffset: 175.92915"
              class="transition-all duration-1000 ease-out"
            />
          </svg>
          <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">
            <span class="text-2xl font-bold text-gray-800">50%</span>
          </div>
        </div>
        <p class="mt-4 text-lg font-semibold text-gray-800">Flutter</p>
      </div>
    </div>
  </div>
</section>

<section id="project" class="bg-[#E2F4F6] py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-semibold text-[#1e3a8a] text-center mb-4">My Projects</h2>
        <!-- Garis dekorasi -->
        <div class="flex justify-center items-center mb-12">
            <div class="h-1 bg-black w-16"></div> <!-- Bagian depan -->
            <div class="h-1 bg-blue-300 w-24 mx-2"></div> <!-- Bagian tengah -->
            <div class="h-1 bg-black w-16"></div> <!-- Bagian belakang -->
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 justify-items-center">
            <!-- Project cards with hover effects -->
            <div class="bg-white rounded-xl overflow-hidden shadow-lg transform hover:scale-105 transition-duration-300">
                <img src="{{ asset('images/Smurf mirror.jpeg') }}" alt="Smart Mirror" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-[#1e3a8a] mb-2">Smart Mirror</h3>
                    <p class="text-gray-600">Mirror can help human life more easily.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl overflow-hidden shadow-lg transform hover:scale-105 transition-duration-300">
                <img src="{{ asset('images/Track.jpeg') }}" alt="Weather Track App" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-[#1e3a8a] mb-2">Flutter Weather Track App</h3>
                    <p class="text-gray-600">Help user know about, when will be rain.</p>
                </div>
            </div>

            <div class="bg-white rounded-xl overflow-hidden shadow-lg transform hover:scale-105 transition-duration-300">
                <img src="{{ asset('images/Ganyuportfolio.jpeg') }}" alt="First Portfolio" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-[#1e3a8a] mb-2">My First Portfolio</h3>
                    <p class="text-gray-600">My first portfolio using Flutter.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="contact" class="bg-[#121927] py-20">
  <div class="container mx-auto px-4 justify-center space-x-40 flex">
    <!-- Informasi Kontak -->
    <div class="flex flex-col space-y-6">
      <h1 class="text-3xl text-white">Franklin Jaya</h1>
      <h1 class="mt-4 text-2xl text-[#A5ABBD] font-semibold">Contact Me</h1>

      <!-- Email -->
      <div class="flex items-center text-white space-x-3">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#A5ABBD]" fill="currentColor" viewBox="0 0 24 24">
          <path d="M20 4H4C2.9 4 2 4.9 2 6v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm-2 4l-6 5-6-5V6l6 5 6-5v2z"/>
        </svg>
        <span>franklinjaya01@student.ciputra.ac.id</span>
      </div>

      <!-- Alamat -->
      <div class="flex items-center text-white space-x-3">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#A5ABBD]" fill="currentColor" viewBox="0 0 24 24">
          <path d="M12 2C8.1 2 5 5.1 5 9c0 5.2 7 13 7 13s7-7.8 7-13c0-3.9-3.1-7-7-7zm0 9.5c-1.4 0-2.5-1.1-2.5-2.5S10.6 6.5 12 6.5s2.5 1.1 2.5 2.5S13.4 11.5 12 11.5z"/>
        </svg>
        <span>Jl. xxxx no. xx</span>
      </div>

      <!-- Telepon -->
      <div class="flex items-center text-white space-x-3">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#A5ABBD]" fill="currentColor" viewBox="0 0 24 24">
          <path d="M6.62 10.79a15.09 15.09 0 006.58 6.58l2.2-2.2a1.003 1.003 0 011.12-.24c1.25.5 2.6.77 4 .77.55 0 1 .45 1 1V19c0 .55-.45 1-1 1C10.28 20 4 13.72 4 6c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.4.27 2.75.77 4 .1.26.04.56-.24 1.12l-2.2 2.2z"/>
        </svg>
        <span>081340291902</span>
      </div>
    </div>
    
    <!-- Kategori -->
    <div class="flex flex-col space-y-6">
      <h1 class="text-2xl text-[#A5ABBD] font-semibold">Category</h1>
      <h1 class="text-white">Programming</h1>
      <h1 class="text-white">Technology</h1>
      <h1 class="text-white">Weebu</h1>
      <h1 class="text-white">Portfolio</h1>
    </div>

    <!-- Quotes -->
    <div class="flex flex-col space-y-6">
      <h1 class="text-2xl text-[#A5ABBD] font-semibold">Quotes</h1>
      <h1 class="text-white">"Every journey has its final day. Don't rush." --Zhong Li</h1>
    </div>
  </div>

  <!-- Garis Tengah -->
  <hr class="border-t border-white w-[75%] mx-auto my-10">

  <div class="container flex mx-auto space-x-3 justify-center">
    <a href="" class="">
      <button class="p-2 text-white rounded-full flex items-center justify-center hover:bg-blue-400">
        <img src="{{ asset('images/yt-removebg-preview.png') }}" alt="Youtube icon" class="w-11 h-10 object-contain">
      </button>
    </a>
    <a href="{{ $linkedin }}" class="">
      <button class="p-2 text-white rounded-full flex items-center justify-center hover:bg-blue-400">
        <img src="{{ asset('images/Lin-removebg-preview.png') }}" alt="Linkedin icon" class="w-11 h-10 object-contain">
      </button>
    </a>
    <a href="{{ $instagram }}" class="">
      <button class="p-2 text-white rounded-full flex items-center justify-center hover:bg-blue-400">
        <img src="{{ asset('images/ig-removebg-preview.png') }}" alt="Instagram icon" class="w-11 h-10 object-contain">
      </button>
    </a>
    <a href="{{ $github }}" class="">
      <button class="p-2 text-white rounded-full flex items-center justify-center hover:bg-blue-400">
        <img src="{{ asset('images/github-removebg-preview.png') }}" alt="GitHub Icon" class="w-11 h-10 object-contain">
      </button>
    </a>

  </div>
  <div class="container flex mx-auto space-x-3 justify-center mt-5">
    <h1 class="text-white">created by Franklin Jaya using Tailwind CSS and Laravel</h1>
  </div>
</section>



</div>
</body>
</html>
