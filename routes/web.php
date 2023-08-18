<?php

use App\Http\Controllers\BlogController;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Models\Blog;
use PHPUnit\Event\Code\Test;

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
    $blogs = Blog::orderByDesc('created_at')->paginate(12);
    return view('blog.index', compact('blogs'));
});

Route::resource('blog', BlogController::class);
