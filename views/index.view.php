<?php require 'partials/header.php'; ?>

<main class="min-h-screen bg-gradient-to-b from-white to-gray-100 py-12">
    <div class="max-w-5xl w-full mx-auto px-4 ">
        <div class="flex flex-col items-center justify-center mb-8 text-center">
            <!-- Heading -->
            <div class="space-y-2">
                <div class="flex items-center justify-center gap-2">
                    <h1 class="text-3xl sm:text-4xl font-bold mb-2"> 📖 Guestbook</h1>
                </div>
                <p class="text-gray-600 max-w-xl">
                    We are thrilled to have you here. Please take a moment to leave message share your thoughts with us. 
                    Your feedback is important to us, and we appreciate your time and effort in helping us improve our services.
                </p> 
            </div>

           <!-- Form Section -->
            <div class="relative w-full max-w-3xl mx-auto mb-12">
                <div class="absolute inset-0 -z-10 rounded-lg bg-gradient-to-br from-primary/20 to-purple-300 opacity-30 blur-lg"></div>
                    <form action="/guestbook" method="POST" class="w-full bg-white shadow-md rounded-lg p-6 space-y-4">
                        <div class="space-y-2 text-left">
                            <label for="name" class="text-gray-700 font-medium text-sm">Your Name</label>
                            <input type="text" name="name" id="name" required 
                                class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-purple-600/50" 
                                placeholder="Enter your name...">
                        </div>
                        <div class="space-y-2 text-left">
                            <label for="message" class="text-gray-700 text-sm font-medium">Your Message</label>
                            <textarea name="message" id="message" rows="4" required 
                                class="w-full border border-gray-300 rounded-md p-2 focus:outline-none focus:ring-2 focus:ring-purple-600/50" 
                                placeholder="Write something nice..." ></textarea>
                        </div>
                        <button type="submit" class="bg-purple-600 text-white font-semibold py-2 px-4 rounded-md hover:bg-purple-700 transition duration-200 w-full">
                            Sign the Guestbook
                        </button>
                    </form>
            </div>

            <!-- Guestbook messages -->
            <div class="w-full max-w-3xl mx-auto">
                <h2 class="text-xl font-semibold text-gray-800 mb-6 flex items-center gap-2">
                    <span class="inline-block bg-purple-100 text-purple-700 font-bold px-3 py-1 rounded-md text-sm">
                        2
                    </span>
                    <span>Messages</span>
                </h2>
                    
                <div class="space-y-4">
                    <div class="border-b border-gray-200 pb-4 text-left pl-10">
                        <div class="gap-2">
                            <h3 class="font-semibold text-gray-800">Name</h3>
                            <p class="text-xs text-gray-500">Date</p>
                        </div>
                        <div class="mt-2">
                            <p class="text-gray-700">Message...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require 'partials/footer.php'; ?>
