<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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





// Route::get('post/create',[PostController::class,'create']);


// Route::get('post',[PostController::class,'index'])->name('post.posts');



// Route::post('post/insert',[PostController::class,'insert'])->name('post.insert');



// Route::get('post/updata/{id}',[PostController::class,'updata'])->name('post.edit');


// Route::PUT('post/edit/{id}',[PostController::class,'edit'])->name('post.update');

// make group

Route::controller(PostController::class)->group(function(){



    Route::get('post/create','create');


    Route::get('post','index')->name('post.posts');
    
    
    
    Route::post('post/insert','insert')->name('post.insert');
    
    
    
    Route::get('post/updata/{id}','updata')->name('post.edit');
    
    
    Route::PUT('post/edit/{id}','edit')->name('post.update');
    
    
    Route::get('post/delete/{id}','delete')->name('post.delete');


    Route::get('post/deleteall','deleteall')->name('post.deleteall');


});