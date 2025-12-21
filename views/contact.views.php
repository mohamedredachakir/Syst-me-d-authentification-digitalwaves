
<link rel="stylesheet" href="/assest/css/contact.css">
<?php if ($success): ?>
  <div class="max-w-4xl mx-auto mt-6 bg-[#9B5CFF]/20 text-[#9B5CFF] text-center py-3 rounded-lg font-semibold">
    <?= $success ?>
  </div>
<?php endif; ?>

<section class="min-h-screen bg-[#12081F] text-white flex items-center rounded-2xl">

  <div class="max-w-7xl mx-auto px-6 py-24 grid md:grid-cols-2 gap-20 items-center">

    <div class="space-y-6 animate-left">
      <h1 class="text-5xl font-extrabold">
        Parlons de votre <span class="text-[#9B5CFF]">projet</span>
      </h1>

      <p class="text-gray-300 text-lg max-w-lg">
        Vous avez une idée ou un besoin digital ?
        Notre équipe vous accompagne pour créer une solution moderne et performante.
      </p>

      <div class="space-y-4 text-gray-300">
        <p>* Casablanca, Morocco</p>
        <p>* contact@digitalwave.com</p>
        <p>* +212 6 00 00 00 00</p>
      </div>
    </div>

    <div class="bg-[#1B1030] border border-white/10 rounded-3xl p-10 shadow-2xl animate-right">

      <form method="POST" class="space-y-5">

        <div>
          <input type="text" name="name" value="<?= $name ?>"
                 placeholder="Nom complet"
                 class="w-full px-4 py-4 rounded-xl bg-[#12081F] border border-white/10
                        focus:border-[#9B5CFF] focus:ring-2 focus:ring-[#9B5CFF]/40 outline-none"/>
          <small class="text-red-400"><?= $errors['name'] ?? '' ?></small>
        </div>

        <div>
          <input type="email" name="email" value="<?= $email ?>"
                 placeholder="Email"
                 class="w-full px-4 py-4 rounded-xl bg-[#12081F] border border-white/10
                        focus:border-[#9B5CFF] focus:ring-2 focus:ring-[#9B5CFF]/40 outline-none"/>
          <small class="text-red-400"><?= $errors['email'] ?? '' ?></small>
        </div>

        <div>
          <textarea name="message" rows="5"
                    placeholder="Votre message..."
                    class="w-full px-4 py-4 rounded-xl bg-[#12081F] border border-white/10
                           focus:border-[#9B5CFF] focus:ring-2 focus:ring-[#9B5CFF]/40 outline-none"><?= $message ?? '' ?></textarea>
          <small class="text-red-400"><?= $errors['message'] ?? '' ?></small>
        </div>

        <button type="submit"
                class="w-full py-4 bg-[#9B5CFF] rounded-xl font-semibold
                       hover:scale-105 transition">
          Envoyer le message
        </button>

      </form>
    </div>

  </div>
</section>