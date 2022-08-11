<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;

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
// front-end 


// Route::get('/index', function () {
//     return view('front.index');
// })->middleware(['auth'])->name('/');

require __DIR__.'/auth.php';


// blade-front-end 
Route::get('/', [PageController::class,'index']);
Route::get('/', [PageController::class,'index'])->middleware(['auth'])->name('/');
Route::get('/about',[PageController::class,'about'])->name('about');
Route::get('/contact',[PageController::class,'contact'])->name('contact');
Route::get('/guestblog',[PageController::class,'guestblog'])->name('guestblog');

Route::group(["middleware" => ["auth"]], function(){
    // page-controller-routes
    Route::get('/blog',[PageController::class,'blog'])->name('blog');
    Route::get('/users', [PageController::class,'users'])->name('users');
    // post-controller-routes 
    Route::get('/createblog', [PostController::class,'create'])->name('createblog');
    Route::post('/storeblog', [PostController::class,'store'])->name('storeblog');
    // user-controller-routes
    Route::get('/createuser', [UserController::class,'createuser'])->name('createuser');
    Route::post('/storeuser', [UserController::class,'store'])->name('storeuser');
    
 });

 
