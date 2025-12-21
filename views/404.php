<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>404 - Page introuvable</title>
<script src="https://cdn.tailwindcss.com"></script>

<style>
@keyframes float {
  0%,100% { transform: translateY(-20px); }
  50% { transform: translateY(20px); }
}
@keyframes spin-slow {
  from { transform: rotate(0deg); }
  to { transform: rotate(360deg); }
}
@keyframes fade-up {
  from { opacity: 0; transform: translateY(40px); }
  to { opacity: 1; transform: translateY(0); }
}

.float { animation: float 10s ease-in-out infinite; }
.spin-slow { animation: spin-slow 35s linear infinite; }
.fade-up { animation: fade-up 1.2s ease forwards; }

.glow {
  text-shadow:
    0 0 20px #a855f7,
    0 0 40px #a855f7,
    0 0 80px #a855f7;
}
</style>
</head>

<body class="m-0 p-0 bg-[#12081F] text-white overflow-hidden">

<section class="w-full h-screen flex flex-col items-center justify-center text-center relative px-6">

 
  <div class="absolute w-[500px] h-[500px] bg-purple-600/20 rounded-full top-[-150px] left-[-150px] spin-slow"></div>
  <div class="absolute w-[350px] h-[350px] bg-purple-500/20 rounded-full bottom-[-100px] right-[-100px] float"></div>
  <div class="absolute w-[200px] h-[200px] bg-purple-400/20 rounded-full top-[30%] right-[25%] float"></div>

 
  <h1 class="text-[18rem] font-extrabold leading-none glow float">
    404
  </h1>

  <h2 class="text-5xl font-bold mb-6 fade-up">
    Page introuvable
  </h2>

  <p class="text-lg max-w-xl text-white/70 mb-12 fade-up">
    La page que vous cherchez n’existe pas ou a été déplacée. Revenez à l’accueil pour continuer.
  </p>


  <div class="flex gap-6 fade-up">
    <a href="/"
       class="px-12 py-4 rounded-full bg-purple-600 text-black font-bold text-lg shadow-xl hover:shadow-purple-500 hover:scale-110 transition">
      Accueil
    </a>

    <a href="/services"
       class="px-12 py-4 rounded-full border-2 border-purple-600 text-purple-400 font-bold text-lg hover:bg-purple-600 hover:text-black hover:scale-110 transition">
      Services
    </a>
  </div>

</section>
</body>
</html>
