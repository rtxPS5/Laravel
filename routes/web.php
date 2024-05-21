<?php

use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'home']);
    

Route::get('/about', [MainController::class, 'about' ]);

Route::get('/review', [MainController::class, 'review' ]) -> name('review');
Route::post('/review/check', [MainController::class, 'review_check' ]);

// Отправка почты ->
Route::get('send', 'mailController@send');


    


/* Route::get('/user/{id}/{name}', function ($id, $name) {
    return 'ID: '. $id.'. Name: '.$name;
});
*/