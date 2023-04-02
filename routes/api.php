<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrawMasterController;
use App\Http\Controllers\ManualResultController;
use App\Http\Controllers\RankController;
use App\Http\Controllers\GameMessageController;

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

Route::get('getDrawTime', [DrawMasterController::class, 'get_draw_time']);
Route::post('saveManualResult', [ManualResultController::class, 'save_manual_result']);
Route::get('getResults', [ManualResultController::class, 'get_results']);
Route::get('getRanks', [RankController::class, 'get_rank']);
Route::patch('updateRank', [RankController::class, 'update_rank']);
Route::get('getGameMessage', [GameMessageController::class, 'get_game_message']);
Route::patch('updateGameMessage', [GameMessageController::class, 'update_game_message']);


Route::patch('updatePublished', [GameMessageController::class, 'update_published']);
