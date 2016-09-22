<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    echo 'Hello World';
});

Route::get('festival/{id}', function($id){
    $festival = App\Festival::find($id);
    echo $festival->name;
});

Route::get('users', function(){
    $users = App\User::all();
    foreach($users as $user){
        echo $user->firstname . ' gaat naar ' . $user->festival->name . '<br>';
    }
});
//Route::get('hello', function(){
//    echo 'Hello again ';
//});
//
////create item
//Route::post('test', function(){
//    echo 'we just created an item';
//});
//
////read item
//Route::get('test', function(){
//    echo '<form action="test" method="POST">';
//    echo '<input type="submit">';
//    echo '<input type="hidden" value="' . csrf_token() . '" name="_token">';
//    echo '<input type="hidden" name="_method" value="PUT">';
//    echo '</form>';
//});
//
////update item
//Route::put('test', function(){
//    echo 'we have just updated an item';
//});
//
////delete item
//Route::delete('test', function(){
//    echo 'we have just deleted an item';
//
//});