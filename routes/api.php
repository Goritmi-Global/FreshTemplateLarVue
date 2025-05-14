<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController; 
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
 */

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('login', [HomeController::class, 'login'])->name('api.login');
Route::middleware(['web'])->group(function () {
    Route::post('/logout', [HomeController::class, 'logout_user'])->name('api.logout');
     

       // Users Api
       Route::get('/users/fetch', [UserController::class, 'users_fetch'])->name('api.users.fetch');
       Route::post('/users/store', [UserController::class, 'store'])->name('api.users.store');
       Route::delete('/users/delete/{id}', [UserController::class, 'delete'])->name('api.users.delete');
       Route::get('/users/show/{id}', [UserController::class, 'show'])->name('api.users.show');
       Route::post('/users/update', [UserController::class, 'users_update'])->name('api.users.update');


});
