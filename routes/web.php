<?php

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

Auth::routes();

// ADMIN PANEL ROUTES---------------------------------------
Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function() {
    // DASHBOARD
    Route::get('/', function () {
        return redirect()->route('dashboard');
    });

    // BLADE INDEXES----------------------------------------------------------------
    Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');
    Route::get('/index_kickers', 'Admin\UserController@index_kickers')->name('index_kickers');
    Route::get('/index_punters', 'Admin\UserController@index_punters')->name('index_punters');
    Route::get('/index_long_snappers', 'Admin\UserController@index_long_snappers')->name('index_long_snappers');
    // ----------------------------------------------------------------------------

    // API RESOURCES-------------------------------------------------
    Route::apiResources(['user'=>'Admin\UserController']);
    Route::apiResources(['logo'=>'Admin\LogoController']);
    Route::apiResources(['setting'=>'Admin\SettingController']);
    Route::apiResources(['banner'=>'Admin\BannerController']);
    Route::apiResources(['article'=>'Admin\ArticleController']);
    Route::apiResources(['brand'=>'Admin\BrandController']);
    Route::apiResources(['feature'=>'Admin\FeatureController']);
    // --------------------------------------------------------------

    // SEARCH ROUTES--------------------------------------------------------------------------------------------
    Route::get('/search_users', 'Admin\UserController@search_users')->name('search_users');
    Route::get('/search_banners', 'Admin\TestimonialController@search_banners')->name('search_banners');
    Route::get('/search_articles', 'Admin\TestimonialController@search_articles')->name('search_articles');
    Route::get('/search_brands', 'Admin\TestimonialController@search_brands')->name('search_brands');
    Route::get('/search_features', 'Admin\TestimonialController@search_features')->name('search_features');
    // ---------------------------------------------------------------------------------------------------------
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', function(){
//     return view('web.home.index');
// })->name('home');
Route::get('/home', 'Web\HomeController@index')->name('home');
Route::get('/about_us', 'Web\HomeController@about_us')->name('about_us');
Route::get('/articles', 'Web\HomeController@articles')->name('articles');
Route::get('/kickers', 'Web\HomeController@kickers')->name('kickers');
Route::get('/packages', 'Web\HomeController@packages')->name('packages');
Route::get('/contact_us', 'Web\HomeController@contact_us')->name('contact_us');
