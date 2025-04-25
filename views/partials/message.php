<!-- Guestbook messages -->
<div class="w-full max-w-3xl mx-auto">
  <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center gap-2">
      <span class="inline-block bg-purple-100 text-purple-700 font-bold px-3 py-1 rounded-md text-sm">
          <?= count($entry) ?>
      </span>
      <span>Messages</span>
  </h2>

  <?php require "form/entry.php" ?>
</div>
