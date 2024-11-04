<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/api/users', function (){
    return [
        [
            'id' => 1,
            'name' => 'Yaril'
        ],
        [
            'id' => 2,
            'name' => 'Kiril'
        ],
        [
            'id' => 3,
            'name' => 'Max'
        ],
        [
            'id' => 4,
            'name' => 'Bogdan'
        ],
        [
            'id' => 5,
            'name' => 'Tape'
        ],
        [
            'id' => 6,
            'name' => 'Frake'
        ],
    ];
});
