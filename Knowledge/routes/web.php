<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
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

// Route::get('/hello', function() {
//     return response('<h1> Hello World </h1>',200);

// });

// Route::get('posts/{id}', function($id){
//     // dd($id);
//     // ddd($id);
//     return response('Post'.$id) ;
// })->where('id','[0-9]+');

//all listing
Route::get('/', function () {
    return view('listing', [
        'heading' => 'Lastest Listing',
        'listing' => Listing::all()
    ]);
});

//single listing
Route::get('listingg/{id}', function ($id) {
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});
