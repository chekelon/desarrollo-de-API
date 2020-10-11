<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/productos','ProductController@mostrarTodos');
Route::get('/productos/{producto}','ProductController@mostrar');
Route::get('/productos/{producto}/comentarios','ProductController@comentarios');
Route::put('/productos/{producto}/edit','ProductController@modificar');
Route::delete('/productos/{producto}','ProductController@eliminar');
//Route::get('/{producto}/comentarios','ProductController@comentarios');

Route::get('/comentarios','CommentController@mostrarTodos');
Route::post('/comentarios','CommentController@guardar');
Route::put('/comentarios/{comentario}/edit','CommentController@modificar');
Route::delete('/comentarios/{comentario}','CommentController@eliminar');


Route::get('/usuarios','UserController@usuarios');
Route::get('/usuarios/{usuario}','UserController@mostrar');
Route::get('/usuarios/{usuario}/comentarios/','UserController@comentarios_usuario');
Route::put('/usuarios/{usuario}/edit','UserController@modificar');
Route::delete('/usuarios/{usuario}','UserController@eliminar');


