<?php

use App\Models\Article;
use App\Models\typeArticle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;

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




 
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); # j'essaie de faire un truc sur git 


