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

    <div class="flex flex-col items-center justify-center ms-8 min-h-[300px]">

        <h1 class="text-4xl font-bold tracking-tight">Welcome!</h1>
        <p class="text-2xl">This is my first laravel project!</p>

    </div>
    <div class="flex flex-col items-end justify-center me-8">
            <h4 class="font-bold text-xl mb-2">Student</h4>
            <p class="italic">{{ $studentName }}</p>
    </div>
</main>

</body>
</html>