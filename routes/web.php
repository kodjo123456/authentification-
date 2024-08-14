 <?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ZozoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [ZozoController::class, 'vue'])->name('login');

Route::get('/login',[ZozoController::class, 'login'])->name('login');


Route::get('/registration', [ZozoController::class,'registration'])->name('registration');

Route::get('/logout',  [ZozoController::class,'logout'])->name('logout');

Route::middleware('auth')->group(function (){

    Route::get('/dashboard', [ZozoController::class,'dashboard'])->name('dashboard');
});

Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::post('/registration', [AuthController::class, 'registration'])->name('registration.process');

 
