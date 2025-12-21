<link rel="stylesheet" href="/assest/css/login.css">

<div class="min-h-screen flex items-center justify-center bg-[#12081F] p-6 rounded-3xl">

  <div class="w-full max-w-md bg-[#1B1030] border border-white/10 rounded-3xl p-8 shadow-2xl animate-fade">

    <div class="text-center mb-8">
      <h2 class="text-3xl font-extrabold tracking-wide">
        Digital<span class="text-purple-500">Waves</span>
      </h2>
      <p class="text-gray-400 mt-2">Login to your account</p>
    </div>

    <?php if(isset($_SESSION['error'])): ?>
      <div class="bg-red-500/10 border border-red-500 text-red-400 px-4 py-3 rounded-xl mb-6 text-sm">
        <?= $_SESSION['error']; unset($_SESSION['error']); ?>
      </div>
    <?php endif; ?>

    <form method="POST" class="space-y-5">

      <input type="email" name="email" placeholder="Email address" required
        class="input-style">

      <input type="password" name="password" placeholder="Password" required
        class="input-style">

      <div class="flex items-center justify-between text-sm text-gray-400">
        <label class="flex items-center gap-2">
          <input type="checkbox" name="remember" class="accent-purple-500">
          Remember me
        </label>

        <a href="/auth/forgot.php" class="text-purple-400 hover:underline">
          Forgot password?
        </a>
      </div>

      <button type="submit"
        class="w-full mt-4 py-3 rounded-xl bg-purple-600 font-semibold text-black
               hover:bg-purple-500 transition-all hover:scale-[1.02]">
        Login
      </button>
    </form>

    <p class="text-center text-gray-400 mt-6 text-sm">
      Don’t have an account?
      <a href="/signup" class="text-purple-400 hover:underline">Sign Up</a>
    </p>

  </div>
</div>


