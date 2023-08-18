<?php

use App\Http\Controllers\ChannelController;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Models\Channel;
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
    $channels = Channel::latest('created_at')->get();
    return view('channel.index', compact('channels'));
});

Route::resource('channel', ChannelController::class);
