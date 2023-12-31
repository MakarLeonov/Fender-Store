<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TypesController;
use App\Http\Controllers\ModelsController;
use App\Http\Controllers\ColorsController;
use App\Http\Controllers\UserQuestionsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;

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


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/products', [ProductsController::class, 'index']);
Route::get('/products/{id}', [ProductsController::class, 'show']);

Route::get('/types', [TypesController::class, 'index']);
Route::get('/types/{id}', [TypesController::class, 'show']);
Route::post('/types', [TypesController::class, 'store']);
Route::put('/types/{id}', [TypesController::class, 'update']);
Route::delete('/types/{id}', [TypesController::class, 'destroy']);

Route::get('/models', [ModelsController::class, 'index']);
Route::get('/models/{id}', [ModelsController::class, 'show']);
Route::post('/models', [ModelsController::class, 'store']);
Route::put('/models/{id}', [ModelsController::class, 'update']);
Route::delete('/models/{id}', [ModelsController::class, 'destroy']);

Route::get('/colors', [ColorsController::class, 'index']);
Route::get('/colors/{id}', [ColorsController::class, 'show']);
Route::post('/colors', [ColorsController::class, 'store']);
Route::put('/colors/{id}', [ColorsController::class, 'update']);
Route::delete('/colors/{id}', [ColorsController::class, 'destroy']);

Route::get('/user_questions', [UserQuestionsController::class, 'index']);
Route::post('/user_questions', [UserQuestionsController::class, 'store']);
Route::delete('/user_questions/{id}', [UserQuestionsController::class, 'destroy']);

Route::post('/get_products', [CartController::class, 'index']);
Route::post('/add_product', [CartController::class, 'store']);
Route::delete('/delete_product/{id}', [CartController::class, 'destroy']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});