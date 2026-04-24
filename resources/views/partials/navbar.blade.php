<header>
<nav class="w-full px-8 py-4 flex items-center border-b border-white/10 backdrop-blur-sm bg-white/5">

<a href="{{ route('home') }}" class="text-lg font-semibold tracking-tight text-white hover:text-gray-200 transition-colors">
    Home
</a>

<ul class="flex items-center gap-6 absolute left-1/2 -translate-x-1/2">
    <li>
        <a href="{{ route('about') }}" class="text-sm {{ Route::is('about') ? 'text-white font-bold' : 'text-white/60 hover:text-white transition-colors' }}">
            About us
        </a>
    </li>
    <li>
        <a href="{{ route('contacts') }}" class="text-sm {{ Route::is('contacts') ? 'text-white font-bold' : 'text-white/60 hover:text-white transition-colors' }}">
            Our Contacts
        </a>
    </li>
</ul>

</nav>
</header>