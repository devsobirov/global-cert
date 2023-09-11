<?php

use App\Http\Controllers\Admin\BlockController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\BlogController as Blog;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\WebController;

$localizedGroup = ['prefix' => LaravelLocalization::setLocale(),'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]];

Route::prefix('home')->middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::resource('menus', MenuController::class)->except('show')->names('menu');
    Route::resource('banners', BannerController::class)->except(['show'])->names('banners');
    Route::resource('posts', PostController::class)->except(['show'])->names('posts');
    Route::resource('pages', PageController::class)->except(['show'])->names('pages');
    Route::resource('blocks', BlockController::class)->except(['index', 'create'])->names('blocks');
    Route::apiResource('employees', EmployeeController::class)->except(['show'])->names('employees');
    Route::apiResource('projects', ProjectController::class)->except('show')->names('projects');
    Route::resource('settings', SettingController::class)->only(['index', 'store'])->names('settings');

    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::group($localizedGroup, function() {

    Route::get('/', [WebController::class, 'homepage'])->name('web.home');
    Route::get('/contact', [ContactController::class, 'form'])->name('web.contact-form');
    Route::post('/contact', [ContactController::class, 'save'])->name('web.contact-save');

    Route::controller(Blog::class)->prefix('blog')->as('web.blog.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/{post}', 'show')->name('show');
    });

    Auth::routes(['register' => false, 'reset' => false, 'verify' => false]);
    Route::get('{page:slug}', [WebController::class, 'page'])->name('web.page');
});
