<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', [TestController::class, 'palindrome']);
Route::get('/time', [TestController::class, 'timeElapsed']);
Route::get('/text', [TestController::class, 'textFile']);
Route::get('/beer', [TestController::class, 'beerRecipe']);
Route::get('/students', [TestController::class, 'stdGroups']);
Route::get('/nominees', [TestController::class, 'findNominee']);


