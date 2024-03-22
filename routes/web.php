<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'jobs' => [
            [
                'title' => 'CEO',
                'company' => 'Google',
                'salary' => '$200,000',
            ],
            [
                'title' => 'Web Developer',
                'company' => 'XYZ Company',
                'salary' => '$100,000',
            ],
            [
                'title' => 'API Developer',
                'company' => 'ABC Company',
                'salary' => '$150,000',
            ]
        ]
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact',
    ]);
});
