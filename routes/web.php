<?php
use App\Http\Middleware\IsAdmin;
use App\Products;
use Illuminate\Support\Facades\Input;
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

Route::group(['middleware' => ['auth', 'admin']], function(){
    Route::get('/admin',  'AdminController@admin', function () {
        return view('admin');
    });
    Route::resource('admin/producten', 'CRUDController');
});

Auth::routes();
Route::resource('bestel/producten', 'CRUDController');
// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'user']], function(){
    Route::get('/user', 'HomeController@index')->name('home');
    Route::get('/user/map', 'MapController@map')->name('map');
    Route::get('/user/producten', 'ProductenController@producten')->name('producten');
    // Route::get('/user/producten/bestel', 'ProductenController@edit');
});
