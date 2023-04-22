<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Models\Contact;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

});


*/
Route::get('/', [ContactController::class, 'index']);

Route::post('/', [ContactController::class, 'store']);

Route::get('/add', function () {
    return view('add');
});

Route::get('/contacts/{contact}', [ContactController::class, 'view']);

Route::put('/contacts/{contact}', [ContactController::class, 'update']);

Route::delete('/contacts/{id}',  [ContactController::class, 'destroy']);

Route::get('/contacts/{id}/edit', [ContactController::class, 'edit']);

