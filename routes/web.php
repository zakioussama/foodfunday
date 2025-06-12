<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', function () {
    $menuItems = [
        'starters' => [
            ['name' => 'GARLIC BREAD', 'description' => 'Lorem ipsum dolor sit amet...', 'price' => 8.5, 'image' => 'menu-item-thumbnail-01.jpg'],
            // more starter items here
        ],
        'main_dishes' => [
            ['name' => 'MEAT FEAST PIZZA', 'description' => 'Lorem ipsum dolor sit amet...', 'price' => 5, 'image' => 'menu-item-thumbnail-04.jpg'],
            // more main dishes here
        ],
        'desserts' => [
            ['name' => 'CHOCOLATE FUDGECAKE', 'description' => 'Lorem ipsum dolor sit amet...', 'price' => 4.5, 'image' => 'menu-item-thumbnail-07.jpg'],
            // more dessert items here
        ],
        'drinks' => [
            ['name' => 'CHICKEN TIKKA MASALA', 'description' => 'Lorem ipsum dolor sit amet...', 'price' => 9.5, 'image' => 'menu-item-thumbnail-08.jpg'],
            // more drink items here
        ]
    ];

    return view('home', compact('menuItems'));
});
use App\Http\Controllers\ReservationController;

Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');