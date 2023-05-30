<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\SiteController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/clear', function () {
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
});

Route::get('/and', [TestController::class, 'test']);

// Route::controller('SiteController')->group(function () {

    // Route::get('/contact', 'contact')->name('contact');
    // Route::post('/contact', 'contactSubmit');

    // Route::post('/subscribe', 'subscribe')->name('subscribe.post');

    // Route::get('/change/{lang?}', 'changeLanguage')->name('lang');

    // Route::get('cookie-policy', 'cookiePolicy')->name('cookie.policy');

    // Route::get('/cookie/accept', 'cookieAccept')->name('cookie.accept');

    // Route::get('games', 'games')->name('games');

    // Route::get('blog', 'blog')->name('blog');
    // Route::get('blog/{slug}/{id}', 'blogDetails')->name('blog.details');

    // Route::get('policy/{slug}/{id}', 'policyPages')->name('policy.pages');

    // Route::get('placeholder-image/{size}', 'placeholderImage')->name('placeholder.image');

    // Route::get('/{slug}', 'pages')->name('pages');

    Route::get('/', [SiteController::class, 'index'])->name('home');
// });