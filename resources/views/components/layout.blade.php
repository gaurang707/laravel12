<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <script defer src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@3.10.3/dist/alpine.min.js" defer></script>     --}}

    <!-- Tailwind CSS 4.1 CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js for interactivity -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>

<body>
    {{ $slot }}
</body>

</html>