<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS -->
    <link href="src/output.css" rel="stylesheet" />
    <!-- Font -->
    <title>Urbelco</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="flex justify-between items-center w-full fixed z-50 bg-primary p-6">
      <!-- Brand -->
      <a href="index.html"><img class="h-10" src="src/img/logo.png" alt="Logo Urbelco" /></a>
      <!-- Hamburger Menu Button -->
      <div class="lg:hidden">
        <button class="navbar-burger flex items-center text-light">
          <svg class="block w-6 h-6 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
          </svg>
        </button>
      </div>
      <!-- Nav Link -->
      <ul class="hidden lg:flex lg:items-center lg:w-auto absolute top-1/2 left-1/2 lg:mx-auto transform -translate-x-1/2 -translate-y-1/2">
        <!-- Home -->
        <li>
          <a href="#login" class="text-sm text-light font-medium mx-6">Home</a>
        </li>
        <!-- About -->
        <li>
          <a href="#about" class="text-sm text-light font-medium mx-6">About</a>
        </li>
        <!-- Workspace -->
        <li>
          <a href="#workspace" class="text-sm text-light font-medium mx-6">Workspace</a>
        </li>
        <!-- Research -->
        <li>
          <a href="#research" class="text-sm text-light font-medium mx-6">Research</a>
        </li>
        <!-- Environment -->
        <li>
          <a href="#environment" class="text-sm text-light font-medium mx-6">Environment</a>
        </li>
        <!-- Class -->
        <li>
          <a href="#class" class="text-sm text-light font-medium mx-6">Class</a>
        </li>
        <!-- Contact -->
        <li>
          <a href="#contact" class="text-sm text-light font-medium mx-6">Contact</a>
        </li>
      </ul>
      <!-- Search Bar -->
      <div class="hidden lg:block">
        <input type="text" name="search" id="search" class="w-full text-sm text-light bg-[#17384c] border-2 border-light/50 focus:border-light/100 focus:outline-none rounded-full px-4 py-3" placeholder="Cari disini" autocomplete="off" />
      </div>
    </nav>
    <!-- Navbar Mobile -->
    <div class="navbar-menu hidden relative z-50">
      <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
      <nav class="flex flex-col max-w-sm w-5/6 overflow-y-auto fixed top-0 left-0 bottom-0 bg-light border-r p-6">
        <!-- Close Navbar Mobile Button -->
        <div class="flex justify-end items-center mb-8">
          <button class="navbar-close">
            <svg class="cursor-pointer w-6 h-6 text-gray-400 hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </button>
        </div>
        <!-- Nav Links Mobile -->
        <ul>
          <!-- Home -->
          <li class="mb-1">
            <a href="#login" class="block text-sm text-black font-medium hover:bg-blue-50 rounded-md px-4 py-3">Home</a>
          </li>
          <!-- About -->
          <li class="mb-1">
            <a href="#about" class="block text-sm text-black font-medium hover:bg-blue-50 rounded-md px-4 py-3">About</a>
          </li>
          <!-- Workspace -->
          <li class="mb-1">
            <a href="#workspace" class="block text-sm text-black font-medium hover:bg-blue-50 rounded-md px-4 py-3">Workspace</a>
          </li>
          <!-- Research -->
          <li class="mb-1">
            <a href="#research" class="block text-sm text-black font-medium hover:bg-blue-50 rounded-md px-4 py-3">Research</a>
          </li>
          <!-- Environment -->
          <li class="mb-1">
            <a href="#environment" class="block text-sm text-black font-medium hover:bg-blue-50 rounded-md px-4 py-3">Environment</a>
          </li>
          <!-- Class -->
          <li class="mb-1">
            <a href="#class" class="block text-sm text-black font-medium hover:bg-blue-50 rounded-md px-4 py-3">Class</a>
          </li>
          <!-- Contact -->
          <li class="mb-1">
            <a href="#contact" class="block text-sm text-black font-medium hover:bg-blue-50 rounded-md px-4 py-3">Contact</a>
          </li>
        </ul>
        <!-- Search Bar -->
        <div class="block lg:hidden mt-auto mb-8">
          <input type="text" name="" id="" class="w-full text-sm text-black bg-slate-100 focus:outline-primary rounded-full px-4 py-3" placeholder="Cari disini" autocomplete="off" />
        </div>
      </nav>
    </div>
    <!-- Home Section -->
    <section id="home" class="flex justify-center items-center min-h-screen bg-cover object-cover pt-36 lg:pt-48 pb-16 lg:pb-36" style="background-image: url('src/img/hero-bg.png')">
      <div class="container">
        <div class="flex justify-center items-center">
          <div class="text-center m-auto">
            <img class="animate fadeDownLogo h-44 lg:h-[280px]" src="src/img/hero-logo.png" alt="Logo Urbelco" />
            <a
              href="#login"
              class="animate fadeDownBtn inline-block text-sm text-light hover:text-black font-medium bg-slate-500/25 hover:bg-light border-2 border-light/30 backdrop-blur-[10px] rounded-lg mt-6 px-12 py-4 transition-colors duration-300"
            >
              Join Us
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Login Section -->
    <section id="login" class="flex w-full min-h-screen bg-cover pt-28 pb-16 lg:py-36" style="background-image: url('src/img/login-bg.png')">
      <div class="container m-auto">
        <!-- Logo Urbelco -->
        <img class="block h-14 lg:h-20 mx-auto mb-10 lg:mb-14" src="src/img/urbelco.png" alt="Logo Urbelco" />
        <!-- Form Login -->
        <div class="max-w-lg bg-light rounded-xl mx-auto px-6 py-12">
          <h2 class="text-2xl text-center uppercase font-bold mb-8">Login</h2>
          <form action="" method="post">
            <!-- Email -->
            <div class="mb-6">
              <label for="login_email" class="block text-sm mb-2">Email</label>
              <input type="email" name="email" id="login_email" class="block w-full text-sm text-paragraph border border-slate-500 outline-primary rounded-md p-3" placeholder="Lorem Ipsum" />
            </div>
            <!-- Password -->
            <div class="mb-6">
              <label for="login_password" class="block text-sm mb-2">Password</label>
              <input type="password" name="password" id="login_password" class="block w-full text-sm text-paragraph border border-slate-500 outline-primary rounded-md p-3" placeholder="********" />
            </div>
            <!-- Login Button -->
            <button type="submit" name="login" class="w-full text-sm text-light font-medium bg-primary hover:bg-[#17384c] rounded-md p-4 transition duration-200">Login</button>
          </form>
          <p class="text-sm text-center my-6">Atau</p>
          <!-- Social Media -->
          <div class="flex justify-evenly items-center w-1/2 lg:w-2/5 mx-auto">
            <a href=""><img class="w-8 h-8 hover:scale-105 transition duration-300" src="src/img/socmed/fb.png" alt="Facebook" /></a>
            <a href=""><img class="w-8 h-8 hover:scale-105 transition duration-300" src="src/img/socmed/linkedin.png" alt="LinkedIn" /></a>
            <a href=""><img class="w-8 h-8 hover:scale-105 transition duration-300" src="src/img/socmed/email.png" alt="Email" /></a>
          </div>
          <!-- Register Link -->
          <div class="text-center mt-6">
            <p class="inline-block text-sm">Belum punya akun?</p>
            <a href="#class" class="text-sm text-primary font-semibold">Daftar sekarang</a>
          </div>
        </div>
      </div>
    </section>
    <!-- About Section -->
    <section id="about" class="bg-light py-16">
      <div class="container">
        <div class="flex flex-wrap lg:flex-nowrap justify-start lg:justify-center items-center w-full">
          <!-- Left Column - Header -->
          <div class="mr-0 lg:mr-8 mb-4 lg:mb-0">
            <h2 class="headlinee">About</h2>
            <img class="h-12" src="src/img/tentang-urbelco.png" alt="Logo Urbelco" />
          </div>
          <!-- Right Column - Body -->
          <div class="max-w-2xl">
            <p class="body mb-4">
              Selamat datang di Urban Ecology Consultants. Kami adalah perusahaan konsultan yang berfokus pada Urban Planning, Architecture, dan Engineering yang berkomitmen untuk memberikan solusi terbaik dalam mengatasi tantangan
              perkotaan dan infrastruktur. Kami menggabungkan visi, keahlian, dan profesionalisme untuk menciptakan lingkungan yang lebih baik dan lebih efisien.
            </p>
            <a href="">
              <div class="flex items-center">
                <span class="inline-block text-sm text-primary font-semibold mr-2">Baca selengkapnya</span>
                <span
                  ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle-fill text-primary" viewBox="0 0 16 16">
                    <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                  </svg>
                </span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- Workspace Section -->
    <section id="workspace" class="bg-cover bg-center pt-28 pb-16 lg:py-36" style="background-image: url('src/img/workspace-section.png')">
      <div class="container">
        <!-- Header -->
        <div class="max-w-2xl lg:mx-auto mb-12">
          <h2 class="headlinee-bg-primary text-center after:content-[''] after:block after:w-1/2 lg:after:w-1/4 after:h-1 after:bg-light/60 after:mx-auto after:mt-6">Workspace</h2>
        </div>
        <!-- Contents -->
        <div class="grid lg:grid-cols-2 gap-x-0 lg:gap-x-6 gap-y-8">
          <!-- Engineer Studio -->
          <div class="flex flex-wrap lg:flex-nowrap items-center">
            <img class="h-[120px] lg:h-[180px] mb-2 lg:mb-0" src="src/img/engineer-studio-img.png" alt="Logo Engineer Studio" />
            <div class="max-w-full ml-0 lg:ml-4">
              <h3 class="text-xl text-light font-semibold mb-3">Engineer Studio</h3>
              <p class="text-sm text-light/70 leading-loose">
                Perencanaan Bangunan Gedung Hunian, Komersil, Kantor dll. Gambar pekerjaan perencanaan bangunan & kawasan yang meliputi 3D visual bangunan, gambar rencana-rencana DED (Detail Engineering Design) & (RAB) rencana anggaran
                biaya dengan menggunakan metode BIM (Building Information Modelling).
              </p>
            </div>
          </div>
          <!-- Legal Consultant for Buildings Industries -->
          <div class="flex flex-wrap lg:flex-nowrap items-center">
            <img class="h-[120px] lg:h-[180px] mb-2 lg:mb-0" src="src/img/legal-consultant-img.png" alt="Logo Legal Consultant for Buildings Industries" />
            <div class="max-w-full ml-0 lg:ml-4">
              <h3 class="text-xl text-light font-semibold mb-3">Legal Consultant for Buildings Industries</h3>
              <p class="text-sm text-light/70 leading-loose">
                Membantu klien dalam membuat dokumen PBG (Persetujuan Pembangunan Gedung) & SLF (Sertifikat Laik Fungsi) bangunan, secara hukum, hal ini telah diatur dalam Undang-Undang RI Nomor 28 Tahun 2002 tentang Bangunan Gedung.
              </p>
            </div>
          </div>
          <!-- Environment Consultant -->
          <div class="flex flex-wrap lg:flex-nowrap items-center">
            <img class="h-[120px] lg:h-[180px] mb-2 lg:mb-0" src="src/img/environment-consultant-img.png" alt="Logo Environment Consultant" />
            <div class="max-w-full ml-0 lg:ml-4">
              <h3 class="text-xl text-light font-semibold mb-3">Environment Consultant</h3>
              <p class="text-sm text-light/70 leading-loose">
                Konsultan lingkungan memberikan penilaian dan layanan konsultasi untuk klien tentang hal-hal yang berkaitan dengan pengelolaan masalah lingkungan. Memainkan peran integral dalam mengurangi dampak merugikan dari inisiatif
                industri, komersial dan pemerintah terhadap lingkungan.
              </p>
            </div>
          </div>
          <!-- Engineering and Science -->
          <div class="flex flex-wrap lg:flex-nowrap items-center">
            <img class="h-[120px] lg:h-[180px] mb-2 lg:mb-0" src="src/img/engineering&sicence-img.png" alt="Logo Engineering and Science" />
            <div class="max-w-full ml-0 lg:ml-4">
              <h3 class="text-xl text-light font-semibold mb-3">Engineering and Science</h3>
              <p class="text-sm text-light/70 leading-loose">Survey dan Penelitian, menjalankan kegiatan-kegiatan observasi pemeriksaan, penelitian, pengkajian atau pengujian serta pengawasan atas suatu obyek yang ditentuk.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Architecture Interior Section -->
    <section class="grid grid-cols-1 lg:grid-cols-3">
      <!-- Left Column - Definition -->
      <div class="flex items-stretch w-full">
        <div class="flex justify-center items-center w-full bg-cover bg-center px-6 lg:px-0 py-16 lg:py-0" style="background-image: url('src/img/definition-bg/architecture-interior-definition-bg.jpeg')">
          <!-- Content - Glass Box -->
          <div class="max-w-sm w-full overflow-hidden border-2 border-light rounded-xl">
            <div class="text-light bg-slate-600/50 backdrop-blur-md p-6">
              <img class="block h-[180px] object-cover object-center mx-auto mb-4" src="src/img/architecture-interior-logo.jpg" alt="Logo Architecture Interior" />
              <p class="text-sm leading-loose mb-4">
                Arsitektur adalah seni merencanakan, mendesain, dan membangun struktur fisik, seperti bangunan, jembatan, dan ruang publik. Itu menggabungkan estetika, fungsi, keamanan, dan keberlanjutan.
              </p>
              <img class="block h-[56px] object-cover object-center mx-auto" src="src/img/logo-u-putih.png" alt="Logo Urbelco" />
            </div>
          </div>
        </div>
      </div>
      <!-- Right Column - Content -->
      <div class="grid lg:col-span-2 lg:pt-2 pb-2">
        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mt-2 lg:mt-0 px-2">
          <img class="content-3x3" src="src/img/architecture-interior-definition-gallery/5.png" alt="Architecture Interior Content" />
          <img class="content-3x3" src="src/img/architecture-interior-definition-gallery/2.png" alt="Architecture Interior Content" />
          <img class="content-3x3" src="src/img/architecture-interior-definition-gallery/1.png" alt="Architecture Interior Content" />
          <img class="content-3x3" src="src/img/architecture-interior-definition-gallery/4.png" alt="Architecture Interior Content" />
          <img class="content-3x3" src="src/img/architecture-interior-definition-gallery/3.png" alt="Architecture Interior Content" />
          <img class="content-3x3" src="src/img/architecture-interior-definition-gallery/6.png" alt="Architecture Interior Content" />
          <img class="content-3x3" src="src/img/empty-img.png" alt="Architecture Interior Content" />
          <img class="content-3x3" src="src/img/empty-img.png" alt="Architecture Interior Content" />
          <img class="content-3x3" src="src/img/empty-img.png" alt="Architecture Interior Content" />
        </div>
      </div>
    </section>
    <!-- Architecture Interior Detail Section -->
    <section class="grid grid-cols-1 lg:grid-cols-3">
      <!-- Left Column - Detail -->
      <div class="bg-blue-100 px-4 py-6">
        <h2 class="text-2xl font-bold mb-2">Arsitektur dan Interior</h2>
        <p class="font-medium mb-4">Star Kost Putri</p>
        <img class="block h-[180px] aspect-video object-cover" src="src/img/architecture-interior-detail-gallery/architecture-interior-side-kiri.jpeg" alt="" />
        <!-- Lokasi -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Lokasi:</h3>
          <p class="text-sm">Kota Pontianak, Kalimantan Barat</p>
        </div>
        <!-- Total Area -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Total Area:</h3>
          <p class="text-sm">-</p>
        </div>
        <!-- Klien -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Klien:</h3>
          <p class="text-sm">-</p>
        </div>
        <!-- Arsitek -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Arsitek:</h3>
          <p class="text-sm">CV. URBELCO (Urban Ecology Consultant)</p>
        </div>
        <!-- Cakupan -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Cakupan:</h3>
          <p class="text-sm">Desain Konseptual pada Dokumen Konstruksi</p>
        </div>
        <!-- Keterangan -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Keterangan:</h3>
          <p class="text-sm leading-loose">-</p>
        </div>
      </div>
      <!-- Right Column - Gallery -->
      <div class="grid col-span-2 p-2">
        <div class="grid md:grid-cols-2 gap-2">
          <!-- Left Column -->
          <div class="gap-2">
            <img class="aspect-square lg:aspect-[3/4] object-cover mb-2" src="src/img/architecture-interior-detail-gallery/1.jpeg" alt="Architecture Interior Gallery" />
            <div class="grid grid-cols-2 gap-2">
              <img class="aspect-[3/4] object-cover" src="src/img/architecture-interior-detail-gallery/2.jpeg" alt="Architecture Interior Gallery" />
              <img class="aspect-[3/4] object-cover" src="src/img/architecture-interior-detail-gallery/3.jpeg" alt="Architecture Interior Gallery" />
            </div>
          </div>
          <!-- Right Column -->
          <div class="gap-2">
            <img class="aspect-square lg:aspect-[3/4] object-cover mb-2" src="src/img/architecture-interior-detail-gallery/4.jpeg" alt="Architecture Interior Gallery" />
            <div class="grid grid-cols-2 gap-2">
              <img class="aspect-[3/4] object-cover" src="src/img/architecture-interior-detail-gallery/5.jpeg" alt="Architecture Interior Gallery" />
              <img class="aspect-[3/4] object-cover" src="src/img/architecture-interior-detail-gallery/6.jpeg" alt="Architecture Interior Gallery" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Urban Design Masterplan Section -->
    <section class="grid grid-cols-1 lg:grid-cols-3">
      <!-- Left Column - Definition -->
      <div class="flex items-stretch w-full">
        <div class="flex justify-center items-center w-full bg-cover bg-center px-6 lg:px-0 py-16 lg:py-0" style="background-image: url('src/img/definition-bg/urban-design-masterplan-definition-bg.jpeg')">
          <!-- Content - Glass Box -->
          <div class="max-w-sm w-full overflow-hidden border-2 border-light rounded-xl">
            <div class="text-light bg-slate-600/50 backdrop-blur-md p-6">
              <img class="block h-[180px] object-cover object-center mx-auto mb-4" src="src/img/urbandesignmasterplan.png" alt="Logo Urban Design Masterplan" />
              <p class="text-sm leading-loose mb-4">
                Seorang urban designer adalah seorang perencana perkotaan yang bertugas merancang rencana tata kota yang berkelanjutan dan fungsional, dengan tujuan menciptakan lingkungan perkotaan yang efisien, aman, nyaman, dan
                berkelanjutan bagi penduduknya.
              </p>
              <img class="block h-[56px] object-cover object-center mx-auto" src="src/img/logo-u-putih.png" alt="Logo Urbelco" />
            </div>
          </div>
        </div>
      </div>
      <!-- Right Column - Content -->
      <div class="grid lg:col-span-2 lg:pt-2 pb-2">
        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mt-2 lg:mt-0 px-2">
          <img class="content-3x3" src="src/img/urban-design-definition-gallery/1.png" alt="Urban Design Masterplan Content" />
          <img class="content-3x3" src="src/img/urban-design-definition-gallery/2.png" alt="Urban Design Masterplan Content" />
          <img class="content-3x3" src="src/img/urban-design-definition-gallery/3.png" alt="Urban Design Masterplan Content" />
          <img class="content-3x3" src="src/img/urban-design-definition-gallery/4.png" alt="Urban Design Masterplan Content" />
          <img class="content-3x3" src="src/img/empty-img.png" alt="Urban Design Masterplan Content" />
          <img class="content-3x3" src="src/img/empty-img.png" alt="Urban Design Masterplan Content" />
          <img class="content-3x3" src="src/img/empty-img.png" alt="Urban Design Masterplan Content" />
          <img class="content-3x3" src="src/img/empty-img.png" alt="Urban Design Masterplan Content" />
          <img class="content-3x3" src="src/img/empty-img.png" alt="Urban Design Masterplan Content" />
        </div>
      </div>
    </section>
    <!-- Urban Design Masterplan Detail Section -->
    <section class="grid grid-cols-1 lg:grid-cols-3">
      <!-- Left Column - Detail -->
      <div class="bg-blue-100 px-4 py-6">
        <h2 class="text-2xl font-bold mb-2">Urban Design dan Masterplan</h2>
        <p class="font-medium mb-4">Jatiluhur Green Campus</p>
        <img class="block h-[180px] aspect-video object-cover" src="src/img/architecture-interior-detail-gallery/architecture-interior-side-kiri.jpeg" alt="" />
        <!-- Lokasi -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Lokasi:</h3>
          <p class="text-sm">Jatiluhur, Purwakarta</p>
        </div>
        <!-- Total Area -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Total Area:</h3>
          <p class="text-sm">55 hektar</p>
        </div>
        <!-- Klien -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Klien:</h3>
          <p class="text-sm">Enoch Mahlawi Teknologi</p>
        </div>
        <!-- Arsitek -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Arsitek:</h3>
          <p class="text-sm">CV. URBELCO (Urban Ecology Consultant)</p>
        </div>
        <!-- Cakupan -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Cakupan:</h3>
          <p class="text-sm">Desain Konseptual</p>
        </div>
        <!-- Keterangan -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Keterangan:</h3>
          <p class="text-sm leading-loose">-</p>
        </div>
      </div>
      <!-- Right Column - Gallery -->
      <div class="grid col-span-2 p-2">
        <div class="grid md:grid-cols-2 gap-2">
          <!-- Left Column -->
          <div class="gap-2">
            <img class="aspect-square lg:aspect-[3/4] object-cover mb-2" src="src/img/urban-design-masterplan-detail-gallery/1.jpeg" alt="Urban Design Masterplan Gallery" />
            <div class="grid grid-cols-2 gap-2">
              <img class="aspect-[3/4] object-cover" src="src/img/urban-design-masterplan-detail-gallery/3.jpeg" alt="Urban Design Masterplan Gallery" />
              <img class="aspect-[3/4] object-cover" src="src/img/urban-design-masterplan-detail-gallery/4.png" alt="Urban Design Masterplan Gallery" />
            </div>
          </div>
          <!-- Right Column -->
          <div class="gap-2">
            <img class="aspect-square lg:aspect-[3/4] object-cover mb-2" src="src/img/urban-design-masterplan-detail-gallery/2.jpeg" alt="Urban Design Masterplan Gallery" />
            <div class="grid grid-cols-2 gap-2">
              <img class="aspect-[3/4] object-cover" src="src/img/urban-design-masterplan-detail-gallery/5.jpeg" alt="Urban Design Masterplan Gallery" />
              <img class="aspect-[3/4] object-cover" src="src/img/urban-design-masterplan-detail-gallery/6.jpeg" alt="Urban Design Masterplan Gallery" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Engineering and Science Section -->
    <section class="grid grid-cols-1 lg:grid-cols-3">
      <!-- Left Column - Definition -->
      <div class="flex items-stretch w-full">
        <div class="flex justify-center items-center w-full bg-cover bg-center px-6 lg:px-0 py-16 lg:py-0" style="background-image: url('src/img/definition-bg/engineering-science-definition-bg.jpg')">
          <!-- Content - Glass Box -->
          <div class="max-w-sm w-full overflow-hidden border-2 border-light rounded-xl">
            <div class="text-light bg-slate-600/50 backdrop-blur-md p-6">
              <img class="block h-[180px] object-cover object-center mx-auto mb-4" src="src/img/engineering-science-definisi-logo.png" alt="Logo Engineering and Science" />
              <p class="text-sm leading-loose mb-4">
                Jasa engineering adalah layanan yang disediakan oleh para profesional dengan pengetahuan teknis dan keahlian dalam rekayasa atau teknik. Ini mencakup perencanaan, desain, pengembangan, pengelolaan proyek, dan implementasi
                berbagai proyek teknik dan konstruksi.
              </p>
              <img class="block h-[56px] object-cover object-center mx-auto" src="src/img/logo-u-putih.png" alt="Logo Urbelco" />
            </div>
          </div>
        </div>
      </div>
      <!-- Right Column - Content -->
      <div class="grid lg:col-span-2 lg:pt-2 pb-2">
        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mt-2 lg:mt-0 px-2">
          <img class="content-3x3" src="src/img/engineering&science-definition-gallery/1.png" alt="Engineering and Science Content" />
          <img class="content-3x3" src="src/img/engineering&science-definition-gallery/2.png" alt="Engineering and Science Content" />
          <img class="content-3x3" src="src/img/empty-img.png" alt="Engineering and Science Content" />
          <img class="content-3x3" src="src/img/empty-img.png" alt="Engineering and Science Content" />
          <img class="content-3x3" src="src/img/empty-img.png" alt="Engineering and Science Content" />
          <img class="content-3x3" src="src/img/empty-img.png" alt="Engineering and Science Content" />
          <img class="content-3x3" src="src/img/empty-img.png" alt="Engineering and Science Content" />
          <img class="content-3x3" src="src/img/empty-img.png" alt="Engineering and Science Content" />
          <img class="content-3x3" src="src/img/empty-img.png" alt="Engineering and Science Content" />
        </div>
      </div>
    </section>
    <!-- Engineering and Science Detail Section -->
    <section class="grid grid-cols-1 lg:grid-cols-3">
      <!-- Left Column - Detail -->
      <div class="bg-blue-100 px-4 py-6">
        <h2 class="text-2xl font-bold mb-2">Engineering dan Science</h2>
        <p class="font-medium mb-4">Penyelidikan Air Tanah (Geolistrik)</p>
        <img class="block h-[180px] aspect-video object-cover" src="src/img/engineering&science.jpeg" alt="" />
        <!-- Lokasi -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Lokasi:</h3>
          <p class="text-sm">Batam, Kepulauan Riau</p>
        </div>
        <!-- Total Area -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Total Area:</h3>
          <p class="text-sm">3 titik(1 dimensi)</p>
        </div>
        <!-- Klien -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Klien:</h3>
          <p class="text-sm">RSUD Engku Haji Daud Bintan</p>
        </div>
        <!-- Arsitek -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Arsitek:</h3>
          <p class="text-sm">CV. URBELCO (Urban Ecology Consultant)</p>
        </div>
        <!-- Cakupan -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Cakupan:</h3>
          <p class="text-sm">Survey Pencarian Air Tanah/Identifikasi Laporan Hasil Survey</p>
        </div>
        <!-- Keterangan -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Keterangan:</h3>
          <p class="text-sm leading-loose">-</p>
        </div>
      </div>
      <!-- Right Column - Gallery -->
      <div class="grid col-span-2 p-2">
        <div class="grid md:grid-cols-2 gap-2">
          <!-- Left Column -->
          <div class="gap-2">
            <img class="aspect-square lg:aspect-[3/4] object-cover mb-2" src="src/img/engineering&science-detail-gallery/3.jpeg" alt="Engineering and Science Gallery" />
            <div class="grid grid-cols-2 gap-2">
              <img class="aspect-[3/4] object-cover" src="src/img/engineering&science-detail-gallery/2.jpeg" alt="Engineering and Science Gallery" />
              <img class="aspect-[3/4] object-cover" src="src/img/engineering&science-detail-gallery/1.jpeg" alt="Engineering and Science Gallery" />
            </div>
          </div>
          <!-- Right Column -->
          <div class="gap-2">
            <img class="aspect-square lg:aspect-[3/4] object-cover mb-2" src="src/img/engineering&science-detail-gallery/4.jpeg" alt="Engineering and Science Gallery" />
            <div class="grid grid-cols-2 gap-2">
              <img class="aspect-[3/4] object-cover" src="src/img/engineering&science-detail-gallery/5.jpeg" alt="Engineering and Science Gallery" />
              <img class="aspect-[3/4] object-cover" src="src/img/engineering&science-detail-gallery/6.jpeg" alt="Engineering and Science Gallery" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Legal Consultang for Building Industries Section -->
    <section class="grid grid-cols-1 lg:grid-cols-3">
      <!-- Left Column - Definition -->
      <div class="flex items-stretch w-full">
        <div class="flex justify-center items-center w-full bg-cover bg-center px-6 lg:px-0 py-16 lg:py-0" style="background-image: url('src/img/definition-bg/legalconsultantforbuildingindustries-definition-bg.png')">
          <!-- Content - Glass Box -->
          <div class="max-w-sm w-full overflow-hidden border-2 border-light rounded-xl">
            <div class="text-light bg-slate-600/50 backdrop-blur-md p-6">
              <img class="block h-[180px] object-cover object-center mx-auto mb-4" src="src/img/legalconsultantforbuildingindustries-logo.png" alt="Logo Legal Consultang for Building Industries" />
              <p class="text-sm leading-loose mb-4">
                Proses perolehan sertifikat laik fungsi melibatkan pemeriksaan oleh pejabat berwenang untuk menilai keselamatan, kesehatan, dan kelayakan teknis sebuah bangunan Biasanya, sertifikat ini dibutuhkan sebelum bangunan dapat
                digunakan untuk tujuan komersial atau perumahan.
              </p>
              <img class="block h-[56px] object-cover object-center mx-auto" src="src/img/logo-u-putih.png" alt="Logo Urbelco" />
            </div>
          </div>
        </div>
      </div>
      <!-- Right Column - Content -->
      <div class="grid lg:col-span-2 lg:pt-2 pb-2">
        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mt-2 lg:mt-0 px-2">
          <img class="content-3x3" src="src/img/legal-consultant-for-building-industries-definition-gallery/1.png" alt="Legal Consultang for Building Industries" />
          <img class="content-3x3" src="src/img/legal-consultant-for-building-industries-definition-gallery/2.png" alt="Legal Consultang for Building Industries" />
          <img class="content-3x3" src="src/img/empty-img.png" alt="Legal Consultang for Building Industries" />
          <img class="content-3x3" src="src/img/empty-img.png" alt="Legal Consultang for Building Industries" />
          <img class="content-3x3" src="src/img/empty-img.png" alt="Legal Consultang for Building Industries" />
          <img class="content-3x3" src="src/img/empty-img.png" alt="Legal Consultang for Building Industries" />
          <img class="content-3x3" src="src/img/empty-img.png" alt="Legal Consultang for Building Industries" />
          <img class="content-3x3" src="src/img/empty-img.png" alt="Legal Consultang for Building Industries" />
          <img class="content-3x3" src="src/img/empty-img.png" alt="Legal Consultang for Building Industries" />
        </div>
      </div>
    </section>
    <!-- Legal Consultang for Building Industries Detail Section -->
    <section class="grid grid-cols-1 lg:grid-cols-3">
      <!-- Left Column - Detail -->
      <div class="bg-blue-100 px-4 py-6">
        <h2 class="text-2xl font-bold mb-2">Legal Consultang for Building Industries</h2>
        <p class="font-medium mb-4">SLF (Sertifikat Laik Fungsi) & PBG (Izin Persetujuan Bangunan Gedung)</p>
        <img class="block h-[180px] aspect-video object-cover" src="src/img/legalconsultantforbuildingindustries-detail.jpeg" alt="" />
        <!-- Lokasi -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Lokasi:</h3>
          <p class="text-sm">Putussibau, Kapuas Hulu, Kalimantan Barat</p>
        </div>
        <!-- Total Area -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Total Area:</h3>
          <p class="text-sm">-</p>
        </div>
        <!-- Klien -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Klien:</h3>
          <p class="text-sm">RSUD DR. ACHMAD DIPONEGORO</p>
        </div>
        <!-- Arsitek -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Arsitek:</h3>
          <p class="text-sm">CV. URBELCO (Urban Ecology Consultant)</p>
        </div>
        <!-- Cakupan -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Cakupan:</h3>
          <p class="text-sm">SLF (Sertifikat Laik Fungsi)</p>
        </div>
        <!-- Keterangan -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Keterangan:</h3>
          <p class="text-sm leading-loose">-</p>
        </div>
      </div>
      <!-- Right Column - Gallery -->
      <div class="grid col-span-2 p-2">
        <div class="grid md:grid-cols-2 gap-2">
          <!-- Left Column -->
          <div class="gap-2">
            <img class="aspect-square lg:aspect-[3/4] object-cover mb-2" src="src/img/legal-consultant-for-building-industries-detail-gallery/1.jpeg" alt="Legal Consultang for Building Industries" />
            <div class="grid grid-cols-2 gap-2">
              <img class="aspect-[3/4] object-cover" src="src/img/legal-consultant-for-building-industries-detail-gallery/2.jpeg" alt="Legal Consultang for Building Industries" />
              <img class="aspect-[3/4] object-cover" src="src/img/legal-consultant-for-building-industries-detail-gallery/3.jpeg" alt="Legal Consultang for Building Industries" />
            </div>
          </div>
          <!-- Right Column -->
          <div class="gap-2">
            <img class="aspect-square lg:aspect-[3/4] object-cover mb-2" src="src/img/legal-consultant-for-building-industries-detail-gallery/4.jpeg" alt="Legal Consultang for Building Industries" />
            <div class="grid grid-cols-2 gap-2">
              <img class="aspect-[3/4] object-cover" src="src/img/legal-consultant-for-building-industries-detail-gallery/5.jpeg" alt="Legal Consultang for Building Industries" />
              <img class="aspect-[3/4] object-cover" src="src/img/legal-consultant-for-building-industries-detail-gallery/6.jpeg" alt="Legal Consultang for Building Industries" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Research Section -->
    <section class="grid grid-cols-1 lg:grid-cols-3">
      <!-- Left Column - Definition -->
      <div class="flex items-stretch w-full">
        <div class="flex justify-center items-center w-full bg-cover bg-center px-6 lg:px-0 py-16 lg:py-0" style="background-image: url('src/img/definition-bg/research-definition-bg.jpeg')">
          <!-- Content - Glass Box -->
          <div class="max-w-sm w-full overflow-hidden border-2 border-light rounded-xl">
            <div class="text-light bg-slate-600/50 backdrop-blur-md p-6">
              <img class="block h-[180px] object-cover object-center mx-auto mb-4" src="src/img/research-logo-definition.png" alt="Logo Research" />
              <p class="text-sm leading-loose mb-4">
                Tim riset terdiri dari sejumlah individu yang bekerja bersama dalam suatu proyek riset. Setiap anggota tim memiliki peran dan tanggung jawab tertentu yang berkontribusi pada kesuksesan dan kemajuan proyek riset secara
                keseluruhan.
              </p>
              <img class="block h-[56px] object-cover object-center mx-auto" src="src/img/logo-u-putih.png" alt="Logo Urbelco" />
            </div>
          </div>
        </div>
      </div>
      <!-- Right Column - Content -->
      <div class="grid lg:col-span-2 lg:pt-2 pb-2">
        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mt-2 lg:mt-0 px-2">
          <img class="content-3x3" src="src/img/research-definition-gallery/1.png" alt="Research" />
          <img class="content-3x3" src="src/img/research-definition-gallery/2.png" alt="Research" />
          <img class="content-3x3" src="src/img/empty-img.png" alt="Research" />
          <img class="content-3x3" src="src/img/empty-img.png" alt="Research" />
          <img class="content-3x3" src="src/img/empty-img.png" alt="Research" />
          <img class="content-3x3" src="src/img/empty-img.png" alt="Research" />
          <img class="content-3x3" src="src/img/empty-img.png" alt="Research" />
          <img class="content-3x3" src="src/img/empty-img.png" alt="Research" />
          <img class="content-3x3" src="src/img/empty-img.png" alt="Research" />
        </div>
      </div>
    </section>
    <!-- Research Detail Section -->
    <section class="grid grid-cols-1 lg:grid-cols-3">
      <!-- Left Column - Detail -->
      <div class="bg-blue-100 px-4 py-6">
        <h2 class="text-2xl font-bold mb-2">Research</h2>
        <p class="font-medium mb-4">Tutupan Lahan Gambut Kab. Kubu Raya, Prov. KalBar</p>
        <img class="block h-[180px] aspect-video object-cover" src="src/img/legalconsultantforbuildingindustries-detail.jpeg" alt="" />
        <!-- Lokasi -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Lokasi:</h3>
          <p class="text-sm">Kabupaten Kuburaya, Kalimantan Barat</p>
        </div>
        <!-- Total Area -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Total Area:</h3>
          <p class="text-sm">-</p>
        </div>
        <!-- Klien -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Klien:</h3>
          <p class="text-sm">Pribadi</p>
        </div>
        <!-- Arsitek -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Arsitek:</h3>
          <p class="text-sm">CV. URBELCO (Urban Ecology Consultant)</p>
        </div>
        <!-- Cakupan -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Cakupan:</h3>
          <p class="text-sm">Pemetaan</p>
        </div>
        <!-- Keterangan -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Keterangan:</h3>
          <p class="text-sm leading-loose">-</p>
        </div>
      </div>
      <!-- Right Column - Gallery -->
      <div class="grid col-span-2 p-2">
        <div class="grid md:grid-cols-2 gap-2">
          <!-- Left Column -->
          <div class="gap-2">
            <img class="aspect-square lg:aspect-[3/4] object-cover mb-2" src="src/img/research-detail-gallery/research-img-kiri-besar.jpeg" alt="Research" />
            <div class="grid grid-cols-2 gap-2">
              <img class="aspect-[3/4] object-cover" src="src/img/research-detail-gallery/research-img-kiri-kecil.jpeg" alt="Research" />
              <img class="aspect-[3/4] object-cover" src="src/img/empty-img.png" alt="Research" />
            </div>
          </div>
          <!-- Right Column -->
          <div class="gap-2">
            <img class="aspect-square lg:aspect-[3/4] object-cover mb-2" src="src/img/research-detail-gallery/research-img-kanan-besar.jpeg" alt="Research" />
            <div class="grid grid-cols-2 gap-2">
              <img class="aspect-[3/4] object-cover" src="src/img/empty-img.png" alt="Research" />
              <img class="aspect-[3/4] object-cover" src="src/img/empty-img.png" alt="Research" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Environment Section -->
    <section class="grid grid-cols-1 lg:grid-cols-3">
      <!-- Left Column - Definition -->
      <div class="flex items-stretch w-full">
        <div class="flex justify-center items-center w-full bg-cover bg-center px-6 lg:px-0 py-16 lg:py-0" style="background-image: url('src/img/definition-bg/environment-definition-bg.jpg')">
          <!-- Content - Glass Box -->
          <div class="max-w-sm w-full overflow-hidden border-2 border-light rounded-xl">
            <div class="text-light bg-slate-600/50 backdrop-blur-md p-6">
              <img class="block h-[180px] object-cover object-center mx-auto mb-4" src="src/img/environment-logo-definition.png" alt="Logo Environment" />
              <p class="text-sm leading-loose mb-4">
                Konsultan lingkungan memberikan penilaian dan layanan konsultasi kepada klien terkait pengelolaan masalah lingkungan serta energi terbarukan, membantu individu, perusahaan, atau pemerintah untuk mengadopsi dan
                mengintegrasikan energi terbarukan ke dalam sistem energi mereka.
              </p>
              <img class="block h-[56px] object-cover object-center mx-auto" src="src/img/logo-u-putih.png" alt="Logo Urbelco" />
            </div>
          </div>
        </div>
      </div>
      <!-- Right Column - Content -->
      <div class="grid lg:col-span-2 lg:pt-2 pb-2">
        <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mt-2 lg:mt-0 px-2">
          <img class="content-3x3" src="src/img/environment-definition-gallery/1.png" alt="Environment" />
          <img class="content-3x3" src="src/img/environment-definition-gallery/2.png" alt="Environment" />
          <img class="content-3x3" src="src/img/environment-definition-gallery/3.png" alt="Environment" />
          <img class="content-3x3" src="src/img/environment-definition-gallery/4.png" alt="Environment" />
          <img class="content-3x3" src="src/img/environment-definition-gallery/5.png" alt="Environment" />
          <img class="content-3x3" src="src/img/empty-img.png" alt="Environment" />
          <img class="content-3x3" src="src/img/empty-img.png" alt="Environment" />
          <img class="content-3x3" src="src/img/empty-img.png" alt="Environment" />
          <img class="content-3x3" src="src/img/empty-img.png" alt="Environment" />
        </div>
      </div>
    </section>
    <!-- Environment Detail Section -->
    <section class="grid grid-cols-1 lg:grid-cols-3">
      <!-- Left Column - Detail -->
      <div class="bg-blue-100 px-4 py-6">
        <h2 class="text-2xl font-bold mb-2">Environment</h2>
        <p class="font-medium mb-4">Pembangkit Listrik Tenaga Mikrohidro (PLTMH)</p>
        <img class="block h-[180px] aspect-video object-cover" src="src/img/environment-detail-gallery/environment-img-detail.jpeg" alt="" />
        <!-- Lokasi -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Lokasi:</h3>
          <p class="text-sm">Kabupaten Halmahera Timur, Maluku Utara</p>
        </div>
        <!-- Total Area -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Total Area:</h3>
          <p class="text-sm">-</p>
        </div>
        <!-- Klien -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Klien:</h3>
          <p class="text-sm">-</p>
        </div>
        <!-- Arsitek -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Arsitek:</h3>
          <p class="text-sm">-</p>
        </div>
        <!-- Cakupan -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Cakupan:</h3>
          <p class="text-sm">Desain Konseptual pada Dokumen Konstruksi</p>
        </div>
        <!-- Keterangan -->
        <div class="mt-6">
          <h3 class="font-bold mb-2">Keterangan:</h3>
          <p class="text-sm leading-loose">-</p>
        </div>
      </div>
      <!-- Right Column - Gallery -->
      <div class="grid col-span-2 p-2">
        <div class="grid md:grid-cols-2 gap-2">
          <!-- Left Column -->
          <div class="gap-2">
            <img class="aspect-square lg:aspect-[3/4] object-cover mb-2" src="src/img/environment-detail-gallery/1.png" alt="Environment" />
            <div class="grid grid-cols-2 gap-2">
              <img class="aspect-[3/4] object-cover" src="src/img/environment-detail-gallery/3.jpeg" alt="Environment" />
              <img class="aspect-[3/4] object-cover" src="src/img/environment-detail-gallery/4.jpeg" alt="Environment" />
            </div>
          </div>
          <!-- Right Column -->
          <div class="gap-2">
            <img class="aspect-square lg:aspect-[3/4] object-cover mb-2" src="src/img/environment-detail-gallery/2.jpeg" alt="Environment" />
            <div class="grid grid-cols-2 gap-2">
              <img class="aspect-[3/4] object-cover" src="src/img/environment-detail-gallery/5.jpeg" alt="Environment" />
              <img class="aspect-[3/4] object-cover" src="src/img/environment-detail-gallery/6.jpeg" alt="Environment" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Class -->
    <section id="class" class="flex w-full min-h-screen bg-cover pt-28 pb-16 lg:py-36" style="background-image: url('src/img/login-bg.png')">
      <div class="container m-auto">
        <!-- Logo Urbelco -->
        <img class="block h-14 lg:h-20 mx-auto mb-10 lg:mb-14" src="src/img/urbelco.png" alt="Logo Urbelco" />
        <!-- Form Register -->
        <div class="max-w-lg bg-light rounded-xl mx-auto px-6 py-12">
          <h2 class="text-2xl text-center uppercase font-bold mb-8">Form Pendaftaran Pelatihan Urbelclass</h2>
          <form action="" method="post">
            <!-- Email -->
            <div class="mb-6">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" id="email" class="form-input" placeholder="Masukan nama Anda" />
            </div>
            <!-- Password -->
            <div class="mb-6">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" id="password" class="form-input" placeholder="Buat password minimal 8 karakter" />
            </div>
            <!-- Nama -->
            <div class="mb-6">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" name="nama" id="nama" class="form-input" placeholder="Masukan nama Anda" />
            </div>
            <!-- Jenis Kelamin -->
            <div class="mb-6">
              <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
              <div class="relative">
                <select name="jeniskelamin" id="jeniskelamin" class="select-input form-input">
                  <option class="block w-full text-paragraph border border-slate-500 outline-primary rounded-md p-3" value="" selected disabled>Pilih Jenis Kelamin</option>
                  <option class="text-black" value="Pria">Pria</option>
                  <option class="text-black" value="Wanita">Wanita</option>
                </select>
                <div class="flex items-center absolute top-1/2 bottom-1/2 right-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                  </svg>
                </div>
              </div>
            </div>
            <!-- Pendidikan Terakhir -->
            <div class="mb-6">
              <label for="pendidikanterakhir" class="form-label">Pendidikan Terakhir</label>
              <div class="relative">
                <select name="pendidikanterakhir" id="pendidikanterakhir" class="select-input form-input">
                  <option class="block w-full text-paragraph border border-slate-500 outline-primary rounded-md p-3" value="" selected disabled>Pilih Pendidikan Terakhir</option>
                  <option class="text-black" value="D3">D3</option>
                  <option class="text-black" value="S1">S1</option>
                </select>
                <div class="flex items-center absolute top-1/2 bottom-1/2 right-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                  </svg>
                </div>
              </div>
            </div>
            <!-- Pelatihan yang Diminati -->
            <div class="mb-6">
              <label for="pelatihan" class="form-label">Pelatihan yang Diminati</label>
              <div class="relative">
                <select name="pelatihan" id="pelatihan" class="select-input form-input">
                  <option class="block w-full text-paragraph border border-slate-500 outline-primary rounded-md p-3" value="" selected disabled>Pilih Pelatihan yang Diminati</option>
                  <option class="text-black" value="Programming">Programming</option>
                  <option class="text-black" value="Marketing">Marketing</option>
                </select>
                <div class="flex items-center absolute top-1/2 bottom-1/2 right-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                  </svg>
                </div>
              </div>
            </div>
            <!-- Register Button -->
            <button type="submit" name="register" class="w-full text-sm text-light font-medium bg-primary hover:bg-[#17384c] rounded-md p-4 transition duration-200">Daftar</button>
          </form>
          <!-- Login Link -->
          <div class="text-center mt-6">
            <p class="inline-block text-sm">Sudah punya akun?</p>
            <a href="#login" class="text-sm text-primary font-semibold">Login sekarang</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Section -->
    <section id="contact" class="bg-cover py-16 lg:py-36" style="background-image: url('src/img/contact-bg.jpg')">
      <div class="w-full bg-primary/95 py-16">
        <!-- Header -->
        <div class="mx-auto mb-12">
          <h2 class="text-3xl lg:text-4xl text-light text-center font-bold mb-4 after:content-[''] after:block after:w-1/2 lg:after:w-1/4 after:h-1 after:bg-light/60 after:mx-auto after:mt-6">Contact</h2>
        </div>
        <!-- Contents -->
        <div class="container">
          <div class="grid lg:grid-cols-3">
            <!-- Telephone -->
            <div class="text-light text-center mb-6 lg:mb-0">
              <img class="block h-24 mb-3 lg:mb-4 mx-auto" src="src/img/contact-logo/email-contact.png" alt="Logo Telephone" />
              <h4 class="text-lg font-semibold mb-2">Telepon</h4>
              <p class="text-sm text-light/90">+62 8980 584527</p>
            </div>
            <!-- Location -->
            <div class="text-light text-center mb-6 lg:mb-0">
              <img class="block h-24 mb-3 lg:mb-4 mx-auto" src="src/img/contact-logo/email-contact.png" alt="Logo Location" />
              <!-- Urbelco -->
              <div class="mb-6">
                <h4 class="text-lg font-semibold mb-2">Urbelco</h4>
                <p class="w-3/4 lg:w-auto text-sm text-light/90 leading-loose mx-auto">Jl. Parit Haji Husin II Gg. Karya IX No. 12 B, Kel. Bansir Darat, Kec. Pontianak Tenggara, Kota Pontianak, Kalimantan Barat</p>
              </div>
              <!-- Urbelclass -->
              <div>
                <h4 class="text-lg font-semibold mb-2">Urbelclass</h4>
                <p class="w-3/4 lg:w-auto text-sm text-light/90 leading-loose mx-auto">Jl. Putri Candramidi Gg. Ekajaya, Kel. Sungai Bangkong, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat</p>
              </div>
            </div>
            <!-- Email -->
            <div class="text-light text-center mb-0">
              <img class="block h-24 mb-3 lg:mb-4 mx-auto" src="src/img/contact-logo/email-contact.png" alt="Logo Email" />
              <!-- Urbelco -->
              <div class="mb-6">
                <h4 class="text-lg font-semibold mb-2">Urbelco</h4>
                <p class="text-sm text-light/90">Urbelco@gmail.com</p>
              </div>
              <!-- Urbelclass -->
              <div>
                <h4 class="text-lg font-semibold mb-2">Urbelclass</h4>
                <p class="text-sm text-light/90">Urbel.class@gmail.com</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Script -->
    <script>
      // Hamburger Menu
      document.addEventListener("DOMContentLoaded", function () {
        // Open
        const burger = document.querySelectorAll(".navbar-burger");
        const menu = document.querySelectorAll(".navbar-menu");

        if (burger.length && menu.length) {
          for (var i = 0; i < burger.length; i++) {
            burger[i].addEventListener("click", function () {
              for (var j = 0; j < menu.length; j++) {
                menu[j].classList.toggle("hidden");
              }
            });
          }
        }

        // Close
        const close = document.querySelectorAll(".navbar-close");
        const backdrop = document.querySelectorAll(".navbar-backdrop");

        if (close.length) {
          for (var i = 0; i < close.length; i++) {
            close[i].addEventListener("click", function () {
              for (var j = 0; j < menu.length; j++) {
                menu[j].classList.toggle("hidden");
              }
            });
          }
        }

        if (backdrop.length) {
          for (var i = 0; i < backdrop.length; i++) {
            backdrop[i].addEventListener("click", function () {
              for (var j = 0; j < menu.length; j++) {
                menu[j].classList.toggle("hidden");
              }
            });
          }
        }
      });
    </script>
  </body>
</html>
