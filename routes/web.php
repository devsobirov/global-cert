<?php

use App\Http\Controllers\BlogController as Blog;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\WebController;

$localizedGroup = ['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]];

Route::group($localizedGroup, function() {

    Route::get('/', [WebController::class, 'homepage'])->name('web.home');
    Route::controller(Blog::class)->prefix('blog')->as('web.blog.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{post}', 'show')->name('show');
    });

    Auth::routes(['register' => false, 'reset' => false, 'verify' => false]);
});


Route::prefix('home')->middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::resource('banners', BannerController::class)->except(['show'])->names('banners');
    Route::resource('posts', PostController::class)->except(['show'])->names('posts');

    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
