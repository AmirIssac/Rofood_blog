<?php

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
    return view('index');
});

Route::get('/dash', function () {
    return view('layout.dashboard_main');
});

Auth::routes();

/*
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/


// Admin
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::get('/dashboard-blogs', [App\Http\Controllers\BlogController::class, 'index'])->name('d.blogs');
Route::post('/category/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
Route::post('/blog/store', [App\Http\Controllers\BlogController::class, 'store'])->name('blog.store');
Route::get('/blog/edit/{blog_id}', [App\Http\Controllers\BlogController::class, 'edit'])->name('blog.edit');
Route::post('/subBlog/store', [App\Http\Controllers\BlogController::class, 'subBlogStore'])->name('sub.blog.store');

Route::get('/dashboard-packages', [App\Http\Controllers\PackageController::class, 'index'])->name('d.packages');
Route::post('/store/package', [App\Http\Controllers\PackageController::class, 'store'])->name('package.store');
Route::get('/package/edit/{package_id}', [App\Http\Controllers\PackageController::class, 'edit'])->name('package.edit');
Route::post('/package/update/{package_id}', [App\Http\Controllers\PackageController::class, 'update'])->name('package.update');





// Guest
Route::get('/blog', [App\Http\Controllers\Guest\BlogController::class, 'index'])->name('blog');
Route::get('/blog/details/{blog_id}', [App\Http\Controllers\Guest\BlogController::class, 'blogDetails'])->name('blog.details');
Route::get('/packages', [App\Http\Controllers\Guest\PackageController::class, 'index'])->name('packages');




