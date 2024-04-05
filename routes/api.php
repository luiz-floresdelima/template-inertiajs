<?php

use App\Http\Controllers\GlobalUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::controller(GlobalUserController::class)->prefix("/global_user")->group(function(){
    Route::post('/{email:email}', 'createIfNotExist')->name('global_user.createIfNotExist');
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::controller(UserController::class)->prefix("/users")->group(function(){
//     Route::post('/', 'store')->name('users.store');
//     Route::put('/{user:hash}', 'update')->name('users.update');
// });

// Route::controller(ChatController::class)->prefix("/chats")->group(function(){
//     Route::get('/{module:hash}/{user:hash}', 'findAll')->name('chats.all');
//     Route::post('/{module:hash}/{user:hash}', 'store')->name('chats.store');
// });

// Route::controller(ModuleController::class)->prefix("/modules")->group(function(){
//     Route::get('/', 'findAll')->name('modules.all');
// });

// Route::controller(MessageController::class)->prefix("/messages")->group(function(){
//     Route::get('/{chat:hash}/{chat_message}', 'find')->name('messages.all');
//     Route::get('/{chat:hash}/{chat_message}/pt-br', 'translate')->name('messages.all');
//     Route::get('/{chat:hash}', 'findAll')->name('messages.all');
//     Route::post('/{chat:hash}', 'store')->name('messages.store');
// });

// Route::prefix("/onboarding")->group(function(){
//     Route::controller(OnboardingQuestionController::class)->prefix("/question")->group(function(){
//         Route::post('/', 'store')->name('onboarding.question.store');
//     });
//     Route::controller(OnboardingAnswerController::class)->prefix("/answer")->group(function(){
//         Route::get('/{user:hash}', 'getEmptyOnes')->name('onboarding.answer.getEmptyOnes');
//         Route::post('/{user:hash}', 'store')->name('onboarding.answer.store');
//     });
// });

// Route::controller(TopicsController::class)->prefix("/topics")->group(function(){
//     Route::get('/{subject}', 'find')->name('topics.one');
// });

// Route::controller(ChatAssessmentController::class)->prefix("/chat_assessments")->group(function(){
//     Route::get('/{chat:hash}', 'store')->name('chat_assessment.store');
// });
