<?php require 'partials/header.php'; ?>

<main class="min-h-screen bg-grdient-to-b from-white to-gray">
    <div class="max-w-3xl mx-auto py-12 px-3 bg-gray-100">
        <div class="flex flex-col items-center justify-center mb-8 text-center">
            <div class="space-y-2">
                <div class="flex items-center justify-center gap-2">
                    <MessageSquare class="w-16 h-16 text-blue-500" />
                    <h1 class="text-3xl font-bold mb-2">Guestbook</h1>
                </div>
                <p class="text-gray-600 max-w-md">
                    We are thrilled to have you here. Please take a moment to leave message share your thoughts with us. 
                    Your feedback is important to us, and we appreciate your time and effort in helping us improve our services.
                </p>
                
            </div>

            <div class="relative">
            <div class="absolute -inset-1 -z-10 rounded-lg bg-gradient-to-br opacity-30 blur-lg"></div>
            <?php
                require 'form/form.php';
            ?>
            </div>

            <div class="flex justify-center items-center mt-8 mb-4">
                <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center gap-2">
                    <span class="inline-block bg-primary/10 text-primary font-bold px-2.5 py-1 rounded-md text-sm">
                    {entries.length}
                    </span>
                    <span>Messages</span>
                </h2>
                
                <div class="space-y-1">
                    {entries.map((entry, index) => (
                    <GuestbookEntry
                        key={entry.id}
                        name={entry.name}
                        message={entry.message}
                        date={entry.date}
                        className={index === 0 ? "animate-fade-in" : ""}
                    />
                    ))}
                </div>
            </div>
        </div>
    </div>
</main>
<?php require 'partials/footer.php'; ?>
