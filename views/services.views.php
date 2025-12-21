<?php require __DIR__ .'/../core/data.services.php'; ?>
<link rel="stylesheet" href="/assest/css/services.css">

<div class="bg-[#12081F] min-h-screen w-full text-white overflow-hidden rounded-2xl">

  
  <section class="max-w-7xl mx-auto px-6 py-28 grid md:grid-cols-2 gap-16 items-center">


    <div class="space-y-6 animate-left">
      <h1 class="text-5xl md:text-6xl font-extrabold">
        Nos <span class="text-[#9B5CFF]">Services</span>
      </h1>
      <p class="text-gray-300 text-lg max-w-lg">
        Nous aidons les entreprises à créer des produits digitaux performants,
        élégants et orientés résultats.
      </p>
      <a href="/contact"
         class="inline-block px-8 py-4 bg-[#9B5CFF] rounded-xl font-semibold hover:scale-105 transition">
        Discutons de votre projet
      </a>
    </div>

  
    <div class="relative animate-right">
      <div class="absolute -top-20 -right-20 w-96 h-96 bg-[#9B5CFF]/20 blur-[120px]"></div>
      <div class="bg-[#1B1030] border border-white/10 rounded-3xl p-10 shadow-2xl">
        <p class="text-xl font-semibold text-[#9B5CFF] mb-2">DigitalWave</p>
        <p class="text-gray-300">
          Design · Développement · Branding · Performance
        </p>
      </div>
    </div>

  </section>


  <section class="max-w-7xl mx-auto px-6 pb-32">

    <div class="grid md:grid-cols-3 gap-10">

      <?php foreach ($services as $service): ?>
        <div
          class="bg-[#1B1030] border border-white/10 rounded-2xl p-8
                 hover:-translate-y-3 hover:shadow-[0_20px_40px_rgba(155,92,255,0.3)]
                 transition duration-300 animate-fade">

          <div class="w-14 h-14 rounded-xl bg-[#9B5CFF]/20 flex items-center justify-center
                      text-2xl font-bold text-[#9B5CFF] mb-6">
            <?= $service['icon'] ?? '◆' ?>
          </div>

          <h3 class="text-xl font-bold mb-3">
            <?= $service['title'] ?>
          </h3>

          <p class="text-gray-300 text-sm leading-relaxed mb-6">
            <?= $service['description'] ?>
          </p>

          <a href="/contact"
             class="text-[#9B5CFF] font-semibold hover:underline">
            En savoir plus →
          </a>
        </div>
      <?php endforeach; ?>

    </div>

  </section>

</div>

