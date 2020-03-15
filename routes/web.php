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
});

Route::get('/author', function () {
    $data = \App\Author::all('id', 'name', 'email', 'phone');
    foreach ($data as $row){
        echo $row->name;
        echo "<br>";
    }
//    return $data;
});

Route::get('/author/{id}', function ($id) {
    $data = \App\Author::all('id', 'name', 'email', 'phone')->where('id', $id);
    $data1 = \App\Author::all('id', 'name', 'email', 'phone')->where('id', $id)->first();
    echo $data1->name;
    
//    return $data1;
});
