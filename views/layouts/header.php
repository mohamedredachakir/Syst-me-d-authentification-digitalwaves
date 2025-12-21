<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?? 'DigitalWaves' ?></title>
  <link rel="stylesheet" href="/assest/css/flash.login.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#1A0E2B] text-gray-800">

<header class="bg-[#1A0E2B] border-b border-[#4B0082] shadow-md">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

    <a href="/" class="text-2xl font-bold text-white">
      Digital<span class="text-[#9B59B6]">Wave</span>
    </a>

    <nav class="hidden md:flex space-x-6 text-white font-medium">
      <a href="/" class="hover:text-[#9B59B6] transition-colors">Home</a>
      <a href="/services" class="hover:text-[#9B59B6] transition-colors">Services</a>
      <a href="/about" class="hover:text-[#9B59B6] transition-colors">About</a>
      <a href="/contact" class="hover:text-[#9B59B6] transition-colors">Contact</a>
    </nav>

    <div class="flex items-center space-x-4">
      <?php if (!isset($_SESSION['user_id'])): ?>
        <a href="/login"
           class="px-4 py-2 text-sm border border-[#9B59B6] text-[#9B59B6] rounded-lg hover:bg-[#9B59B6] hover:text-white transition-colors">
          Login
        </a>
        <a href="/signup"
           class="px-4 py-2 text-sm bg-[#9B59B6] text-white rounded-lg hover:bg-[#7D3FBF] transition-colors">
          Sign Up
        </a>
      <?php else: ?>
        <div class="flex items-center space-x-3">
          <a href="/profile">
            <div class="w-9 h-9 rounded-full bg-[#9B59B6] text-white flex items-center justify-center font-bold">
              <?= strtoupper($_SESSION['user_name'][0]) ?>
            </div>
          </a>
          <span class="text-white font-medium"><?= htmlspecialchars($_SESSION['user_name']) ?></span>
          <a href="/logout"
             class="px-3 py-2 text-sm bg-red-500 text-white rounded-lg hover:bg-red-600 transition-colors">
            Logout
          </a>
        </div>
      <?php endif; ?>
    </div>

    <div class="md:hidden">
      <button id="mobile-menu-button" class="text-white focus:outline-none">
        <i class="fas fa-bars text-2xl"></i>
      </button>
    </div>

  </div>
  <div id="mobile-menu" class="hidden md:hidden px-6 pb-4 space-y-2 bg-[#1A0E2B]">
    <a href="/" class="block text-white hover:text-[#9B59B6] transition-colors">Home</a>
    <a href="/services" class="block text-white hover:text-[#9B59B6] transition-colors">Services</a>
    <a href="/about" class="block text-white hover:text-[#9B59B6] transition-colors">About</a>
    <a href="/contact" class="block text-white hover:text-[#9B59B6] transition-colors">Contact</a>
  </div>
</header>

<script>
const menuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');
menuButton.addEventListener('click', () => {
  mobileMenu.classList.toggle('hidden');
});
</script>


<main class="max-w-7xl mx-auto px-6 py-8">
