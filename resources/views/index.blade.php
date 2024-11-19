<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Damarstore
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
    @vite('resources/css/app.css')
  <style>
   body {
            background-color: #0b002b;
            color: white;
        }
        .navbar a {
            color: #00ff00;
        }
        .navbar a:hover {
            color: #00cc00;
        }
        .search-bar input {
            background-color: #0b002b;
            border: 2px solid #00ff00;
            color: white;
        }
        .search-bar button {
            background-color: #00ff00;
            color: #0b002b;
        }
        .section-title {
            color: white;
        }
        .about-section {
            background-color: #1a0a3d;
            padding: 20px;
            border-radius: 10px;
        }
        .about-section a {
            color: #00ff00;
        }
        .about-section a:hover {
            color: #00cc00;
        }
        .footer {
            background-color: #0b002b;
            padding: 20px;
        }
  </style>
 </head>
 <body class="font-sans">
  <header class="navbar flex justify-between items-center p-4">
   <div class="text-2xl font-bold">
    <a href="#">
     DAMARSTORE
    </a>
   </div>
   <div class="search-bar flex items-center">
    <input class="p-2 rounded-l" placeholder="Cari Sesuatu Disini" type="text"/>
    <button class="p-2 rounded-r">
     CARI
    </button>
   </div>
   <nav class="flex space-x-4">
    <a href="#">
     BERANDA
    </a>
    <a href="#">
     PRODUK
    </a>
    <a href="#">
     TENTANG
    </a>
   </nav>
  </header>
  <main class="p-4">
   <section class="mb-8">
    <div class="w-full h-64 flex items-center justify-center">
    <img alt="Free Fire" class="h-64" src="asset\slide-1.jpg"/>
    </div>
   </section>
   <section class="mb-8">
    <h2 class="section-title text-xl font-bold mb-4">
     POPULER
    </h2>
    <div class="grid grid-cols-7 gap-4">
     <div class="text-center">
      <img alt="Free Fire" class="mx-auto" height="100" src="asset\ff.png" width="100"/>
      <p>
       Free Fire
      </p>
     </div>
     <div class="text-center">
      <img alt="Mobile Legends" class="mx-auto" height="100" src="asset/mlbb.jpg" width="100"/>
      <p>
       Mobile Legends
      </p>
     </div>
     <div class="text-center">
      <img alt="PUBG Mobile" class="mx-auto" height="100" src="asset/pubgm.jpg" width="100"/>
      <p>
       PUBG Mobile
      </p>
     </div>
     <div class="text-center">
      <img alt="Valorant" class="mx-auto" height="100" src="asset/valorant.jpg" width="100"/>
      <p>
       Valorant
      </p>
     </div>
     <div class="text-center">
      <img alt="Genshin Impact" class="mx-auto" height="100" src="asset/GenshinImpact.jpg" width="100"/>
      <p>
       Genshin Impact
      </p>
     </div>
     <div class="text-center">
      <img alt="Higgs Domino" class="mx-auto" height="100" src="asset/higgs_domino.jpg" width="100"/>
      <p>
       Higgs Domino
      </p>
     </div>
    </div>
   </section>
   <section class="mb-8">
    <h2 class="section-title text-xl font-bold mb-4">
     STREAMING APP
    </h2>
    <div class="grid grid-cols-6 gap-4">
     <div class="text-center">
      <img alt="Spotify Premium" class="mx-auto" height="100" src="asset/spotify.png" width="100"/>
      <p>
       Spotify Premium
      </p>
     </div>
     <div class="text-center">
      <img alt="Viu Premium" class="mx-auto" height="100" src="asset/viu.jpg" width="100"/>
      <p>
       Viu Premium
      </p>
     </div>
     <div class="text-center">
      <img alt="Vidio Premium" class="mx-auto" height="100" src="asset/vidio.png" width="100"/>
      <p>
       Vidio Premium
      </p>
     </div>
     <div class="text-center">
      <img alt="NimoTV" class="mx-auto" height="100" src="asset/NimoTv.png" width="100"/>
      <p>
       NimoTV
      </p>
     </div>
     <div class="text-center">
      <img alt="Iqiyi Premium" class="mx-auto" height="100" src="asset/iqiyi.png" width="100"/>
      <p>
       Iqiyi Premium
      </p>
     </div>
    </div>
   </section>
   <section class="mb-8">
    <h2 class="section-title text-xl font-bold mb-4">
     VOUCHER
    </h2>
    <div class="grid grid-cols-1 gap-4">
     <div class="text-center">
      <img alt="Garena Shell" class="mx-auto" height="100" src="asset/garena_shells.jpg" width="100"/>
      <p>
       Garena Shell
      </p>
     </div>
    </div>
   </section>
   <section class="about-section text-center mb-8">
    <h2 class="text-xl font-bold mb-4">
     TENTANG KAMI
    </h2>
    <p>
     <a href="#">
      DAMARSTORE
     </a>
     adalah website yang menyediakan layanan digital seperti layanan streaming premium, voucher game, dan lain-lain. Kami berdiri sejak tahun 2023 dan telah dipercaya oleh berbagai konsumen.
    </p>
    <a href="{{ route('about') }}" class="text-1xl font-bold mb-4">Baca Selengkapnya</a>
   </section>
  </main>
  <footer class="footer text-center">
   <h2 class="text-xl font-bold mb-4">
    SOSIAL MEDIA
   </h2>
   <div class="flex justify-center space-x-4 mb-4">
    <a href="#">
     <i class="fab fa-instagram text-2xl">
     </i>
    </a>
    <a href="#">
     <i class="fab fa-facebook text-2xl">
     </i>
    </a>
    <a href="#">
     <i class="fab fa-twitter text-2xl">
     </i>
    </a>
    <a href="#">
     <i class="fab fa-github text-2xl">
     </i>
    </a>
    <a href="#">
     <i class="fab fa-linkedin text-2xl">
     </i>
    </a>
   </div>
   <p>
    ©2023 DAMARSTORE
   </p>
  </footer>
 </body>
</html>
