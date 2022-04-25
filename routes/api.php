<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentInformationController;
use App\Http\Controllers\signInController;
use App\Http\Controllers\subjectController;
use App\Http\Controllers\QuestionBankController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\QuizListController;

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
// student information
Route::get('studentinfo/list',[StudentInformationController::class, 'index']);
Route::post('studentinfo/add',[StudentInformationController::class, 'store']);
Route::get('studentinfo/show/{id}',[StudentInformationController::class, 'show']);
Route::put('studentinfo/update/{id}',[StudentInformationController::class, 'update']);
Route::delete('studentinfo/delete/{id}',[StudentInformationController::class, 'destroy']);

// student signin information
Route::get('signin/list',[signInController::class, 'index']);
Route::post('signin/add',[signInController::class, 'store']);
Route::get('signin/show/{id}',[signInController::class, 'show']);
Route::put('signin/update/{id}',[signInController::class, 'update']);
Route::delete('signin/delete/{id}',[signInController::class, 'destroy']);

// subject information

Route::get('subject/list',[subjectController::class, 'index']);
Route::post('subject/add',[subjectController::class, 'store']);
Route::get('subject/show/{id}',[subjectController::class, 'show']);
Route::put('subject/update/{id}',[subjectController::class, 'update']);
Route::delete('subject/delete/{id}',[subjectController::class, 'destroy']);

// Question Bank information

Route::get('question/list',[QuestionBankController::class, 'index']);
Route::post('question/add',[QuestionBankController::class, 'store']);
Route::get('question/show/{id}',[QuestionBankController::class, 'show']);
Route::put('question/update/{id}',[QuestionBankController::class, 'update']);
Route::delete('question/delete/{id}',[QuestionBankController::class, 'destroy']);

// option information

Route::get('option/list',[OptionController::class, 'index']);
Route::post('option/add',[OptionController::class, 'store']);
Route::get('option/show/{id}',[OptionController::class, 'show']);
Route::put('option/update/{id}',[OptionController::class, 'update']);
Route::delete('option/delete/{id}',[OptionController::class, 'destroy']);

// quiz list information
Route::get('quiz/list',[QuizListController::class, 'index']);
Route::post('quiz/add',[QuizListController::class, 'store']);
Route::get('quiz/show/{id}',[QuizListController::class, 'show']);
Route::put('quiz/update/{id}',[QuizListController::class, 'update']);
Route::delete('quiz/delete/{id}',[QuizListController::class, 'destroy']);


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
