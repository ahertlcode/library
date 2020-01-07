<?php

use Illuminate\Http\Request;

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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::apiResource('book', 'BookController');
Route::apiResource('author', 'AuthorController');
Route::apiResource('department', 'DepartmentController');
Route::apiResource('faculty', 'FacultyController');
Route::apiResource('publisher', 'PublisherController');
Route::apiResource('users', 'UserController');
