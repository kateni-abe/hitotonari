<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        
        
    ]);
});



Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::resource('profiles', ProfileController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
});

Route::get('/', function () {
    return Inertia::render('Top'); // resources/js/Pages/Top.jsx
});

Route::get('/introduction', function () {
    return Inertia::render('Introduction'); // resources/js/Pages/Introduction.jsx
})->name('introduction');


Route::get('/profile-input', function () {
    return Inertia::render('ProfileInput');  
})->name('profileInput');

Route::get('/top', function () {
    return Inertia::render('Top'); // これはあなたのTopページのコンポーネント名になります。
})->name('top');


Route::get('/registration-complete', function () {
    return Inertia::render('Registration_Complete');
})->name('registration-complete');


// もし Mypage.jsx へのルートも必要であれば、以下のように追加
Route::get('/mypage', function () {
    return inertia('Mypage');
})->name('mypage');


require __DIR__.'/auth.php';