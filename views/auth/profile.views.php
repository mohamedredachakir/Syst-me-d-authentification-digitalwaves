<?php require './../services/auth.profile.php'; ?>
<link rel="stylesheet" href="/assest/css/profile.css">
<main class="bg-[#12081F] text-white min-h-screen flex items-center justify-center px-4 rounded-3xl">

  <div class="bg-[#1B1030] border border-white/10 rounded-3xl p-10 w-full max-w-lg shadow-2xl animate-fade">

    <div class="text-center mb-10">
      <div class="w-20 h-20 mx-auto rounded-full bg-purple-600 flex items-center justify-center text-3xl font-bold">
        <?= strtoupper($_SESSION['user_name'][0]) ?>
      </div>

      <h1 class="text-2xl font-bold mt-4">
        <?= htmlspecialchars($user['first_name'] . ' ' . $user['last_name']) ?>
      </h1>

      <p class="text-gray-400 text-sm mt-1">
        <?= htmlspecialchars($user['email']) ?>
      </p>
    </div>

    <div class="space-y-4 text-sm">

      <div class="flex justify-between border-b border-white/10 pb-2">
        <span class="text-gray-400">Full name</span>
        <span class="font-medium">
          <?= htmlspecialchars($user['first_name'] . ' ' . $user['last_name']) ?>
        </span>
      </div>

      <div class="flex justify-between border-b border-white/10 pb-2">
        <span class="text-gray-400">Email</span>
        <span class="font-medium">
          <?= htmlspecialchars($user['email']) ?>
        </span>
      </div>

      <div class="flex justify-between border-b border-white/10 pb-2">
        <span class="text-gray-400">Account created</span>
        <span class="font-medium">
          <?= htmlspecialchars($user['created_at']) ?>
        </span>
      </div>

    </div>

    <div class="mt-10 flex gap-4">
      <a href="/"
         class="flex-1 text-center py-3 rounded-xl border border-purple-500 text-purple-400
                hover:bg-purple-500 hover:text-black transition">
        Home
      </a>

      <a href="/logout"
         class="flex-1 text-center py-3 rounded-xl bg-red-500 hover:bg-red-600 transition">
        Logout
      </a>
    </div>

  </div>
</body>
