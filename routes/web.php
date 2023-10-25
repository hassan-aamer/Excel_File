<?php

use App\Http\Controllers\UserExcelController;
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
    return view('Pages.create');
});

Route::resource('userExcel', UserExcelController::class);
Route::controller(UserExcelController::class)->group(function(){
    Route::get('users_export', 'export')->name('users_export');
    Route::post('users_import', 'import')->name('users_import');
});

