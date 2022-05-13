<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/insert', function(){
//DB::insert('insert into posts(title, content, is_admin) values(?, ?, ?)', ['PHP with Laravel', 'Laravel is the best thing that happened to PHP', 0]);
//});


//Route::get('/read', function() {
//
//    $results = DB::select('select * from posts where id =?', [1]);
//
////    return var_dump($results);
////    return $results;
//
//    foreach($results as $post){
//        return $post->title;
//    }
//
//});

//Route::get('/update', function(){
//
//    $updated = DB::update('update posts set title = ? where id = ?', ["Update title",1]);
//
//    return $updated;
//
//});

Route::get('/delete', function(){

    $deleted = DB::delete('delete from posts where id = ?', [1]);

    return $deleted;

});

