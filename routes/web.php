<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisteredUserController;

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




// blade-front-end 
    Route::get('/', [PageController::class,'index']);
    Route::get('/', [PageController::class,'index'])->name('/');
    Route::get('/about',[PageController::class,'about'])->name('about');
    Route::get('/contact',[PageController::class,'contact'])->name('contact');
    Route::get('/blog/{id}',[PageController::class,'blog'])->name('blog');


Route::group(["middleware" => ['auth']], function(){


    Route::group(["middleware" => ['IsAdmin']], function(){
        Route::get('/users', [PageController::class,'users'])->name('users');
        Route::get('/createuser', [UserController::class,'createuser'])->name('createuser');
        Route::post('/storeuser', [UserController::class,'store'])->name('storeuser');
        Route::post('/delete',[RegisteredUserController::class,'destroy'])->name('destroy');

    });
    // page-controller-routes
   
  
    // POST-vlog-controller-routes 
    Route::get('/createblog', [PostController::class,'create'])->name('createblog');
    Route::post('/storeblog', [PostController::class,'store'])->name('storeblog');
    // user-controller-routes
    
    
 });
 require __DIR__.'/auth.php';
 
