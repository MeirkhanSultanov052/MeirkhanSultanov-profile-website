<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Client;

use App\Http\Controllers\BlogController;
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
    return view('info');
})->name('pageInfo');

Route::get('/skills', function () {
    return view('skills');
})->name('pageSkills');

Route::get('/contacts', function () {
    return view('contacts');
})->name('pageContacts');

Route::get('client/add', function() {
    DB::table('clients')->insert([
        'name' => 'Meirkhan',
        'surname' => 'Sultanov',
        'age' => 19
    ]);
});

Route::get('client', function() {
    $client = CLient::find(1);
    return $client;
});

Route::get('post/create', function(){
    DB::table('post')->insert([
        'title' => 'Camry 3.5',
        'body' => 'Camry 3.5, Camry 3.5, Lubvi dostoina tolko mat and Camry 3.5'
    ]);
});

Route::get('post', function() {
    $post = Post::find(1);
    return $post;
});

Route::get('blog', [BlogController::class, 'index']);

Route::get('blog/create', function() {
    return view('blog.create');
});

Route::post('blog/create', [BlogController::class, 'store'])-> name('add-post');

Route::get('/post/{id}', [BlogController::class, 'get_post']);