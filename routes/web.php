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

Route::get('/', function () {
    return view('welcome');
})
    ->name('home');

Route::get('about', function () {
    return view('welcome');
})
    ->name('about');

Route::get('book-consultation', function () {
    return view('welcome');
})
    ->name('book');

Route::prefix('contests')
    ->name('contests.')
    ->group(function () {

        // TODO: Future contest routes. Add friendly redirect (ie, /win).

    });

Route::get('faq', function () {
    return view('welcome');
})
    ->name('faq');

Route::prefix('policies')
    ->name('policies.')
    ->group(function () {

        Route::get('cancellation', function () {
            return view('welcome');
        })
            ->name('cancellation');

        Route::get('privacy', function () {
            return view('welcome');
        })
            ->name('privacy');

    });

Route::prefix('services')
    ->name('services.')
    ->group(function () {

        Route::get('teardown-cleanup', function () {
            return view('welcome');
        })
            ->name('teardown');

        Route::get('custom-decor', function () {
            return view('welcome');
        })
            ->name('decor');

        Route::get('speech-services', function () {
            return view('welcome');
        })
            ->name('speech');

        Route::get('invitations', function () {
            return view('welcome');
        })
            ->name('invitations');

    });

Route::get('sitemap', function () {
    return view('welcome');
})
    ->name('sitemap');
