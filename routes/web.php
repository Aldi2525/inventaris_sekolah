<?php
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\BmasukController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\BkeluarController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes(
    [
        'register' => false
    ]
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route admin
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function (){
    Route::get('/', function() {
        return 'halaman admin';
    });
    Route::get('profile', function() {
        return 'halaman profile admin';

    });
    Route::resource('supplier', SupplierController::class);
    Route::resource('bmasuk', BmasukController::class);
    Route::resource('gudang', GudangController::class);
    Route::resource('bkeluar', BkeluarController::class);
});

