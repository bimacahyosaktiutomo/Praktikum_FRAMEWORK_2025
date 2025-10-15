<?php

use App\Models\Students;
use Illuminate\Support\Facades\Route;

// 1
Route::get('/', function () {
    $data = [
        [
            'id' => 1,
            'name' => 'albedo',
            'img' => 'https://sunderarmor.com/GENSHIN/Characters/1/Albedo.png'
        ],
        [
            'id' => 2,
            'name' => 'alex',
            'img' => 'https://sunderarmor.com/GENSHIN/Characters/1/Nahida.png'
        ],
        [
            'id' => 3,
            'name' => 'aldi',
            'img' => 'https://sunderarmor.com/GENSHIN/Characters/1/Alhaitham.png'
        ],
        [
            'id' => 4,
            'name' => 'andi',
            'img' => 'https://sunderarmor.com/GENSHIN/Characters/1/Ayato.png'
        ]
    ];

    return view('welcome', [
        "title" => "Welcome",
        "data" => $data
    ]);
})->name('welcome');