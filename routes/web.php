<?php

use App\Http\Controllers\conversations\ConversationController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/conversations', [ConversationController::class, 'index'])->middleware(['auth'])->name('conversations.index');
Route::get('/conversations/{conversation:uuid}', [ConversationController::class, 'show'])->middleware(['auth'])->name('conversation.show');
Route::get('/conversation/create', [ConversationController::class, 'create'])->middleware(['auth'])->name('conversations.create');
