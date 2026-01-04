<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $menu = [
        [
            'name' => 'Truffle Pizza',
            'desc' => 'Black truffle & mozzarella',
            'price' => 18,
            'image' => 'https://images.unsplash.com/photo-1604382354936-07c5d9983bd3'
        ],
        [
            'name' => 'Pepperoni Royale',
            'desc' => 'Premium pepperoni & cheese',
            'price' => 14,
            'image' => 'https://images.unsplash.com/photo-1548365328-8b849e6c7c73'
        ],
        [
            'name' => 'Vegetarian Deluxe',
            'desc' => 'Fresh vegetables & olive oil',
            'price' => 13,
            'image' => 'https://images.unsplash.com/photo-1513104890138-7c749659a591'
        ],
        [
            'name' => 'Seafood Pizza',
            'desc' => 'Shrimp & calamari',
            'price' => 20,
            'image' => 'https://images.unsplash.com/photo-1594007654729-407eedc4be8b'
        ]
    ];

    return view('home', compact('menu'));
});
