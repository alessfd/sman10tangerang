<!-- resources/views/components/facility-layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasilitas - SMAN 10 Tangerang</title>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

    <!-- Tailwind -->
    <link rel="stylesheet" href="{{ asset('css/home/home.css') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">

    <script src="{{asset('js/home/home.js')}}"></script>
</head>
<body class="bg-white">

<x-navbar-footer>
    <!-- Main Content -->
    <main class="container mx-auto mt-6">
        {{ $slot }}
    </main>

</x-navbar-footer>

</body>
</html>
