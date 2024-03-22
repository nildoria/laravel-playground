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
        'title' => 'Home',
    ]);
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'CEO',
                'company' => 'Google',
                'salary' => '$200,000',
            ],
            [
                'id' => 2,
                'title' => 'Web Developer',
                'company' => 'XYZ Company',
                'salary' => '$100,000',
            ],
            [
                'id' => 3,
                'title' => 'API Developer',
                'company' => 'ABC Company',
                'salary' => '$150,000',
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'CEO',
            'company' => 'Google',
            'salary' => '$200,000',
        ],
        [
            'id' => 2,
            'title' => 'Web Developer',
            'company' => 'XYZ Company',
            'salary' => '$100,000',
        ],
        [
            'id' => 3,
            'title' => 'API Developer',
            'company' => 'ABC Company',
            'salary' => '$150,000',
        ]
    ];

    $job = \Illuminate\Support\Arr::first($jobs, fn($job) => $job['id'] == $id);

    return view('job', [
        'job' => $job
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact',
    ]);
});
