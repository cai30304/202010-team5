<?php

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

use Illuminate\Support\Facades\Auth;
//  Index
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/','FrontController@index');

Route::get('/error_page','FrontController@error_page');//測試error page
Route::get('/GreenBuilding','FrontController@GreenBuilding');

Route::get('/ProductType/{type_id}','FrontController@product_info');
Route::get('/BM_total','FrontController@BM_total');
Route::get('/BM_info','FrontController@BM_info');//用來測試頁面是否有套到css
Route::get('/BM_info_multi','FrontController@BM_info_multi');//用來測試頁面是否有套到css

Route::get('/news_index','FrontController@news_index');
Route::get('/news_index/{news_id}','FrontController@news_info');
Route::get('/about_us','FrontController@about_us');
Route::post('/contact_us','FrontController@delieverContactUsData');
Route::get('/contact_us','FrontController@contact_us');

//Start up auth
// Auth::routes(['register'=>false]); //Close register system
Auth::routes();

//Backend Home
Route::get('/admin', 'HomeController@index')->name('home');

Route::prefix('admin')->middleware(['auth'])->group(function(){
    Route::resource('Products','ProductController');
    Route::resource('ProductsTypes','ProductTypesController');
    Route::get('/ContactMessages/info/{info_id}','ContactMessagesController@info');
    Route::resource('ContactMessages','ContactMessagesController');
    Route::resource('ContactService','ContactServiceController');
    Route::resource('BannerImages','BannerImagesController');
    Route::resource('News','NewsController');
    Route::delete('/ProductImages/{product_id}/{image_id}','MaterialImagesController@destroy');


    // summer note upload/delete img
    Route::post('/ajax_upload_img', 'AdminController@ajax_upload_img');
    Route::post('/ajax_delete_img', 'AdminController@ajax_delete_img');

});

