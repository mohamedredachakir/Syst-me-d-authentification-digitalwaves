<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?? 'DigitalWaves' ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800">

<header class="bg-white shadow-sm border-b">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

  
    <a href="/" class="text-2xl font-bold text-gray-900">
      Digital<span class="text-blue-600">Waves</span>
    </a>

    <nav class="flex space-x-6 text-sm font-medium">
      <a href="/" class="hover:text-blue-600">Home</a>
      <a href="/services" class="hover:text-blue-600">Services</a>
      <a href="/about" class="hover:text-blue-600">About</a>
      <a href="/contact" class="hover:text-blue-600">Contact</a>
    </nav>

   
    <div class="flex items-center space-x-4">

      <?php if (!isset($_SESSION['user_id'])): ?>
        
        <a href="/login"
           class="px-4 py-2 text-sm border border-blue-600 text-blue-600 rounded-lg hover:bg-blue-50">
          Login
        </a>

        <a href="/signup"
           class="px-4 py-2 text-sm bg-blue-600 text-white rounded-lg hover:bg-blue-700">
          Sign up
        </a>

      <?php else: ?>
       
        <div class="flex items-center space-x-3">

         
          <a href="/profile"><div class="w-9 h-9 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold">
            <?= strtoupper($_SESSION['user_name'][0]) ?>
          </div></a>

          
          <span class="text-sm font-medium">
            <?= htmlspecialchars($_SESSION['user_name']) ?>
          </span>

          
          <a href="/logout"
             class="px-3 py-2 text-sm bg-red-500 text-white rounded-lg hover:bg-red-600">
            Logout
          </a>

        </div>
      <?php endif; ?>

    </div>

  </div>
</header>

<main class="max-w-7xl mx-auto px-6 py-8">
