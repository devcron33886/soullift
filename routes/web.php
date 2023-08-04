<?php

use App\Http\Controllers\Admin\BiographyController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PermissionsController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\SubscriberController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShowblogController;
use Illuminate\Support\Facades\Route;

Route::get('/', LandingPageController::class)->name('welcome');

Route::get('/blog', BlogController::class)->name('blog.index');

Route::get('/blog/{post:slug}', ShowblogController::class)->name('blog.show');


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {

    Route::get('/', HomeController::class)->name('home');
    // Permissions
    Route::delete('permissions/destroy', [PermissionsController::class, 'massDestroy'])->name('permissions.massDestroy');
    Route::resource('permissions', PermissionsController::class);

    // Roles
    Route::delete('roles/destroy', [RolesController::class, 'massDestroy'])->name('roles.massDestroy');
    Route::resource('roles', RolesController::class);

    // Users
    Route::delete('users/destroy', [UsersController::class, 'massDestroy'])->name('users.massDestroy');
    Route::resource('users', UsersController::class);

    // Category
    Route::delete('categories/destroy', [CategoryController::class, 'massDestroy'])->name('categories.massDestroy');
    Route::resource('categories', CategoryController::class);

    // Post
    Route::delete('posts/destroy', [PostController::class, 'massDestroy'])->name('posts.massDestroy');
    Route::post('businesses/media', [PostController::class, 'storeMedia'])->name('posts.storeMedia');
    Route::post('businesses/ckmedia', [PostController::class, 'storeCKEditorImages'])->name('posts.storeCKEditorImages');
    Route::resource('posts', PostController::class);

    // Biography
    Route::delete('biographies/destroy', [BiographyController::class, 'massDestroy'])->name('biographies.massDestroy');
    Route::post('biographies/media', [BiographyController::class, 'storeMedia'])->name('biographies.storeMedia');
    Route::post('biographies/ckmedia', [BiographyController::class, 'storeCKEditorImages'])->name('biographies.storeCKEditorImages');
    Route::resource('biographies', BiographyController::class, ['except' => ['create', 'store']]);

    // Subscribers
    Route::get('subscribers', SubscriberController::class)->name('subscribers.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
