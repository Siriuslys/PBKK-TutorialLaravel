<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman home</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="h-full">
    
<div class="">
    <x-navbar></x-navbar>
    <x-header>{{ $title }}</x-header>
    
    <main class="flex w-full">
      <div class="flex w-full mx-auto">
        {{ $slot }}
      </div>
    </main>

  </div>
    <footer>
      <x-footer></x-footer>
    </footer>
</body>
</html>