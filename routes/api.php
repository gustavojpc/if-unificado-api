<?php

use App\Http\Controllers\ArtefatosController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IteracaoFaseController;
use App\Http\Controllers\IteracoesController;
use App\Http\Controllers\ProjetosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Mockery\Matcher\Any;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('users', [UserController::class, 'index']);

// Route::middleware(['apiJwt'])->group(function () {
    Route::get('users', [UserController::class, 'index']);

    Route::prefix('projetos')->group(function () {
        Route::get('get-projeto-by-id', [ProjetosController::class, 'getProjetoById']);
        Route::get('get-projeto-list', [ProjetosController::class, 'getProjetosList']);
        Route::post('create-projeto', [ProjetosController::class, 'store']);
    });
    Route::prefix('iteracoes')->group(function () {
        Route::post('nova-iteracao', [IteracoesController::class, 'store']);
    });
    Route::prefix('iteracao-fase')->group(function () {
        Route::get('get-item', [IteracaoFaseController::class, 'getIteracoesFases']);
    });
    Route::prefix('artefato')->group(function () {
        Route::get('get-artefato-by-id', [ArtefatosController::class, 'getArtefatosById']);
        Route::put('updated-artefato-titulos-subtitulos', [ArtefatosController::class, 'udpateArtefatoTitulosAndSubtitulos']);
    });

    Route::post('logout', [AuthController::class, 'logout']);
// });



Route::post('auth/login', [AuthController::class, 'login']);

Route::post('register', [UserController::class, 'store']);
