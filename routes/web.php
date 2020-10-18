<?php

Use App\Category;
Use App\Listing;
Use App\Post;
use Illuminate\Http\Request;

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

// Some changes
Route::get('/', function () {
    return redirect()->to('/admin/posts');
});

Route::get('/category', function () {
    return redirect()->to('/admin/categories');
});

Route::get('/listing', function () {
    return redirect()->to('/admin/listings');
});

Route::get('/log', function () {
    Log::info('This is an info log.');
    
    Log::warning('This is a warning.');

    Log::error('This is an error.');
});

Route::resource('admin/posts', 'Admin\\PostsController');

Route::resource('admin/categories', 'Admin\\CategoriesController');

Route::resource('admin/listings', 'Admin\\ListingsController');

/**
    * Show Category-Postinfo Dashboard
    */
Route::get('/postlist/{id}', function ($id) {
    error_log("INFO: get /category/id");
    return view('postlists', [
        'categories' => Category::where('id', $id)->get(),
        'posts' => Post::where('category_id', $id)->get(),
    ]);
}); 


Route::get('/postlist3/{id}', function ($id) {
    return redirect()->to('/admin/posts/?listing_id=$id');
});
