<div class="space-y-4">
  <?php foreach($entry as $message): ?>
    <div class="border-b border-gray-200 pb-4 text-left">
      <div class="flex items-center gap-4">
        <div class="rounded-full bg-red-200 flex items-center justify-center text-red-800  w-8 h-8">
            <?= strtoupper(substr(htmlspecialchars($message['name']), 0, 1)) ?>
        </div>
        <div>
            <h3 class="font-semibold text-gray-800">
                <?= htmlspecialchars($message['name']) ?>
            </h3>
            <p class="text-xs text-white">
                <?= date("F j, Y \a\\t g:i A", strtotime($message['created_at'])) ?>
            </p>
        </div>
      </div>

      <div class="mt-2">
          <p class="text-gray-700 pl-12">
            <?= nl2br($message['message']) ?>
          </p>
      </div>
    </div>
  <?php endforeach; ?>
</div>