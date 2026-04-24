<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data = [
        'title' => 'Laravel Primi Passi',
        'studentName' => 'Nicole'
    ];
    return view('home', $data);
})->name('home');

Route::get('/about', function () {
    $stack = ['PHP 8.2', 'Laravel 11', 'Tailwind CSS', 'Vite'];
    return view('about')->with('technologies', $stack);
})->name('about');

Route::get('/contacts', function () {
    $contacts = [
        ['name' => 'Support', 'email' => 'support@example.com'],
        ['name' => 'Developer Department', 'email' => 'dev@example.com'],
    ];
    return view('contacts', compact('contacts'));
    // compact('contacts') è una scorciatoia PHP per ['contacts' => $contacts]
})->name('contacts');
