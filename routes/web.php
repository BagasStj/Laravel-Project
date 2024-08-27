<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/csr-category');
});


Route::get('/csr-articles', function () {
    $articles = [
        [
            'title' => 'Together We Can Stop The Setback',
            'description' => 'Sriboga News - Economy',
            'date' => '20/07/2022',
            'status' => 'Publish',
            'image' => asset('images/ekonomi.jpg') // Assuming the image is stored in public/images
        ],
        [
            'title' => 'Marugame Udon',
            'description' => 'Sriboga News - Economy',
            'date' => '25/07/2022',
            'status' => 'Not Publish',
            'image' => asset('images/marugame_udon.jpg') // Assuming the image is stored in public/images
        ],
        [
            'title' => 'Pizza Hut',
            'description' => 'Sriboga News - Economy',
            'date' => '20/07/2022',
            'status' => 'Publish',
            'image' => asset('images/pizza_hut.jpeg') // Assuming the image is stored in public/images
        ],
        [
            'title' => 'Together We Can Stop The Setback',
            'description' => 'Sriboga News - Economy',
            'date' => '20/07/2022',
            'status' => 'Publish',
            'image' => asset('images/ekonomi.jpg') // Assuming the image is stored in public/images
        ],
        [
            'title' => 'Marugame Udon',
            'description' => 'Sriboga News - Economy',
            'date' => '25/07/2022',
            'status' => 'Not Publish',
            'image' => asset('images/marugame_udon.jpg') // Assuming the image is stored in public/images
        ],
        [
            'title' => 'Pizza Hut',
            'description' => 'Sriboga News - Economy',
            'date' => '20/07/2022',
            'status' => 'Publish',
            'image' => asset('images/pizza_hut.jpeg') // Assuming the image is stored in public/images
        ],
    ];

    return view('csr_articles', ['articles' => $articles]);
});

Route::get('/csr-category', function () {
    return view('csr_category');
});