<?php

use App\Http\Controllers\SendMailController;
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
    return view('welcome');
});

Route::get('/sendMail', [SendMailController::class, 'getSendMail'])->name('getSingleMail');
Route::post('/postSendMail', [SendMailController::class, 'postSendMail'])->name('postSingleMail');
Route::post('/postSendJobMail', [SendMailController::class, 'postSendJobMail'])->name('postJobMail');