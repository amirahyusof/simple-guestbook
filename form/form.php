<form method="POST" class="w-full bg-white shadow-md rounded-lg p-6 space-y-4">
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
  <button type="submit" class="bg-red-800 text-white font-semibold py-2 px-4 rounded-md hover:bg-purple-700 transition duration-200 w-full">
      Sign the Guestbook
  </button>
</form>