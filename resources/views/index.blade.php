<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Damar Store</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-purple-900 text-white font-sans">
  <!-- Header -->
  <header class="flex items-center justify-between p-4 bg-purple-800">
    <div class="text-3xl font-bold text-green-400">DAMARSTORE</div>
    <div class="flex items-center">
      <input type="text" placeholder="Cari Sesuatu Disini" class="px-4 py-2 text-black rounded-l-md">
      <button class="px-4 py-2 font-semibold text-black bg-green-400 rounded-r-md">CARI</button>
    </div>
  </header>

  <!-- Navbar -->
  <nav class="flex justify-center gap-6 py-4 bg-purple-700">
    <a href="#" class="text-lg font-semibold text-white hover:text-green-400">BERANDA</a>
    <a href="#" class="text-lg font-semibold text-white hover:text-green-400">PRODUK</a>
    <a href="#" class="text-lg font-semibold text-white hover:text-green-400">TENTANG</a>
  </nav>

  <!-- Banner -->
  <section class="relative h-64 bg-cover bg-center" style="background-image: url('https://via.placeholder.com/800x300');">
    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
      <p class="text-xl font-semibold">Klik Disini Untuk Slide Gambar</p>
    </div>
  </section>

  <!-- Product Categories -->
  <section class="px-4 py-8">
    <div class="grid grid-cols-2 gap-4 sm:grid-cols-4 lg:grid-cols-6">
      <!-- Game Cards -->
      <div class="p-4 bg-purple-700 rounded-lg text-center">Free Fire</div>
      <div class="p-4 bg-purple-700 rounded-lg text-center">Mobile Legends</div>
      <div class="p-4 bg-purple-700 rounded-lg text-center">PUBG Mobile</div>
      <div class="p-4 bg-purple-700 rounded-lg text-center">Valorant</div>
      <div class="p-4 bg-purple-700 rounded-lg text-center">Genshin Impact</div>
      <div class="p-4 bg-purple-700 rounded-lg text-center">Higgs Domino</div>
    </div>

    <div class="mt-8 grid grid-cols-2 gap-4 sm:grid-cols-4 lg:grid-cols-6">
      <!-- Streaming Apps -->
      <div class="p-4 bg-green-500 rounded-lg text-center">Spotify Premium</div>
      <div class="p-4 bg-yellow-500 rounded-lg text-center">Viu Premium</div>
      <div class="p-4 bg-pink-500 rounded-lg text-center">Vidio Premium</div>
      <div class="p-4 bg-blue-500 rounded-lg text-center">NimoTV</div>
      <div class="p-4 bg-green-400 rounded-lg text-center">iQiyi Premium</div>
      <!-- Voucher -->
      <div class="p-4 bg-white text-black rounded-lg text-center">Garena Shell</div>
    </div>
  </section>

  <!-- About Section -->
  <section class="flex items-center justify-center px-4 py-8">
    <div class="p-6 bg-purple-800 rounded-lg shadow-lg max-w-xl text-center">
      <h2 class="text-2xl font-bold mb-4">TENTANG KAMI</h2>
      <p class="text-base">
        <span class="text-green-400 font-semibold">DAMARSTORE</span> adalah website yang menyediakan layanan digital seperti layanan streaming premium, voucher game, dan lain-lain. Kami berdiri sejak tahun 2023 dan telah dipercaya oleh berbagai konsumen.
      </p>
    </div>
  </section>

  <!-- Footer -->
  <footer class="flex flex-col items-center py-4 bg-purple-800">
    <div class="flex gap-4 mb-4">
      <a href="#"><img src="https://via.placeholder.com/24x24" alt="Instagram"></a>
      <a href="#"><img src="https://via.placeholder.com/24x24" alt="Facebook"></a>
      <a href="#"><img src="https://via.placeholder.com/24x24" alt="GitHub"></a>
      <a href="#"><img src="https://via.placeholder.com/24x24" alt="LinkedIn"></a>
    </div>
    <p class="text-sm">&copy;2023 DAMARSTORE</p>
  </footer>
</body>
</html>
