<!DOCTYPE html>
<html>
  <head>
    <title>Tailwind Header Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
  </head>
  <body>
    <header class="bg-gray-800 py-4">
      <div class="container mx-auto flex justify-between items-center px-4">
        <div class="text-white font-bold text-xl">My Website</div>
        <nav class="flex">
          <a href="#" class="px-4 py-2 text-white hover:bg-gray-700">Home</a>
          <a href="#" class="px-4 py-2 text-white hover:bg-gray-700">About</a>
          <a href="#" class="px-4 py-2 text-white hover:bg-gray-700">Contact</a>
        </nav>
      </div>
    </header>

    <main class="container mx-auto my-8">
      <p>This is the main content of my website.</p>
    </main>
  </body>
</html>
