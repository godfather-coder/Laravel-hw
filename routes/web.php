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
    return   view('welcome');
});


Route::get('/posts', [PostController::class,'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class,'create'])->name('posts.create');
Route::post('/posts',[PostController::class,'store'])->name('posts.store');
Route::get('/posts/{user}',[PostController::class,'show'])->name('posts.show');
Route::get('/posts/edit',[PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{user}',[PostController::class,'update'])->name('posts.update');
Route::delete('/posts/{user}',[PostController::class,'destroy'])->name('posts.destroy');
Route::get('/posts/getComents',[PostController::class,'GetPostComments'])->name('post.getComments');


Route::get('/comments/create',[CommentControler::class,'create'])->name('comment.create');
Route::post('/comments',[CommentControler::class,'store'])->name('comment.store');
Route::get('/comments/edit',[CommentControler::class,'edit'])->name('comment.edit');
Route::put('/comments/{comment}',[CommentControler::class,'update'])->name('comment.update');
Route::delete('/comments/{comment}',[CommentControler::class,'destroy'])->name('comment.destroy');
Route::get('/comments/GetCommentUser',[CommentControler::class,'GetCommentUser'])->name('comment.GetCommentUser');
