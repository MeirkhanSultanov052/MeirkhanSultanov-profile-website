<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Client;
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
    return $client->name;
});