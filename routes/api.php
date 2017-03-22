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

Route::middleware('auth:api')->get('/articles', function (Request $request) {
    /**
     * Example content.
     */
    $collection = collect([
        [ 'id' => '1', 'title' => 'Example Title 1', 'content' => 'Some Content 1'],
        [ 'id' => '2', 'title' => 'Example Title 2', 'content' => 'Some Content 2'],
        [ 'id' => '3', 'title' => 'Example Title 3', 'content' => 'Some Content 3']
    ]);
    return $collection;
});
