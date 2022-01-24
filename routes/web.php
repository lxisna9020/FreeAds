<?php
use App\Http\Controllers\searchController;
use App\Http\Controllers\adController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewMessage;

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

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('/', function () {
    return view('index');
});

Route::get('/profile/ads', [searchController::class, 'filterPerProfile'])->name ('search.filterPerProfile') ;

Route::resource('ads', 'adController');

Route::get('/search', [searchController::class, 'filter'])->name ('search.filter');
//Route::get('/search', [searchController::class, 'search'])->name ('search.search');
//Route::get('/ads/{id}', [adController::class, 'show'])->name ('ads.show');
// Route::get('/ads/{id}', [adController::class, 'show'])->name('ads.show');             //on a retirer le ->whereNumber('id')


Route::get('/test-mail', function (){
    Notification::route('mail', 'botella.xin@gmail.com')->notify(new NewMessage());
    return 'Sent';
});