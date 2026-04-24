<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased bg-black text-white">
<img id="background" class="absolute -z-10 -right-0 top-0 scale-x-[-1] max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" />
@include("partials/navbar")
<main>
    <div class="flex flex-col justify-center ms-8 min-h-[300px]">

        <h1 class="text-4xl font-bold tracking-tight">
            About Us!
        </h1>
        <p class="text-2xl">Discover more about this project.</p>
    </div>
    <div class="flex flex-col items-end justify-center me-8">

        <h3 class="text-2xl font-semibold">For this project I used</h3>
        <ul>
            @foreach($technologies as $tech)
            <li class="italic">{{ $tech }}</li>
            @endforeach
        </ul>
    </div>
</main>
</body>
</html>