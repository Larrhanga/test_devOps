<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Basic route
    Route::get('/greeting', function () {
        return 'Hello World';
    });

    //named route
    Route::get('/products', function(){
        return 'Liste de tous les produits disponibles';
    })->name('routeName');

//Route view
    Route::view('/home', 'home');

//Route Parameters

    //Required parameter
    Route::get('/product/{id}', function(int $id){
        return 'Product number :'.$id;
    });

    //Mutiple required parameters
    Route::get('/posts/{post}/comments/{comment}', function(int $postId, int $commentId){
        return 'Post ID : '.$postId.' '.'Comment ID : '.$commentId;
    });

    //Optional routes parameter
    Route::get('/utilisateur/{name?}', function(?string $name = "Inconnu"){
        return 'Name : '.$name;
    });

    //regular expression constraints
    Route::get('/utilisateurs/{name}', function(string $name){
        return 'Name : '.$name;
    })->where('name', '[A-Za-z0-5]+');

    Route::get('/util/{id}/{name}', function(string $id, string $name){
        return 'ID : '.$id.' '.'Name : '.$name;
    })->where(['id' => '[0-9]+', 'name' => '[A-Za-z]+']);

//redirect to a named route : routeName
Route::get('/here', function(){
    return redirect()->route('routeName');
});

//Route vers le controller HelloController
Route::get('/hello', [HelloController::class, 'hello']);

