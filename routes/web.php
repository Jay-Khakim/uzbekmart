<?php

use Illuminate\Support\Facades\Route;
use App\Models\Tag;
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

Route::redirect('/', '/en');

Route::group(['prefix' => '{language}'], function () {
    Route::get('/', 'PageController@index')->name('main');
    Route::get('/local-comp', 'PageController@localcomp')->name('local-comp');
    Route::get('/foreign-comp', 'PageController@foreigncomp')->name('foreign-comp');
    Route::get('/company/{id}', 'PageController@companyshow')->name('comp-show');
    Route::get('/company/{id}/{pid}', 'PageController@productshow')->name('product-show');
    Route::get('/category/{id}', 'PageController@categoryshow')->name('category-show');
    Route::get('/subcategory/{cid}/{sid}', 'PageController@subcategoryshow')->name('subcategory-show');
    Route::get('/services/for-inevstors', 'PageController@forinvestors')->name('services-for-investors');
    Route::get('/services/check-company', 'PageController@checkcompany')->name('check-company');

    


    Route::get('/tags', function (){
        $tags = Tag::get();
        return view('tags')->with('tags', $tags);
    });
    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
});
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
