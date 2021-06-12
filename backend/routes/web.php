<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\ViewController;
use App\Http\Middleware\LogMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [HelloController::class, 'index']);
Route::get('/hello/view', [HelloController::class, 'view']);
Route::get('/hello/list', [HelloController::class, 'list']);
Route::get('/hello/plain', [HelloController::class, 'plain']);
Route::get('/hello/header', [HelloController::class, 'header']);
Route::get('/hello/outJson', [HelloController::class, 'outJson']);
Route::get('/hello/outFile', [HelloController::class, 'outFile']);
Route::get('/hello/outCsv', [HelloController::class, 'outCsv']);
Route::get('/hello/form', [HelloController::class, 'form']);
Route::post('/hello/result', [HelloController::class, 'result']);
Route::get('/hello/upload', [HelloController::class, 'upload']);
Route::post('/hello/uploadfile', [HelloController::class, 'uploadfile']);
Route::get('/hello/middle', [HelloController::class, 'middle'])
  ->middleware(LogMiddleware::class);
Route::get('/hello/session1', [HelloController::class, 'session1']);
Route::get('/hello/session2', [HelloController::class, 'session2']);
Route::get('/view/master', [ViewController::class, 'master']);